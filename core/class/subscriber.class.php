<?php 
    class Subscriber {
        private $conn = null;
        public $id, $email, $created_at;

        // Start connection to the database
        public function __construct() {
            $db = new Connection();
            $this->conn = $db->connect();
        }

        // Check if email exist
        public function isEmailExist() {
            $query = $this->conn->prepare("SELECT * FROM subscribers WHERE email = :email");
            $query->execute(["email" => $this->email]);
            $res = $query->fetch(PDO::FETCH_OBJ);
            return $res ? true : false;
        }

        // Save Email to the database
        public function save() {
            $query = $this->conn->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $res = $query->execute(["email" => $this->email]);
            return $res ? $this->email : false;
        }

        // Get All Subscribers
        public function getAllSubscribers() {
            $query = $this->conn->prepare("SELECT * FROM subscribers");
            $query->execute();
            $res = $query->fetchAll(PDO::FETCH_OBJ);

            return $res ? $res : false;
        }

    }