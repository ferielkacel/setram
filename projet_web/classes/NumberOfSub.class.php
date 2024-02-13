<?php
    class NumberOfSub extends Dbh {
        protected function CountNumber(){
            $sql='SELECT COUNT(UserSubscriptionID) AS countRow FROM UserSubscription ;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();

            $_SESSION['row_count'] = $result[0]["countRow"];
            
            $stmt = null;
            
        }
    }
?>