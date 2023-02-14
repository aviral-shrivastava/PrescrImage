

<?php require 'nav.php' ?>
<?php require 'index.html' ?>

<?php

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'prescription');

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Get the form data
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $image = $_FILES['image']['name'];

  // Upload the image to the server
  $target = "images/" . basename($image);
  move_uploaded_file($_FILES['image']['tmp_name'], $target);



  // Insert the data into the database
  $sql = "INSERT INTO details (username, password, image) VALUES ('$username', '$password', '$image')";
  mysqli_query($db, $sql);

  $errors = array();
  if (empty($username)) {
    $errors[] = "Username is required";
  }
  if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    $errors[] = "Username can only contain letters and numbers";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  }

  // Redirect to the login page
  header('location: login.php');
}

?>