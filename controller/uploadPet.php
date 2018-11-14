<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/PetDAO.php');
include('../model/Pet.php');

include('../model/User.php');
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: login.html");
    }
    else {
        $user=$_SESSION['user'];
        $userUsername=$user->getUsername();
    }

$petDAO = new PetDAO($DB_CON);

$name = $_POST['nameP'];
$type = $_POST['type'];
$yearofbirth = $_POST['yearofbirth'];
$description = $_POST['description'];
$color = $_POST['color'];
$breed = $_POST['breed'];
$image = $_FILES['dogImage']['name'];
$imageFile = $_FILES['dogImage']['tmp_name'];

$pet = new Pet($name, $type, $yearofbirth, $color, $description, $breed, $image, $userUsername);

$success = $petDAO->insertPet($pet, $imageFile);
if($success) {

    $message = '¡Listo! Hemos registrado a '.$name;
    echo "<script>
    alert('$message');
    window.location.href='../html/home.php';
    </script>";
}else{
    echo 'el nombre es ... '.$userName;
    echo('Problem inserting the pet');
}

?>
