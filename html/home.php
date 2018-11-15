<?php
    include('../model/User.php');
    //include('../controller/getUser.php');
    
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: login.html");
    }
    else {
        $userSessionAct=$_SESSION['user'];
        $userNameSessionAct=$userSessionAct->getName();
        $userUsernameSessionAct=$userSessionAct->getUsername();
        $userEmailSessionAct=$userSessionAct->getEmail();
        $userTelephoneSessionAct=$userSessionAct->getTelephone();
        $userCitySessionAct=$userSessionAct->getCity();
        $userCountrySessionAct=$userSessionAct->getCountry();

    }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adopta Huellitas</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://image.ibb.co/nsfN2q/58aeffb2c869e092af51ee74.png">
    <!-- Custom styles for this template -->
    <link href="../css/3-col-portfolio.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navBarStyle navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand logoTitle" href="#">Adopta Huellitas🐾</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="menu">
            <li id="catalogo" class="selected_nav_element">
              <a class="nav-link" >Catálogo
              </a>
            </li>
            <li id="adopcion" class="nav-item">
              <a class="nav-link" >Poner en Adopción</a>
            </li>
            <li id="acerca" class="nav-item">
              <a class="nav-link" >Acerca de nosotros</a>
            </li>
            <li id="perfil" class="nav-item">
              <a class="nav-link">Mi perfil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="catalogo_section">
        <!-- Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="my-4">Catálogo de Mascotas</h1>
<!--
          <a class="trigger_popup_fricc">Click here to show the popup</a>
          <div class="hover_bkgr_fricc element_hidden">
              <span class="helper"></span>
              <div>
                  <div class="popupCloseButton">X</div>
                  <p>Add any HTML content<br />inside the popup box!</p>
              </div>
          </div>
  -->
  <!--
          <div class="filterDiv">
          <form method="post" action="../controller/filterCatalogo.php"  name="filter">
               <select class="selectFilter" name="typeFilter" required>
                      <option selected value="Todos">Todos los tipos</option>
                      <option value="Gato">Gato</option>
                      <option value="Conejo">Conejo</option>
                      <option value="Perro">Perro</option>
                      <option value="Iguana">Iguana</option>
                      <option value="Cerdo">Cerdo</option>
                      <option value="Pez">Pez</option>
                      <option value="Cuyo">Cuyo</option>
                      <option value="Borrego">Borrego</option>
                      <option value="Otro">Otro</option>
                </select>
                <input name="filter" type="submit" class="filterButtonStyle" value="    " id="submit">
          </div>
         </form>
  -->
        <select id="mySelect" onchange="myFunction()" class="selectFilter " name="typeFilter" required>
                      <option selected value="Todos">Todos los tipos</option>
                      <option value="Gato">Gato</option>
                      <option value="Conejo">Conejo</option>
                      <option value="Perro">Perro</option>
                      <option value="Iguana">Iguana</option>
                      <option value="Cerdo">Cerdo</option>
                      <option value="Pez">Pez</option>
                      <option value="Cuyo">Cuyo</option>
                      <option value="Borrego">Borrego</option>
                      <option value="Otro">Otro</option>
                </select>
          <br>
          <p id="demo"></p>
          <div class="row">
          <?php include("../controller/mostrarCatalogo.php");?>
          </div> 
          <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Section para dar en alta alguna adopcion -->
    <section id="adopcion_section" class="element_hidden">
      <div class="containerAdopcion">
        <h1 class="title aboutHeadings">Registra una mascota en Adopción!</h1>
                <p class="bold">Ingresa la información de la mascota</p>
                <form method="post" action="../controller/uploadPet.php"  name="uploadPet" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="add">
                    <label>Nombre</label>
                    <br>
                    <input type="text" name="nameP" required><br><br>
                    <!--<label>Tipo</label>
                    <br>-->
                    <select name="type"required>
                      <option selected disabled hidden value="">Seleccionar Tipo..</option>
                      <option value="Gato">Gato</option>
                      <option value="Conejo">Conejo</option>
                      <option value="Perro">Perro</option>
                      <option value="Iguana">Iguana</option>
                      <option value="Cerdo">Cerdo</option>
                      <option value="Pez">Pez</option>
                      <option value="Cuyo">Cuyo</option>
                      <option value="Borrego">Borrego</option>
                      <option value="Otro">Otro</option>
                    </select>
                    <!--<input type="text" name="type" required>--><br><br>
                    <label>Año de nacimiento</label>
                    <br> 
                    <input type="number" min="2000" max="<?php echo date("Y"); ?>" name="yearofbirth" required><br><br>
                    <label>Color</label>
                    <br>
                    <input type="text" name="color" required><br><br>
                    <label>Descripcion</label>
                    <br>
                    <input type="text" name="description" class="myDescriptionInput"required><br><br>
                    <label>Raza</label>
                    <br>
                    <input type="text" name="breed" required><br><br>
                    <label>Imagen</label>
                    <br>
                    <input type="file" name="dogImage" style="text-align:center !important; padding-left: 80px;" required><br><br>
                    <label>&nbsp;</label>
                    <input name="signUpSubmit" type="submit" class="button btn btn-primary btn-lg" value="Registrar" id="submit">
                </form>
                <br>
        </div>
    </section>

    <!-- Section para la pagina de Acerca de nosotros -->
    <section id="acerca_section" class="element_hidden">

      <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://image.ibb.co/bXfa7q/animal-dog-feelings-40064.jpg')">
            <div class="carouselback carousel-caption d-none d-md-block">
              <h3 class="aboutHeadings">Amor</h3>
              <p>Abrir las puertas de tu casa con el fin de convertirlo en un miembro de la familia</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://image.ibb.co/kQQa7q/animal-cat-domestic-animal-1323256.jpg')">
            <div class="carouselback carousel-caption d-none d-md-block">
              <h3 class="aboutHeadings">Lealtad</h3>
              <p>Tu nuevo cómplice de aventuras</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://image.ibb.co/hByv7q/adorable-animal-attractive-1462634.jpg')">
            <div class="carouselback carousel-caption d-none d-md-block">
              <h3 class="aboutHeadings">Cariño</h3>
              <p>No cambias al mundo adoptando una mascota, pero cambiaste el mundo de esa mascota </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <header class="bg-primary text-white headerAbout estoEsAdoptandoHuellitas">
      <div class="container text-center">
        <h1 class="aboutHeadings">Esto es Adoptando Huellitas!</h1>
        <p class="lead">Un espacio donde puedes adoptar y poner en adopción mascotas</p>
      </div>
    </header>
    <div id="about" class="sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="aboutHeadings">¡Creemos que puedes hacer la diferencia!</h2>
            <p class="lead">Somos una página web que cuenta con el objetivo de proveer a nuestros usuarios de maneras alternas para poseer una mascota y dar en adopción otras. Las mascotas que más encontrarás en nuestro sitio son:</p>
            <ul>
              <li>Perros</li>
              <li>Gatos</li>
              <li>Conejos</li>
              <li>Cerdos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="services" class="bg-light sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <img class="imagenSitio" src="https://image.ibb.co/ksA4iV/affection-animal-brunette-1139793.jpg"/>
            <h2 class="aboutHeadings">Testimonio de nuestros clientes</h2>
            <br>
            <p class="lead">"Adoptando Huellitas me dio la oportunidad de conocer a Max, mi perro. Hacemos todo juntos y es increíble como cambio mi vida de la mejor manera posible" </p>
            <p class="lead"> - Maria Rodríguez, Ciudad de México </p>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="aboutHeadings">Contáctanos</h2>
            <p class="lead">Si cuentas con alguna sugerencia, duda o comentario puedes enviarnos un correo electrónico a adoptahuellitas@gmail.com </p>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- Section del perfil del usuario -->
    <section id="perfil_section" class="element_hidden">

    <!-- Page Content -->
    <div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
      <div class="col-lg-8">
        <img class="img-fluid rounded" src="https://image.ibb.co/euA8Sq/adorable-animals-breed-374825.jpg" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-4">
        <h1><?php echo $userNameSessionAct?></h1>
        <h4 id="usernameStyle">@<?php echo $userUsernameSessionAct?></h4>
        <br>
        <img class="imagenIcono" src="https://image.ibb.co/cvn90A/67347.png">
        <p> <?php echo $userCitySessionAct?>, <?php echo $userCountrySessionAct?></p>
        <img class="imagenIcono" src="https://image.ibb.co/nu57nq/telephone.png">
        <p> <?php echo $userTelephoneSessionAct?></p>
        <img class="imagenIcono" src="https://image.ibb.co/mna7nq/email.png">
        <p> <?php echo $userEmailSessionAct?></p>

        <p>¡Esperamos que estes teniendo una estancia agradable en nuestro sitio!</p>
        <form action="../controller/logout.php" method="post">
        <input type="hidden" id="usernameOfUser" name="usernameOfUser" value="<?php echo $userUsername?>">
            <input class="btn btn-primary btn-lg" type="submit" value="Cerrar Sesión">
        </form>

      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Mascotas que yo he puesto en adopción</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <?php include("../controller/showUsersPets.php");?>
    </div> 
    <!-- /.row -->

    </div>
    <!-- /.container -->

    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Adopta Huellitas 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/scriptHome.js"></script>
  </body>

</html>

<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    //document.getElementById("demo").innerHTML = "You selected: " + x;
    if (x=='Todos'){
      var elements = document.getElementsByClassName('elementoDelCatalogo');
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('element_hidden');
      }

    } else {
      
      var elements = document.getElementsByClassName('elementoDelCatalogo');
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('element_hidden');
      }
      var elements = document.getElementsByClassName('type'+x);
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('element_hidden');
      }
    }
}
</script>