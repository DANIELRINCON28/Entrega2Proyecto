<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Iniciar Sesion</title>
    <link href="../CSS/EstilosRegistro.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <center>
                <h1>Iniciar Sesion</h1>
                <table class="Tabla">
                    <tr>
                        <td>
                            <label name="lblApellido">Email:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="email" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label name="lblEmail">Password:</label>
                        </td>
                        <td>
                            <input class="Input" type="text" name="password" value="" />
                        </td>
                    </tr>
                   
                </table>

                <div class="Contenedor">
                    <button class="Btn"><a href="../Vistas/IngresoApp.php"> Ingresar</a></button>

                    <button class="Btn"><a href="../Index.php"> Regresar</a></button>
                </div>

            </center>
        </div>
    </form>

</body>
</html>