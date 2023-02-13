<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body{
	background-image: url(cri.jpg);
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
    
    <li><a>Cricket Details</a></li>
      <a href="https://en.wikipedia.org/wiki/Cricket"><button>Click Me</button></a>
    </head>
</html>