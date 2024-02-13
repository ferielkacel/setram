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
        <a href="subscriptions.php">All the Subscription requests</a>

        <a href="Scan.php">Scan The Codes</a>
        <a href="../../includes/logout.inc.php">Disconnect</a>
      </nav>
    </header>
    <div class="hold">
      <div id="imagePreview"></div>

      <div>
        <form action="#" method="post">
          <br />
          <button onclick="previewImage()">Preview Image</button>
          <div id="imagePreview"></div>
          <br />
          <button onclick="previewCard()">preview card</button>
          <div id="imagePreview"></div>
          <br />
          <button onclick="previewCertificate()">preview certificate</button>
          <div id="imagePreview"></div>
          <br /><br /><br />
          <button onclick="otp()">Accept</button>
          <br />
          <button onclick="otp()">Refuse</button>
        </form>
      </div>
    </div>
    <script>
      function previewImage() {
        var preview = document.getElementById("imagePreview");

        if (savedImageData) {
          if (preview.style.display === "none") {
            preview.innerHTML =
              '<img src="' + savedImageData + '" alt="Preview" />';
            preview.style.display = "block";
          } else {
            hideImagePreview();
          }
        } else {
          alert("Please add an image before previewing.");
        }
      }
      function previewCertificate() {
        var preview = document.getElementById("certificatePreview");

        if (savedCertificateData) {
          if (preview.style.display === "none") {
            preview.innerHTML =
              '<img src="' + savedCertificateData + '" alt="Preview" />';
            preview.style.display = "block";
          } else {
            hideCertificatePreview();
          }
        } else {
          alert("Please add a certificate before previewing.");
        }
      }
      function previewCard() {
        var preview = document.getElementById("cardPreview");

        if (savedCardData) {
          if (preview.style.display === "none") {
            preview.innerHTML =
              '<img src="' + savedCardData + '" alt="Preview" />';
            preview.style.display = "block";
          } else {
            hideCardPreview();
          }
        } else {
          alert("Please add a card before previewing.");
        }
      }

      function hideImagePreview() {
        var preview = document.getElementById("imagePreview");
        preview.innerHTML = "";
        preview.style.display = "none";
      }

      function hideCardPreview() {
        var preview = document.getElementById("cardPreview");
        preview.innerHTML = "";
        preview.style.display = "none";
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
