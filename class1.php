<?php


    class Log_in
    {
        private $conne;
        function __construct($conne){
            $this->_conne = $conne;
        }
        function login(){
            if(isset($_POST['login'])){
                $user = $_POST['username'];
                $pw = $_POST['password'];
                $type = $_POST['usertype'];

                if(!empty($user) AND !empty($pw) AND !empty($type)){
                    $sql = $this->_conne->prepare("SELECT * FROM adminlogin WHERE username = '$user' AND password = '$pw' AND usertype = '$type' ");
                    $sql->execute(array('user' => $user, 'pw' => $pw, 'type' => $type));

                    if($sql->rowCount()){
                        // $data = $sql->fatch();
                        // $_SESSION['id'] = $data['id'];
                        // $_SESSION['id'] = true;
                        $_SESSION['username'] = $user;
                        $_SESSION['usertype'] = $type;
                        header('location:admin.php');
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