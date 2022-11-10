<?php
    include('conexion.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            $query = "DELETE FROM Peliculas where id = $id";
            $result = mysqli_query($conn, $query);
        } catch (SqlException $th) {
            echo $th;
        }
        header('Location: index.php');
    }

?>