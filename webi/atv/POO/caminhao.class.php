<?php

//caminhao.class.php

include_once("veiculo.class.php");

class Caminhao extends Veiculo
{
    protected $carga;
    public function __construct()
    {

    }
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }

    public function getCarga()
    {
        return $this->carga;
    }
    public function show()
    {
        echo  "<h1>Caminhao</h1><h2>".$this->carga."</h2><h2>".$this->nrodas."</h2>"."<h2>".$this->npassageiros;
    }

}