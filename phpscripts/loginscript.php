<?php
$username = $_POST['username'];
$password = $_POST["password"];;

$requiredUsername = '';
$requiredPassword= '';

if($username == $requiredUsername && $password == $requiredPassword) {
  session_start();
  $_SESSION['username'] = $username;
  
  header("Location: /C2S/");
} else {
  header ("Location: /C2S/login.php?error=Zle meno alebo heslo!");
}

?>