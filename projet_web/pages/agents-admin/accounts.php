<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
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
    <link rel="stylesheet" href="../../style/accounts.css" />
    <style>
      .search-container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 20px;
      }

      .search-input {
        padding: 8px;
        height: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 10px;
      }

      .search-button {
        padding: 8px 15px;
        height: 40px;
        background-color: #032d5a;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
        <a href="accounts.php">accounts</a>
        <a href="subscriptions.php">All the Subscription requests</a>

        <a href="stat.php">statistics</a>
      </nav>
    </header>
    <div class="hold">
      <!--form-->
      <form action="../../includes/accounts.inc.php" method="post">
        <div>
          <img src="../../assets/20230507215419!Logo_SETRAM_Algérie.png" />
          <div class="search-container">
            <input
            type="text"
            class="search-input"
            id="searchInput"
            name="fullname"
            placeholder="Search..."
            />
            <button class="search-button" name="search">Search</button>
          </div>
          <br /><br />
          <?php 

if ($_SESSION["searching_reslts"] = true) {
    
?>
    <div class="coly">
        <p style="display: inline; margin-right: 20px">
            username: <?php echo $_SESSION['results_fullName']; ?>
        </p>
    </div>
    <div class="coly">
        <p style="display: inline; margin-right: 20px">
            email: <?php echo $_SESSION['results_email']; ?>
        </p>
    </div>
    <div class="coly">
        <p style="display: inline; margin-right: 20px">
            date of birth: <?php echo $_SESSION['results_dob']; ?>
        </p>
    </div>
<?php
    
}
?>
        </div>
      </form>
    </div>

    <script>
      function out() {
        window.location.href = "sign_in.php";
      }
      function add() {
        window.location.href = "add.php";
      }
      function prev() {
        window.location.href = "accept1.php";
      }
      function search() {
        var searchTerm = document.getElementById("searchInput").value;
        alert("Search term: " + searchTerm);
      }
      function edit() {
        window.location.href = "editer.php";
      }
      function del() {
        var confirmDelete = confirm("Do you want to delete this user?");

        if (confirmDelete) {
          alert("User deleted successfully!");
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
