<?php include("../model/conexion.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Peliculas</title>
    <link href="../CSS/EstilosPeliculas.css" rel="stylesheet" type="text/css" />


</head>
<body>
    <div>
        <center>
            <h1>Lista de Peliculas</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Genero</th>
                        <th>Descripcion</th>
                        <th>Autor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                            $query = "SELECT * FROM Películas";
                            $resultPeliculas = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_assoc($resultPeliculas)){?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['nombre']?></td>
                                    <td><?php echo $row['genero']?></td>
                                    <td><?php echo $row['descripción']?></td>
                                    <td><?php echo $row['autor']?></td>
                                    <td>
                                        <a href="../Vistas/ActualizarPelicula.php?id=<?php echo $row['id']?>"><img src="../Src/editar (1).png "></a>
                                        <a href="../model/EliminarPelicula.php?id=<?php echo $row['id']?>"><img src="../Src/eliminar.png"></a>
                                    </td>
                                </tr>
                            <?php }?>
                        
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <div class="Contenedor">
                <a href="../Vistas/AgregarPelicula.php"> Agregar Pelicula </a></button>
                <a href="../Vistas/IngresoApp.php"> Regresar</a></button>
            </div>

        </center>


    </div>


</body>
</html>