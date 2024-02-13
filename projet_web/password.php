<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Debug: Output session data to see what's stored
var_dump($_SESSION['user_data']);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Merge the existing session data with the new form data
    $_SESSION['user_data'] = array_merge($_SESSION['user_data'], $_POST);
    $user_data = $_SESSION['user_data'];

    // Additional processing for the password page
    // ...

    // Debug: Output processed data
    var_dump($user_data);
    
    // Redirect to the index.php page if the form is not submitted
    header('Location: ./includes/signup.inc.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@100&family=Poppins:ital,wght@0,200;0,400;1,200&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style/password.css" />
    <script src="pw.js"></script>
  </head>
  <body>
    <div class="hold">
      <a id="one" onclick="sign()"> < Back</a>

      <h3 id="two">enter your password</h3>
      <div>
        <!--form-->
        <form action="password.php" method="post">
          <label for="password"></label>
          <input
            type="password"
            id="password"
            name="pwd"
            placeholder="Enter your password"
            required
          />

          <label for="password"></label>
          <input
            type="password"
            id="password2"
            name="pwdrepeat"
            placeholder="Confirme your password"
            required
          />
          <br /><br />
          <button type="submit" name="submit">Sign up</button>
        </form>
      </div>
    </div>
  </body>
</html>
