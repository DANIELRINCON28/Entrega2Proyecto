<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Iniciar Sesion</title>
    <link href="../CSS/EstilosRegistro.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="../model/RegistrarHome.php" method="GET" id="form1">
        <div>
            <center>
                <h1>Registrate</h1>
                <table class="Tabla">
                    <tr>
                        <td>
                            <label name="lblnombre">Nombre:</label>
                        </td>

                        <td>
                            <input class="Input" type="text" name="nombre" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblApellido">Apellido:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="apellido" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEmail">Fecha de nacimiento:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="fechaNacimiento" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEdad">Email:</label>
                        </td>
                        <td>
                            <input class="Input" type="email" name="email" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEdad">Contraseña:</label>
                        </td>
                        <td>
                            <input class="Input" type="password" name="contrasena" value="" />
                        </td>
                    </tr>
                </table>

                <div class="Contenedor">

                    <input class="Btn" type="submit" name="btnGuardar" value="Agregar" />

                    <a href="../index.php" class="Btn"> Regresar</a>

                </div>
                

            </center>
        </div>
    </form>

</body>
</html>