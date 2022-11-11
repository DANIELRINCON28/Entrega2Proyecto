<?php
    include("../model/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Usuarios</title>
    <link href="../CSS/EstilosPeliculas.css" rel="stylesheet" type="text/css" />


</head>
<body>
    <div>
        <center>
            <h1>Lista de Usuarios</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM Usuarios";
                        $resultUsers = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($resultUsers)){?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['apellido']?></td>
                                <td><?php echo $row['fechaNacimiento']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['contraseña']?></td>
                                <td>
                                    <a href="../Vistas/ActualizarUsuario.php?id=<?php echo $row['id']?>"><img src="../Src/editar (1).png "></a>
                                    <a href="../model/EliminarUsuario.php?id=<?php echo $row['id']?>"><img src="../Src/eliminar.png"></a>
                                </td>
                            </tr>
                       <?php } ?>
                </tbody>


            </table>
            <br>
            <br>
            <div class="Contenedor">
                <a href="../Vistas/AgregarUsuarios.php"> Agregar usuario </a></button>

                <a href="../Vistas/IngresoApp.php"> Regresar</a></button>
            </div>

        </center>


    </div>


</body>
</html>