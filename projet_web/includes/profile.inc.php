<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if(isset($_POST["submit"])){
        $id = $_SESSION["userID"];
        $uid = $_POST["uid"];
        $email = $_POST["email"];
        $phone = $_POST["number"];
        $dob = $_POST["dobirth"];

        include '../classes/Dbh.class.php';
        include '../classes/Profil.class.php';
        include '../classes/ProfilContr.class.php';     

        $updatprf = new ProfilCont($id,$uid,$phone,$email,$dob);
        $updatprf->UpdateAll();
        header("location: ../pages/users/home.php?error=none");
    }

?>