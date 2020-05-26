<?php

    $dbconnect = mysqli_connect('localhost', 'root', '', 'gestion_vols');


    if(isset($_POST["submit"])){
    $name = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $address = $_POST['Address'];
    $codepostal = $_POST['CodePostal'];
    $ville = $_POST['Ville'];
    $num_passport = $_POST['NumeroPassport'];
    $num_places = $_POST['Numplaces'];
    
    $sql = "INSERT INTO client(CodeClient, Nom, Prenom, Address, CodePostal, Ville, NumeroPassport, Num_places) values('', '$name', '$prenom', '$address', '$codepostal', '$ville', '$num_passport', '$num_places')";

    $run = mysqli_query($dbconnect, $sql);
    if($run){
        echo "Les informations inserees";
    }else{
        "il y a un probleme";
    }
}

?>