<?php

//carro.class.php

include_once("veiculo.class.php");

class Carro extends Veiculo
{
    protected $tipocarro;
    public function __construct()
    {

    }

    public function setTipo($tipocarro)
    {
        $this->tipocarro = $tipocarro;
    }

    public function getTipo()
    {
        return $this->tipocarro;
    }

    public function show()
    {
        echo "<h1>".$this->tipocarro."</h1>"."<h2>".$this->nrodas."</h2>"."<h2>".$this->npassageiros;
    }

}