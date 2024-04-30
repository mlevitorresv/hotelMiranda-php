<?php
    require_once "config.php";

    function getRooms() {
        global $conn;
        $query = "SELECT * FROM mirandaphp.rooms";
        $result = $conn -> query($query);

        $rooms = [];
    
        if ($result->num_rows > 0){

            while ($row = $result->fetch_assoc()) {
                $rooms[] = $row;
            }
        }else{
            echo "No rooms founded";
            return array();
        }

        return $rooms;
    }
    
