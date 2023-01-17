<?php 
    class ConfigDataBase {
        private string $host="localhost"; 
        private string $user="root";
        private string $pass="";
        private string $dbName="marvel";
        private mysqli $connection;

        function getConnection(){
            $this->connection=new mysqli($this->host, $this->user, $this->pass, $this->dbName);
            return $this->connection;
        }
    }
?> 