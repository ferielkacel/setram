<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
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
    <link rel="stylesheet" href="./style/sign_in.css" />
  </head>
  <body>
    <div class="hold">
      <a id="one" onclick="welcom()"> < Back</a>

      <h3 id="two">Signin with your email</h3>
      <div>
        <!--form-->
        <form action="includes/login.inc.php" method="post">
          <label for="email"></label>
          <input
            type="text"
            id="email"
            name="uid"
            placeholder="Enter your username"
            required
          />

          <label for="password"></label>
          <input
            type="password"
            id="password"
            name="pwd"
            placeholder="Enter your password"
            required
          />
          <br /><br />
          <a id="red" onclick="emverif()">forgot password</a>

          <button type="submit" name="submit">sign in</button>
          <br /><br /><br /><br /><br />
          <!--tdihpage dacceuil-->
        </form>
        <p id="cent">
          dont have an account ?
          <a id="bloo">SIGN UP</a>
        </p>
        <br />
      </div>
    </div>
  <script src="sign_in.js"></script>
  </body>
</html>
