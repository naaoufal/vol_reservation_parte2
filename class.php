<?php


    class Sign_up
    {
        private $conn;
        function __construct($conn){
            $this->_conn = $conn;
        }
        function sign_up(){
            if(isset($_POST['sub'])){
                $user = $_POST['email'];
                $pw = $_POST['password'];
                $type = $_POST['usertype'];

                if(!empty($user) AND !empty($pw) AND !empty($type)){
                    $sql = $this->_conn->prepare("SELECT * FROM `inscription` WHERE email = :user AND password = :pw AND usertype = :type");
                    $sql->execute(array('user' => $user, 'pw' => $pw, 'type' => $type));

                    if($sql->rowCount()){
                        // $data = $sql->fatch();
                        // $_SESSION['id'] = $data['id'];
                        // $_SESSION['id'] = true;
                        $_SESSION['email'] = $user;
                        $_SESSION['usertype'] = $type;
                        header('location:recherche.php');
                    } else {
                        echo "email or password are wrong";
                    }
                } else {
                    echo "Enter email and username";
                }
            }
        }
    }
    

?>