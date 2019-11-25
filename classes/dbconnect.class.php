<?php
    class DataBase{
        private $host = 'localhost';
        private $dbname = 'students';
        private $username = 'root';
        private $passwd = '';

        public $pdo = NULL;

        public function dbConnect(){
            try{
                $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->passwd);
    
            } catch(PDOException $e){
                echo $e->getMessage();
            }
            return $this->pdo;
        }
    }