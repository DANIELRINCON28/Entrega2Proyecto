<?php
    include("conexion.php");
    if(isset($_POST['btnGuardar'])){
        $nombre = $_POST[''];
        $apellido = $_POST[''];
        $fechaNacimiento = $_POST[''];
        $email = $_POST[''];
        $contrasena = $_POST[''];
        try {
            $query = "INSERT INTO Peliculas(nombre, apellido,fechaNacimiento, email, contraseña) Values('$nombre','$apellido','$fechaNacimiento','$email','$contrasena')";
            $result = mysqli_query($conn, $query);
        } catch (SqlException $th) {
            echo $th;
        }
        header("Location: index.php");
    }
?>