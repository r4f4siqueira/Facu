<?php
    include("carro.class.php");
    include("caminhao.class.php");

    $carro = new carro();
    $caminhao = new caminhao();

    $carro->setTipo('carro');
    $carro->setNRodas("5");
    $carro->setNPassageiros("5");
    $carro->show();

    
    $caminhao->setNRodas("10");
    $caminhao->setNPassageiros("5");
    $caminhao->setCarga("Madeira");
    $caminhao->show();

?>