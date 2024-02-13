<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    $user_data = $_SESSION['user_data'];
    

    // Additional processing for the password page
    // ...

    // Debug: Output processed data
    var_dump($user_data);
    

        // Grabbing the data
        $uid = $user_data["uid"];
        $pwd = $user_data["pwd"];
        $pwdrepeat = $user_data["pwdrepeat"];
        $email = $user_data["email"];
        $phone = $user_data["phone"];
        $role = $user_data["position"];
        $dob = $user_data["dobirth"];
       /* echo $uid;*/
        // istantiates signupContr clas
        include '../classes/Dbh.class.php';
        include '../classes/Signup.class.php';
        include '../classes/SignupContr.class.php';

        $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email,$phone,$role,$dob);
        //Running error handler and user signup
        $signup->signupUser();

        // going to back to front page
        header("location: ../index.php?error=none");
        exit;
    

?>