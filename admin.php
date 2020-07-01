<?php //include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page admin</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        button{
            background-color : #F91842;
            padding : 10px 16px;
            border-radius : 6px;
            border : solid 2px #F91842;
        }
        th{
            text-align : center;
        }
        .del-btn{
            cursor : pointer;
            border : solid 2px #F91842;
            color : white;
            background-color : #F91842;
            padding : 6px 10px;
            border-radius : 6px;
        }
        #sub{
            cursor : pointer;
            margin : 50px;
            border : solid 2px #F91842;
            color : white;
            background-color : #F91842;
            padding : 6px 10px;
            border-radius : 6px;
        }
        input[type=text], input[type=date]{
            width : 60%;
            margin : 20px;
            border : solid 2px #F91842;
            padding : 12px 20px;
            border-radius : 6px;
        }
        h1{
            margin : 100px;
        }
        h2{
            margin : 50px;
        }
        .lien{
            margin : 10px;
        }
    </style>
</head>
<body>
            <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a>
                                        <?php 
                                        session_start();
                                        echo 'Bienvenue : '.$_SESSION['username'];
                                        echo '<a class="lien" href="logout.php">'.$_SESSION['usertype'].' <i class="fa fa-sign-out"></i></a>';
                                         ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <center>
    <?php
    
    // echo '<br> Welcome '.$_SESSION['username'];
    // echo '<br> vout etes connecte en tant que :'.$_SESSION['usertype'];  
    ?>
   <!-- <br><a href="logout.php">deconnexion</a> -->
   <h1>Bienvenue dans la page de configuration</h1>
   <div id="table_class" class="container">
   <table class="table table-bordered">
        <thead>
            <tr>
                <th width="12%">Numero de vol</th>
                <th width="12%">Lieu Depart</th>
                <th width="12%">Lieu Arrive</th>
                <th width="12%">Date Depart</th>
                <th width="12%">Date Arrive</th>
                <th width="12%">Prix (DH)</th>
                <th width="12%">Nombre des places</th>
                <th width="12%">Action</th>
            </tr>
            <?php
            $connect = new Mysqli("localhost", "root", "", "gestion_vols");
            $sql = "SELECT * FROM vol";
            $result = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_object($result)){ 
            ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->lieu_depart ?></td>
                <td><?php echo $row->lieu_arrive ?></td>
                <td><?php echo $row->date_depart ?></td>
                <td><?php echo $row->date_arrive ?></td>
                <td><?php echo $row->prix ?></td>
                <td><?php echo $row->nom_places ?></td>
                <td><center><a class="del-btn" href="actionRecord.php?del=<?php echo $row->id; ?>">Supprimer</a></center></td>
            </tr>
            <?php } ?>
        </thead>
   </table>
   <h2>Ajouter nouvel vol</h2>
   <form action="actionRecord.php" method="POST" role="form">
        <div>
        <input name="numvol" type="text" placeholder="Entrer le numero de vol">
        <input name="place_depart" type="text" placeholder="Entrer le lieu de depart">
        <input name="place_arrive" type="text" placeholder="Entrer le lieu d'arrive">
        <input name="date_depart" type="date" placeholder="Entrer la date de depart">
        <input name="date_arrive" type="date" placeholder="Entrer la date d'arrive">
        <input name="prix" type="text" placeholder="Entrer le prix de vol">
        <input name="num_places" type="text" placeholder="Entrer le nombres des places">
        </div>
        <input type="submit" id="sub" name="submit" value="Enregistrer">
   </form>
   <?php

    // insert config :
    // if(isset($_POST["submit"])){
    //     include "actionRecord.php";
    //     $id = $_POST['numvol'];
    //     $l_depart = $_POST['place_depart'];
    //     $l_arrive = $_POST['place_arrive'];
    //     $d_depart = $_POST['date_depart'];
    //     $d_arrive = $_POST['date_arrive'];
    //     $price = $_POST['prix'];
    //     $num_place = $_POST['num_places'];

    //     $obj = new Database();
    //     $obj->saveRecords($id, $l_depart, $l_arrive, $d_depart, $d_arrive, $price, $num_place);
    // }
    // delete config :
    // $connect = mysqli_connect("localhost", "root", "", "gestion_vols");
    // if(isset($_GET['del'])){
    //     $id = $_GET['del'];
    //     $sql2 = "DELETE FROM vol WHERE id=$id";
    //     $res = mysqli_query($connect, $sql2);
    //     if($res){
    //         echo'bien supprimée';
    //         header('location: admin.php');
    //     }else{
    //         echo'erreur 500';
    //     }
    // }
   ?>
   </div>
   </center>
        <!-- footer start -->
        <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br>
                                picture placing drawing.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">SEO/SEM </a></li>
                                <li><a href="#">Web design </a></li>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Digital marketing</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Souscrire
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Souscrire</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
</body>
</html>