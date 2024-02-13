<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    if(isset($_POST["search"])){
        
        
        $uid = $_POST["fullname"];

        include '../classes/Dbh.class.php';
        include '../classes/Accounts.class.php';
        include '../classes/AccountsContr.class.php';

        $searchContr = new AccountsContr($uid);
        $search = $searchContr->searchingUser();
        
        header("location: ../pages/agents-admin/accounts.php?error=none");
    }
?>