<?php
    class DeclarContr extends Declar {
        private $id;

        public function __construct($id){
            $this->id = $id;
        }

        public function submitDclaration($id){
            $this->submitDeclaration($id);
        }
    }

?>