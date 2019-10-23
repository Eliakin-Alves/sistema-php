<?php
    include "cliente.class.php";
    $obj = new Cliente();
    $obj->nome = "Fernanda";
    $obj->telefone = "21213213";
    $obj->email = "fernanda@email.com";
    $obj->cpf = "138.564.174-44";
    echo $obj->nome;
?>