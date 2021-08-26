<?php
//Escreva uma função potencia(base, expoente) que, quando chamada, retorna baseexpoente. 
//Por exemplo, potencia(3,4) deve retornar 81.

function potencia($base,$potencia){
    for($i=0,$result=1;$i<$potencia;$i++){
        $result*=$base;
    }
    return $result;
}

echo potencia(2,0);