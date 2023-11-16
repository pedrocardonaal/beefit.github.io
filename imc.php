<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/ABP/icon/favicon.ico">
    <title>Bee-Fit | Calculadora de imc</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <style>
    .alert-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    }
    
    .alert-box {
    position: absolute;
    top: 25%;
    left: 36%;
    z-index: 9999;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }
    
    .alert-box button {
    margin-top: 10px;
    }

    .alert-box.active {
    opacity: 1;
    visibility: visible;
    }
    
    @keyframes showAlertAnimation {
    0% { opacity: 0; transform: scale(0.5); }
    100% { opacity: 1; transform: scale(1); }
    }
    
    .alert-box {
    animation: showAlertAnimation 0.5s ease-in-out forwards;
    }
    </style>
</head>
<body>
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>bee.fit003@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/profile.php?id=100092522461873&mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://twitter.com/bee_fit_0">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/bee_fit_0/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">BEE-</span>FIT</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Inicio</a>
                        <a href="about.html" class="nav-item nav-link">Acerca</a>
                        <a href="InicioSecion/CrearCuenta1.php" class="nav-item nav-link">Crear Cuenta</a>
                        <a href="InicioSecion/login.php" class="nav-item nav-link">Iniciar Sesion</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <style>
        .ba {
    width: 80%;
    background: #096426;
    padding: 10px 30px;
    border: 1px solid transparent;
    color:#fff;
    border-radius: 100vmax;
    margin-top: 20px;
    cursor: pointer;
    transition: .2s;
    font-size: 1rem;
    letter-spacing: 1px;
    pointer-events:all;
}

.ba:hover {
    background: transparent;
    border: 1px solid #2d9435;
    color:#33c860;
}

.ba1 {
    width: 60%;
    background: #096426;
    padding: 10px 30px;
    border: 1px solid transparent;
    color:#fff;
    border-radius: 100vmax;
    margin-top: 20px;
    cursor: pointer;
    transition: .2s;
    font-size: 1rem;
    letter-spacing: 1px;
    pointer-events:all;
}

.ba1:hover {
    background: transparent;
    border: 1px solid #2d9435;
    color:#33c860;
}

.survey-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"],
input[type="number"],
select,
textarea {
  width: 80%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

  </style>
</head>
<body>

    <center>
        <br>
        <br>
        <div class="survey-container"> 
<form method="POST" action="imc.php">
    
        <label for="altura">Altura (cm):</label>
        <input type="number" name="altura" required><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" required><br>
        <input type="submit" class="ba1" value="Siguiente"></div>
    </form>
    </center>
    

  <?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $actividad = $_POST["actividad"];

    if (empty($altura) || empty($peso)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // Calcular el IMC
        $alturaMetros = $altura / 100;
        $imc = $peso / ($alturaMetros * $alturaMetros);
        $imcFormateado = number_format($imc, 2);
        $mensaje;
        if ($imcFormateado < 18.5) {
            $mensaje = "Bajo de peso ideal";
        } elseif ($imcFormateado >= 18.5 && $imcFormateado < 25) {
            $mensaje = "Peso normal";
        } elseif($imcFormateado >=25 && $imcFormateado <29.9){
            $mensaje = "Sobrepeso";
        }elseif ($imcFormateado >= 30 && $imcFormateado < 35){
            $mensaje = "Obesidad";
        }elseif ($imcFormateado >= 35 && $imcFormateado < 40){
            $mensaje = "Obesidad Severa";
        }else{
            $mensaje = "Obesidad mórbida";
        }
        ?>
         <div class="alert-box active">
        <center><h2> Tu imc es de <?php echo $imcFormateado ?> </h2> <br></center>
        <center> <p> Te encuentras en el grupo de <?php echo $mensaje; ?> </p> </center>
        <br>
       <center> <button class="ba" onclick="window.location.href = 'imc.html';">Oki</button> </center> 
    </div>
        <?php
    }
}
  ?>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">BEE-</span>FIT</h1>
                </a>
                <p>Somos un grupo conformado de 4 participantes ubicados en el corazon de Tamaulipas, Mexico.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Bee a follower</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://twitter.com/bee_fit_0"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=100092522461873&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/bee_fit_0/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Esenciales Bee-Fit</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white-50 mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Acerca</a>
                    <a class="text-white-50 mb-2" href="InicioSecion/CrearCuenta1.php"><i class="fa fa-angle-right mr-2"></i>Crear Cuenta</a>
                    <a class="text-white-50 mb-2" href="InicioSecion/login.php"><i class="fa fa-angle-right mr-2"></i>Iniciar Secion</a>
                    <a class="text-white-50 mb-2" href="InicioSecion/recuperarcuenta.php"><i class="fa fa-angle-right mr-2"></i>Recuperar Cuenta</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Apartados Bee-Fit</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Acerca</a>
                    <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white-50 mb-2" href="meditacion.html"><i class="fa fa-angle-right mr-2"></i>Meditacion</a>
                    <a class="text-white-50 mb-2" href="VidaSaludable.html"><i class="fa fa-angle-right mr-2"></i>Vida Saludable</a>
                    <a class="text-white-50 mb-2" href="Ejercicio.html"><i class="fa fa-angle-right mr-2"></i>Ejercicio</a>
                    <a class="text-white-50 mb-2" href="Alimentacion.html"><i class="fa fa-angle-right mr-2"></i>Alimentacion</a>
                    <a class="text-white-50 mb-2" href="imc.html"><i class="fa fa-angle-right mr-2"></i>Imc</a>
                    <a class="text-white-50" href="descanso.html"><i class="fa fa-angle-right mr-2"></i>Descanso</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Bee in touch</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>CBTis 271, Victoria, Tamaulipas, Mexico</p>
                <p><i class="fa fa-envelope mr-2"></i>bee.fit003@gmail.com</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>