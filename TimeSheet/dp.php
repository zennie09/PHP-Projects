<?php

    class DBConnect
    {
        private $host = 'localhost';
        private $db_name = 'timesheet';
        private $user = 'root';
        private $password = '';

        public function connect()
        {
            try {
                $conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->db_name, $this->user, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conn;
            } catch (PDOException $e) {
                echo 'Database Error:'.$e->getMessage();
            }
        }
    }
