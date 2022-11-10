<?php
    include("conexion.php");
        $nombre = '';
        $apellido = '';
        $fechaNacimiento = '';
        $email = '';
        $contrasena = '';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            $query = "SELECT * FROM Peliculas where id=$id";
            $result = mysqli_query($conn, $query);
            if(mysql_num_rows($result)==1){
                $row = mysqli_fetch_array($result);
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $fechaNacimiento = $row['fechaNacimiento'];
                $email = $row['email'];
                $contrasena = $row['contraseña'];
            }
        } catch (Throwable $th) {
            echo $th;
        }
    }

    if(isset($_POST['btnActualizar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        try {
            $query = "UPDATE Usuarios SET nombre = '$nombre', apellido = '$apellido', fechaNacimiento = '$fechaNacimiento',  email = '$email', contraseña = '$contrasena' ";
            mysqli_query($conn, $query);
        } catch (Throwable $th) {
            echo $th;
        }
        header('Location: index.php');
    }

?>