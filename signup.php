<?php     session_start();
include "../Core/Clients.php";?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sign up</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

		<script src="js/inscription.js"> </script>

		<style>
			.box
			{
				width:800px;
				margin:0 auto;
			}

			.active_tab1
			{
				background-color:#fff;
				color:#333;
				font-weight: 600;
			}
			.inactive_tab1
			{
				background-color: #f5f5f5;
				color: #333;
				cursor: not-allowed;
			}
			.has-error
			{
				border-color:#cc0000;
				background-color:#ffff99;
			}
		</style>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/profil.css">
		</head>
		<body>
<?php include "header.php" ?>

			<!-- start banner Area -->

			<!-- End banner Area -->

			<!-- Start Volunteer-form Area -->
<br>
<br>
<br>
<br>
			<section class="Volunteer-form-area section-gap" style="background: #cad0ff ; height: 700px">
				<div class="container" >
					<h2 align="center" style="position: relative;top: -100px">S'inscrire</h2>

					<form id="register_form" method="POST" action="../core/ajoutclient.php" style="width: 550px; position: relative; top: -60px; right: -270px">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details"> Details de connexion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc"> Details personnels</a>
							</li>
							<li class="nav-item">
								<a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc"> Details de contact</a>
							</li>
						</ul>
						<div class="tab-content" style="margin-top:16px;">
							<div class="tab-pane active" id="login_details">
								<div class="panel panel-default">
									<div class="panel-heading">Details de connexion</div>
									<div class="panel-body">
										<div class="form-group">
											<label> Address Email</label>
											<input style="background: white" type="text" name="email" id="email" class="form-control" />
											<span id="error_email" class="text-danger"></span>
											<span class="check_ok1" style="color:#149541; font-size:1em;"></span>
											<span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
										</div>
										<div class="form-group">
											<label> Username</label>
											<input style="background: white" type="text" name="user" id="user" class="form-control" />
											<span id="error_username" class="text-danger"></span>
											<span class="check_ok" style="color:#149541; font-size:1em;"></span>
											<span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
										</div>
										<div class="form-group">
											<label>Mot de passe</label>
											<input style="background: white" type="password" name="password" id="password" class="form-control" />
											<span id="error_password" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label>Confirmer mot de passe</label>
											<input style="background: white" type="password" name="password2" id="password2" class="form-control" />
											<span id="error_password2" class="text-danger"></span>
										</div>
										<br />
										<div align="center">
											<button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Suivant</button>
										</div>
										<br />
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="personal_details">
								<div class="panel panel-default">
									<div class="panel-heading">Details personnels</div>
									<div class="panel-body">
										<div class="form-group">
											<label>Prenom</label>
											<input style="background: white" type="text" name="first_name" id="first_name" class="form-control" />
											<span id="error_first_name" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label>Nom</label>
											<input style="background: white" type="text" name="last_name" id="last_name" class="form-control" />
											<span id="error_last_name" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label>Sexe</label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="male" checked> Homme
											</label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="female"> Femme
											</label>
										</div>
										<div class="form-group">
											<label>Date de naissance</label>
											<label class="date">
												<input type="date" name="birthday" id="birthday">
												<span id="error_birthday" class="text-danger"></span>
												<span id="error_birthday2" class="text-danger"></span>
												<span id="error_birthday3" class="text-danger"></span>
											</label>
										</div>
										<br />
										<div align="center">
											<button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
											<button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Suivant</button>
										</div>
										<br />
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact_details">
								<div class="panel panel-default">
									<div class="panel-heading"> Details de contact</div>
									<div class="panel-body">
										<div class="form-group">
											<label> Address</label>
											<textarea style="background: white" name="address" id="address" class="form-control"></textarea>
											<span id="error_address" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label> Mobile </label>
											<input style="background: white" type="text" name="mobile_no" id="mobile_no" class="form-control" />
											<span id="error_mobile_no" class="text-danger"></span>
										</div>
										<br />
										<div align="center">
											<button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
											<button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">s'inscrire</button>
										</div>
										<br />
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
			<!-- End Volunteer-form Area -->
																							
			<!-- start footer Area -->
<?php include "footer.php" ?>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>