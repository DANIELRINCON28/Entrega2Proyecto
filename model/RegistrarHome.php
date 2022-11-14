<?php
    include("../model/conexion.php");
    if(isset($_GET['btnGuardar'])){
        echo "soy";
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $fechaNacimiento = $_GET['fechaNacimiento'];
        $email = $_GET['email'];
        $contrasena = $_GET['contrasena'];
        $query = "INSERT INTO Usuarios(nombre, apellido,fechaNacimiento, email, contraseña) Values('$nombre','$apellido','$fechaNacimiento','$email','$contrasena')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("failed");
        }
        header("Location: ../Index.php");
   }
?>