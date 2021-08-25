<?php
//Escreva uma função que calcule e retorne a distância entre dois pontos (x1,y1) e (x2,y2).
function distancia($x1,$y1,$x2,$y2){
    return $distancia= sqrt(pow($x2-($x1),2) + pow($y2 -($y1),2));
}

echo distancia(-2,-1,3,11);