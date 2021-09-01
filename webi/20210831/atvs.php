<?php

//Faça uma função que verifique se um valor é perfeito ou não.
//Um valor é dito perfeito quando ele é igual a soma dos seus divisores excetuando ele próprio. 
//(Ex: 6 é perfeito, 6 = 1 + 2 + 3, que são seus divisores). A função deve retornar um valor booleano.
function perfeito($numero){
    $soma=0;
    for($i=1;$i<$numero;$i++){
        if($numero%$i==0){
            $soma=$soma+$i;
        }
    }
    if($soma==$numero){
        return 1;//true
    }
    else{
        return 0;//false
    }
}

echo "R 13= ".perfeito(6)."<br>";


//Faça uma função que recebe, por parâmetro, a altura (alt) e o sexo de uma pessoa e retorna o seu peso ideal.
//Para homens, calcular o peso ideal usando a fórmula peso ideal = 72.7 x alt - 58 e, 
//para mulheres, peso ideal = 62.1 x alt - 44.7.
function pesoIdeal($altura,$sexo){
    switch(true){
        case(($sexo=='M') || ($sexo=='m')):
            return 72.7*$altura-58;
        break;

        case(($sexo=='F') || ($sexo=='f')):
            return 62.1*$altura-44.7;
        break;
        
        default:
            return False;
        break;
    }
}

echo "R 14= ".pesoIdeal(1,'M')."<br>";


//Faça uma função que receba um valor inteiro e positivo e calcula e retorne o seu fatorial. 
//Não utilize funções prontas de fatorial.
function fatorial($numero){
    $reultado=1;
    for($i=$numero;$i>1;$i--){
        $reultado*=$i;
    }
    return $reultado;
}

echo "R 15= ".fatorial(5);