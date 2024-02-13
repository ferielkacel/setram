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
      .hold {
        margin-top: -500px;
      }
    </style>
  </head>
  <body>
  <?php
                if(isset($_SESSION["useruid"])&&($_SESSION["Role"]=="admin")){
            ?>
    <header>
      <br />
      <img src="../../assets/logo_figma.png" alt="Logo" id="logo" />
      <br /><br />
      <nav class="navbar" id="navbar">
        <a href="homead.php">Home</a>
        <a href="accounts.php">Accounts</a>
        <a href="subs.php">All the Subscription requests</a>

        <a href="stat.php">Statistics</a>
      </nav>
    </header>
    <div class="hold">
      <div id="imagePreview"></div>

      <div>
        <form action="#" method="post">
          <label for="fullname"></label>
          <input
            type="fullname"
            id="fullname"
            name="fullname"
            placeholder="Enter your fullname"
            required
          />
          <label for="Email"></label>
          <input
            type="Email"
            id="Email"
            name="Email"
            placeholder="Enter your Email"
            required
          />

          <br />
          <button onclick="otp()">Update</button>
        </form>
      </div>
    </div>
    <script>
      function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById("imagePreview");

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            preview.innerHTML =
              '<img src="' + e.target.result + '" alt="Preview" />';
          };

          reader.readAsDataURL(input.files[0]);
        }
      }

      function out() {
        window.location.href = "sign_in.php";
      }
    </script>
    <?php
                }else{
                  echo "u are not authorised";
                }
    ?>
  </body>
</html>
