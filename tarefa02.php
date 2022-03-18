<?php

    $valor01 =2;
    $valor02 =10;

    function soma($valor01, $valor02) {
        return $valor01+$valor02;
    }

    $soma = soma($valor01, $valor02);
    echo $soma;


    function quadrado($valor01) {
        return $valor01*$valor01;
    }

    $quadrado = quadrado($valor01);
    echo '<br>' . $quadrado;
    