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
    <title>Boleta de Compra</title>
    <link rel="stylesheet" href="../restaurant_selv/IMG_CSS/boleta.css">
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

      h6 {
        color: darkslategrey;
      }

      h5 {
        color: darkblue;
      }

      h4 {
        color: darkgreen;
      }

</style>
</head>
<body>
    <div class="bg">
    <h1><b>Boleta de Compra</b></h1><br>
    <?php

    if(isset($_POST['enviar']) && isset($_POST['pedido'])) {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $pedido = explode(",", $_POST['pedido']);
        $total = $_POST['total'];

        $insertar_registro = "INSERT INTO compras VALUES('', '$dni', '$nombre',
        '$apellido', '$direccion', '$celular', '$email', '', 
        '$total')";

        $ejecutarInsertar = mysqli_query($enlace, $insertar_registro);

        // Obtener el ID del último registro insertado
        $id_insertado = mysqli_insert_id($enlace);

        // Formatear el ID con ceros a la izquierda para que tenga 3 dígitos
        $id_formateado = sprintf('%03d', $id_insertado);

        echo "<p><h5>Boleta N°: $id_formateado</h5></p>";
        echo "<p><h5>Cliente: $nombre $apellido</h5></p>";
        echo "<p><h5>DNI: $dni</h5></p>";
        echo "<p><h5>Dirección: $direccion</h5></p>";
        echo "<p><h5>Celular: $celular</h5></p>";
        echo "<p><h5>Email: $email</h5></p>";
        echo "<b>---------------------------------------------------------------------------------------</b>";
        echo "<p><h4>Comidas compradas:</h4></p>";
        echo "<ul>";
        foreach ($pedido as $pedid) {
            echo "<li><i><h6>$pedid</h6></i></li>";
        }
        echo "</ul>";
        echo "<b>---------------------------------------------------------------------------------------</b>";
        echo "<p><h4><b>Total a pagar: S/ $total</b></h4></p>";
    }
    ?>
        <a class="btn btn-primary" href="purchase.html">Volver al Menú</a>
        <a class="btn btn-warning" href="" onclick="window.print()">Imprimir PDF</a>
        </div>
</body>
</html>
