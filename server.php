<?php 



$connect = mysqli_connect("localhost", "root", "", "gestion_vols");

// insert config
if(isset($_POST["submit"])){
    $id = $_POST['numvol'];
    $l_depart = $_POST['place_depart'];
    $l_arrive = $_POST['place_arrive'];
    $d_depart = $_POST['date_depart'];
    $d_arrive = $_POST['date_arrive'];
    $price = $_POST['prix'];
    $num_place = $_POST['num_places'];

    $sql1 = "INSERT INTO vol(id, lieu_depart, lieu_arrive, date_depart, date_arrive, prix, nom_places) VALUES('$id', '$l_depart', '$l_arrive', '$d_depart', '$d_arrive', '$price', '$num_place')";
    $result = mysqli_query($connect, $sql1);
    if($result){
        echo'bien enregistrer';
        header('location:admin.php');
    } else {
        echo'Erreur 500';
        // header('location: admin.php');
    }
}

// delete config
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql2 = "DELETE FROM vol WHERE id=$id";
    $res = mysqli_query($connect, $sql2);
    if($res){
        echo'bien supprimée';
        header('location: admin.php');
    }else{
        echo'erreur 500';
    }
}

?>