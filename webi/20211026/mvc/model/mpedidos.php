<?php




class Pedido{
    private $codigo;
    private $valor;
    private $data;
    private $conn;

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

    public function getData(){
        return $this->$data;
    }

    public function setData(){
        $this->data = $data;
    }

    public function __construct()
    {
        $this->conectaBD();
    }

    private function conectaBD(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "bvendas";

        $this->conn = new mysqli($server,$user,$pass,$mydb);
        if($this->conn->error)
            die("Conexão Falhou: ".$this->conn->connect_error);
    }

    public function create($a,$b){
        $sql = "INSERT INTO pedido (valor,data) VALUES ($a,$b)"; //('$this->nomecid','$this->uf')";
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