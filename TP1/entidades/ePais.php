<?php

include_once "eContinente.php";

class Pais extends Continente
{
    private $nPais;
    private $infoPais;

    public function __construct($nPais,$nContinente = null)
    {
        parent :: __construct($nContinente);
        $this->nPais = $nPais;
        $this->infoPais = parent :: GetPais($nPais);
    }

    public function GetInfo(){
        return json_encode($this->infoPais);
    }
}

?>