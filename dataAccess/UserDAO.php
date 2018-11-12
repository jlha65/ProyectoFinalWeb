<?php
    class UserDAO
    {

        private $db;
        function __construct($DB_CON)
        {
            $this->db = $DB_CON;
        }

        public function insertUser($user)
        {
          //$db = getDB();
            try{
                $statement = $this->db->prepare('INSERT INTO User(name,email,username,password, city,country,telephone) VALUES(:name,:email,:username,:password,:city,:country,:telephone)');
                $statement->bindParam(':name', $user->getName());
                $statement->bindParam(':email', $user->getEmail());
                $statement->bindParam(':username', $user->getUsername());
                $statement->bindParam(':password', $user->getPassword());
                $statement->bindParam(':city', $user->getCity());
                $statement->bindParam(':country', $user->getCountry());
                $statement->bindParam(':telephone', $user->getTelephone());
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
