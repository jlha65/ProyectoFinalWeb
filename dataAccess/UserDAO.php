<?php
    class User
    {

        private $db;
        function __construct($DB_CON)
        {
            $this->db = $DB_CON;
        }

        public function insertUser($name, $email, $username, $password, $city, $country, $telephone)
        {
          //$db = getDB();
            try{
                $statement = $this->db->prepare('INSERT INTO User(name,email,username,password, city,country,telephone) VALUES(:name,:email,:username,:password,:city,:country,:telephone)');
                $statement->bindParam(':name', $name);
                $statement->bindParam(':email', $email);
                $statement->bindParam(':username', $username);
                $statement->bindParam(':password', $password);
                $statement->bindParam(':city', $city);
                $statement->bindParam(':country', $country);
                $statement->bindParam(':telephone', $telephone);
                $statement->execute();
                return True;
            } catch(PDOException $ex) {
                return False;
            }
        }

        public function getUser($username, $password)
        {
          //$db = getDB();
            try
            {
                $statement = $this->db->prepare('SELECT * FROM User WHERE username = :username AND password = :password');
                $statement->bindParam(':username', $username);
                $statement->bindParam(':password', $password);
                $statement->execute();
                 //en caso de que haya mas
                if($statement->rowCount() > 0 ){
                    $result = $statement->fetch(PDO::FETCH_ASSOC);
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
