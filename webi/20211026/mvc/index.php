<?php

    require_once "controller/cPedidos.php";

    $obj = new ControllerPedidos;
    $obj->listar();
    ?>

<form method="post">
    valor:<input type="text" name="valor" id="">
    data:<input type="date" name="data" id="">
    <input type="submit" value="Add" onclick="inserir()">
</form>