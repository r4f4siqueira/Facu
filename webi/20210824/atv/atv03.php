<?php
//Escreva uma função que receba 3 notas de um aluno e uma letra.
// Se a letra for A a função retorna a média aritmética das notas do aluno, 
//se for P, a sua média ponderada (pesos: 5, 3 e 2) 
//e se for H, a sua média harmônica.

function media($tipo_media,$n1,$n2,$n3){//$n1,$n2,$n3 sao notas 1 2 e 3;
    switch(true){
        case ($tipo_media=="A" ||$tipo_media=="a"):
            return ($n1+$n2+$n3)/3;
        break;
        
        case ($tipo_media=="P"||$tipo_media=="p"):
            return (($n1*5)+($n2*3)+($n3*2))/3;
        break;
        
        case ($tipo_media=="H" ||$tipo_media=="h"):
            return 3/((1/$n1)+(1/$n2)+(1/$n3));
        break;
    }
}

echo media("a",5,5,5)."<br>";
echo media("p",5,5,5)."<br>";
echo media("h",5,5,5)."<br>";