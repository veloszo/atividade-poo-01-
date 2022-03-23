<?php

#estrutura de decisao 

function aumentarEstoque($valor) {
    if(!is_numeric($valor)){
        echo "não é numérico";
    }
    
    if ($valor > 0 && $valor < 1000) {
        $atualEstoque += $valor;
    } elseif ($valor > 1000) {
        echo "valor muito alto";
    } else {
        echo "valor inválido";
    }

    
}


$produto->aumentarEstoque("bolo");

se o valor é maior que 0
    
if ($valor > 0) {
    
}




// AND só verdade se os 2 critérios forem verdadeiros

// verdadeiro && verdadeiro = verdadeiro 
// verdadeiro && falso = falso
// falso && veradadeiro = falso
// falso && falso = falso 

//--------------------------------------------------//

//  || é veradde se 1 critério for verdadeiro 

// verdadeiro || verdadeiro = verdadeiro 
// verdadeiro || falso = verdadeiro 
// falso || veradadeiro = verdadeiro
// falso || falso = falso 


// *Estrutura de decisoes e programadores logicos* //


// NOT
// !verdadeiro = falso
// !falso = verdadeiro
