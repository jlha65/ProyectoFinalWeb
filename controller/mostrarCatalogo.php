<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/PetDAO.php');
include('../model/Pet.php');
include('../dataAccess/UserDAO.php');



    $petDAO = new PetDAO($DB_CON);
    $userDAO = new UserDAO($DB_CON);

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
            $user = $row['username'];

            $userResult = $userDAO->getUserData($user);
            $userName = $userResult['name'];
            
            $userEmail=$userResult['email'];
            $userTelephone=$userResult['telephone'];
            $userCity=$userResult['city'];
            $userCountry=$userResult['country'];

            //echo '<img src="../pictures/'.$img.'">';
            echo '
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a id="'.$name.'" class="trigger_popup_fricc"><img class="card-img-top" src="'.$imgPath.'"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a class="titleCatalogo brushText">'.$name.'</a>
                  </h4>
                  <p class="card-text">'.$type.'</p>
                </div>
              </div>
            </div>

            <div class="hover_bkgr_fricc clase_'.$name.' element_hidden">
              <span class="helper"></span>
              <div class="spacingBetweenLines">
                  <div class="popupCloseButton">X</div>
                  <img class="card-img-top" src="'.$imgPath.'"></a>
                  <br>
                  <br>
                  <p class="brushText">'.$name.'</p>
                  <p>'.$type.'</p>
                  <p>'.$breed.'</p>
                  <p>'.$yearofbirth.'</p>
                  <p>'.$color.'</p>
                  <p>'.$description.'</p>
                  <p style="font-weight:bold;"> _______________________________________</p>
                  <img class="imagenIconoCata" src="https://image.ibb.co/eYXkS0/user.png">
                  <p>'.$userName.'</p>
                  <p>@'.$user.'</p>
                  <p>'.$userEmail.'</p>
                  <p>'.$userTelephone.'</p>
                  
                  <p>'.$userCity.', '.$userCountry.'</p>
              </div>
          </div>
            ';
        }
    }   


?>
