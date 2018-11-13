<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/PetDAO.php');
include('../model/Pet.php');

    $petDAO = new PetDAO($DB_CON);

    $pet = new Pet($name, $type, $yearofbirth, $color, $description, $breed, $image);

    $result = $petDAO->getPets();
    if($result==null) {

        $message = 'No contamos con animales en catalogo';
        echo "<script>
        alert('$message');
        window.location.href='../html/home.php';
        </script>";
    } else {
        foreach ($result as $row){
            $name = $row['name'];
            $type = $row['type'];
            $yearofbirth = $row['yearofbirth'];
            $color = $row['color'];
            $description = $row['description'];
            $breed = $row['breed'];
            $img = $row['image'];
            $imgPath='../pictures/'.$img;
            
            //echo '<img src="../pictures/'.$img.'">';
            echo '
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="'.$imgPath.'"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">'.$name.'</a>
                  </h4>
                  <p class="card-text">'.$type.'</p>
                </div>
              </div>
            </div>
            ';
        }
    }   


?>
