
<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body{
	background-image: url(ev.jpg);
	background-size: cover; 
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    box-sizing: border-box;
	font-family: Arial; 
            color: white;
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
    
   
    <ul>
	<li><a href="home.php">Home</a></li>
	<li><a>Member</a>
        <ul>
            <li><a>Alumni</a></li>
            <li><a>Committee</a></li>
            <li><a>New Member</a></li>
            
        </ul>
    </li>
	<li><a>Sports</a>
        <ul>
            <li><a href="Football.php">Football</a></li>
            <li><a href="Cricket.php">Cricket</a></li>
            <li><a href="Table%20Tenis.php">Table Tenis</a></li>
            <li><a href="Carrom.php">Carrom</a></li>
            <li><a href="Chess.php">Chess</a></li>
            <li><a href="Badminton.php">Badminton</a></li>
            <li><a href="VallyBall.php">VallyBall</a></li> 
        </ul>
    </li>
        <li><a>Event</a>
            <ul>
            <li><a href="show_old_event.php">Show Old Event</a></li>
        </ul>
        </li>
        
        <li><a>Media</a></li>
	    <li><a>Result</a></li>

        <li><a>SignUp</a>
        <ul>
        	<li><a>
        		<body>
        			<div class="warp">
        				<form action="SignUp.php" method="post">
                            
                            
        					<input type="text" name="YourName"placeholder="Your Name">
        					<input type="email" name="email"placeholder="Your Email">
        					<input type="text" name="number"placeholder="Mobile Number">
        					<input type="password" name="password"placeholder="Password">
        					<input type="text" name="gander"placeholder="Gender">
        					<input type="text" name="department"placeholder="Department">
        					<input type="text" name="position"placeholder="Position">
                            <input type="text" name="id"placeholder="ID">
    
                            
                            <button type="submit" name="Submit">Submit</button>
        					</form>
        				</div>
        			</body>
        		</a>
        	</li>
        </ul>
    </li>

    
        <li><a>Log In</a>
        	<ul>
        		<li><a>
                    <body oncontextmenue="return false">
                        <div class='body'></div>
                        <div class="gard"></div>
                        <div class="header"></div>
                        <br>
                        <h1>HELLO</h1>
                        <form action="Login.php"method="post">
                        <form name="login">
                            <div calss="login">
                                <input type="text"placeholder="username" name="username"><br>
                                 <input type="password"placeholder="password" name="password"><br>
                                 <button type="submit"onclick="check(this.form)">Login</button> 

                                
                            </div>
                            
                            
            
		      </form>     
            </form>
            
            </body>
            </a>
        </li>
    </ul>
</li>
</ul>
</head>
</html>
<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'uiusc');

error_reporting(0);

$qu ="SELECT * FROM member";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data); //koto gulo event ace ta count kora

if($total != 0)
{
	?>

<table>
	<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Position</th>
		
	</tr>



	<?php
    //data gulo ke fetch kore niye asa loop
	while($result = mysqli_fetch_assoc($data)){

echo"<tr>
		<td>".$result['ID']."</td>
	    <td>".$result['Name']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['Contact']."</td>
        <td>".$result['Position']."</td>
	</tr>";

	}

}
else
{
echo "no found";
}
?>
</table>
<script>
	function checkdelete(){
		return confirm('Are you sure you want to delete this data???');
	}
</script>