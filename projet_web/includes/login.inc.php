<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if(isset($_POST["submit"])){

        // Grabbing the data
        $uid = $_POST["uid"];
        $pwd= $_POST["pwd"];

        // istantiates signupContr clas
        include '../classes/Dbh.class.php';
        include '../classes/Login.class.php';
        include '../classes/LoginContr.class.php';

        $login = new LoginContr($uid, $pwd);
        //Running error handler and user signup
        $login->loginUser();

        // going to back to front page
        if($_SESSION["Role"]=="user"){
            header("location: ../pages/users/home.php?error=none");
        }elseif($_SESSION["Role"]=="agent"){
            header("location: ../pages/agents-admin/homea.php?error=none");
        }elseif($_SESSION["Role"]=="admin"){
            header("location: ../pages/agents-admin/homead.php?error=none");
        }
    }

?>