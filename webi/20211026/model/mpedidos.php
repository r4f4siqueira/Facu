<?php

require_once ("mconection.php");

class Pedido{
    private $codigo;
    private $valor;

    public function getCodigo(){
        return $this->$codigo;
    }

    public function setCodigo(){
        $this->codigo = $codigo;
    }

    public function getValor(){
        return $this->$valor;
    }

    public function setValor(){
        $this->valor = $valor;
    }

    public function create(){
        $sql = "INSERT INTO pedido (codigo) VALUES ('',$this->valor)"; //('$this->nomecid','$this->uf')";
        echo $sql;
        $this->conn->query($sql);
    }

    public function update(){
        $sql = "UPDATE pedido SET valor=$this->getValor() WHERE codigo=$this->getCodigo()";
        echo $sql;
        $this->conn->query($sql);
    }

    public function delete(){
        $sql = "DELETE FROM pedido WHERE codigo=$this->getCodigo()";
        echo $sql;
        $this->conn->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM pedido";
        $returnValue = array();
        $result = $this->conn->query($sql);
        
        if ($result != null) {
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                if (!empty($row)) {
                    array_push($returnValue,$row);
                }
            }
        }
        return $returnValue;
    }

}