<?php
//Escreva uma função que receba um número inteiro retorne um array contendo todos seus divisores 
//(exceto ele mesmo).

function divisores($numero){
    $arr=[];
    for($i=1;$i<$numero;$i++){
        if($numero%$i==0){
            array_push($arr,$i);
        }
    }
    return $arr;
}

print_r(divisores(38));