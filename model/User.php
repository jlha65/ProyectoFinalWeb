<?php
    class User
    {

        private $name;
        private $username;
        private $email;
        private $password;
        private $city;
        private $telephone;
        private $country;

        
        function __construct($name, $email, $username, $password, $city, $country, $telephone)
        {
            $this->name = $name;
            $this->username = $username;
            $this->password = $password;
            $this->telephone = $telephone;
            $this->city = $city;
            $this->email = $email;
            $this->country = $country;
        }

        public function setName($name){
            $this->name = $name;
        }
    
        public function getName(){
            return $this->name;
        }

        public function setUsername($username){
            $this->username = $username;
        }
    
        public function getUsername(){
            return $this->username;
        }

        public function setPassword($password){
            $this->password = $password;
        }
    
        public function getPassword(){
            return $this->password;
        }

        public function setTelephone($telephone){
            $this->telephone = $telephone;
        }
    
        public function getTelephone(){
            return $this->telephone;
        }

        public function setCity($city){
            $this->city = $city;
        }
    
        public function getCity(){
            return $this->city;
        }

        public function setCountry($country){
            $this->country = $country;
        }
    
        public function getCountry(){
            return $this->country;
        }

        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getEmail(){
            return $this->email;
        }
    }
?>
