<?php
class Database
{
    //setting up variables that will make up the connection to the mySql database
    private $servername = "localhost";
    private $database = "review";
    private $username = "root";
    private $password = "";
    public $connection;

    public function ConnectToDatabase()
    {
        //makes the connection to the database and passes in the verification variables
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database, "3308");
        //checks to see if there are any connection errors, if there are any errors then the api will die and returns an error message
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        //returns the connection if it was successful
        return $this->connection;
    }
}
