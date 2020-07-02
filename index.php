<?php
// require('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Connexion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS here -->
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        a{
            cursor : pointer;
        }
        select{
            width : 100%;
            padding : 10px 18px;
            border : solid 2px black;
        }
        #email, #password{
            border : solid 2px black;
            padding : 10px 18px;
        }
        input[type=submit]{
            background-color : #F91842;
            border : #F91842;
        }
        #total{
            padding : 4%;
        }
    </style>
</head>
<body>
<?php
    include 'test2.php';
    $conn->sign_up(); 
?>
<div class="container mt-2" id="total">
	<div class="row justify-content-center align-items-center text-center p-2">
		<div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-sm p-3 mb-5 bg-white border rounded">
			<div class="pt-6 pb-7">
				<p class="text-center text-uppercase mt-3">Connexion</p>
				<form class="form text-center" action="" method="POST">
					<div class="form-group input-group-md">
						<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrer votre email">
						<!--<div class="invalid-feedback">
							 Errors in email during form validation, also add .is-invalid class to the input fields
						</div> -->
					</div>
					<div class="form-group input-group-md">
						<input type="password" class="form-control" name="password" id="password" placeholder="Entrer votre mot de passe">
						<!--<div class="invalid-feedback">
							 Errors in password during form validation, also add .is-invalid class to the input fields
						</div> -->
					</div>
                    <div class="form-group input-group-md">
                            <input type="text" readonly="readonly" class="form-control" name="usertype" value="user" id="email">
                            <!--<div class="invalid-feedback">
                                Errors in password during form validation, also add .is-invalid class to the input fields
                            </div> -->
                    </div>
					<!-- <button name="login" class="btn btn-lg btn-block btn-primary mt-4" type="submit">
                        Connecter
               </button> -->
               <input type="submit" value="Connecter" name="sub" class="btn btn-lg btn-block btn-primary mt-4">
					<a onclick="window.location.href='login.php'" class="float-right mt-2">Vous etes Administrateur</a>
				</form>
			</div>
		</div>
	</div>
</div>
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