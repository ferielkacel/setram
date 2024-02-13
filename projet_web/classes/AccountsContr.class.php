<?php
    class AccountsContr extends Accounts{
        private $uid;

        public function __construct($uid){
            $this->uid = $uid;
        }
        public function searchingUser(){
            if ($this->emptyInput()== false){
                header("location: ../pages/agents-admin/accounts.php?error=emptyinput");
                exit();
            }
            
            $this->searchUser($this->uid);
        }
        private function emptyInput(){
            $result;
            if (empty($this->uid)){
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }
    }

?>