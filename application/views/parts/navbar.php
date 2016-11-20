	<nav class="navbar navbar-mini navbar-default navbar-padding navbar-fixed-top" style="padding-top:50px;background-color:#E68037">
	  <div class="container-fluid" style="">
		<div class="collapse navbar-collapse" id="secondary-navbar">
		  <ul class="nav navbar-nav navbar-nav-mini">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buku <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Rekomendasi</a></li>
				<li><a href="#">Buku Paling Top</a></li>
				<li><a href="#">Paling Banyak Dibaca</a></li>
				<li role="separator" class="divider"></li>
				 <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Kategori</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                </ul>
              </li>
			  </ul>
			</li>
			<li><a href="<?php echo base_url().""; ?>">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li class="navbar-hide"><a href="#">Profile</a></li>
		  </ul>
		  <form class="navbar-form navbar-left  navbar-hide"  role="search" id="NavbarSearch">
			<div class="form-group form-group-navbar">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		  </form>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<nav class="navbar navbar-default navbar-padding navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#secondary-navbar" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>

		  <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/img/logo-nav-white.png"></a>

		</div>

		<div class="collapse navbar-collapse" >
		  <form class="navbar-form navbar-left form-group-navbar" role="search" id="NavbarSearch">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<?php
			#$this->session->logged_in = 1;
			if ($this->session->logged_in == 1){?>
			<li><a href="<?php echo base_url()?>messages" data-toggle="tooltip" title="Pesan" data-placement="bottom"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>

			<li><a href="<?php echo base_url()?>messages" data-toggle="tooltip" title="Poin" data-placement="bottom"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>

			<li><a href="<?php echo base_url()?>mybooks/add" data-toggle="tooltip" title="Tambah Buku" data-placement="bottom"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
				</div>
			</a></li>

			<li class="dropdown">

			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#"><?php echo $this->session->userdata('my_name'); ?></a></li>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="<?php echo base_url().'Mybooks'; ?>">MyBooks</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="<?php echo base_url().'Profile/logging_out'; ?>">Log-out</a></li>
			  </ul>
			</li>
			<?php }else {?>

			<li>
			  <a href="<?php echo base_url()."auth/login"; ?>" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"> Login </a>
			</li>
			<?php } ?>
		  </ul>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	 <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-footer" style="text-align: center;padding-top:7vh;padding-bottom:7vh;">

					<!--- LOGIN ------------------------------------------------->
					<div id="log-panel" style="margin:0 auto;width:70%;">

						<h2> LOGIN </h2>
						<hr>
						<form name="login_form" action="<?php echo base_url();?>Auth/do_login" method="POST">
							<input name="log-user_in" type="text"  class="form-control" placeholder="Username/Email" style="margin-bottom:0.5em" oninvalid="this.setCustomValidity('Tolong masukkan Email anda')" required autofocus>
							<input name="log-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" oninvalid="this.setCustomValidity('Tolong masukkan password anda')" required  autofocus>
							<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">LOGIN</button>
						</form>
						<p style="margin-top:1em; font-size:1.2em">Belum punya akun?</p>
						<a href="#!" class="btn btn-sch-grey-inv" id="reg-trig">REGISTER</a>
					</div>

					<!--- REGISTER ------------------------------------------------->
					<div id="reg-panel" style="display:none;margin:0 auto;width:70%;">
						<h2> REGISTER </h2>
						<hr>
						<form name="reg_form" action="<?php echo base_url();?>auth/do_register" method="POST">
							<input name="reg-email" type="Email" class="form-control" placeholder="Email" style="margin-bottom:0.5em" required  autofocus>
							<input name="reg-name" type="text" class="form-control" placeholder="Username" style="margin-bottom:0.5em" required  autofocus>
							<input name="reg-date" type="Date"  class="form-control" placeholder="Tanggal Lahir" style="margin-bottom:0.5em" required autofocus>
							<input name="reg-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
							<input name="pass-conf" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>

							<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">REGISTER</button>
						</form>
						<p style="margin-top:1em; font-size:1.2em">Sudah punya akun?</p>
						<a href="#!" class="btn btn-sch-grey-inv" id="log-trig">LOGIN</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).on('click','#reg-trig',function(e){
            e.preventDefault();
             $("#log-panel").css('display','none');
             $("#reg-panel").css('display','inline-block');
        });
        $(document).on('click','#log-trig',function(e){
             e.preventDefault();
             $("#reg-panel").css('display','none');
             $("#log-panel").css('display','inline-block');
        });
    </script>




  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
