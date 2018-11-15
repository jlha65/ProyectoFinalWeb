<?php
    include('../dataAccess/dbconnection.php');
    include('/mostrarCatalogo.php'); //include del include. Issue de PHP

    //include('../dataAccess/PetDAO.php');
    //include('../model/Pet.php');

    $petDAO = new PetDAO($DB_CON);


    
    //$result = $petDAO->getPet($userUsername);
    $result = $petDAO->getPetsByUsername($userUsernameSessionAct);
    if($result==null) {
        $message = 'No tienes ningun animal en adopcion';
        echo "<p>".$message."</p>";
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
            echo '
            <div class="col-md-4 mb-4">
            <div class="card h-100">
            <div class="card-body">
            <a href="#"><img class="card-img-top" src="'.$imgPath.'"></a>
            <h2 class="card-title brushText">'.$name.'</h2>
            <p class="card-text">'.$description.'</p>
            </div>
            <div class="card-footer">

            <form action="../controller/deletePet.php" method="post">
            ¿Encontraste un hogar para '.$name.'? Eliminalo del catálogo <br>
            <input type="hidden" id="nameOfPet" name="nameOfPet" value="'.$name.'">
            <input class="btn buttonBorrar btn-primary" type="submit" value="Borrar">

            </form>
            </div>
            </div>
            </div>
            ';
        }
    }



?>
