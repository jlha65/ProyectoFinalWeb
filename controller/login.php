<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/UserDAO.php');

$user = new User($DB_CON);

$username = $_POST['username'];
$password = $_POST['password'];

$UserToSearch = $user->getUser($username, $password);
if(!isset($UserToSearch)) {
    /*echo('Wrong username/password');
    echo('username wrote: '.$username);
    echo('password wrote: '.$password);*/
    $message = 'Wrong username or password, '.$username;
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
    alert('$message');
    window.location.href='../html/index.html';
    </script>";
}else{
    echo('Hi '.$UserToSearch['username']);

}
?>
