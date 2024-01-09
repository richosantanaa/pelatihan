<?php
class DatabaseConnection{
    private $host; private $username; private $password; private $database; private $connection;
    public function __construct($host, $username, $password, $database){
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect(){
        //$this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        //cek apakah koneksi berhasil
        if($this->connection->connect_error){
            throw new Exception("Koneksi gagal". $this->connection->connect_error);
        }
    }

    public function query($query){
        $result = $this->connection->query($query);
        return $result;
    }
   public function disconn(){
        $this->connection->close();
    }
}

$db = new DatabaseConnection('localhost', 'root', '', 'perpust_db');

?>