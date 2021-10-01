<?php
    session_start();
    //Si existe la sesión, lo dejamos en la pagina, si no, lo madamos a que inicie sesion.
    if (!isset($_SESSION['name'])){
    header('Location: sesion/index.php?sesion=false');
    die();
    }
?>
<!DOCTYPE HTML>
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

<!--===============================================================================================-->

    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    

<!--===============================================================================================-->
	<title>Envio de informaci&oacute;n</title>

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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
<!-- Cabecera -->
<?php
    if(isset($_GET["sesion"]) && $_GET["sesion"] == 'false')

        {?>

           <script type="text/javascript">

            alertify.set('notifier','position', 'top-left');

            alertify.success('Se Cerro la Sesión');
           </script>

  <?php   }

  ?>
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
                      <p>Queremos ayudarte a obtener la mayor cantidad de producto posible, combatiendo contra las plagas y enfermedades que rodean a tu cultivo.</p>
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

<section class="section">
<div class="tile is-ancestor">

<!-- Información de especialistas 1-->
    <div class="card" style="height: auto; width: auto;">
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-128x128">
          <img src="images/les.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Juan Chavez Aguirre</p>
        <p class="subtitle is-6">@Jchavez3</p>
      </div>
    </div>
    <div class="content">
      Especialista en el tratamiento de plagas en climas frios.
      <br>Ciudad: Alcaraces<br>
      <p>Numero: 312 209 0247</p>
      <time datetime="19895-4-20">20 MAY 1995</time>
      <br>
    </div>
  </div>
</div>
<!-- ----------------------------- -->



<!-- Información de especialistas 3-->
    <div class="card" style="margin-left: 2%; height: auto; width: auto">
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-128x128">
          <img src="images/marcelo.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Marcelo Morfin</p>
        <p class="subtitle is-6">@MTaylor_5</p>
      </div>
    </div>

    <div class="content">
      Especialista en el tratamiento de plantas, como su crecimiento y estado saludable.
      <br>Ciudad: Cuauhtemoc<br>
      <p>Numero: 314 356 4554</p>
      <time datetime="19895-7-3">3 JUL 1995</time>
      <br>
    </div>
  </div>
</div>
<!-- ----------------------------- -->

<!-- Información de especialistas 3-->
  <div class="card" style="margin-left: 2%; height: auto; width: auto;">
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-128x128">
          <img src="images/caro.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Carolina Lopez Mendoza</p>
        <p class="subtitle is-6">@CLopez_2</p>
      </div>
    </div>

    <div class="content">
      Especialista en el tratamiento de plagas de tipo frio, como tomates, etc.
      <br>Ciudad: Mexico<br>
      <p>Numero: 312 856 2332</p>
      <time datetime="1989-11-8">8 Nov 1989</time>
      <br>
    </div>
  </div>
</div>
 </div>
</section>
<!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>