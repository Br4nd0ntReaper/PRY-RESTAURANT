<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Compra</title>
    <link rel="stylesheet" href="../restaurant_selv/IMG_CSS/procesar.css">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../restaurant_selv/IMG_CSS/navbar.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        h3 {
            color: #fff;
        }

        ul {
            border: 32px;
            color: #fff44f;
        }
    </style>

</head>
<body>

    <nav>
        <div><a href="index.html" class="text-decoration-none text-light"><img src="../restaurant_selv/IMG_CSS/logo.png" width="250" height="65" class="logo"></a></div>
        <input type="radio" name="menu-toggle" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="links">
            <li><a class="active" href="index.html">Inicio</a></li>
            <li><a href="purchase.html">Comidas</a></li>
            <li><a href="about.html">Nosotros</a></li>
            <li><a href="contact.html">Contactos</a></li>
        </ul>
    </nav>
<div class="content">
    <div class="bg">
    <div class="contact-wraper">
        <div class="contact-form rounded-5">
            <div class="borde">
                <h1 class="sub"><b>Confirmación de Compra</b></h1>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $pedidosSeleccionadas = $_POST['pedido'];
                    $total = 0;

                    echo "<h3><p>Comidas seleccionadas:</p></h3>";
                    echo "<ul><i>";
                    foreach ($pedidosSeleccionadas as $pedido) {
                        echo "<li>$pedido</li>";
                        if ($pedido == "Tacacho con cecina (S/ 15.50)") {
                            $total += 15.50;
                        } elseif ($pedido == "Juane (S/ 17.90)") {
                            $total += 17.90;
                        } elseif ($pedido == "Pastel de aguaymanto (S/ 12.50)") {
                            $total += 12.50;
                        } elseif ($pedido == "Mousse de aguaymanto (S/ 14.50)") {
                            $total += 14.50;
                        } elseif ($pedido == "Chapo de platano (S/ 6.50)") {
                            $total += 6.50;
                        } elseif ($pedido == "Ensalada de chonta (S/ 8.50)") {
                            $total += 8.50;
                        } elseif ($pedido == "Aguajina (S/ 5.50)") {
                            $total += 5.50;
                        } elseif ($pedido == "Refresco de camu camu (S/ 4.40)") {
                            $total += 4.40;
                        } elseif ($pedido == "Inchicapi de gallina (S/ 17.80)") {
                            $total += 17.80;
                        }
                    }
                    echo "</i></ul>";

                    echo "<p><h3><b>Total a pagar: S/ $total</b></h3></p>";
                } else {
                    echo "<p>No se seleccionaron comidas.</p>";
                }

                ?>
            </div><br>

            <h2 class="titulo">Ingrese <span>sus</span> datos:</h2>
                <form action="generar_boleta.php" method="post">
                    <input type="hidden" name="pedido" value="<?php echo implode(",", $_POST['pedido']); ?>">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                    <label>DNI:</label>
                    <input type="text" name="dni" required pattern="[0-9]{8}"><br>
                    <label>Nombre:</label>
                    <input type="text" name="nombre" required><br>
                    <label>Apellido:</label>
                    <input type="text" name="apellido" required><br>
                    <label>Dirección:</label>
                    <input type="text" name="direccion" required><br>
                    <label>Celular:</label>
                    <input type="text" name="celular" required pattern="[0-9]{9}"><br>
                    <label>Email:</label>
                    <input type="email" name="email" required><br>
                    <input type="submit" class="btn btn-success" name="enviar" value="Generar Boleta"><br>
                    <a href="purchase.html" class="btn btn-danger">Cancelar pedido</a>
                </form>
            </div>
        </div>
    </div>
                <!--FOOTER START-->
                <div class="container body-content bottom-100">
                <hr />
                <footer class="bg-dark text-dark pt-5 pb-4 rounded-top-5">
                    <div class="container text-center text-md-start">
                        <div class="row text-center text-md-start">
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h3 class="text-uppercase mb-4 font-weight-bold text-light"><b>Nosotros</b></h3>
                                <hr class="mb-4" />
                                <img src="../restaurant_selv/IMG_CSS/logo.png" width="250" height="200"
                                    style="padding-left:29px" class="rounded-top-5 rounded-bottom-2" /><br />
                                <br />
                                <h3 class="text-light text-center font-monospace"><b>La Delicia</b></h3>
                            </div>
    
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h3 class="text-uppercase mb-4 font-weight-bold text-light"><b>Más Info</b></h3>
                                <hr class="mb-4" />
                                <h5><a href="#" class="text-light text-decoration-none">Nosotros</a></h5><br>
                                <h5><a href="#" class="text-light text-decoration-none">Contactos</a></h5><br>
                                <h5><a href="#" class="text-light text-decoration-none">FAQ</a></h5>
                            </div>
    
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h3 class="text-uppercase mb-4 font-weight-bold text-light"><b>Síguenos</b></h3>
                                <hr class="mb-4" />
                                <h6>
                                    <a href="#" class="text-info text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-twitter bg-body rounded-3" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg><b> @laDelicia</b>
                                    </a>
                                </h6> <br>
                                <h6>
                                    <a href="#" class="text-primary text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-facebook bg-body rounded-3" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg><b> La Delicia</b>
                                    </a>
                                </h6> <br>
                                <h6>
                                    <a href="#" class="text-success text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-whatsapp bg-body rounded-3" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg><b> +51 *** *** *** </b>
                                    </a>
                                </h6>
                            </div>
                            <h5 class="text-center text-info" id="year">&copy; <span id="currentYear"></span> - La Delicia
                                - PAIA</h5>
                            <script>
                                // Obtener el año actual
                                var currentYear = new Date().getFullYear();
                                // Mostrar el año actual en el elemento con el id "currentYear"
                                document.getElementById("currentYear").textContent = currentYear;
                            </script>
                        </div>
                    </div>
                </footer>
            </div>
        <!--FOOTER END-->

</div>
</body>
</html>
