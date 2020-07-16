<?php
    class Connection {

        private $dbhost = "us-cdbr-east-02.cleardb.com"; // 127.0.0.1
        private $user = "bb2b025774e246";
        private $password = "be56c15b";
        private $dbname = "heroku_4b36708a8d064fb";

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