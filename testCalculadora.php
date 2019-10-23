<?php
    include "calculadora.class.php";
    $c = new Calculadora();
    $c->n1 = 50;
    $c->n2 = 30;
    echo $c->calcularSoma();
    echo "<br />";
    echo $c->calcularSoma();
?>