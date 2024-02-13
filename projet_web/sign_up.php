<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store form data in session
    $_SESSION['user_data'] = $_POST;

    // Redirect to the password page
    header('Location: password.php');
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
    <link rel="stylesheet" href="./style/sign_up.css" />
  </head>
  <body>
    <div class="hold">
      <a id="one" onclick="welcom()"> < Back</a>

      <h3 id="two">Signup with your email and phone number</h3>
      <div>
        <!--form-->
        <form action="sign_up.php" method="post">
          <input
            type="text"
            id="name"
            name="uid"
            placeholder="Enter your name"
            required
          />

          <label for="email"></label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />

          <label for="phone"></label>
          <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="Enter your phone number"
            required
          />

          <label for="position"></label>
          <select id="position" name="position" required>
            <option value="agent">Agent</option>
            <option value="user">User</option>
          </select>

          <label for="date of birth"></label>
          <input
            type="date"
            id="city"
            name="dobirth"
            placeholder="Enter your date of birth"
            required
          />
          <label for="termsCheckbox" id="bleu">
            <input
              type="checkbox"
              id="termsCheckbox"
              name="termsCheckbox"
              required
            />
            By signing up, you agree to the Terms of service and Privacy policy.
          </label>

          <br /><br />
          <button type="submit">Next</button>
        </form>
      </div>
    </div>
     <script src="sign_up.js"></script> 
  </body>
</html>
