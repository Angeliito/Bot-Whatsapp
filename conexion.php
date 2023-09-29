<?php

class conexion {
    function ConexionDB {
    $host = 'localhost:3306'
    $dbname= ''
    $username= 'root'
    $pasword= ''

    try {
        $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$pasword);
        echo = " se conecto correctamente";
    } catch (PDOException $exp) {
        echo ("no se logro conectar $dbname, error $exp");
    }
}
}
?>