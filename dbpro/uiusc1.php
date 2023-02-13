<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body{
	background-image: url(log.jpg);
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
	<li><a href="home.php"> Home </a></li>
	<li><a>Member</a>
        <ul>
            <li><a href="Alumni.php">Alumni</a></li>
            <li><a href="Committee.php">Committee</a></li>
            <li><a href="New Member.php">New Member</a></li>
            
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
        <ul>
        	<li><a>
        		<body>
        			<div class="warp">
                        <h1>Creat New Event</h1>
        				<form action="event.php" method="post">
 
        					<input type="text" name="Name"placeholder="Event Name">
        					<input type="text" name="s"placeholder="Start_date">
        					<input type="text" name="e"placeholder="End_date">
        					<input type="text" name="rating"placeholder="Rating">
        					<input type="text" name="details"placeholder="Details">
        					<input type="text" name="m"placeholder="MemberID">
        					<input type="text" name="r"placeholder="ReviewID">

                            <button type="submit" name="Submit">Submit</button>
        					</form>
        				</div>
        			</body>
        		</a>
        	</li>
        </ul>
        </ul>  
        </li>
        
        
        <li><a>Media</a>
        <ul>
            <li><a href="view_media.php"> View </a></li>
            <li><a href="upload.php"> Upload </a></li>
        </ul>
    </li>
        
	   <li><a>Result</a>
        <ul>
            <li><a>Name</a></li>      
        <ul>
        	<li><a>
        		<body>
        			<div class="warp">
        				<form action="result.php" method="post">
        				<label>Rating 1 - 5</label>
                        
                        <input type="text" name="rating" placeholder="1...5">
                        <button type="submit" name="Submit">Submit</button>
        				</form>
        				</div>
        			</body>
        		</a>
        	</li>
        </ul>
        </ul>  
        </li>
        
        <li><a href="logout.php">Log Out</a></li>
      

    
        
</ul>
</head>
</html>




