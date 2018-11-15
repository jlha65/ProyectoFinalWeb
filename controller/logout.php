<?php
    include('../model/User.php');
    session_start();
    $user=$_SESSION['user'];
    $userName=$user->getName();
    //session_end();
    session_unset();
    session_destroy();
    $message = 'Gracias por visitarnos, '.$userName;
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
    alert('$message');
    window.location.href='../html/home.php';
    </script>";
?>
