<?php 
    function getConnection() {
        $servername = "localhost:3307";
        $username = "root";
        $password = "1234";
        $dbname = "examen";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
        }
        return $conn;
    }    
?>