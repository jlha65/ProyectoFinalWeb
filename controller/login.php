<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/UserDAO.php');
include('../model/User.php');

session_start();
$userDAO = new UserDAO($DB_CON);

$username = $_POST['username'];
$password = $_POST['password'];

$UserToSearch = $userDAO->getUser($username, $password);
if(!isset($UserToSearch)) {
    /*echo('Wrong username/password');
    echo('username wrote: '.$username);
    echo('password wrote: '.$password);*/
    $message = 'Usuario o contraseña incorrecto, '.$username;
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
    alert('$message');
    window.location.href='../html/login.html';
    </script>";
}else{
    //echo('Hi '.$UserToSearch['username']);
    $user = new User($UserToSearch['name'], $UserToSearch['email'], $UserToSearch['username'], 
    $UserToSearch['password'], $UserToSearch['city'], $UserToSearch['country'], $UserToSearch['telephone']);
    session_unset();
    $_SESSION['user']=$user;
    echo "<script>
    window.location.href='../html/home.php';
    </script>";
}
?>
