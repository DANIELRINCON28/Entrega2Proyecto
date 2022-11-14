<?php 
include("../model/conexion.php");
    $nombre = "";
    $genero = "";
    $descripcion = "";
    $autor = "";
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Películas WHERE id='$id'";
    $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $genero = $row['genero'];
            $descripcion = $row['descripción'];
            $autor = $row['autor'];
        }
    }

    if(isset($_POST['btnActualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $descripcion = $_POST['desc'];
        $autor = $_POST['autor'];
        $query = "UPDATE Películas SET nombre = '$nombre', genero = '$genero', descripción = '$descripcion',  autor = '$autor' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("fail");
        }
        header("Location: ../Vistas/Peliculas.php");
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
    <form action="../Vistas/ActualizarPelicula.php?id=<?php echo $_GET['id'];?>" method="POST" id="form1">
        <div>
            <center>
                <h1>Editar  Pelicula</h1>
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
                            <label name="lblApellido">Genero:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="genero" value="<?php echo $genero?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblFechaNacimiento">Descripcion:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="desc" value="<?php echo $descripcion?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEdad">Autor:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="autor" value="<?php echo $autor?>" />
                        </td>
                    </tr>
                </table>
                <div class="Contenedor">
                    <input class="Btn" type="submit" name="btnActualizar" value="Actualizar" />

                    <button class="Btn"><a href="../Vistas/Peliculas.php">Regresar</a></button>
                </div>
            </center>
        </div>
    </form>

</body>
</html>