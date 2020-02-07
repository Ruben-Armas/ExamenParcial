<?php
    
    function get_Connection (){
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


    if (isset($_GET['porg'])){
        add_porg_vote();
    } elseif (isset($_GET['babyYoda'])){
        add_babyYoda_vote();
    }



    function add_porg_vote(){
        $conn = get_Connection();
        $sql = "INSERT INTO refranero (vote) VALUES ('porg');";
        $result = $conn->query($sql);
        $conn->close();
    }

    function add_babyYoda_vote(){
        $conn = get_Connection();
        $sql = "INSERT INTO cutemeter (vote) VALUES ('babyYoda');";
        $result = $conn->query($sql);
        $conn->close();
    }






    function show_messages(){
        $conn = get_Connection();
        $sql = "SELECT * FROM panel ORDER BY id desc LIMIT 20";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {

                echo create_msg_bubble($row["id"], $row["username"], $row["msg"]);
            }
        }

        $conn->close();
    }
    
?>