<?php

function conectaBBDD(){
    $direccion = 'localhost';
    $usuario_BBDD = "pruebaTEST";
    $password_BBDD = "*eA!3[H7c8GtS-gW";
    $nombre_BBDD = "ejemploquiz";
    $puerto = "3306";
    
    $conexion = new mysqli($direccion, $usuario_BBDD, $password_BBDD, $nombre_BBDD, $puerto);
    $consulta = $conexion -> query("SET NAMES UTF8");
    return $conexion;
}