<?php


$server = "localhost";
$user = "root";
$pass = "";
$mydb = "BVENDAS";

$conn = new mysqli($server,$user,$pass,$mydb);
/*private function conectaBD(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "vendas";

        $this->conn = new mysqli($server,$user,$pass,$mydb);
        if($this->conn->error)
            die("Conexão Falhou: ".$this->conn->connect_error);
    }*/
