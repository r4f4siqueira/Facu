<?php

    require_once "model/Produtos.php";

    class produtoController{
        public function listar(){
            $produto = new Produto();
            $produtos = $produto->read();

            $_REQUEST["Produtos"]=$produtos;

            require_once "view/produto_view.php";
        }
    }   