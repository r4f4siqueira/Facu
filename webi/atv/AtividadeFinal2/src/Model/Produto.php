<?php
    namespace App\Model;

use mysqli;

class Produto{
    private $codproduto;
    private $nomeProduto;
    private $unidade;
    private $valor;
    private $conn;

    public function getcodproduto(){
        return $this->codproduto;
    }

    public function setcodproduto($codproduto){
        $this->codproduto = $codproduto;
    }

    public function getnomeProduto(){
        return $this->nomeProduto;
    }

    public function setnomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;
    }

    public function getUnidade(){
        return $this->valor;
    }

    public function setUnidade($valor){
        $this->valor = $valor;
    }

    public function getvalor(){
        return $this->valor;
    }

    public function setvalor($valor){
        $this->valor = $valor;
    }

    public function __construct()
    {
        $this->codproduto=0;
        $this->conectaBD();
    }

    private function conectaBD(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "vendas";

        $this->conn = new mysqli($server,$user,$pass,$mydb);
        if($this->conn->error)
            die("Conexão Falhou: ".$this->conn->connect_error);
    }

    public function create(){
        $sql = "INSERT INTO produto (descricao, unidade, valor_un) VALUES ('$this->nomeProduto','$this->unidade','$this->valor')";
        $this->conn->query($sql);
    }

    public function update(){
        $sql = "UPDATE produto SET descricao='".$this->getnomeProduto()."', valor_un='".$this->getvalor()."' WHERE codprod='".$this->getcodproduto()."'";
        echo $sql;
    }

    public function delete(){
        $sql = "DELETE FROM produto
        WHERE codprod=".$this->getcodproduto();
        $this->conn->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM produto";
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