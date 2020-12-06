<?php

header("Access-Control-Allow-Origin: *"); #Permite dar acceso a cualquier a consumir la API
                                          #Si deseas consumir solo tú, sustituye el asterisco por tu dominio  

if($_GET['moneda']=='euro' || $_GET['moneda']=='dolar'){
    include_once 'conexion.php';

    $sql = 'SELECT * FROM '.$_GET['moneda'];
    $sentencia = $pdo ->prepare($sql);
    $sentencia -> execute();
    $databd = $sentencia->fetchAll();

    
}

echo json_encode($databd);

