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
			<h2> REGISTER </h2>
			<hr>
			<form action="<?php echo base_url();?>auth/do_register" onsubmit="return checkPass()" method="POST">
				<p style="color:rgb(230, 0, 0)"><?php echo $this->session->flashdata('warning'); ?></p>
				<input name="reg-email" type="text" class="form-control" placeholder="Email" style="margin-bottom:0.5em" required  autofocus>
				<input name="reg-name" type="text" class="form-control" placeholder="Username" style="margin-bottom:0.5em" required  autofocus>
				<input name="reg-date" id="datefield" min="1900-01-01" max="2017-01-01" type="Date"  class="form-control" placeholder="Tanggal Lahir" style="margin-bottom:0.5em" required autofocus>
				<p style="color:rgb(230, 0, 0)" id="pass-warn"></p>
				<input name="reg-pass" id="first-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
				<input name="pass-conf" id="conf-pass" onfocusout="checkPass()" type="password" class="form-control" placeholder="Konfirmasi Password" style="margin-bottom:1em" required  autofocus>

				<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color btn-primary">REGISTER</button>
			</form>
			<p style="margin-top:1em; font-size:1.2em">Sudah punya akun?</p>
			<a href="<?php echo base_url()?>auth/login" >LOGIN</a>
		</div>
	</div>

	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yy = today.getFullYear();
			if(dd<10){
				dd = '0'+dd
			}
			if(mm<10){
				mm = '0'+mm
			}

		today = yyyy+'-'+mm+'-'+dd;
		document.getElementById("datefield").setAttribute("max", today);
	</script>
	<script>
		function checkPass(){
			var pass1 = document.getElementById('first-pass');
			var pass2 = document.getElementById('conf-pass');

			if(pass1.value != pass2.value){
				document.getElementById('pass-warn').innerHTML = 'Dua password di bawah harus sama';
				return false;
			}
			else{
				document.getElementById('pass-warn').innerHTML = '';
				return true;
			}
		}
	</script>


</body>
</html>
