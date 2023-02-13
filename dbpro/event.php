<!DOCTYPE html>
<html>
<head>
    <center>
<?php 

session_start();
$con = mysqli_connect('localhost','root','','uiusc');
 
if(isset($_POST['Submit'])){
    
    
$name = mysqli_real_escape_string($con,$_POST['Name']);
$stdate = mysqli_real_escape_string($con,$_POST['s']);
$endate = mysqli_real_escape_string($con,$_POST['e']);
$rating = mysqli_real_escape_string($con,$_POST['rating']);
$details = mysqli_real_escape_string($con,$_POST['details']);
$meid = mysqli_real_escape_string($con,$_POST['m']);
$reid = mysqli_real_escape_string($con,$_POST['r']);
    


   
$qy= " INSERT INTO event(Name , Start_date , End_date , Rating , Details) VALUES ('$name' , '$stdate' , '$endate' , $rating , '$details' ) ";
echo $qy;
mysqli_query($con, $qy);

//header('location:uiusc.php');
    
    echo"<br><br><br><b>Creat New Event Successfull</b>";


}
?>


	<title></title>
		<style type="text/css">
		body{
	background-image: url(sign1.jpg);
	background-size: cover; 
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    box-sizing: border-box;
	font-family: Arial; 
            color: blue;
        }
           input{
           	padding: 10px;
           	margin: 5px;
           	border-radius: 5px;
           	border: none;
           }
            input[type=text],input[type=email],input[type=number],input[type=password]{width: 80%;}
            input[type=Submit]{width:50%; }
        


            
            ul{
                margin: 0px;
                padding:0px;
                list-style:none;
            }
            ul li{
                float: left;
                width: 160px;
            
                height: 40px;
                background-color: black;
                opacity: .8;
                line-height: 40px;
                text-align: center;
                font-size: 10px;
                
            }
            ul li a{
                text-decoration: none;
                color: white;
                display: block;
                font-size: : 40px;
                
            }
            ul li a:hover{
                background-color: green;
            }
            ul li ul li{
                display: none;
            }
            ul li:hover ul li{
                display: block;
                
            }
    </style>
    </center>
    </head>
</html>
    