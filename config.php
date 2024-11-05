<?php

    $dbHost = 'Localhost:8000';
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