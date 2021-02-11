<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page </title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <!--      The Registeration Page -->
    <div class="container">
        <h1> Sign Up </h1> 
        <form action="handleRegister.php" method="post"> 
            <div class="fornInput">
                <input type="email" name="email" placeholder="Enter Your Email " id="">
            </div>
            <div class="fornInput">
                <input type="password" name="Password" placeholder="Enter Your Password " id="">
            </div>
            <button> Register </button>
        </form>

    </div>


</body>
</html>