<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if(isset($_POST["tramway"])){
        $id = $_SESSION["userID"];
        $uid = $_SESSION["useruid"];
        $role = $_SESSION["Role"];
        $subscriptionType= "tramway";
        echo $id."<br>".$uid ."<br>". $role."<br>" . $subscriptionType;
        include '../classes/Dbh.class.php';
        include '../classes/Subsc.class.php';
        include '../classes/SubscContr.class.php';

        $subscribe = new SubscContr($id,$uid, $role, $subscriptionType);
        $subscribe->submitSubscription();

        header("location: ../pages/users/page1.php?error=none");
    }elseif(isset($_POST["tramwayMetro"])){
        $id = $_SESSION["userID"];
        $uid = $_SESSION["useruid"];
        $role = $_SESSION["Role"];
        $subscriptionType= "tramwayMetro";
        echo $id."<br>".$uid ."<br>". $role."<br>" . $subscriptionType;
        include '../classes/Dbh.class.php';
        include '../classes/Subsc.class.php';
        include '../classes/SubscContr.class.php';

        $subscribe = new SubscContr($id,$uid, $role, $subscriptionType);
        $subscribe->submitSubscription();
        header("location: ../pages/users/page1.php?error=none");

    }else{
        $id = $_SESSION["userID"];
        $uid = $_SESSION["useruid"];
        $role = $_SESSION["Role"];
        $subscriptionType= "convention";
        echo $id."<br>".$uid ."<br>". $role."<br>" . $subscriptionType;
        include '../classes/Dbh.class.php';
        include '../classes/Subsc.class.php';
        include '../classes/SubscContr.class.php';

        $subscribe = new SubscContr($id,$uid, $role, $subscriptionType);
        $subscribe->submitSubscription();
        header("location: ../pages/users/page2.php?error=none");

    }
?>