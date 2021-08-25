<?php
//Escreva uma função que receba dois números inteiros retorne o menor número
function menor($n1,$n2){
    if($n1 < $n2){
        return $n1;
    }
    else{
        return $n2;
    }
}

echo menor(1,2);