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
          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project One</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Two</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Three</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Four</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Five</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                </div>
              </div>
            </div>
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
                <form method="post" action="../controller/uploadPet.php"  name="uploadPet">
                    <input type="hidden" name="action" value="add">
                    <label>Nombre</label>
                    <br>
                    <input type="email" name="emnameail" required><br><br>
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
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
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
        <h1>Welcome to Scrolling Nav</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
    </header>

    <div id="about" class="sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About this page</h2>
            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
            <ul>
              <li>Clickable nav links that smooth scroll to page sections</li>
              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="services" class="bg-light sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="contact" class="sectionAbout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </div>

    </section>

    <!-- Section del perfil del usuario -->
    <section id="perfil_section" class="element_hidden">
      <h1>Hola, <?php echo $userName?> </h1>

    <!-- Page Content -->
    <div class="container">

<!-- Heading Row -->
<div class="row my-4">
  <div class="col-lg-8">
    <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
  </div>
  <!-- /.col-lg-8 -->
  <div class="col-lg-4">
    <h1>Business Name or Tagline</h1>
    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
    <a class="btn btn-primary btn-lg" href="#">Call to Action!</a>
  </div>
  <!-- /.col-md-4 -->
</div>
<!-- /.row -->

<!-- Call to Action Well -->
<div class="card text-white bg-secondary my-4 text-center">
  <div class="card-body">
    <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
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
