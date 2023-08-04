<?php

class Database{
    private $server_name = 'localhost';
    private $username = 'root';
    private $password = ''; //for MAMP users, your password is 'root'
    private $db_name = 'the_company_08';
    protected $conn; //allow other inherting classes to access it 
    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die('Unable to connect to the database' . $this->conn->connect_error);
        }
    }
}

?>