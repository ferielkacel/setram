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
      <div id="imagePreview"></div>

      <div>
        <!--form-->

        <form action="../../includes/profile.inc.php" method="post">
          <label for="fullname"></label>
          <input
            type="fullname"
            id="fullname"
            name="uid"
            placeholder="Enter your fullname"
            required
          />

          <label for="mobilenumber"></label>
          <input
            type="number"
            id="number"
            name="number"
            placeholder="Enter your number"
            required
          />

          <label for="Email"></label>
          <input
            type="Email"
            id="Email"
            name="email"
            placeholder="Enter your Email"
            required
          />

          <label for="date of birth"></label>
          <input
            type="date"
            id="city"
            name="dobirth"
            placeholder="Enter your date of birth"
            required
          />

          <label for="imageUpload"></label>
          <!-- <input
            type="file"
            id="imageUpload"
            name="image"
            accept="image/*"
            onchange="previewImage(event)"
          /> -->
          <div id="imagePreview"></div>
          <br />
          <button type="submit" name="submit">Update</button>
        </form>
      </div>
    </div>
    <script>
      // Function to preview the uploaded image
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
    </script>
    <?php
                }else{
                  echo "u are not authorised";
                }
    ?>
  </body>
</html>
