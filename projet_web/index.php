<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="./style/welcome_screen.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@100&family=Poppins:ital,wght@0,200;0,400;1,200&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="welcome.js"></script>
  </head>
  <body>
    <div class="hold">
      <br /><br />
      <div>
        <img id="l" src="./assets/logo_figma.png" />
        <br />
        <img src="./assets/setram.png" />
      </div>
      <div>
        <p id="one">welcome</p>
        <p id="two">have a better sharing experience</p>
        <br />
        <br />
      </div>

      <button onclick="sign()">create an account</button>
      <br />
      <button onclick="signin()">Log in</button>
    </div>
  </body>
</html>
