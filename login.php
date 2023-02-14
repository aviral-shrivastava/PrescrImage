

<?php require 'nav.php' ?>
<?php require 'login.html' ?>
<?php

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'prescription');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Verify the credentials
    $sql = "SELECT * FROM details WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Start a session
        session_start();

        // Store the username in the session
        $_SESSION['username'] = $username;

        // Redirect to the images page
        header('location: images.php');
    } else {
        echo "Invalid credentials";
    }
}

?>








