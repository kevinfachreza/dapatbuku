<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/auth/style.css">

</head>

<body>
	<?php echo $navbar; ?>
		
	<div class="col-md-12 main-body-wrapper">
		<div class="col-md-6 col-md-offset-3 custom-container container panel-form text-center">
			<h2> LOGIN </h2>
			<hr>
			<form action="<?php echo base_url();?>Auth/do_login" method="POST">
				<input name="log-user_in" type="text"  class="form-control" placeholder="Username/Email" style="margin-bottom:0.5em" required autofocus>
				<input name="log-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
				<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color btn-primary">LOGIN</button>
			</form>
			<p style="margin-top:1em; font-size:1.2em">Belum punya akun?</p>
			<a href="<?php echo base_url()?>auth/register" >REGISTER</a>
		</div>
	</div>
		
	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  

  
</body>
</html>