<?php
    include("conexion.php");
    if(isset($_POST['btnGuardarPelicula'])){
        $nombre = $_POST['nombreP'];
        $genero = $_POST['generoP'];
        $descripcion = $_POST['descricionP'];
        $autor = $_POST['autorP'];
        try {
            $query = "INSERT INTO Peliculas(nombre, genero, descripcion, autor) VALUES('$nombre','$genero','$descripcion','$autor')";
            $result = mysqli_query($conn, $query);
        } catch (SqlException $th) {
            echo $th;
        }
        header('Location: index.php');
    }


?>