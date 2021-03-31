<?php
    class User
    {
        protected $username;
        protected $password;

        function __construct($user, $pass){
            $this->username = $user;
            $this->password = $pass;
        }

        protected function login(){
            return "$this->username Anda Berhasil Login";
        }
    }
?>  