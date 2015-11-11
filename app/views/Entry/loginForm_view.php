<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Giriş</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/animate.css/animate.min.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS;?>/css/styles.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS;?>/css/styles-responsive.css">
		<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/iCheck/skins/all.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo">
					<img src="<?php echo SITE_BACK_ASSETS;?>/images/logo.png">
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<h3>Giriş yap</h3>
					<p>
						Lütfen kullanıcı adı ve şifrenizi giriniz.
					</p>
                                        <form class="form-login" role="form" method="POST" action="<?php echo SITE_URL;?>/admin/runLogin">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> Bazı hatalar var.Alttan kontrol ediniz.
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Şifre">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="#">
										Şifremi Unuttum
									</a> </span>
							</div>
							<div class="form-actions">
								<label for="remember" class="checkbox-inline">
									<input type="checkbox" class="grey remember" id="remember" name="remember">
									Beni Hatırla
								</label>
								<button type="submit" class="btn btn-green pull-right">
									Giriş Yap <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Henüz kayıt olmadınız mı?
								<a href="#" class="register">
									Kayıt Ol
								</a>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; BadoFramework.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
				<!-- start: FORGOT BOX -->
				<div class="box-forgot">
					<h3>Şifremi Unuttum?</h3>
					<p>
						Lütfen E-mail adresinizi giriniz ve şifrenizi sıfırlayalım.
					</p>
					<form class="form-forgot">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> Bazı hatalar var.Alttan kontrol ediniz.
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="E-Mail Adresini Giriniz">
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-actions">
								<a class="btn btn-light-grey go-back">
									<i class="fa fa-chevron-circle-left"></i> Giriş Yap
								</a>
								<button type="submit" class="btn btn-green pull-right">
									Gönder <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; BadoFramework.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: FORGOT BOX -->
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<h3>Kaydol</h3>
					<p>
						Kişisel Bilgilerinizi Giriniz:
					</p>
					<form class="form-register">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> Bazı hatalar var.Alttan kontrol ediniz.
						</div>
						<fieldset>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Adınız">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Adres">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="Şehir">
							</div>
							<div class="form-group">
								<div>
									<label class="radio-inline">
										<input type="radio" class="grey" value="F" name="gender">
										Bayan
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="M" name="gender">
										Erkek
									</label>
								</div>
							</div>
							<p>
								Kullanıcı Bilgilerinizi Giriniz
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="E-Mail Adresini Giriniz">
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Şifre">
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="password_again" placeholder="Şifreyi Tekrar Giriniz">
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div>
									<label for="agree" class="checkbox-inline">
										<input type="checkbox" class="grey agree" id="agree" name="agree">
										Kullanıcı Sözleşmesini Kabul Ediyorum
									</label>
								</div>
							</div>
							<div class="form-actions">
								Zaten bir hesabınız var mı?
								<a href="#" class="go-back">
									Giriş Yap
								</a>
								<button type="submit" class="btn btn-green pull-right">
									Gönder <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014 &copy; BadoFramework.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: REGISTER BOX -->
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/iCheck/jquery.icheck.min.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/jquery.transit/jquery.transit.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS;?>/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo SITE_BACK_ASSETS_PLUGINS;?>/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="<?php echo SITE_BACK_ASSETS;?>/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>