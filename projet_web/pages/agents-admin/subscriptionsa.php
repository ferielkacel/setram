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
    <link rel="stylesheet" href="../../style/subscriptions.css" />
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
        <a href="Scan.php">Scan The codes</a>
        <a href="../../includes/logout.inc.php">Disconnect</a>
      </nav>
    </header>
    <div class="hold">
      <!--form-->

      <div>
        <img src="../../assets/20230507215419!Logo_SETRAM_Algérie.png" />
        <h3>les demandes dabonnment</h3>
        <div class="coly">
          <p style="display: inline; margin-right: 500px">
            (01) Email: uwu@gmail.com
          </p>
          <a href="#" onclick="prev()" style="display: inline">See</a>
          <a href="#" onclick="confirmDelete()" style="display: inline"
            >Delete</a
          >
        </div>
      </div>
    </div>

    <script>
      function out() {
        window.location.href = "sign_in.php";
      }

      function prev() {
        window.location.href = "accept1add.php";
      }

      function confirmDelete() {
        var confirmDelete = confirm("Do you want to delete this request?");

        if (confirmDelete) {
          alert("Request deleted successfully!");
        } else {
          alert("Deletion canceled.");
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
