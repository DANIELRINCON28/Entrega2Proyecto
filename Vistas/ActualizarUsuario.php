<?php 
include("../model/conexion.php");
    $nombre = "";
    $apellido = "";
    $fechaNac = "";
    $email = "";
    $contrasena = "";
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Usuarios WHERE id='$id'";
    $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $fechaNac = $row['fechaNacimiento'];
            $email = $row['email'];
            $contrasena = $row['contraseña'];
        }
    }

    if(isset($_POST['btnActualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $query = "UPDATE Usuarios SET nombre = '$nombre', apellido = '$apellido', fechaNacimiento = '$fechaNacimiento',  email = '$email', contraseña = '$contrasena' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("fail");
        }
        header("Location: ../Vistas/Usuarios.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Editar</title>
    <link href="../CSS/EstilosRegistro.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="../Vistas/ActualizarUsuario.php?id=<?php echo $_GET['id'];?>" method="POST" id="form1">
        <div>
            <center>
                <h1>Editar Usuario</h1>
                <table class="Tabla">
                    <tr>
                        <td>
                            <label name="lblnombre">Nombre:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="nombre" value="<?php echo $nombre?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblApellido">Apellido:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="apellido" value="<?php echo $apellido?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblFechaNacimiento">Fecha de Nacimiento:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="fechaNacimiento" value="<?php echo $fechaNac?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEdad">Email:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="email" value="<?php echo $email?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblcontrasena">Contraseña:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="contrasena" value="<?php echo $contrasena?>" />
                        </td>
                    </tr>
                </table>
                <div class="Contenedor">
                    <input class="Btn" type="submit" name="btnActualizar" value="Actualizar" />

                    <button class="Btn"><a href="../Vistas/Usuarios.php">Regresar</a></button>
                </div>
            </center>
        </div>
    </form>

</body>
</html>