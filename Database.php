<?php


class Database{
    private $host;
    private $user;
    private $pass;
    private $db;

    protected function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'task1';

        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $conn;
    }

}