<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Handle Register </title>
</head>
<body>

        <?php
                $servername = "localhost";  // server name 
                $username = "root";   // The username of my database 
                $password = "";       // no password 
                $dbname = "f_n_e";    // The Name of Databse 

                        // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    // Insert The email and password to thr database 
                   $sql = "INSERT INTO admins (email, pass)
                     VALUES('$_POST[email]','$_POST[Password]')";
                    
                   if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                $conn->close();
                header('REFRESH:0;URL=login.php'); 
                ?>
</body>
</html>