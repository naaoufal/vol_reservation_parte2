<?php
    session_start();
    $db_user = "root";
    $db_pass = "";
    $db_name = "gestion_vols";
    
    $db = new PDO('mysql:host=localhost;dbname=' .$db_name. ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['sub'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $sql = "INSERT INTO inscription (email, password, usertype) VALUES (?,?,?)";
        $stminsert = $db->prepare($sql);
        $result = $stminsert->execute([$email, $password, $usertype]);
            if($result){
                echo "Connexion successful";
                $_SESSION['email'] = $email;
                $_SESSION['usertype'] = $usertype;
                header('Location: recherche.php');
            } else {
                header('Location: index.php');
            }
    }

?>