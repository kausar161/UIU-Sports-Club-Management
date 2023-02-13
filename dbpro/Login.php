<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'uiusc');

$username = $_POST['username'];

$pass = $_POST['password'];

$qu="select * from member where Name = '$username' && Password = '$pass' ";
$result = mysqli_query($con, $qu);

$num = mysqli_num_rows($result);

if($num == 1){
//$_SESSION['nameuser'] = "admin";
	header('location:uiusc1.php?');

}
else{
 
header('location:uiusc.php');

}

?>







