<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once("views/header.php"); ?>
    <div id="main">
        <h1 class="center">Detalle De <?php echo $this->alumno->nombre; ?> </h1>

        <div class="center"><?php echo $this->mensaje;?></div>

        <form action="<?php echo constant('URL') ?>consulta/actualizarAlumno" method="POST">
            <p>
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" value="<?php echo $this->alumno->matricula; ?>" required disabled>
            </p>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required>
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>" required>
            </p>
            <p>
                <input type="submit" value="Registrar Nuevo Alumno">
            </p>

        </form>
    </div>
    <?php require_once("views/footer.php"); ?>
   
</body>
</html>