<?php
    include("conexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM Usuarios where id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("fail");
        }
        header("Location: ../Vistas/Usuarios.php");
    }
?>