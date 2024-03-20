<?php
    require_once "config.php";

    function getRooms() {
        global $conn;
        $query = "SELECT * FROM mirandaphp.rooms";
        $statement = $conn -> query($query);
    
        if ($statement){
            $rooms = $statement -> fetchAll(PDO::FETCH_ASSOC);
            return $rooms;
        }else{
            echo "No rooms founded";
            return array();
        }
    }
    
