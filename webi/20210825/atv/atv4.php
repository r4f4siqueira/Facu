<?php
//Faça uma função que recebe um valor inteiro e verifica se o valor é par.
//A função deve retornar 1 se o número for par e 0 se for ímpar.

function parouimpar($numero){
    if($numero%2==0){
        return 1;
    }
    else{
        return 0;
    }
}

echo parouimpar(3);