<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ACU News </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/319becac0e.js" crossorigin="anonymous"></script>
    
</head>

<body>

    <!-- include The header and Navbar of the page -->
    <?php  
         include 'header.php';
    ?>
    
    <!-- The Loaction of posts that comming from the Database  -->
    <div class="posts " id="posts">
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "f_n_e";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }


                   // select from table 

                   $sql = "SELECT id, Title, descr ,reg_date FROM posts";
                   $result = $conn->query($sql);
                   
                   if ($result->num_rows > 0) {
                       // output data of each row
                       while($row = $result->fetch_assoc()) {
                           ?>
                      <div class="post post1">
                        <div class="container">
                            <div class="info">
                                <h2 class="info_title"> <?php  echo  "  " . $row["Title"]. " " ; ?> </h2>
                                <h3 class="info_date"> <?php  echo  "  " . $row["reg_date"]. " " ; ?> </h3>
                                <P class="info_desc"> <?php  echo  "  " . $row["descr"]. " " ; ?>  </P>
                            </div>
                        </div>
            
                    </div>
                    <?php
                       
                       }
                   } else {
                       echo "0 results";
                   }
       
       
                   mysqli_close($conn);
            ?>

    <!--The Meta data that i use to create the forint end side  -->
   <!--    
        <div class="post post1">
            <div class="container">
                <div class="img">
                    <img src="images/b1.jpg" alt="Post Image ">
                </div>
                <div class="info">
                    <h2 class="info_title"> Post Title </h2>
                    <h3 class="info_date"> Date: Nov 22, 2014 </h3>
                    <P class="info_desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Sed dignissimos aliquam ipsam. Voluptatum libero eaque repellat
                        mollitia, aliquid distinctio similique tempor
                        a dolorum omnis, blanditiis odio quos ipsa ratione voluptas harum?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </P>
                </div>
            </div>

        </div>


        <div class="post post2">
            <div class="container">
                <div class="img">
                    <img src="images/b3.jpg" alt="Post Image ">
                </div>
                <div class="info">
                    <h2 class="info_title"> Post Title </h2>
                    <h3 class="info_date"> Date: Nov 22, 2014 </h3>
                    <P class="info_desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Sed dignissimos aliquam ipsam. Voluptatum libero eaque repellat
                        mollitia, aliquid distinctio similique tempor
                        a dolorum omnis, blanditiis odio quos ipsa ratione voluptas harum?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </P>
                </div>
            </div>

        </div>

        <div class="post post3">
            <div class="container">
                <div class="img">
                    <img src="images/b2.jpg" alt="Post Image ">
                </div>
                <div class="info">
                    <h2 class="info_title"> Post Title </h2>
                    <h3 class="info_date"> Date: Nov 22, 2014 </h3>
                    <P class="info_desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Sed dignissimos aliquam ipsam. Voluptatum libero eaque repellat
                        mollitia, aliquid distinctio similique tempor
                        a dolorum omnis, blanditiis odio quos ipsa ratione voluptas harum?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </P>
                </div>
            </div>

        </div>
        --> 

        

    </div>
    <!-- This is button to Navigate the page to the top  -->
    <button class="top"> Top </button>


  <!-- the footer -->  
    <?php  
         include 'footer.php';
    ?>

 
    <script src="js/main.js"></script>

</body>

</html>