<?php

class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $connection = null;
    private $dbName = "tech_center";

    private function createDB()
    {
        $conn = new mysqli($this->host, $this->username, $this->password);
        if ($conn->connect_error) {
            die("connection failed to mysql: " . $conn->connect_error);
        }
        $query = "CREATE DATABASE IF NOT EXISTS " . $this->dbName;
        if (!$conn->query($query)) {
            die("error creating the db " . $conn->error);
        }
    }

    public function connect()
    {
        if ($this->connection != null) return;
        $this->createDB();
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
        if ($conn->connect_error) {
            die("connection failed to the DB: " . $conn->connect_error);
        }
        $this->connection = $conn;
    }

    public function close()
    {
        if ($this->connection == null) return;
        $this->connection->close();
    }

    public function init()
    {
        if ($this->connection == null) return;
        $this->createCrewTable();
        $this->createUsersTable();
        $this->createProductsTable();
        $this->createCoursesTable();
    }

    private function createCrewTable()
    {
        $query = "CREATE TABLE IF NOT EXISTS crew (ID INT(10) AUTO_INCREMENT PRIMARY KEY, Username VARCHAR(30) NOT NULL, First_Name VARCHAR(20) NOT NULL, Last_Name VARCHAR(20) NOT NULL, Job_Title VARCHAR(50) NOT NULL, Password VARCHAR(255) NOT NULL, Email VARCHAR(255) NOT NULL, Phone_Number VARCHAR(255) NOT NULL, Profile_Picture VARCHAR(255))";
        if (!$this->connection->query($query)) {
            echo "cannot create users table: " . $this->connection->error;
        }
        // check if the table is empty to add the owner account
        $result = $this->connection->query("SELECT * from crew");
        if ($result->num_rows == 0) {
            $this->insertCrew("admin", "jamal", "kheir beik", "owner", "123123", "jamalkheirbeik@gmail.com", "+963 9888 777 666", null);
        }
    }

    public function insertCrew($username, $firstName, $lastName, $jobTitle, $password, $email, $phoneNumber, $profilePicture)
    {
        $hashedPassword = hash("md5", $password);
        $query = "INSERT INTO crew (Username, First_Name, Last_Name, Job_Title, Password, Email, Phone_Number, Profile_Picture) VALUES ('{$username}', '{$firstName}', '{$lastName}', '{$jobTitle}', '{$hashedPassword}', '{$email}', '{$phoneNumber}', '{$profilePicture}')";
        if (!$this->connection->query($query)) {
            echo "cannot create owner account: " . $this->connection->error;
        }
    }

    public function findCrew($username, $password)
    {
        $query = "SELECT * FROM crew WHERE Username = '{$username}' AND Password = '$password'";
        $result = $this->connection->query($query);
        if ($result->num_rows > 0) {
            return array("found" => true, "id" => $result->fetch_assoc()["ID"]);
        }
        return array("found" => false);
    }

    public function getCrewInfo($id)
    {
        $query = "SELECT * FROM crew WHERE ID = '{$id}'";
        $result = $this->connection->query($query);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }

    private function createUsersTable()
    {
        $query = "CREATE TABLE IF NOT EXISTS users (ID INT(10) AUTO_INCREMENT PRIMARY KEY, Username VARCHAR(30) NOT NULL, First_Name VARCHAR(20) NOT NULL, Last_Name VARCHAR(20) NOT NULL, Password VARCHAR(255) NOT NULL, Email VARCHAR(255) NOT NULL, Phone_Number VARCHAR(255) NOT NULL, Profile_Picture VARCHAR(255))";
        if (!$this->connection->query($query)) {
            echo "cannot create users table: " . $this->connection->error;
        }
    }

    private function createProductsTable()
    {
    }

    private function createCoursesTable()
    {
    }
}
