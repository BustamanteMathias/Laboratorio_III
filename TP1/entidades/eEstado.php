<?php

include_once "ePais.php";
use NNV\RestCountries;

class Estado extends Pais
{
    private $nEstado;
    private $infoEstado = null;

    public function __construct($nEstado, $nPais = null, $nContinente = null)
    {
        parent :: __construct($nPais, $nContinente);
        $this->nEstado      = $nEstado;
        
        if($this->infoEstado == null)
        {
            $restCountries      = new RestCountries;
            $this->infoEstado   = $restCountries->byCapitalCity($this->nEstado);
        }
    }

    public function GetInfoEstado()
    {
        return $this->infoEstado;
    }
}

?>