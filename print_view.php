<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PDF generado con PHP </title>
    <style type="text/css">
        p, h3, h1{
            text-align: center;
        }
    </style>
</head>
<body>


    <h1> PDF Generado con PHP </h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt dicta itaque dolores animi consequatur. Numquam, modi sit! Maxime fugit eaque eveniet, ipsum sed nemo eligendi voluptas laboriosam id natus.asdasdasd sadasdas</p>

    <h3> Datos personales </h3>

    <p>Nombre: <?php echo $_POST['nombre'] ?></p> 
    <p>Apellido: <?php echo $_POST['apellido'] ?></p> 
    <p>Edad: <?php echo $_POST['edad'] ?></p> 
    
</body>
</html>