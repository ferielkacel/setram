<?php
    class ProfilCont extends Profil {
        private $id;
        private $uid;
        private $phone;
        private $email;
        private $dob;

        public function __construct($id, $uid, $phone, $email, $dob){
            $this->id = $id;
            $this->uid = $uid;
            $this->email = $email;
            $this->phone = $phone;
            $this->dob = $dob;
        }
        public function UpdateAll(){
            if ($this->emptyInput()== false){
                header("location: ../pages/users/profile.php?error=emptyinput");
                exit();
            }
            if ($this->invalidUid()== false){
                header("location: ../pages/users/profile.php?error=username");
                exit();
            }
            if ($this->invalidEmail()== false){
                header("location: ../pages/users/profile.php?error=email");
                exit();
            }
            if ($this->uidTakenCheck()== false){
                header("location: ../pages/users/profile.php?error=usernameemailtaken");
                exit();
            }

            $this->updateProfileUsername($this->uid,$this->id);
            $this->updateProfileNumber($this->phone,$this->id);
            $this->updateProfileEmail($this->email,$this->id);
            $this->updateProfileDob($this->dob,$this->id);
        }

        private function emptyInput(){
            $result;
            if (empty($this->uid) || empty($this->phone) || empty($this->dob) || empty($this->email)){
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }

        private function invalidUid(){
            $result;
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }

        private function invalidEmail(){
            $result;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }
        private function uidTakenCheck(){
            $result;
            if(!$this->checkUser($this->uid, $this->email)){
                $result = false;
            } else {
                $result = true;
            }

            return $result;
        }
    }
?>