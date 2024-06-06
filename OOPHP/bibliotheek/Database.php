<?php
namespace bibliotheek {
    use PDO;
    class Database
    {
        private static $instance;
        private $pdo;
        private $host = "127.0.0.1";
        private $username = "root";
        private $password = "password";
        private $database = "";
        private function __construct()
        {
            try {
                $this->pdo = new \PDO(
                    "mysql:host=$this->>host;dbname=$this->database",
                    $this->username, $this->password);
                $this->pdo->setAttribute
                (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "\nVerbonden met MySQL";
            } catch (\PDOException $e) {
                echo $e->getMessage();
                echo "\nNiet verbonden";
            }
        }
        public static function getInstance()
        {
            if (!self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        public function getPDO()
        {
            return $this->pdo;
        }
        public function maakDatabase($pdo)
        {
            $query = "create database if not exists MijnDatabase";
            $command = $pdo->prepare($query);
            try {
                $command->execute();
                echo "\nMijnDatabase aangemaakt";
            } catch (PDOException $ex) {
                die("DB ERROR: " . $ex->getMessage());
            }
        }
        public function maakTabel($pdo)
        {
            $query = "
            CREATE TABLE IF NOT EXISTS MijnDatabase.user (
            id Int AUTO_INCREMENT,
            voornaam VARCHAR(25),
            achternaam VARCHAR(25),
            leeftijd int,
            is_student BOOLEAN,
            PRIMARY KEY ( ID ))";
            $command = $pdo->prepare($query);
            try {
                $command->execute();
                echo "\nTabel aangemaakt";
            } catch (PDOException $ex) {
                die("DB ERROR: " . $ex->getMessage());
            }
        }
        public function insertUser($pdo)
        {
            $query = "INSERT INTO MijnDatabase.user(
                voornaam,achternaam,leeftijd,is_student) VALUES (?.?.?.?)";
            $command = $pdo->prepare($query);
            $data = array("Jan", "Jansen", 20, true);

            try {
                $command->execute($data);
                $data = array("Pieter", "Pieterson", 18, true);
                $command->execute($data);
                echo "\nUser toegevoegd.";
            } catch (PDOException $e) {
                echo "|nKon geen user toevoegen." . $e->getMessage();
            }
        }
        public function selecteerUsers($pdo)
        {
           $query = "SELECT * FROM MijnDatabase.user";
           try {
               $command = $pdo->prepare($query);
               $command->execute(array());
               $users = $command->fetchall(PDO::FETCH_ASSOC);
               foreach ($users as $user) {
                   echo sprintf("\n%-5d %-15s %-15s %-5d 5-3s",
                   $user['id'], $user['voornaam'], $user['achternaam'], $user['leeftijd'], $user['is_student'] ? "true" : "false");
               }
           } catch (PDOException $e) {
               echo "\nKon geen users vinden." . $e->getMessage();
           }
        }
    }
}