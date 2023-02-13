<?php 

session_start();

$con = mysqli_connect('localhost','root','','uiusc');
 
if(isset($_POST['Submit'])){
    
    
$name = mysqli_real_escape_string($con,$_POST['YourName']);

$id = mysqli_real_escape_string($con,$_POST['id']); 


$qy= " INSERT INTO member(ID , Name) VALUES ('$id' , '$name') ";

mysqli_query($con, $qy);

//header('location:uiusc.php');

}

?>
