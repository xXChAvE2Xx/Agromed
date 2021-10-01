<?php
    session_start();
    //Si existe la sesión, lo dejamos en la pagina, si no, lo madamos a que inicie sesion.
    if (!isset($_SESSION['name'])){
    header('Location: sesion/index.php?sesion=false');
    die();
    }
?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
  	<link  rel="icon"   href="TLU.jpg" type="image/jpg" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    	html{

    		background-image: url(images/mds.jpg);

    		background-size:auto;

    	}

    </style>
    <title>Formulario | Agromed</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    var valor = "";
    $(document).ready(function(){
      $("#mostrar").hide();

      $('#cultivos').on('change', function() {
        //valor = $("#cultivos option:selected").val();
        $("#mostrar").show();
        alert(valor);
      })
    });


  document.addEventListener('DOMContentLoaded', function () {

      // Get all "navbar-burger" elements
      var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
          $el.addEventListener('click', function () {

            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);

            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }

    });

</script>
<!-- Movil -->
<!-- Bulma -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

  </head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="images/logo-default-196x47.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu" id="navMenu">
    <div class="navbar-start">
      <a class="navbar-item" href="index">
        Inicio
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <?php
            if (isset($_SESSION['loggedin'])) { 
            echo "¡Hola! ",$_SESSION['name'];
            ?>
            &nbsp;
            <div class="buttons">
              <a class="button is-primary" href="sesion/cerrarsesion">
                <strong>Cerrar Sesion</strong>
              </a>
            </div>
            <?php
            }
            else {
                echo "¡Hola!";
            }
        ?>
      </div>
    </div>
  </div>
</nav>
  <center><section class="section" style="background-color: #0000;">
    <div class="container">
      <h1 class="title">Búsqueda de la Plaga</h1>
      <div class="buttons">
        <button id="pepino" class="button is-primary">Pepino</button>
        <button id="limon" class="button is-primary">Limón</button>
        <button id="mango" class="button is-primary">Maíz</button>
      </div>
    </div>
  </section></center>

<!--Modals Bulma-->
<div id="1" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Búsqueda: Pepino</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <form method="post" action="enfermedad.php">
      <section class="modal-card-body">
        <h2>Seleccione los síntomas: </h2>
        <input type="text" name="nom" value="Pepino" style="display: none;">
        <input type="checkbox" name="id[]" value="0" checked="checked" style="display: none;">
        <h3><input type="checkbox" name="id[]" value="1"> Hojas secas unidas al tallo verde<br></h3>
        <h3><input type="checkbox" name="id[]" value="2"> Hojas con manchas poligonales (Amarillas o Secas)<br></h3>
        <h3><input type="checkbox" name="id[]" value="3"> Bordes de color marron oscuro en hojas jovenes<br></h3>
        <h3><input type="checkbox" name="id[]" value="4"> Malformación y distorción del crecimiento aereo<br></h3>
        <h3><input type="checkbox" name="id[]" value="5"> Flor decolorada<br></h3>  
        <h3><input type="checkbox" name="id[]" value="6"> Hojas retorcidas<br></h3>
        <h3><input type="checkbox" name="id[]" value="7"> Manchas en hojas de color gris-plata<br></h3>
        <h3><input type="checkbox" name="id[]" value="8"> Puntos negros en las hojas<br></h3>
        <h3><input type="checkbox" name="id[]" value="9"> Ondulaciones del fruto</h3>  
      </section>
      <footer class="modal-card-foot">
        <button type="submit" class="button is-success">Buscar</button>
      </footer>
    </form>
  </div>
</div>

<div id="2" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Búsqueda: Limón</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <form method="post" action="enfermedad.php">
      <section class="modal-card-body">
        <h2>Seleccione los síntomas: </h2>
        <input type="text" name="nom" value="Limon" style="display: none;">
        <input type="checkbox" name="id[]" value="0" checked="checked" style="display: none;">
        <input type="checkbox" name="id[]" value="1"> Formacion de materia gomosa en la parte del tronco y en las principales ramas<br>
        <input type="checkbox" name="id[]" value="2"> Tonalidad amarillenta en las hojas<br>
        <input type="checkbox" name="id[]" value="3"> Floración presentada fuera de su epoca natural<br>
        <input type="checkbox" name="id[]" value="4"> Manor crecimiento vegetativo<br>
        <input type="checkbox" name="id[]" value="5"> Hojas con pequeñas manchas amarillas, marrones, negras (necrosis) o cloróticas con márgener aceitosas<br>  
        <input type="checkbox" name="id[]" value="6"> diminutas manchas necroticas en la cáscara<br> 
      </section>
      <footer class="modal-card-foot">
        <button type="submit" class="button is-success">Buscar</button>
      </footer>
    </form>
  </div>
</div>

<div id="3" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Búsqueda: Maíz</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <form method="post" action="enfermedad.php">
      <section class="modal-card-body">
        <h2>Seleccione los síntomas: </h2>
        <input type="text" name="nom" value="Maiz" style="display: none;">
        <input type="checkbox" name="id[]" value="0" checked="checked" style="display: none;">
        <input type="checkbox" name="id[]" value="1"> Hojas con manchas peuqeñas ligeramente ovaladas de color verde-Gris<br>
        <input type="checkbox" name="id[]" value="2"> Hojas con manchas de color cafe claro y de 3 cm a 16 cm aproximadamente.<br>
        <input type="checkbox" name="id[]" value="3"> Manchas cloriticas en hojas<br>
        <input type="checkbox" name="id[]" value="4"> Deformación de las espigas<br>
        <input type="checkbox" name="id[]" value="5"> Enanismo de la planta<br>  
        <input type="checkbox" name="id[]" value="6"> Desarrollo de soros (Cubierta con una delgada membrana de color grisácea o blanquecida) en la mazorca o espiga<br>
      </section>
      <footer class="modal-card-foot">
        <button type="submit" class="button is-success">Buscar</button>
      </footer>
    </form>
  </div>
</div>

<script type="text/javascript">
  //Modal Bulma 1
  $("#pepino").click(function() {
    $("#1").addClass("is-active"); 
  });
  $(".delete").click(function() {
     $("#1").removeClass("is-active");
  });
  //Modal Bulma 2
    $("#limon").click(function() {
    $("#2").addClass("is-active"); 
  });
  $(".delete").click(function() {
     $("#2").removeClass("is-active");
  });
  //Modal Bulma 3
    $("#mango").click(function() {
    $("#3").addClass("is-active"); 
  });
  $(".delete").click(function() {
     $("#3").removeClass("is-active");
  });
  //Modal Bulma 4
    $("#aguacate").click(function() {
    $("#4").addClass("is-active"); 
  });
  $(".delete").click(function() {
     $("#4").removeClass("is-active");
  });
</script>
</body> 
</html>