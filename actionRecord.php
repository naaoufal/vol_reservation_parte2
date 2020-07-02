<?php 

session_start();

$connect = mysqli_connect("localhost", "root", "", "gestion_vols");

// // insert config
if(isset($_POST["submit"])){
    $id = $_POST['numvol'];
    $l_depart = $_POST['place_depart'];
    $l_arrive = $_POST['place_arrive'];
    $d_depart = $_POST['date_depart'];
    $d_arrive = $_POST['date_arrive'];
    $price = $_POST['prix'];
    $num_place = $_POST['num_places'];
    $sta = $_POST['status'];

    $sql1 = "INSERT INTO vol(id, lieu_depart, lieu_arrive, date_depart, date_arrive, prix, nom_places, status) VALUES('$id', '$l_depart', '$l_arrive', '$d_depart', '$d_arrive', '$price', '$num_place', '$sta')" or die(mysqli_error($conn));
    $result = mysqli_query($connect, $sql1);
    if($result){
        echo'bien enregistrer';
        header('location:admin.php');
    } else {
        echo'Erreur 500';
        // header('location: admin.php');
    }
}

// update config
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    $sql = "UPDATE vol SET statu = '".$_POST['sta']."' WHERE id='".$_POST['id']."'";
    $run = mysqli_query($connect, $sql);
    if($run->num_rows > 0){
        echo 'le status de vol est changé';
        header('location:admin.php');
    }else{
        echo '<script type="text/javascript">alert("Erreur");</script>';
        header('location:admin.php');
    }
}

?>