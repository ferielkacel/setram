<?php
    class Accounts extends Dbh {
        protected function searchUser($uid){
            $sql = 'SELECT fullName,email,date_of_birth FROM User WHERE fullName = ?;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($uid))){
                $stmt = null;
                header("location: ../pages/agents-admin/accounts.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../pages/agents-admin/accounts.php?error=usernotfound");
                exit();
            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["searching_reslts"] = true;
            $_SESSION['results_fullName'] = $result[0]["fullName"];
            $_SESSION['results_email'] = $result[0]["email"];
            $_SESSION['results_dob'] = $result[0]["date_of_birth"];
            
            $stmt = null;
        }
    }
?>