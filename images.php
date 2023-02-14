<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .image{
            border: 5px solid;
            display: flex;
            justify-content: center;
        }
        body{
            background-color: rgb(179, 230, 179);
        }
    </style>
</head>

<body>

    <?php require 'nav.php' ?>
    <?php

    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // Redirect to the login page
        // header('location: login.php');
    }

    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'prescription');

    // Get the image data
    $username = $_SESSION['username'];
    $sql = "SELECT image FROM details WHERE username = '$username'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $image = $row['image'];

    ?>







    <!-- Display the image -->
    <div class="image">
        <img src="images/<?php echo $image; ?>">
    </div>
</body>

</html>