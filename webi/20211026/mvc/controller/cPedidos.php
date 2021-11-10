<?php

require_once "model/mpedidos.php";

class ControllerPedidos{
    public function listar(){
        $pedido = new Pedido();
        $pedidos = $pedido->read();

        $_REQUEST["pedidos"]=$pedidos;

        require_once "view/view_pedido.php";
    }

    public function inserir($valor,$data){
        $pedido = new Pedido();
        $valor = $_POST["valor"];
        $data = $_POST["data"];
        $pedido->create($valor,$data);
    }
}