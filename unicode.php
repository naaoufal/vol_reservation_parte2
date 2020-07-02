<?php



$conn = mysqli_connect("localhost", "root", "", "gestion_vols");

$email = $_SESSION['email'];

$sql = "SELECT * FROM inscription WHERE email LIKE '$email'";

 $result = $conn->query($sql);

 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["unicodee"];
    }
 }

?>