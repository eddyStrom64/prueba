<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Societies UT</title>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" >
		<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" >
        
        <script src="<?php base_url();?>assets/plugins/jquery/jquery-3.4.1.min.js" ></script>
		<script src="<?php base_url();?>assets/plugins/bootstrap-4.3.1/js/popper.min.js" ></script>
		<script src="<?php base_url();?>assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js" ></script>
	</head>
	<script>
		$(document).ready(function(){
			console.log("Hola");


			$(".btn-section").on('click','.btn-registra',function(){
				$.ajax({
                    url: "Login/registraView",
					type: "POST",
					success: function(e){
						$(".contenedor").html(e);
						$(".btn-registra").removeClass('active');
						$(".btn-ini-sesion").addClass('active');
						
					},
					error: function(e){
						alert("Error");
					}
				});
			});

			$(".btn-section").on('click','.btn-ini-sesion',function(){
				$.ajax({
					url: "Login/loginView",
					type: "POST",
					success: function(e){
						$(".contenedor").html(e);
						$(".btn-ini-sesion").removeClass('active');
						$(".btn-registra").addClass('active');
						
					},
					error: function(e){
						alert("Error");
					}
				});
			});
		});
	</script>
	<body>
	<div class="login-3 tab-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 col-md-12 col-pad-0 form-section">
					<div class="login-inner-form">
						<div class="details">
							<a href="#">
								<img id="logo-sout" src="<?= base_url() ?>assets/images/Logo3.png" alt="logo">
							</a>
							<div class="contenedor">
								<?php $this->load->view('login/login')?>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
					<div class="informeson">
						<div class="btn-section">
							<a href="#" class="link-btn btn-ini-sesion">Ingresa</a>
							<a href="#" class="link-btn active btn-registra" >Regístrate</a>
						</div>
						<h3 id="txt-info">¡Sé miembro!</h3>
						<p id="txt-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cum quo officia, id quis nam. Repellat quidem corporis quasi voluptatum cupiditate esse, debitis facilis facere quaerat molestiae ipsam ex autem!</p>
						<div class="social-box">
							<ul class="social-list clearfix">
								<li><a href="#" class="facebook-color"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-color"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google-color"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="linkedin-color"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php base_url();?>assets/js/cargaAjax.js"></script>
	</body>
</html>