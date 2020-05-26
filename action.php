<?php 


include "server.php";

class DataOperation extends Database
{
    public function insert_records($table, $fields){
        $sql = "";
    }
}

if(isset($_POST["save"])){
    $myarray = array(
        "id" => $_POST["numvol"],
        "l_depart" => $_POST["place_depart"],
        "l_arrive" => $_POST["place_arrive"],
        "d_depart" => $_POST["date_depart"],
        "d_arrive" => $_POST["date_arrive"],
        "price" => $_POST["prix"],
        "num_place" => $_POST["num_places"]
    );
}


?>