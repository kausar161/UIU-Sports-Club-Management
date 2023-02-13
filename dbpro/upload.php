<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'uiusc');

    if(isset($_POST['upload'])){
       
        
        $image = $_POST['image']['name'];
        $text = $_POST['text'];
        
        $qu="select * from media  = '$image''$name'' && text = '$text' ";
        
        
    
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Media</title>
        <style type="text/css"> 
        body{
            background-image: url('up1.jpg');
            background-size: cover; 
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center center;
            box-sizing: content-box;
            font-family: Arial; 
            color: blue;
        }
            
            ul{
                margin: 0px;
                padding:0px;
                list-style:none;
            }
            ul li{
                float: left;
                width: 150px;
                height: 40px;
                background-color: black;
                opacity: .8;
                line-height: 40px;
                text-align: center;
                font-size: 20px;
               
            }
            ul li a{
                text-decoration: none;
                color: white;
                display: block;
                align-content: center;
                
            }
            ul li a:hover{
                background-color: darkorange;
            }
            ul li ul li{
                display: none;
            }
            ul li:hover ul li{
                display: block;
                
            }
            
	</style>
</head>
    <center>
<body>
    <div id="content">
    
    <form action ="upload.php" method = "POST" enctype ="multipart/form-data">
        <label>Uploading Files</label>
        <div><input type="file" name="file"/></div>
        <div><textarea name="text" cols="30" rows="3" placeholder="About photo"></textarea></div>
        <div><input type="submit" name="upload" value="Upload Media"></div>
    
    </form>
    </div>

</body>
    </center>
</html>
