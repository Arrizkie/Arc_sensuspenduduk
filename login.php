<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARSENSUS - Sensus Penduduk</title>

	<!-- meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">

	<!-- ****************************** Preloader ************************** -->

	<div id="preloader"></div>
	<!-- ****************************** Sidebar ************************** -->

	<!-- ****************************** Header ************************** -->

	<header class="sticky" id="header">
		<section class="container">
			<section class="row" id="logo_menu">
				<section class="col-xs-8"><a class="logo" href="">AR-SENSUS</a></section>
				<section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
			</section>
		</section>
	</header>
	<!-- ****************************** Banner ************************** -->
	<section id="banner" >
		<section class="container">
			<a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
			<section class="row">
				<div class="headings">


<?php
session_start();
extract($_POST);
$con=mysqli_connect('localhost','root','','arsensus');


if(isset($_GET['qwi'])=="r")
{
$ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>Ã—</button>
            <h4><i class='icon glyphicon glyphicon-ok'></i> Please Check Email !</h4> Email and Password have been sent
            </div>
        ";
		echo $ps; 
}

if(isset($login)){
	if(mysqli_num_rows(mysqli_query($con,"select id from users where email='$email' and password='$password'")))
    {
        $tipe=mysqli_fetch_row(mysqli_query($con,"select id from users where email='$email' and password='$password'"));
		$_SESSION['kosong']=$tipe[0];
        header("location:region.php");
	}
	else
        $ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>Ã—</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Wrong !</h4> Wrong Email or password :(
            </div>
        ";
		echo $ps;
}
?>

<div class="subscribe">
	 <div class="container">
		 <h3>Sign in</h3>
		   <form method="post">
          <div class="form-group has-feedback">
           <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="tel" class="form-control" placeholder="Your Password *" name="password" id="password" required data-validation-required-message="Please enter your phone number.">
	                                    <p class="help-block text-danger"></p>
	                            <div class="form-group">
	                            	<div class="col-md-3">
               <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Login" name="login"/>
              <p class="help-block text-danger"></p>
            </div>
         </div>
         </div>
         </div>
</div>
<!---->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-xs hidden-sm">
					<div class="hand-container">
					<img class="iphone-hand img_res wow animated bounceInUp" data-wow-duration="1.2s" src="assets/img/iphone_hand.png"></img>
					<div class="clearfix"></div>
					</div>
				</div>
			</section>
		</section>
	</section>



					<!-- All the scripts -->

	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/script.js"></script>
	
</body>
</html>