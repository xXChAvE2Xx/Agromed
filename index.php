<?php
session_start();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
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
    <title>Agromed</title>
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

    
  </head>
  <body>

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
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-1920x729.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0"><font color="#000000">Especialistas</font></span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400"><font color="#000000">De igual manera puedes contactar a especialistas en nuestra web para algún tratamiento especializado.</font></p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="esp_inf" data-caption-animate="slideInLeft" data-caption-delay="400">Ver</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-3-1920x729.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0"><font color="#ffffff">Soluciones</font></span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400"><font color="#ffffff">Si porque aquí en <strong>agromed</strong> nuestro principal contenido va dirigido a aquellos agricultores que buscan alguna solución o tratamiento para sus cultivos. </font></p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="formulario" data-caption-animate="slideInUp" data-caption-delay="400">Ver</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-style-2"></div>
      </section>
      <!-- Icons Ruby-->
      <section class="section section-md bg-default section-top-image">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-shovel"></div>
                  </div>
                  
                  
                  
                  
                  <div class="unit-body" id="btn" >  
                        <h4 class="box-icon-ruby-title"><a href="formulario" name="formulario">Formulario para búsqueda</a></h4>
                  </div> 
                </div>
              </article>
            </div>
            <br> <br> <br> <br> <br> <br>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-sun"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="esp_inf">Buscar un especialista</a></h4>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Section CTA 2-->
      <section class="section text-center">
        <div class="parallax-container" data-parallax-img="images/bg-parallax-1.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">¿Qué es agromed?</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">En agromed principalmente se busca ayudar agricultores para la solución a la mayoría de plagas o enfermedades que se pueden desarrollar en plantas o cultivos.</span></p>
            </div>
          </div>
        </div>
      </section>
        
    </div>
    <!-- Global Mailform Output-->
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Ragnar-->
    <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
      <div class="footer-variant-2-bottom-panel">
        <div class="container">
          <!-- Rights-->
          <div class="group-sm group-sm-justify">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Agromed.gq | 2020</span>
            </p>
              
            <a href="desarrolladores/index.html"> <font size="2">Desarrolladores</font></a>
            <center>
              <font size="2">
                   "Desarrolladores"
                   <BR>
                    RAUL C.A.
                   <BR>
                    MARCELO R.M.
                   <BR>
                    VICTOR M.G.
                   <BR>
                    GUSTAVO E.M.
              </font>
            </center>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>