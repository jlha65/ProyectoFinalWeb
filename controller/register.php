<?php
include('../dataAccess/dbconnection.php');

include('../dataAccess/UserDAO.php');

$user = new User($DB_CON);

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$city = $_POST['city'];
$country = $_POST['country'];
$telephone = $_POST['telephone'];

$success = $user->insertUser($name, $email, $username, $password, $city, $country, $telephone);
if($success) {
    /*echo('Registration completed. Here is your data');
    echo('name: '.$name);
    echo('username: '.$username);
    echo('email: '.$password);
    echo('name: '.$email);
    echo('city: '.$city);
*/
    $message = 'Registration completed, '.$name;
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
    alert('$message');
    window.location.href='../html/index.html';
    </script>";
}else{
  echo('name: '.$name);
  echo('username: '.$username);
  echo('password: '.$password);
  echo('email: '.$email);
  echo('city: '.$city);
  echo('country: '.$country);
  echo('telephone: '.$telephone);
    echo('Problem inserting the user');
}

?>
