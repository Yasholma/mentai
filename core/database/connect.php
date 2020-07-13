<?php
    class Connection {

        private $dbhost = "localhost"; // 127.0.0.1
        private $user = "root";
        private $dbname = "mentai";
        private $password = "mysql";

        private $connection = null;


        public function connect() {
            if (!$this->connection) {
                try {
                    // PDO  connect_string, username, password
                    $this->connection = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->user, $this->password);
                    // Set Error Attributes
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $this->connection;
                } catch (PDOException $e) {
                    return $e;
                }
            }
            return $this->connection;
        }


    }