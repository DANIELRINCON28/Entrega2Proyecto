<?php
    include('conexion.php');
    $nombre = '';
    $genero = '';
    $descripcion = '';
    $autor = '';
    if(isset($_GET['id'])){
        $id =  $_GET['id'];
        try {
            $query = "SELECT * FROM Películas WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nombre = $row['nombreP'];
                $genero = $row['generoP'];
                $descripcion = $row['descricionP'];
                $autor = $row['autorP'];
            }
        } catch (SqlException $th) {
            echo $th;
        }
    }

    if(isset($_POST['btnActualizarP'])){
        $nombre = $_POST['nombreP'];
        $genero = $_POST['generoP'];
        $descripcion = $_POST['descricionP'];
        $autor = $_POST['autorP'];
        try {
            $query = "UPDATE Películas SET nombre = '$nombre', genero = '$genero', descripcion = '$descripcion', autor = '$autor'";
            mysqli_query($conn, $query);
        } catch (SqlException $th) {
            echo $th;
        }
        header('Location: index.php');
    }

?>
