<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="icon/favicon.ico">
    <title>Bee-Fit | Test</title>
    
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

    .survey-container {
  max-width: 1200px;
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


    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
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
 
<!-- Navbar Start -->
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


    <?php
  if(isset($_GET['abrirVentana'])) {
    ?>
    <div class="alert-box active">
        <h2>Cerrar Sesion</h2> <br>
        <center> <p> ¿Estas segur@ que quieres cerrar sesion? </p> </center>
        <br>
       <center> <button class="ba" onclick="window.location.href = '?CerrarSesion=true';">Si</button> </center> 
       <center> <button class="ba" onclick="window.location.href = 'index.html';">No</button> </center> 
    </div>
    <?php
  }
 
  if(isset($_GET['CerrarSesion'])){
    $dc = fopen("usuarioactivo.txt", "w");
    fwrite($dc, "");
    fclose($dc);
    echo "<script> window.location.replace('/ABP'); </script>";
  }
  ?>

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
    </style>

    <?php
    $archivo = 'usuarioactivo.txt';

    // Verifica si el archivo existe y es legible
    if (file_exists($archivo) && is_readable($archivo)) {
    // Lee el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Verifica si el archivo está vacío
    if (trim($contenido) === '') {
        ?>
        <style>
            body{
                pointer-events: none;
            }
            head{
                pointer-events: none;
            }
        </style>
        <div class="alert-box active">
        <h2>No iniciaste sesion</h2> <br>
        <center> <p> Favor de crear una cuenta o iniciar sesion </p> </center>
        <br>
       <center> <button class="ba" onclick="window.location.href = '/ABP/InicioSecion/CrearCuenta1.php';">Crear Cuenta</button> </center> 
       <center> <button class="ba" onclick="window.location.href = '/ABP/InicioSecion/login.php';">Iniciar Sesion</button> </center> 
    </div>

        <?php
    }}
    ?>
  <br>
    <br>
<div class="survey-container"> 
  
<form action="Test.php" method="post" class="form">
		<h9>A continuacion se te hara una serie de preguntas para poder poder medir tu estado de vida saludable...</h9><br><br>
		<h3>1.-Consumo a diario leche y/o prouctos lácteos</h3>
			<input type="radio" name="r" value="0"  required> Si, siempre o casi siempre <br>
			<input type="radio" name="r" value="1" required> Normalmente no consumo producto lácteos <br>
			<input type="radio" name="r" value="2" required> Consumo sólo algunas veces por semana, y no de forma regular <br> <br>
		    
		   <h3>2.-Le quito la grasa visible a las carnes y la piel al pollo</h3>
		    <input type="radio" name="r1" value="0"required> Si, siempre o casi siempre <br>
			<input type="radio" name="r1" value="1"required> No suelo quitar la grasa visible de las carnes o la piel del pollo <br>
			<input type="radio" name="r1" value="2"required> No siempre, o no completamente (algunas veces si, otras veces no) <br> <br>

			<h3>3.-Consumo pescado al menos una vez por semana</h3>
		    <input type="radio" name="r2" value="0"required> Si, siempre o casi siempre <br>
			<input type="radio" name="r2" value="1"required> Nunca o casi nunca consumo pescado <br>
			<input type="radio" name="r2" value="2"required> No siempre, o no completamente (algunas semanas si, otras no) <br> <br>

			<h3>4.-Consumo verduras variadas todos los dias</h3>
		    <input type="radio" name="r3" value="0"required> Si, siempre o casi siempre <br>
			<input type="radio" name="r3" value="1"required> Normalmente no consumo verduras (o consumo muy poco) <br>
			<input type="radio" name="r3" value="2"required> Consumo sólo algunas veces por semana, y no de forma regular <br> <br>

			<h3>5.-Consumo frutas variadas todos los dias</h3>
		    <input type="radio" name="r4" value="0"required> Si, siempre o casi siempre <br>
			<input type="radio" name="r4" value="1"required> Normlmente no consumo frutas (o consumo muy poco<br>
			<input type="radio" name="r4" value="2"required> Consumo sólo algunas veces por semana, y no de forma regular<br> <br>

			<h3>6.-Consumo papa hasta dos veces por semana como máximo</h3>
		    <input type="radio" name="r5" value="0"required> Si<br>
			<input type="radio" name="r5" value="1"required> Suelo comer papa entre tres y cuatro veces por semana<br>
			<input type="radio" name="r5" value="2"required> Consumo papa más de cinco veces por semana<br> <br>

			<h3>7.-Consumo arroz o fideos hasta dos veces por semana como máximo</h3>
		    <input type="radio" name="r6" value="0"required> Si<br>
			<input type="radio" name="r6" value="1"required> Suelo comer más de dos veces por semana (entre tres y cuatro) <br>
			<input type="radio" name="r6" value="2"required> Consumo arroz o fideos más de cinco veces por semana <br><br>

			<h3>8.-Realizo entre cuatro y seis comidas al día (incluyendo desayuno, almuerzo, merienda, cena)</h3>
		    <input type="radio" name="r7" value="0"required> Si <br>
			<input type="radio" name="r7" value="1"required> Suelo hacer tres comidas al día; o a vecesno cumplo con todas las comidas y otras veces no<br>
			<input type="radio" name="r7" value="2"required> Hago menos de tres comidas al día; o no tengo ninguna regularidad en la forma en la que como<br> <br>

			<h3>9.-Me encuentro dentro del IMC clasificado como "normal"</h3>
            En caso de que no sepas tu imc puedes calcularlo aqui <a href="imc.php" style="Color: green;">Calcular mi imc</a> <br>
		    <input type="radio" name="r8" value="0"required> Si <br>
			<input type="radio" name="r8" value="1"required> Me encuentro dentro del IMC clasificado como "sobrepeso" o "bajo peso"<br>
			<input type="radio" name="r8" value="2"required> Me encuentro dentro del IMC clasificado como "obesidad"<br> <br>

			<h3>10.-Consumo al menos siete vasos de agua por día (2 litros) </h3>
		    <input type="radio" name="r9" value="0"required> Si <br>
			<input type="radio" name="r9" value="1"required> Consumo entre 4 y 6 vasos de agua por día<br>
			<input type="radio" name="r9" value="2"required> Consumo muy poca agua, o no tengo conocimiento de cuanto consumo realmente<br> <br>

			<h3>11.-Hago algun ejercicio (salgo a caminar, hago actividad fisica organizada) al menos 2 o 3 veces por semana </h3>
		    <input type="radio" name="r10" value="0"required> Si <br>
			<input type="radio" name="r10" value="1"required> Hago eercicio sólo una vez por semana<br>
			<input type="radio" name="r10" value="2"required> Normalmente no hago ejercicio (menos de una vez por semana) <br> <br>

			<h3>12.-Mis habitos de fumar son...</h3>
		    <input type="radio" name="r11" value="0"required> No fumo nunca <br>
			<input type="radio" name="r11" value="1"required> Fumo muy de vez en cuando (menos de una caja de cigarrillos al mes) <br>
			<input type="radio" name="r11" value="2"required> Fumo más de una caja de cigarrillos al mes<br> <br>

			<h3>13.-Mis habitos de tomar alcohol son...</h3>
		    <input type="radio" name="r12" value="0"required> No tomo alcohol, tomo con moderacio, y sólo en algunas ocasiones <br>
			<input type="radio" name="r12" value="1"required> Si suelo tomar alcohol, pero nunca mucho<br>
			<input type="radio" name="r12" value="3"required> Suelo tomar bastante alcohol de forma regular<br> <br>

			<h3>14.-Duermo regularmene siete horas diarias</h3>
		    <input type="radio" name="r13" value="0"required> Si<br>
			<input type="radio" name="r13" value="1"required> A veces si y a veces no<br>
			<input type="radio" name="r13" value="2"required> Suelo dormir menos de siete diarias<br> <br>

			<h3>15.-Durante la semana, tengo momentos para descansar y relajarme</h3>
		    <input type="radio" name="r14" value="0"required> Si <br>
			<input type="radio" name="r14" value="1"required> A veces si y a veces no<br>
			<input type="radio" name="r14" value="2"required> Normalmente no tengo momentos para descansar y relajarme<br> <br>

			<h3>16.-Siempre lavo mis manos antes de comer o de estar en contacto con comida</h3>
		    <input type="radio" name="r15" value="0"required> Si <br>
			<input type="radio" name="r15" value="1"required> A veces si y a veces no<br>
			<input type="radio" name="r15" value="2"required> No<br> <br>

			<h3>17.-Me hice al menos un chequeo de salud este año</h3>
		    <input type="radio" name="r16" value="0"required> Si <br>
			<input type="radio" name="r16" value="1"required> Mi último chequeo de salud fue el año pasado<br>
			<input type="radio" name="r16" value="2"required> Ni este año ni el pasado me hice un chequeo <br> <br>
		<center><input type="submit" name="boton" class="ba" value="Enviar datos"></center>
</div>
	</form>
    </center>

    <?php

	if(isset($_POST['boton'])){


		$test=$_POST['r'];
		$test1=$_POST['r1'];
		$test2=$_POST['r2'];
		$test3=$_POST['r3'];
		$test4=$_POST['r4'];
		$test5=$_POST['r5'];
		$test6=$_POST['r6'];
		$test7=$_POST['r7'];
		$test8=$_POST['r8'];
		$test9=$_POST['r9'];
		$test10=$_POST['r10'];
		$test11=$_POST['r11'];
		$test12=$_POST['r12'];
		$test13=$_POST['r13'];
		$test14=$_POST['r14'];
		$test15=$_POST['r15'];
		$test16=$_POST['r16'];

		//Pregunta 1
		if ($test==0) {
			$tot=1;
		} 
		else{

			if ($test==1) {
			$tot=0;
				}else{

				if ($test==2) {
				$tot=2;
				}
			}
		}

		//Pregunta 2
		if ($test1==0) {
			$tot1=2;
		} 
		else{

			if ($test1==1) {
			$tot1=0;
				}else{

				if ($test1==2) {
				$tot1=1;
				}
			}
		}

		//Pregunta 3
		if ($test2==0) {
			$tot2=2;
		} 
		else{

			if ($test2==1) {
			$tot2=0;
				}else{

				if ($test2==2) {
				$tot2=1;
				}
			}
		}

		//Pregunta 4
		if ($test3==0) {
			$tot3=2;
		} 
		else{

			if ($test3==1) {
			$tot3=0;
				}else{

				if ($test3==2) {
				$tot3=1;
				}
			}
		}

		//Pregunta 5
		if ($test4==0) {
			$tot4=2;
		} 
		else{

			if ($test4==1) {
			$tot4=0;
				}else{

				if ($test4==2) {
				$tot4=1;
				}
			}
		}

		//Pregunta 6
		if ($test5==0) {
			$tot5=2;
		} 
		else{

			if ($test5==1) {
			$tot5=1;
				}else{

				if ($test5==2) {
				$tot5=0;
				}
			}
		}
		
		//Pregunta 7
		if ($test6==0) {
			$tot6=2;
		} 
		else{

			if ($test6==1) {
			$tot6=1;
				}else{

				if ($test6==2) {
				$tot6=0;
				}
			}
		}

		//Pregunta 8
		if ($test7==0) {
			$tot7=2;
		} 
		else{

			if ($test7==1) {
			$tot7=1;
				}else{

				if ($test7==2) {
				$tot7=0;
				}
			}
		}

		//Pregunta 9
		if ($test8==0) {
			$tot8=2;
		} 
		else{

			if ($test8==1) {
			$tot8=0;
				}else{

				if ($test8==2) {
				$tot8=0;
				}
			}
		}

		//Pregunta 10
		if ($test9==0) {
			$tot9=2;
		} 
		else{

			if ($test9==1) {
			$tot9=1;
				}else{

				if ($test9==2) {
				$tot9=0;
				}
			}
		}

		//Pregunta 11
		if ($test10==0) {
			$tot10=2;
		} 
		else{

			if ($test10==1) {
			$tot10=1;
				}else{

				if ($test10==2) {
				$tot10=0;
				}
			}
		}

		//Pregunta 12
		if ($test11==0) {
			$tot11=2;
		} 
		else{

			if ($test11==1) {
			$tot11=0;
				}else{

				if ($test11==2) {
				$tot11=0;
				}
			}
		}


		//Pregunta 13
		if ($test12==0) {
			$tot12=2;
		} 
		else{

			if ($test12==1) {
			$tot12=1;
				}else{

				if ($test12==2) {
				$tot12=0;
				}
			}
		}

		//Pregunta 14
		if ($test13==0) {
			$tot13=2;
		} 
		else{

			if ($test13==1) {
			$tot13=1;
				}else{

				if ($test13==2) {
				$tot13=0;
				}
			}
		}
		
		//Pregunta 15
		if ($test14==0) {
			$tot14=2;
		} 
		else{

			if ($test14==1) {
			$tot14=1;
				}else{

				if ($test14==2) {
				$tot14=0;
				}
			}
		}

		//Pregunta 16
		if ($test15==0) {
			$tot15=2;
		} 
		else{

			if ($test15==1) {
			$tot15=1;
				}else{

				if ($test15==2) {
				$tot15=0;
				}
			}
		}

		//Pregunta 17
		if ($test16==0) {
			$tot16=2;
		} 
		else{

			if ($test16==1) {
			$tot16=1;
				}else{

				if ($test16==2) {
				$tot16=0;
				}
			}
		}
		

		$totalfinal= $tot+$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10+$tot11+$tot12+$tot13+$tot14+$tot15+$tot16;


        
        $archivo = 'usuarioactivo.txt';
      $contenido = file_get_contents($archivo);
      $servername = "www.db4free.net"; 
      $username = "beefitdatabaseno";
      $password = "Cardona1";
      $dbname = "deefitdatabase"; 
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Error al conectar con la base de datos: " . $conn->connect_error);
   }
        $instruccion = "INSERT INTO Vida_S (`Usuario`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `P14`, `P15`, `P16`, `P17`, `Total`) VALUES ('$contenido','$test', '$test1', '$test2', '$test3', '$test4', '$test5','$test6','$test7','$test8', '$test9', '$test10', '$test11', '$test12', '$test13','$test14','$test15', '$test16', '$test16', '$totalfinal')";
                $resultado=mysqli_query($conn,$instruccion);
                $consulta="SELECT * FROM Vida_S";  


        if ($totalfinal>=0 && $totalfinal<=11) {
            ?>
             <style>
                    .alert-box {
                    position: absolute;
                    top: 30%;
                    left: 8.35%;
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
                    head{
                        pointer-events: none;
                    }
                    body{
                        pointer-events: none;
                    }
                </style>
            <div class="alert-box active">
            <h2>Tu estado de vida saludable es muy bajo, deberias de mejorar tu salud</h2> <br>
            <center> <img src="imagenes/mala.jpeg" width="300" height="300"> </center>
            <br>
            <center> <button class="ba" onclick="window.location.href = 'index.html';">Salir</button> </center> 
            <center> <button class="ba" onclick="window.location.href = 'Test.php';">Reiniciar Prueba</button> </center>
            </div>
            <?php
            }else{
            if ($totalfinal>11 && $totalfinal<=22) {
                ?>
                <style>
                    .alert-box {
                    position: absolute;
                    top: 30%;
                    left: 16%;
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
                    head{
                        pointer-events: none;
                    }
                    body{
                        pointer-events: none;
                    }
                </style>
                <div class="alert-box active">
                <h2>Tu estado de vida saludable es regular, puedes mejorar</h2> <br>
                <center> <img src="imagenes/meh.jpeg" width="300" height="300"> </center>
                <br>
                <center> <button class="ba" onclick="window.location.href = 'index.html';">Salir</button> </center> 
                <center> <button class="ba" onclick="window.location.href = 'Test.php';">Reiniciar Prueba</button> </center>
                </div>
                <?php
        }else{
            if ($totalfinal>22 && $totalfinal<=34) {
                ?>
                 <style>
                    .alert-box {
                    position: absolute;
                    top: 30%;
                    left: 17.58%;
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
                    head{
                        pointer-events: none;
                    }
                    body{
                        pointer-events: none;
                    }
                </style>
                <div class="alert-box active">
                <h2>Tu estado de vida saludable esta exelente, muy bien </h2> <br>
                <center> <img src="imagenes/bien.jpeg" width="300" height="300"> </center>
                <br>
                <center> <button class="ba" onclick="window.location.href = 'index.html';">Salir</button> </center> 
                <center> <button class="ba" onclick="window.location.href = 'Test.php';">Reiniciar Prueba</button> </center>
                </div>
                <?php
            }
        }}
       
 	
    }
?>
    
  
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