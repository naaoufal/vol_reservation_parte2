<?php

session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reservation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS here -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <style>
        h1, h3{
            padding : 40px;
            font-family : arial;
            margin : 10px;
        }
        input[type=submit]{
            padding : 12px 20px;
            background-color : #F91842;
            border-color : #F91842;
            color : white;
            border-radius : 6px;
            margin-top : 40px;
            margin-bottom : 80px;
        }
        .lien{
            margin : 10px;
        }
        h1{
            margin-top : 100px;
        }
        .list{
            margin : 10px 20px;
        }
        li{
            padding: 10px;
            text-align : center;
        }
    </style>
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
                                        
                                        echo 'Email : '.$_SESSION['email'];

                                        echo '<a class="lien" href="profile.php"><i class="fa fa-user"></i></a>';
                                        // echo 'vout etes : '.$_SESSION['usertype'];
                                        echo '<a class="lien" href="logout-2.php">'.$_SESSION['usertype'].' <i class="fa fa-sign-out"></i></a>';
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
    
    <?php
    $conn = mysqli_connect("localhost", "root", "", "gestion_vols");
    $sql = "SELECT * FROM reservation WHERE Id_client = ".$_SESSION['Id_client'];
    $result = mysqli_query($conn, $sql);
    $vol = $result->fetch_assoc();
    ?>
    <center>
    <h1>Les informations de votre Réservation</h1>
    <div class="container">
        <table id="data" class="table table-bordered">
            <tr>
                <th width="10%">Numero de Reservation</th>
                <!-- <th width="10%">Numero de Vol Selecionné</th>
                <th width="10%">Nom</th>
                <th width="10%">Prenom</th>
                <th width="10%">Address</th>
                <th width="10%">Code Postal</th>
                <th width="10%">Ville</th>
                <th width="10%">Numero de Passport</th> -->
                <th width="10%">Date de Reservation</th>
                <th width="10%">Details</th>
            </tr>
            <tr>
                <td><?php print $vol['NumeroReservation'] ?></td>
                <td><?php print $vol['DateReservation'] ?></td>
                <td>
                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red">Details</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <ul class="list">
                                    <li>Numero de Reservation : <?php print $vol['NumeroReservation'] ?></li>
                                    <li>Numero de Vol Selecionné : <?php print $_SESSION['Id_vol'] ?></li>
                                    <li>Nom : <?php print $_SESSION['nom'] ?></li>
                                    <li>Prenom : <?php print $_SESSION['prenom'] ?></li>
                                    <li>Address : <?php print $_SESSION['address'] ?></li>
                                    <li>Code Postal : <?php print $_SESSION['codePostal'] ?></li>
                                    <li>Ville : <?php print $_SESSION['ville'] ?></li>
                                    <li>Numero de Passport : <?php print $_SESSION['numeroPassport'] ?></li>
                                    <li>Date de Reservation : <?php print $vol['DateReservation'] ?></li>
                                    <!-- <li>Unicode : <?php //print $_SESSION['unicodee'] ?></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div>
            <input type="submit" name="retour" onclick="window.location.href='recherche.php'" value="Retour au liste des vols">
        </div>
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
                            <form class="newsletter_form">
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

        <!-- link that opens popup -->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>

</body>