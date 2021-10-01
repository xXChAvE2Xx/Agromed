<?php 
	session_start(); 

 	//Connection info. file
    include 'sesion/databaseconnect.php';  
    
    // Connection variables
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html>
<head>

  	<link rel = "manifest" href = "manifest.json"> 

	<meta name = "mobile-web-app-enabled" content = "yes"> 
	<meta name = "apple-mobile-web-app-enabled" contenido = "sí"> 
	<meta name = "application-name" content = "Agromed"> 
	<meta name = "apple-mobile-web-app-title" content = "Agromed"> 
	<meta name = "theme-color" content = "#000000"> 
	<meta name = "msapplication-navbutton-color" content = "# 000000"> 
	<meta name = "apple-mobile-web-app-status-bar-style" content="negro-translúcido "> 
	<meta name ="msapplication-starturl" content="https://agromed.gq/"> 
	<meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no"> 

	<link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "https://www.papelpotosi.com/Icono/mstile-144x144.png">
	<link rel = "apple-touch-icon" type = "imagen / png" tamaños = "144x144" href = "https://www.papelpotosi.com/Icono/mstile-144x144.png">

	<title>Enfermedad</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="theme-color" content="#FFFFFF">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="./manifest.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
<div class="preloader">
  <div class="preloader-body">
    <div class="cssload-container"><span></span><span></span><span></span><span></span>
    </div>
  </div>
</div>
<div class="page">
<!-- Page Header-->
<header class="section page-header">
<!-- RD Navbar-->
<div class="rd-navbar-wrap rd-navbar-modern-wrap">
  <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-main-outer">
      <div class="rd-navbar-main">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle-->
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a class="brand" href="index"><img src="images/logo-default-196x47.png" alt="" width="196" height="47"/></a></div>
        </div>
        <div class="rd-navbar-main-element">
          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="">
                    <?php
                        if (isset($_SESSION['loggedin'])) { 
                        echo "¡Hola! ",$_SESSION['name']; 
                        }else {
                            echo "¡Hola!";
                        }
                    ?>
                    
              </a>
              </li>
                    <?php
                        if (!isset($_SESSION['loggedin'])) { 
                            echo "<li class='rd-nav-item'><a class='rd-nav-link' href='sesion/index'> Iniciar Sesión</li></a>";
                            
                        }
                    ?>
                    <?php
                        if (isset($_SESSION['loggedin'])) {
                        echo "<li class='rd-nav-item'><a class='rd-nav-link' href='sesion/cerrarsesion'> Cerrar Sesión</a></li>"; 
                        }else {
                           
                           
                echo "<li class='rd-nav-item' onclick='pulsar()'><a class='rd-nav-link' href='sesion/registro'>Registrarse</li></a>"; 
                    }?>
              <li class='rd-nav-item'><a class='rd-nav-link' href='formulario'>Volver</li>
            </ul>
          </div></a>
          <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
            <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
            <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
            </div>
            <div class="project-close"><span></span><span></span></div>
          </div>
        </div>
        <div class="rd-navbar-project rd-navbar-modern-project">
          <div class="rd-navbar-project-modern-header">
            <h4 class="rd-navbar-project-modern-title">Sobre Nosotros</h4>
            <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
              <div class="project-close"><span></span><span></span></div>
            </div>
          </div>
          <div class="rd-navbar-project-content rd-navbar-modern-project-content">
            <div>
              <p>Queremos ayudarte a obener la mayor cantidad de producto posible, combatiendo contra las plagas y enfermedades que rodean a tu cultivo.</p>
              <div class="heading-6 subtitle">Contacto</div>
              <div class="row row-10 gutters-10">
                <div class="col-12"><img src="images/home_sider.jpg" alt="" width="394" height="255"/>
                </div>
              </div>
              <ul class="rd-navbar-modern-contacts">
                <li>
                  <div class="unit unit-spacing-sm">
                    <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                    <div class="unit-body"><a class="link-phone" href="tel:#">+52 312 127 8638</a></div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-sm">
                    <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                    <div class="unit-body"><a class="link-location" href="#">Av. Universidad #333, Colima,Col.</a></div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-sm">
                    <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                    <div class="unit-body"><a class="link-email" href="mailto:#">mgrvagromed@gmail.com</a></div>
                  </div>
                </li>
              </ul>
              <ul class="list-inline rd-navbar-modern-list-social">
                <li><a class="icon fa fa-facebook" href="#"></a></li>
                <li><a class="icon fa fa-twitter" href="#"></a></li>
                <li><a class="icon fa fa-google-plus" href="#"></a></li>
                <li><a class="icon fa fa-instagram" href="#"></a></li>
                <li><a class="icon fa fa-pinterest" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
</header>
<?php 
	$datos = $_POST['id'];
  $nom = $_POST['nom'];
	$sum = 0;
	$bandera = false;
if (isset($_POST['id'])){
    foreach ($datos as $codigo){
        //echo $codigo."<br />";
        $sum+= $codigo;
    }
}
if($nom == 'Pepino'){
  if($sum != '3' && $sum >'0' && $sum < '9'){
    $sum = '3';
    $bandera = true;
  }

  if($sum != '18' && $sum > '8' && $sum < '19'){
    $sum= '18';
    $bandera = true;
  }

  if($sum != '24' && $sum > '18'){
    $sum = '24';
    $bandera= true;
  }
}

if ($nom == 'Limon') {
  if($sum != '10' && $sum > '0' && $sum < '11'){
    $sum = '10';
    $bandera = true;
  }

  if($sum != '11' && $sum > '10'){
    $sum = '11';
    $bandera = true;
  }
}
if ($nom == 'Maiz') {
  if($sum != '3' && $sum > '0' && $sum < '4'){
    $sum = '3';
    $bandera = true;
  }

  if($sum != '18' && $sum > '0' && $sum > '3'){
    $sum = '18';
    $bandera = true;
  }
}
if ($sum == 0) {
	echo "Seleccione un sintoma de l formulario, <a href='formulario'>clic aqui</a> para volver atras";
}else{
if ($bandera == false) {
  //echo $sum;
  echo "<h2 class='title is-2'>",$nom,"</h2>";
  $info = mysqli_query($conn, "SELECT * FROM enfermedades WHERE nombre='$nom' AND codigo='$sum'");
  while ($row = mysqli_fetch_assoc($info)) { ?>
  <div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
      <div class="tile">
        <div class="tile is-parent is-vertical">
          <article class="tile is-child notification is-primary">
            <p class="title"><?php echo $row["enfermedad"];?></p>
            <p class="subtitle"><?php echo $row["cientifico"];?></p>
          </article>
          <article class="tile is-child notification is-warning">
            <p class="title">Control</p>
            <p class="subtitle"><?php echo $row["productosControl"];?></p>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-info">
            <p class="title"><?php echo $row["enfermedad"];?></p>
            <p class="subtitle"><?php echo $row["descImagen"];?></p>
            <figure class="image is-4by3">
              <img src="<?php echo $row['imagen']; ?>">
            </figure>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-danger">
          <p class="title">Necesitas Asistencia</p>
          <p class="subtitle">Tenemos a la mano una agenda de especializasta para que contactes con ellos, puedes acceder a esta agenda dando clic <a href=""> aqui</a></p>
          <div class="content">
            <!-- Content -->
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">Información</p>
          <div class="content">
            <?php echo $row["descripcion"]?>
          </div>
        </div>
      </article>
    </div>
  </div>
  <?php
    }
}else{
  echo "<h2 class='title is-2'>",$nom,"</h2>";?>
  <div class="notification is-danger">
    <button class="delete"></button>
    Lo siguiente fue generado automaticamente por el sistema, en este caso se recomienda contactar con un especialista.
    Para ver los especialistas disponibles, da <a href="https://agromed.gq/esp_inf">Click Aquí</a>
  </div>
<?php  $info = mysqli_query($conn, "SELECT * FROM enfermedades WHERE nombre='$nom' AND codigo='$sum'");
  while ($row = mysqli_fetch_assoc($info)) { ?>
  <div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
      <div class="tile">
        <div class="tile is-parent is-vertical">
          <article class="tile is-child notification is-primary">
            <p class="title"><?php echo $row["enfermedad"];?></p>
            <p class="subtitle"><?php echo $row["cientifico"];?></p>
          </article>
          <article class="tile is-child notification is-warning">
            <p class="title">Control</p>
            <p class="subtitle"><?php echo $row["productosControl"];?></p>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-info">
            <p class="title"><?php echo $row["enfermedad"];?></p>
            <p class="subtitle"><?php echo $row["descImagen"];?></p>
            <figure class="image is-4by3">
              <img src="<?php echo $row['imagen']; ?>">
            </figure>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-danger">
          <p class="title">Necesitas Asistencia</p>
          <p class="subtitle">Tenemos a la mano una agenda de especialistas para que contactes con ellos, puedes acceder a esta agenda dando clic<a href=""> aquí</a></p>
          <div class="content">
            <!-- Content -->
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">Información</p>
          <div class="content">
            <?php echo $row["descripcion"]?>
          </div>
        </div>
      </article>
    </div>
  </div>
  <?php
    } 
  }
}
?>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>