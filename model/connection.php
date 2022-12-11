<?php

class connect
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dataname = 'gestion_tours';
    private $conn;


    function connected()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dataname);
        if ($this->conn->connect_error) {
            echo 'Database is not connected';
        } else {
            return $this->conn;
        }
    }

}



?>