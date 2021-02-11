<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page </title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <!--      The Login Page -->
    <div class="container">
        <h1> Sign In </h1>
        <form action="handleLogin.php" method="POST">
            <div class="fornInput">
                <input type="email" name="email" placeholder="Enter Your Email " id="">
            </div>
            <div class="fornInput">
                <input type="password" name="password" placeholder="Enter Your Password " id="">
            </div>
            <button> Sign In </button>
            <a href="register.php">   
            <h4 style="text-align: center; margin-top: 30px ;  ">Register? </h4> 
            </a>
        </form>
    </div>
</body>

</html>