<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recherche</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
        #select1{
            width : 100%;
            padding : 16px 22px;
            border : solid 2px #F91842;
            border-radius : 6px;
        }
        #select2{
            width : 100%;
            padding : 16px 22px;
            border : solid 2px #F91842;
            border-radius : 6px;
            
        }
        .boxed-btn2{
            margin : 20px;
            margin-right : -250px;
        }
        #table_class{
            padding : 40px;
        }
        #commande{
            background-color : #F91842;
            color : white;
            padding : 8px 12px;
            border : #F91842;
            border-radius : 4px;
            cursor : pointer;
        }
        #number{
            padding : 6px 12px;
            border-radius : 6px;
            border-color : #F91842;
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
                                        
                                        echo 'Email : '.$_SESSION['email'];
                                        echo '<a class="lien" href="logout-2.php"><i class="fa fa-sign-out"></i></a>';
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

        <!-- slider_area_start -->
        <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <p>Trouvez votre meilleur vol</p>
                            <h3>Trouvez votre meilleur vol</h3>
                            <!-- <div class="search_form"> -->
                                <?php
                                $connect = mysqli_connect("localhost", "root", "", "gestion_vols");
                                if(isset($_POST['depart'], $_POST['arrive'])){
                                    $searchkey = $_POST['depart'];
                                    $searchkey1 = $_POST['arrive'];
                                    $sql = "SELECT * FROM vol WHERE lieu_depart LIKE '%$searchkey%' AND lieu_arrive LIKE '%$searchkey1%' ";
                                } else {
                                    $sql = "SELECT * FROM vol";
                                    $searchkey = "";
                                    $searchkey1 = "";
                                }
                                // $sql = "SELECT * FROM vol";
                                $result = mysqli_query($connect, $sql);
                                ?>
                                <form action="" method="POST">
                                <center>
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-md-4">
                                                <input type="text" value="<?php echo $searchkey; ?>" placeholder="Entrer votre lieu de départ" name="depart" id="select1">
                                                <!-- <select id="select1" name="filter_depart">
                                                    <option value="">Selectionner votre départ</option>
                                                </select> -->
                                        </div>
                                        <div class="col-xl-6 col-md-4">
                                            <input type="text" value="<?php echo $searchkey1; ?>" placeholder="Entrer votre lieu d'arrive" name="arrive" id="select2">
                                            <!-- <select id="select2" name="filter_arrive">
                                                <option value="">Selectionner votre arrivé</option>
                                            </select> -->
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="button_search">
                                                <button class="boxed-btn2" id="search">Rechercher</button>
                                            </div>
                                        </div>
                                    </div>
                                    </center>
                                </form>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div id="table_class" class="container">
        <table id="data" class="table table-bordered">
            <form action="page2.php" method="POST"></form>
                <tr>
                    <th width="10%">Numero de vol</th>
                    <th width="10%">Lieu Depart</th>
                    <th width="10%">Lieu Arrive</th>
                    <th width="10%">Date Depart</th>
                    <th width="10%">Date Arrive</th>
                    <th width="10%">Prix (DH)</th>
                    <th width="10%">Nombre des places</th>
                    <th width="10%">Action</th>
                </tr>
                <?php while($row = mysqli_fetch_object($result)){ ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->lieu_depart ?></td>
                    <td><?php echo $row->lieu_arrive ?></td>
                    <td><?php echo $row->date_depart ?></td>
                    <td><?php echo $row->date_arrive ?></td>
                    <td><?php echo $row->prix ?>DH</td>
                    <td><?php echo $row->nom_places ?></td>
                    <td><a href="page2.php?id=<?php echo $row->id ?>"><button id="commande">Commander</button></a></td>
                </tr>
                <?php } ?>
            </form>
        </table>
    </div>

    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <p>Découvrir</p>
                        <h3>
                            Catégories les plus populaires
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/1.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Endroits extraordinaires</h4></a>
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/2.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Concerts</h4></a>
                                <span>09</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/3.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Guide de voyage</h4></a>
                                <span>25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/4.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Festival de musique</h4></a>
                                <span>06</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/5.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Boîte de nuit</h4></a>
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/6.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Bars et Pubs</h4></a>
                                <span>05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/7.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Cafe</h4></a>
                                <span>50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="img/catagory/8.png" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Restaurants</h4></a>
                                <span>98</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</html>