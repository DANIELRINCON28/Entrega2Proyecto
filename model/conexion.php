<?php
    $server = "localhost";
    $db = "TiendaPeliculas";
    $user = "root";
    $password = "";
    $conn = null;
    try {
        $conn = mysqli_connect($server,$user,$password,$db);
    } catch (SqlException $th) {
        echo $th;
    }
?>