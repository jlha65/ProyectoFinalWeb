<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/PetDAO.php');
include('../model/Pet.php');

$petDAO = new PetDAO($DB_CON);

$name = $_POST['nameP'];
$type = $_POST['type'];
$yearofbirth = $_POST['yearofbirth'];
$description = $_POST['description'];
$color = $_POST['color'];
$breed = $_POST['breed'];
$image = $_FILES['dogImage']['name'];
$imageFile = $_FILES['dogImage']['tmp_name'];

$pet = new Pet($name, $type, $yearofbirth, $color, $description, $breed, $image);

$success = $petDAO->insertPet($pet, $imageFile);
if($success) {

    $message = 'Registration completed for '.$name;
    echo "<script>
    alert('$message');
    window.location.href='../html/home.php';
    </script>";
}else{

    echo('Problem inserting the pet');
}

?>
