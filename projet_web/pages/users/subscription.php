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
    <title>Subscription Page</title>
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
    <link rel="stylesheet" href="../../style/subscription.css" />
    <style>
      /* Optional: Add a style for the selected button */
      .selected {
        background-color: lightgray;
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
      <div>
        <!--form-->
        <img src="../../assets/20230507215419!Logo_SETRAM_Algérie.png" />
        <div>
          <form id="subscriptionForm" action="/includes/subscription.inc.php" method="post">
            <button  id="btnTramway" type="submit" name="tramway">
              Tramway
              <p>600DA/Month</p>
              <img id="pic" src="../../assets/image__1_-removebg-preview.png" />
            </button>
            <br />
            <button
              id="btnTramwayMetro"
              type="submit" 
              name="tramwayMetro"
            >
              Tramway + Metro
              <p id="one">800DA/Month</p>
            </button>
            <br />
            <button id="btnConvention" type="submit" name="convention">
              Convention
              <p>Entreprise</p>
            </button>
            <br /><br />
            <a  type="submit">Next</a>
            <a  id="lofte" onclick="cancelPage()"
              >Cancel</a
            >
          </form>
        </div>
      </div>
    </div>

    <script>
      var selectedOption = "";

      function enableButtons() {
        document.getElementById("btnTramway").disabled = false;
        document.getElementById("btnTramwayMetro").disabled = false;
        document.getElementById("btnConvention").disabled = false;
      }

      function selectOption(option) {
        enableButtons();

        selectedOption = option;

        document.getElementById("btnTramway").disabled = true;
        document.getElementById("btnTramwayMetro").disabled = true;
        document.getElementById("btnConvention").disabled = true;

        document.getElementById("btn" + option).classList.add("selected");
      }

      function cancelPage() {
        enableButtons();
        selectedOption = "";

        document.getElementById("btnTramway").classList.remove("selected");
        document.getElementById("btnTramwayMetro").classList.remove("selected");
        document.getElementById("btnConvention").classList.remove("selected");
      }

      function nextPage() {
        if (selectedOption === "") {
          alert("Please select an option before proceeding.");
        } else if (
          selectedOption === "tramway" ||
          selectedOption === "tramway_metro"
        ) {
          window.location.href = "page1.php";
        } else if (selectedOption === "convention") {
          window.location.href = "page2.php";
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