<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if(isset($_POST["sendLost"])){
        $id = $_SESSION["userID"];
        $uid = $_POST["fullname"];
        $phone = $_POST["number"];
        $email = $_POST["email"];

        include '../classes/Dbh.class.php';
        include '../classes/Declar.class.php';
        include '../classes/DeclarContr.class.php';

        $submit = new DeclarContr($id);
        $submit->submitDclaration($id);
        header("location: ../pages/users/home.php?error=none");
    }

?>