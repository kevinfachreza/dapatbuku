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
		<div class="col-md-6 col-md-offset-3 container panel-form text-center">
			<h2> REGISTER </h2>
			<hr>
			<form action="<?php echo base_url();?>auth/do_register" method="POST">
				<input name="reg-email" type="Email" class="form-control" placeholder="Email" style="margin-bottom:0.5em" required  autofocus>
				<input name="reg-name" type="text" class="form-control" placeholder="Username" style="margin-bottom:0.5em" required  autofocus>
				<input name="reg-date" type="Date"  class="form-control" placeholder="Tanggal Lahir" style="margin-bottom:0.5em" required autofocus>
				<input name="reg-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
				<input name="pass-conf" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>

				<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color btn-primary">REGISTER</button>
			</form>
			<p style="margin-top:1em; font-size:1.2em">Sudah punya akun?</p>
			<a href="<?php echo base_url()?>auth/login" >LOGIN</a>
		</div>
	</div>
		
	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  

  
</body>
</html>