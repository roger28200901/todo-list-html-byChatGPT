<?php
// Connect to the MySQL database
$db = mysqli_connect("localhost", "admin", "1234", "mydatabase");
// Check if the login form was submitted
if (isset($_POST['Login'])) {
  // Retrieve the user input
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // Query the database to check if the user exists
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $results = mysqli_query($db, $query);

  // Check if a user with the specified username and password was found
  if (mysqli_num_rows($results) == 1) {
    // A user was found, so login the user
    // (You can redirect the user to a different page or set a session variable here)
    echo "Login successful!";

    // Redirect the user to the homepage
    header("location: index.php");
  } else {
    // No user was found, so display an error message
    echo "Invalid username or password";
  }
}

?>