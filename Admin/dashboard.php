<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <!--iclude the header and NavBar of the page -->
    <?php
    include '../header.php';
    ?>

    <div class="containerD">
        <form action="handlePost.php" method="POST">

            <div class="in">
                <label for=""> Title </label>
                <input type="text" name="title" placeholder="The Title of Post ">
            </div>

            <div class="in">
                <label> Description </label>
                <textarea name="descr" cols="30" rows="10" placeholder="The Description of the post "></textarea>
            </div>

            <button type="submit"> Submit </button>
        </form>
    </div>

    <!--iclude the footer  of the page -->
    <?php
    include '../footer.php';
    ?>

    <script src="../js/main.js"></script>
</body>

</html>