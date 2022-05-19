<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <ul>
        <li><a class="active" href="..\index.php">Home</a></li>
        <li><a href="..\Denuncias\Denuncias.php">Denuncias</a></li>
        <li><a href="..\AcercaNosotros\Acerca.php">Acerca de nosotros</a></li>
        <li><a href="..\Denuncias\Denuncias.php">Violencia</a></li>
        <li style="float:right"><a href="..\PLogin\Login.php">Login</a></li>
    </ul>
    <section class="form-register">
        <form action="..\admon\index.php">
            <h4>Formulario de ingreso</h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese Usuario o Correo">
            <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese Contraseña">
            <input type="submit" value="Ingresar" class="botons">
        </form>
    </section>
</body>
</html>