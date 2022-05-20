<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Denuncia</title>
</head>
<body>
    <ul>
        <li><a class="active" href="..\index.php">Home</a></li>
        <li><a href="Denuncias.php">Denuncias</a></li>
        <li><a href="..\AcercaNosotros\Acerca.php">Acerca de nosotros</a></li>
        <li><a href="..\tabla\index.php">Violencia</a></li>
        <li style="float:right"><a href="..\PLogin\Login.php">Login</a></li>
    </ul>
    <section class="form-register">
        
            <h4>Formulario Registro</h4>
            <label style="margin:10px;"for="Datos sobre la institución">Datos sobre la institución</label>
            <select class="controls" name="Nivel educativo" >
                <option value="" selected>Selecciona un nivel educativo</option>
                <option value="preparatoria">Preparatoria</option>
                <option value="universidad" >Universidad</option>
            </select>
            <select class="controls" name="Institución" >
                <option value=""selected>Selecciona una Institución</option>
                <option value="ITepic">Tec Tepic</option>
                <option value="UAN" >UAN</option>
            </select>
            <input class="controls" type="text" name="carrera" id="carrera" placeholder="Ingrese su carrera">

            <label style="margin-bottom:10px;"for="agresión">Datos sobre la agresión</label>

            <select class="controls" name="Institución" >
                <option value=""selected>Selecciona su sexo</option>
                <option value="hombre">Hombre</option>
                <option value="mujer" >Mujer</option>
            </select>
            <select class="controls" name="Institución" >
                <option value=""selected>Selecciona sexo del agresor</option>
                <option value="hombre">Hombre</option>
                <option value="mujer" >Mujer</option>
            </select>
            <select class="controls" name="violencia" >
                <option value=""selected>Selecciona algún tipo de violencia</option>
                <option value="verbal">Verbal o psicológica</option>
                <option value="patrimonia" >Patrimonial</option>
                <option value="fisica">Fisica</option>
                <option value="sexual" >Sexual</option>
            </select>
            <select class="controls" name="Persona" >
                <option value=""selected>Selecciona la persona que ejerció la violencia</option>
                <option value="varbal">Compañero de clase</option>
                <option value="patrimonia" >Compañero de escuela</option>
                <option value="fisica">Relación dentro de la escuela</option>
                <option value="sexual" >Relación fuera de la escuela</option>
                <option value="varbal">Maestro</option>
                <option value="patrimonia" >Director</option>
                <option value="fisica">Personal administrativo</option>
                <option value="sexual" >Personal labores varias</option>
                <option value="sexual" >Persona ajena a la escuela</option>
            </select>

            <select class="controls" name="Lugar" >
                <option value=""selected>Selecciona el lugar dónde sucedio</option>
                <option value="varbal">Dentro del aula</option>
                <option value="patrimonia" >En una oficina</option>
                <option value="fisica">Áreas comunes</option>
                <option value="sexual" >Fuera del planten en actividad academica</option>
                <option value="varbal">Fuera del plantel realizando otra actividad</option>
            </select>

            <label style="margin-bottom:10px;"for="acciones">Seguimiento</label>

            <select class="controls" name="acción" >
                <option value=""selected>Selecciona  la acción tomada</option>
                <option value="">Ninguna</option>
                <option value="varbal">Denuncié ante el maestro</option>
                <option value="patrimonia" >Denuncié ante una autoridad escolar</option>
                <option value="fisica">Denuncié ante una instancia</option>
            </select>
            <select class="controls" name="Lugar" >
                <option value=""selected>Selecciona  si se dio seguimiento</option>
                <option value="">No tomaron la denuncia</option>
                <option value="varbal">No quisieron atenderme</option>
                <option value="patrimonia" >No quisieron levantarme la denuncia</option>
                <option value="">Selecciona  si se dio seguimiento</option>
                <option value="">Si tomaron la denuncia</option>
                <option value="varbal">Si quisieron atenderme</option>
                <option value="patrimonia" >Si quisieron levantarme la denuncia</option>
            </select>
            <select class="controls" name="tiempo" >
                <option value=""selected>Selecciona  el tiempo de atención</option>
                <option value="">mas de 12 meses</option>
                <option value="varbal">de 6 a 12 meses</option>
                <option value="patrimonia" >de 3 a 6 meses</option>
                <option value="fisica">menos de 3 meses</option>
                <option value="fisica">en los últimos 15 días</option>
            </select>
            <select class="controls" name="tiempo" >
                <option value=""selected>Selecciona  si necesita otro tipo de servicio</option>
                <option value="">Atención psicológica</option>
                <option value="varbal">Atención psiquiátrica</option>
                <option value="patrimonia" >Atención médica</option>
                <option value="fisica">Interrupción legal de embarazo</option>
                <option value="fisica">Atención psicológica</option>
            </select>
            <input style="height:200px;"class="controls" type="text" name="narracion" id="narración" placeholder="Narre los hechos">

            <input class="botons" type="submit" value="Registrar denuncia">
        
    </section>
</body>
</html>