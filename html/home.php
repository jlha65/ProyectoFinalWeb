<?php
    include('../model/User.php');
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: login.html");
    }
    else {
        $user=$_SESSION['user'];
        $userName=$user->getName();
        $userUsername=$user->getUsername();
        $userEmail=$user->getEmail();
        $userTelephone=$user->getTelephone();
        $userCity=$user->getCity();
        $userCountry=$user->getCountry();
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

    <!-- Custom styles for this template -->
    <link href="../css/3-col-portfolio.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Adopta Huellitas</a>
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

          

          <div class="row">
          <?php include("../controller/mostrarCatalogo.php");?>
          </div>

          <!-- /.row -->
    <!-- Pagination
          
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
      -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Section para dar en alta alguna adopcion -->
    <section id="adopcion_section" class="element_hidden">
      <div class="containerAdopcion">
        <h1 class="title">Registra una mascota en Adopción!</h1>
                <p class="bold">Ingresa la información de la mascota</p>
                <form method="post" action="../controller/uploadPet.php"  name="uploadPet" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="add">
                    <label>Nombre</label>
                    <br>
                    <input type="text" name="nameP" required><br><br>
                    <label>Tipo</label>
                    <br>
                    <input type="text" name="type" required><br><br>
                    <label>Año de nacimiento</label>
                    <br> 
                    <input type="text" name="yearofbirth" required><br><br>
                    <label>Color</label>
                    <br>
                    <input type="text" name="color" required><br><br>
                    <label>Descripcion</label>
                    <br>
                    <input type="text" name="description" required><br><br>
                    <label>Raza</label>
                    <br>
                    <input type="text" name="breed" required><br><br>
                    <label>Imagen</label>
                    <br>
                    <input type="file" name="dogImage" style="text-align:center;" required><br><br>
                    <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
                    <label>&nbsp;</label>
                    <input name="signUpSubmit" type="submit" class="button" value="Registrar" id="submit">
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
              <h3>Amor</h3>
              <p>Abrir las puertas de tu casa con el fin de convertirlo en un miembro de la familia</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://image.ibb.co/kQQa7q/animal-cat-domestic-animal-1323256.jpg')">
            <div class="carouselback carousel-caption d-none d-md-block">
              <h3>Lealtad</h3>
              <p>Tu nuevo cómplice de aventuras</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://image.ibb.co/hByv7q/adorable-animal-attractive-1462634.jpg')">
            <div class="carouselback carousel-caption d-none d-md-block">
              <h3>Cariño</h3>
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
    <header class="bg-primary text-white headerAbout">
      <div class="container text-center">
        <h1>Esto es Adoptando Huellitas!</h1>
        <p class="lead">Un espacio donde puedes adoptar y poner en adopción mascotas</p>
      </div>
    </header>
    <div id="about" class="sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>¡Creemos que puedes hacer la diferencia!</h2>
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
            <h2>Testimonio de nuestros clientes</h2>
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
            <h2>Contáctanos</h2>
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
        <h1><?php echo $userName?></h1>
        <h4 id="usernameStyle">@<?php echo $userUsername?></h4>
        <br>
        <img class="imagenIcono" src="https://image.ibb.co/cvn90A/67347.png">
        <p> <?php echo $userCity?>, <?php echo $userCountry?></p>
        <img class="imagenIcono" src="https://image.ibb.co/nu57nq/telephone.png">
        <p> <?php echo $userTelephone?></p>
        <img class="imagenIcono" src="https://image.ibb.co/mna7nq/email.png">
        <p> <?php echo $userEmail?></p>

        <p>¡Esperamos que estes teniendo una estancia agradable en nuestro sitio!</p>
        <a class="btn btn-primary btn-lg" href="#">Editar mi información</a>
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
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card One</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Two</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Three</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Three</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

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
