<?php
    class Declar extends Dbh {
        protected function submitDeclaration($id){
            $sql = 'INSERT INTO DeclarationLost (UserID) VALUES (?) ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
        
    }

?>