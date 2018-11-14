<?php
    class Pet
    {

        private $name;
        private $type;
        private $yearofbirth;
        private $color;
        private $description;
        private $breed;
        private $image;
        private $username;

        
        function __construct($name, $type, $yearofbirth, $color, $description, $breed, $image, $username)
        {
            $this->name = $name;
            $this->type = $type;
            $this->yearofbirth = $yearofbirth;
            $this->color = $color;
            $this->description = $description;
            $this->breed = $breed;
            $this->image = $image;
            $this->username = $username;
        }

        public function setName($name){
            $this->name = $name;
        }
    
        public function getName(){
            return $this->name;
        }

        public function setType($type){
            $this->type = $type;
        }
    
        public function getType(){
            return $this->type;
        }

        public function setYearofbirth($yearofbirth){
            $this->yearofbirth = $yearofbirth;
        }
    
        public function getYearofbirth(){
            return $this->yearofbirth;
        }

        public function setColor($color){
            $this->color = $color;
        }
    
        public function getColor(){
            return $this->color;
        }

        public function setDescription($description){
            $this->description = $description;
        }
    
        public function getDescription(){
            return $this->description;
        }

        public function setBreed($breed){
            $this->breed = $breed;
        }
    
        public function getBreed(){
            return $this->breed;
        }

        public function setImage($image){
            $this->image = $image;
        }
    
        public function getImage(){
            return $this->image;
        }

        public function setUsername($username){
            $this->username = $username;
        }
    
        public function getUsername(){
            return $this->username;
        }
    }
?>
