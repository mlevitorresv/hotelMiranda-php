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

    function getOffersRooms() {
        global $conn;
        $query = "SELECT * FROM mirandaphp.rooms WHERE discount > 0";
        $result = $conn -> query($query);

        $rooms = [];
    
        if ($result->num_rows > 0){

            while ($row = $result->fetch_assoc()) {
                $rooms[] = $row;
            }
        }else{
            echo "No rooms with offer";
            return array();
        }

        return $rooms;
    }
    

    function getRoomById($roomId){
        global $conn;
        $query = "SELECT * FROM mirandaphp.rooms WHERE id = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $roomId);
        $statement->execute();

        $result = $statement->get_result();

        if ($result->num_rows == 0){
            return array();
        }

        return $result->fetch_assoc();
    }

