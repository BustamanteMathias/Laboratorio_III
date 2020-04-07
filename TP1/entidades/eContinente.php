<?php 

include_once "iInterface.php";
require_once __DIR__ .'/../composer/vendor/autoload.php';

use NNV\RestCountries;


class Continente implements iInterface{
    //ATRIBUTOS
    private $listaContinentes;

    function __construct($nContinente = null){
        $restCountries = new RestCountries;

        if($nContinente != null){
            $this->listaContinentes = $restCountries->byRegion($nContinente);
        }
        else
        {
            $this->listaContinentes = $restCountries->all();
        }
    }

    public function GetAllPaises(){
        foreach ($this->listaContinentes as $pais) {
            echo json_encode($pais);
        }
    }

    public function GetPais($nombrePais){
        foreach ($this->listaContinentes as $pais) {
            if($pais->name == $nombrePais)
            {
                echo json_encode($pais);
            }
        }
    }
    
    public static function All()
    {
        $Continentes = new RestCountries;
        return print(json_encode($Continentes->all()));
    }
}

?>