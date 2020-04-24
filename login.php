<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query("select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($user);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
  header("Location: http://localhost/sieperpus/login/index.php");
}
else
{
  header("Location: http://localhost/sieperpus/index.php");
}

?>
