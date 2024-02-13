<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include '../classes/Dbh.class.php';
    include '../classes/NumberOfSub.class.php';
    include '../classes/NumberOfSubContr.class.php';
    $number = new NumberOfSubContr() ;
    $number->rowNum();
    
?>