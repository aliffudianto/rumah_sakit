<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Medical</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="taped login form Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="assets/css/style1.css" type="text/css" media="all" /><!-- Style-CSS -->
<link rel="stylesheet" href="assets/css/font-awesome1.css" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Snippet" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body data-vide-bg="assets/video/ship">
<section class="login-maintop">
	<div class="login-main">
		<header><h1>Medical Login Area</h1></header>
		<div class="login-form">
			<h2>login now</h2>
			<?php echo form_open_multipart('loginUser/cekLogin/'); ?>
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
				<?php echo validation_errors(); ?>
				<input type="text" name="username" placeholder="enter your name" required="">
				<span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				<input type="password" name="password" placeholder="enter your password" required="">
				<input type="submit" value="login">
			</form>

			<div class="login-input">
			
			</div>
			<div class="login-password">
							<span><a href="<?php echo site_url('') ?>/LoginUser/register">
							Create Your Account
							</a></span>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
			<p>&copy; 2018 Medical Login Form. All rights reserved</p>
		</div>
		<!--//footer-->
	</div>
</section>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery.vide.min.js"></script>
</body>
</html>