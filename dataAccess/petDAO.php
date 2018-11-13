<?php
    class petDAO
    {

        private $db;
        function __construct($DB_CON)
        {
            $this->db = $DB_CON;
        }

        public function insertPet($pet, $imageFile)
        {
          //$db = getDB();
            try{
                
                $statement = $this->db->prepare('INSERT INTO Pet(name,type,color,description, yearofbirth, breed, image) VALUES(:name,:type,:color,:description,:yearofbirth,:breed,:image)');
                $statement->bindParam(':name', $pet->getName());
                $statement->bindParam(':type', $pet->getType());
                $statement->bindParam(':color', $pet->getColor());
                $statement->bindParam(':description', $pet->getDescription());
                $statement->bindParam(':yearofbirth', $pet->getYearofbirth());
                $statement->bindParam(':breed', $pet->getBreed());
                $statement->bindParam(':image', $pet->getImage());

                
                //$statement->bindParam(':image', $image);
                $img=$pet->getImage();
                if (move_uploaded_file($imageFile,"../pictures/$img")){
                    $statement->execute();
                    return True;
                } else {
                    return False;
                }
                
            } catch(PDOException $ex) {
                echo $pet->getImage();
                echo '----';
                echo $ex;
                
                return False;
            }
        }

        public function getPets()
        {
          //$db = getDB();
            try
            {
                $statement = $this->db->prepare('SELECT * FROM Pet');
                $statement->execute();
                 //en caso de que haya mas
                if($statement->rowCount() > 0 ){
                    $result = $statement->fetchAll();
                    return $result;
                }else{ //en caso de que no haya ninguno
                    return null;
                }
            }catch(PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    }
?>
