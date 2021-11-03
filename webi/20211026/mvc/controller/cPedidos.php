<?php

require_once "model/mpedidos.php";

class ControllerPedidos{
    public function listar(){
        $pedido = new Pedido();
        $pedidos = $pedido->read();

        $_REQUEST["pedidos"]=$pedidos;

        require_once "view/view_pedido.php";
    }

    public function inserir(){
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $pedido = new Pedido();
        $pedido->create($nome,$data);
    }
}