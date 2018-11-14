<?php
include('../dataAccess/dbconnection.php');

//include('/uploadPet.php'); //include del include. Issue de PHP

include('../dataAccess/PetDAO.php');
include('../model/Pet.php');


$petDAO = new PetDAO($DB_CON);

$name=$_POST['nameOfPet'];
$success = $petDAO->deletePet($name);
$success=true;
if($success) {

    $message = 'Hemos borrado a '.$name.' del catalogo';
    echo "<script>
    alert('$message');
    window.location.href='../html/home.php';
    </script>";
}else{
    echo('Problem inserting the pet');
}

?>
