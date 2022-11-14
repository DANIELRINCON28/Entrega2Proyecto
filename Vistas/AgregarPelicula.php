<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Iniciar Sesion</title>
    <link href="../CSS/EstilosRegistro.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="../model/GuardarPelicula.php" method="GET" id="form1">
        <div>
            <center>
                <h1>Agregar Peliculas</h1>
                <table class="Tabla">
                    <tr>
                        <td>
                            <label name="lblnombre">Nombre:</label>
                        </td>

                        <td>
                            <input class="Input" type="text" name="nombreP" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblGenero">Genero:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="generoP" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblDescripcion">Descripcion:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="descripcionP" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblAutor">Autor:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="autorP" value="" />
                        </td>
                    </tr>
                </table>

                <div class="Contenedor">
                    
                    <input class="Btn" type="submit" name="btnAgregar" value="Agregar" />

                    <button class="Btn"><a href="../Vistas/Peliculas.php"> Regresar</a></button>
                </div>

            </center>
        </div>
    </form>

</body>
</html>