<?php
//Escreva uma função que receba um array e retorne o array ordenado.
//Não utilize funções prontas de ordenação.

function ordena($arr){
    if(is_array($arr)){
        for ($i=0;$i<sizeof($arr);$i++){
            for($j=0;$j<$i;$j++){
                if ($arr[$i]>$arr[$j]){//esta em decrescente
                    $t = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $t;
                }
            }
        }
        return $arr;
    }
}
$arrs=array(35,70,1,9,6,25,12);
print_r(ordena($arrs));