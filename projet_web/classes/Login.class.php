<?php

    class Login extends Dbh {

        protected function getUser($uid, $pwd){
            $sql = 'SELECT pwd, Role FROM Allusers WHERE FullName = ? OR email = ?;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($uid, $pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $res[0]["pwd"]);

            if($checkPwd == false){
                $stmt = null;
                header("location: ../index.php?error=wrongpassword");
                exit();
            } elseif($checkPwd == true){
                $sql = "SELECT * FROM Allusers WHERE FullName = ? OR email = ? AND pwd = ?;";
                $stmt = $this->connect()->prepare($sql);

                if(!$stmt->execute(array($uid,$uid, $pwd))){
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
                if($stmt->rowCount() == 0){
                    $stmt = null;
                    header("location: ../index.php?error=usernotfound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                
                $_SESSION["Role"] = $user[0]["Role"];
                $userID;
                if($_SESSION["Role"] == "user"){
                    $userID = $user[0]["UserID"];
                }elseif($_SESSION["Role"] == "agent"){
                    $userID = $user[0]["AgentID"];
                }else{
                    $userID = $user[0]["AdminID"];
                }
                $_SESSION["userID"] = $userID;
                $_SESSION["useruid"] = $user[0]["FullName"];
                $stmt = null;
            }

        }


        
    }