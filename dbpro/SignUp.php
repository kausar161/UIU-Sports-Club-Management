<?php 

session_start();

$con = mysqli_connect('localhost','root','','uiusc');
 
if(isset($_POST['Submit'])){
    
    
$name = mysqli_real_escape_string($con,$_POST['YourName']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$number = mysqli_real_escape_string($con,$_POST['number']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$g = mysqli_real_escape_string($con,$_POST['gander']);
    
$department = mysqli_real_escape_string($con,$_POST['department']);
$position = mysqli_real_escape_string($con,$_POST['position']);
$id = mysqli_real_escape_string($con,$_POST['id']); 


$qy= " INSERT INTO member(ID , Name , Email , Gender , Dept , Contact , Position , Password) VALUES ('$id' , '$name' , '$email' , '$g' , '$department' , '$number' ,'$position' , '$password') ";

mysqli_query($con, $qy);

header('location:uiusc.php');

}

?>









