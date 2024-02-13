<?php
    class Profil extends Dbh {
        protected function updateProfileUsername($uid,$id){
            $sql = 'UPDATE User SET FullName = ? WHERE UserID = ? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($uid, $id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
        }
        protected function updateProfileNumber($phone,$id){
            $sql = 'UPDATE User SET PhoneNumber = ? WHERE UserID = ? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($phone, $id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
        }
        protected function updateProfileEmail($email,$id){
            $sql = 'UPDATE User SET email = ? WHERE UserID = ? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($email, $id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
        }
        protected function updateProfileDob($dob,$id){
            $sql = 'UPDATE User SET date_of_birth = ? WHERE UserID = ? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($dob, $id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
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

?>