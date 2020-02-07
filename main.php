<?php
    #if (isset($_GET['sentence'])){
        #echo $_GET['country'];

        $sentence = $_GET['sentence'];

    /*if (isset($_GET['sentence'])){
        add_porg_vote($_GET['sentence']);    
*/
        $servername = "localhost:3307";
        $username = "root";
        $password = "1234";
        $dbname = "examen";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            #return false;
        }

        
        $sql = 'SELECT sentence FROM refranero WHERE sentence LIKE "'.$sentence.'%"';
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row["sentence"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    #}
?>