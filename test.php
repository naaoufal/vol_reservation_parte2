<?php
    session_start();
    $connect = mysqli_connect("localhost", "root");

    // if($connect){
    //     echo 'connexion successful';
    // } else {
    //     echo 'error connexion';
    // }

    $db = mysqli_select_db($connect, 'gestion_vols');

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $sql = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password' AND usertype = '$usertype' ";
        $query = mysqli_query($connect, $sql);
        $row = mysqli_num_rows($query);
            if($row == 1){
                echo "Connexion successful";
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $usertype;
                header('Location: admin.php');
            } else {
                $message = "Error Connexion";
                echo ("<script type='text/javascript'>alert('$message');</script>");
                header('Location: login.php');
            }
    }

?>

