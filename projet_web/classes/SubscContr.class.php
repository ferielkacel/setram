<?php
    class SubscContr extends Subsc {
        private $id;
        private $uid;
        private $role;
        private $subscriptionType;

        public function __construct($id, $uid, $role, $subscriptionType){
            $this->id = $id;
            $this->uid = $uid;
            $this->role = $role;
            $this->subscriptionType = $subscriptionType;
        }
        public function submitSubscription(){
            $this->submitSubsc($this->id,$this->subscriptionType);
            $this->submitUserSub($this->getSubsciptionID($this->id),$this->id);
        }
    }

?>