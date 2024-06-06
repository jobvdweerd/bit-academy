<?php

namespace datamapper {
    use pdo;
    use bibliotheek\Database;

    require_once "bibliotheek/Database.php";

    use datamapper\User;

    require_once "datamapper/User.php";

    class UserMapper
    {
        const MODEL_CLASS = "User";
        protected $user = null;
        protected $database;
        protected $pdo;

        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        public function updateDatabase($objectUser)
        {
            $query =
                "UPDATE MijnDatabase.user SET voornaam = ?, achternaam = ?, leeftijd = ?, isStudent = ? WHERE id = ?";
            $command = $this->pdo->prepare($query);
            $voornaam = $objectUser->getVoornaam();
            $achternaam = $objectUser->getAchternaam();
            $leeftijd = $objectUser->getLeeftijd();
            $isStudent = (bool)$objectUser->getIsStudent();
            $id = $objectUser->getId();

            $command->bindParam(1, $voornaam);
            $command->bindParam(2, $achternaam);
            $command->bindParam(3, $leeftijd);
            $command->bindParam(4, $isStudent);
            $command->bindParam(5, $id);
            try {
                $command->execute();
                echo "\nUser in database is geupdate";
            } catch (PDOException $e) {
                echo "\nKon geen user updaten" . $e->getMessage();
            }
        }
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM MijnDatabase.user WHERE id = ? ";
        $command = $this->pdo->prepare($query);
        $command->bindParam(1, $id);
        try {
            $command->execute();
        } catch (PDOException $e) {
            echo "\n Kon user met id $id niet vinden" . $e->getMessage();
        }
        try {
            $kolommen = array(0, 'voornaam', 'achternaam', 0, 0);
            $command->setFetchMode(PDO::FETCH_CLASS |
            PDO::FETCH_PROPS_LATE, User::class, $kolommen);
            $user = $command->fetch();
        } catch (PDOException $e) {
            echo "\nKon geen user fetchen" . $e->getMessage();
        }
    }
}