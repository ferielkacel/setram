<?php
    class Subsc extends Dbh {
        protected function submitSubsc($id,$subscriptionType){
            $sql = 'INSERT INTO UserSubscription (UserID,SubscriptionType) VALUES (?,?);';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($id, $subscriptionType))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
        protected function getSubsciptionID($id){
            $sql = 'SELECT UserSubscriptionID FROM UserSubscription WHERE UserID =? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
            return $res[0]["UserSubscriptionID"];
        }
        protected function submitUserSub($userSubscriptionID,$id){
            $sql = 'UPDATE User SET UserSubscriptionID = ? WHERE UserID = ? ;';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute(array($userSubscriptionID,$id))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }

?>