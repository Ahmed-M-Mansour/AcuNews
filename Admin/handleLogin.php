<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Login </title>
</head>
<body>

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "f_n_e";

                // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            if(isset($_POST['email']))
             {
    
              $uname=$_POST['email'];
              $password=$_POST['password'];
              $sql="select * from admins where email='".$uname."'AND pass='".$password."' limit 1";
              $result=$conn->query($sql);
              if($result->num_rows ==1){
                  echo " You Have Successfully Logged in";
                  header('REFRESH:0;URL=dashboard.php');
              }
              else{
                header('REFRESH:0;URL=../erorr.php');
              }      
             }
            
            
           
           
            ?>
</body>
</html>