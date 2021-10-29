<?php

require_once "model/mpedidos.php";

class ControllerPedidos{
    public function listar(){
        $pedido = new Pedido();
        $pedidos = $pedido->read();

        $_REQUEST["pedidos"]=$pedidos;

        require_once "view/view_pedido.php";
    }
}