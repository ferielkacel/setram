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
    <title>interface agent</title>
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
                if(isset($_SESSION["useruid"])&&($_SESSION["Role"]=="agent")){
            ?>
    <header>
      <br />
      <img src="../../assets/logo_figma.png" alt="Logo" id="logo" />
      <br /><br />
      <nav class="navbar" id="navbar">
        <a href="homea.php">Home</a>
        <a href="profilea.php">Profile</a>
        <a href="subscriptiona.php">Subscription request</a>
        <a href="subscriptionsa.php">All the subscription requests</a>
        <a href="Scan.php">Scan The Codes</a>
        <a href="../../includes/logout.inc.php">Disconnect</a>
      </nav>
    </header>
    <div class="hold">
      <br /><br />
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
            name="Email"
            placeholder="Enter your Email"
            required
          />

          <label for="date of birth"></label>
          <input
            type="date"
            id="city"
            name="city"
            placeholder="Enter your date of birth"
            required
          />
          <label for="category"></label>
          <select id="category" name="category" required>
            <option value="tram">Tramway</option>
            <option value="convention">Convention</option>
            <option value="metro_tram">Tramway and Tram</option>
          </select>
          <br />
          <label for="imageUpload"></label>
          <input
            type="file"
            id="imageUpload"
            name="image"
            accept="image/*"
            onchange="previewImage(event)"
          />
          <div id="imagePreview"></div>
          <br />
          <button onclick="otp()">Add</button>
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
