<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  404  </title>
    <style>
    *
    {
        padding: 0; 
        margin: 0; 
        box-sizing: border-box;
    }
    div 
    {
        width: 100% ; 
        height: 100vh; 
    }
    div img 
    {
        width: 100% ; 
        height: 100% ;
    }

    h3 
    {
        position:fixed ; 
        bottom: 40px ; 
        left: 25%; 
        font-size: 45px ; 
        z-index: 99; 
        color: white ; 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    </style>
</head>
<body>


    <div> 
        <img src="images/404.png" alt="eroor 404 ">
    </div>

    <h3> Please Enter Correct Email and Password </h3> 

    <?php    
      header('REFRESH:3;URL=admin/login.php');
    ?>
    
</body>
</html>