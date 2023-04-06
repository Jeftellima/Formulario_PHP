<?php

    $dbHost = 'Localhost:3312';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-jefte';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro de conexão";
    //}
    //else
    //{
    //    echo "Conexão Efetuada com sucesso";
    //}
    
?>