<?php
    include("../model/conexion.php");
    if(isset($_GET['btnActualizar'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $fechaNacimiento = $_GET['fechaNacimiento'];
        $email = $_GET['email'];
        $contrasena = $_GET['contrasena'];
        $query = "UPDATE Usuarios SET nombre = '$nombre', apellido = '$apellido', fechaNacimiento = '$fechaNacimiento',  email = '$email', contraseña = '$contrasena' WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("fail");
        }
        header("Location: ../Vistas/Usuarios.php");
    }
?>