<html>
    <head>
        <style>
            #table1{
                width: 100%;
                
            }
            #table1,#table1 th,#table1 td{
                border: 15px solid blue;
                broder-collapse:collapse;
            }
        </style>
    </head>
    <body>
  
<?php
////connecting to data base
try{
    $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsprojectlecture","root","abcd");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(PDEOException $ex){
    ?>

<script>window.alert("Database Not connected.")</script>

<?php
}
////Reading data from database
$userquery="SELECT * FROM products";
$returnvalue=$conn->query($userquery);
$table=$returnvalue->fetchall();
///print_r($table);
?>

<table id="table1">
    <thead>
        <tr>
        <th>ID</th>
        <th>CATEGEROY</th>
        <th>NAME</th>
        <th>Image</th>
        <th>Price/Unit</th>
        <th>Quantity</th>
        <th>UploadDate</th> 
        
        
        
        </tr>
          
    
    </thead>
    <tbody>
    <?php
    foreach($table as $row){
        ?>
        <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php  echo $row[1] ?></td>
        <td><?php  echo $row[2] ?></td>
        <td><?php  echo $row[3] ?></td>
        <td><?php  echo $row[4] ?></td>
        <td><?php  echo $row[5] ?></td>
        <td><?php  echo $row[6] ?></td>
        
        
        
        
        
        </tr>
        <?php
            
        }
        ?>
    </tbody>
    
    </table>


    </body>
</html>