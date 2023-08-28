<?php

    $servidor = "Localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "restaurante";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BOLETA-RESERVA</title>
    <link rel="stylesheet" href="../restaurant_selv/IMG_CSS/proc_res.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        @media print {
            .btn {
                display: none;
            }
        }

        .bg {
            border-radius: 25px;
            padding: 25px;
        }

        h3 {
            color: darkblue;
        }
    </style>
</head>
<body>
    <div class="bg">
        <h1><b>Boleta de reservación</b></h1>
        <?php
        if(isset($_POST['enviar'])) {
            $dni = $_POST['dni'];
            $nombre = $_POST['nombres'];
            $apellido = $_POST['apellidos'];
            $personas = $_POST['personas'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $numeroMesa = $_POST['numeroMesa'];

            $insertar_registro = "INSERT INTO reservaciones VALUES('', '$dni', '$nombre',
            '$apellido', '$personas', '$fecha', '$hora', '$numeroMesa')";
    
            $ejecutarInsertar = mysqli_query($enlace, $insertar_registro);

        // Obtener el ID del último registro insertado
            $id_insertado = mysqli_insert_id($enlace);

        // Formatear el ID con ceros a la izquierda para que tenga 3 dígitos
            $id_formateado = sprintf('%03d', $id_insertado);

            echo "<p><h3>Boleta N°: $id_formateado</h3></p>";
            echo "<b>---------------------------------------------------------------------------------------</b>";
            echo "<p><h3>Cliente: $nombre $apellido</h3></p>";
            echo "<p><h3>DNI: $dni</h3></p>";
            echo "<p><h3>Personas en la mesa: $personas</h3></p>";
            echo "<p><h3>Fecha de reserva: $fecha</h3></p>";
            echo "<p><h3>Hora de llegada: $hora</h3></p>";
            echo "<p><h3>Número de mesa: $numeroMesa</h3></p>";
        }
        ?>
            <img src="../restaurant_selv/IMG_CSS/logo.png" class="posi"><br>
        <a class="btn btn-primary" href="purchase.html">Volver al Menú</a>
        <a class="btn btn-warning" href="" onclick="window.print()">Imprimir PDF</a>
    </div>
</body>
</html>
