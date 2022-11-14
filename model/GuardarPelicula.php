<?php
    include("conexion.php");
    if(isset($_GET['btnAgregar'])){
        $nombre = $_GET['nombreP'];
        $genero = $_GET['generoP'];
        $descripcion = $_GET['descripcionP'];
        $autor = $_GET['autorP'];
        try {
            $query = "INSERT INTO Películas(nombre, genero, descripción, autor) VALUES('$nombre','$genero','$descripcion','$autor')";
            $result = mysqli_query($conn, $query);
        } catch (SqlException $th) {
            echo $th;
        }
        header('Location: ../Vistas/Peliculas.php');
    }


?>