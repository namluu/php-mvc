<?php

class DB
{
    public $connection;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "vnexpress";

    function __construct(){
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->connection, $this->dbname);
        mysqli_query($this->connection, "SET NAMES 'utf8'");
    }
}