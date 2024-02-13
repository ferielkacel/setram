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
    <title>interface user</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@100&family=Poppins:ital,wght@0,200;0,400;1,200&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../style/profile.css" />
    <style>
      textarea {
        width: 100%;
        height: 250px;
      }
    </style>
  </head>
  <body>
  <?php
                if(isset($_SESSION["useruid"])&&($_SESSION["Role"]=="user")){
            ?>
    <header>
      <br />
      <img src="../../assets/logo_figma.png" alt="Logo" id="logo" />
      <br /><br />
      <nav class="navbar" id="navbar">
        <a href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="subscription.php">Subscription request</a>
        <a href="loss.php">Declaration of Loss</a>
        <a href="contact.php">Contact</a>
        <a href="../../includes/logout.inc.php">Disconnect</a>
      </nav>
    </header>
    <div class="hold">
      <br />

      <h1>Contact Us</h1>

      <div class="container">
        <form id="contactForm" action="#" method="post">
          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
          <br /><br />
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
    
    <?php
                }else{
                  echo "u are not authorised";
                }
    ?>
  </body>
</html>
