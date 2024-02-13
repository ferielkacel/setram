<?php

    class Signup extends Dbh {

        protected function setUser($uid, $pwd, $email,$phone ,$role, $dob){
            $sql;
            if ($role=="user"){
                $sql = 'INSERT INTO User (FullName, pwd, email, PhoneNumber,date_of_birth) VALUES (?,?,?,?,?);';
            }elseif($role=="agent"){
                $sql = 'INSERT INTO Agent (FullName, pwd, email, PhoneNumber,date_of_birth) VALUES (?,?,?,?,?);';
            }
            $stmt = $this->connect()->prepare($sql);

            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            if(!$stmt->execute(array($uid, $hashedPwd, $email,$phone , $dob))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }


        protected function checkUser($uid, $email){
            $sql = 'SELECT FullName FROM User WHERE FullName= ? OR email= ?;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($uid, $email))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $resultcheck;
            if($stmt->rowCount() > 0){
                $resultcheck = false;
            } else {
                $resultcheck = true;
            }

            return $resultcheck;
        }
    }