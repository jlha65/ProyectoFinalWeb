<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/UserDAO.php');

$userDAO = new UserDAO($DB_CON);

$username = $_POST['username'];
$password = $_POST['password'];

$UserToSearch = $userDAO->getUser($username, $password);
if(!isset($UserToSearch)) {
    /*echo('Wrong username/password');
    echo('username wrote: '.$username);
    echo('password wrote: '.$password);*/
    $message = 'Wrong username or password, '.$username;
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
    alert('$message');
    window.location.href='../html/login.html';
    </script>";
}else{
    echo('Hi '.$UserToSearch['username']);

}
?>
