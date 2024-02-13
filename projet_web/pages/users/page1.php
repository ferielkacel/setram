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
      .custom-input {
        display: none;
      }

      .custom-button {
        outline: none;
        cursor: pointer;
        display: flex;
        width: 360px;

        padding: 15.5px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 8px;
        background: #032d5a;
        color: var(--Shades-white, #fff);
        text-align: center;
        font-family: "Poppins";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 23px;
      }

      .custom-button:hover {
        background-color: #5ca2c2;
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
      <br /><br />

      <label for="imageInput" class="custom-button">Choose Your Image</label>
      <input
        type="file"
        id="imageInput"
        class="custom-input"
        accept="image/*"
        onchange="addImage()"
      />
      <button onclick="previewImage()">Preview Image</button>
      <div id="imagePreview"></div>
      <br /><br />

      <label for="cardInput" class="custom-button">Choose Your Card</label>
      <input
        type="file"
        id="cardInput"
        class="custom-input"
        accept="image/*"
        onchange="addCard()"
      />

      <button onclick="previewCard()">Preview Card</button>

      <div id="cardPreview"></div>
      <br /><br />
      <a href="javascript:void(0);" onclick="nextPage()">Next</a>
      <script>
        var savedImageData = null;
        var savedCardData = null;

        function addImage() {
          var input = document.getElementById("imageInput");

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              savedImageData = e.target.result;

              hideImagePreview();
            };

            reader.readAsDataURL(input.files[0]);
          }
        }

        function addCard() {
          var input = document.getElementById("cardInput");

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              savedCardData = e.target.result;

              hideCardPreview();
            };

            reader.readAsDataURL(input.files[0]);
          }
        }

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

        function nextPage() {
          if (!savedImageData || !savedCardData) {
            alert("Please choose both an image and a card before proceeding.");
          } else {
            alert("once u get accepted u will receive an email");
            window.location.href = "qr.php";
          }
        }

        function out() {
          window.location.href = "sign_in.php";
        }
      </script>
    </div>
    <?php
                }else{
                  echo "u are not authorised";
                }
    ?>
  </body>
</html>
