<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            // insert The data 
            $sql = "INSERT INTO posts (title, descr)
            VALUES('$_POST[title]','$_POST[descr]')";
      if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully"; 
      }
       else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
      header('REFRESH:0;URL=../index.php'); 
      die(); 
        
            ?>

</body>
</html>