	<nav class="navbar navbar-default navbar-padding navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/img/logo-nav.png"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buku <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Rekomendasi</a></li>
				<li><a href="#">Buku Paling Top</a></li>
				<li><a href="#">Paling Banyak Dibaca</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Kategori</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<?php 
			$this->session->logged_in = 1;
			if ($this->session->logged_in == 1){?>
			<li><a href="#" data-toggle="tooltip" title="Pesan" data-placement="bottom"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>
			
			<li><a href="#" data-toggle="tooltip" title="Poin" data-placement="bottom"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> 
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>
			
			<li><a href="#" data-toggle="tooltip" title="Keranjang Belanja" data-placement="bottom"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>
			
			<li><a href="#" data-toggle="tooltip" title="Transaksi" data-placement="bottom"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
					<span class="badge">100</span>
				</div>
			</a></li>
			
			<li><a href="#" data-toggle="tooltip" title="Tambah Buku" data-placement="bottom"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
				</div>
			</a></li>
			
			<li class="dropdown">
			
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Hi Kevin!</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">MyBooks</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Log-out</a></li>
			  </ul>
			</li>
			<?php }else {?>
			
			<li>
			  <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal" role="button" aria-haspopup="true" aria-expanded="false"> Login </a>
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
						<form action="<?php echo base_url();?>auth/doLogin" method="POST">
							<input name="log-username" type="text"  class="form-control" placeholder="Username" style="margin-bottom:0.5em" required autofocus>
							<input name="log-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
							<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">LOGIN</button>
						</form>
						<p style="margin-top:1em; font-size:1.2em">Belum punya akun?</p>
						<a href="#!" class="btn btn-sch-grey-inv" id="reg-trig">REGISTER</a>
					</div>
					
					<!--- REGISTER ------------------------------------------------->
					<div id="reg-panel" style="display:none;margin:0 auto;width:70%;">
						<h2> REGISTER </h2>
						<hr>
						<form action="<?php echo base_url();?>auth/doLogin" method="POST">
							<input name="reg-name" type="text" class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required  autofocus>
							<input name="reg-name" type="text" class="form-control" placeholder="Username" style="margin-bottom:0.5em" required  autofocus>
							<input name="reg-email" type="email"  class="form-control" placeholder="Email" style="margin-bottom:0.5em" required autofocus>
							<input name="reg-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required  autofocus>
							
							<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">LOGIN</button>
						</form>
						<p style="margin-top:1em; font-size:1.2em">Sudah punya akun?</p>
						<a href="#!" class="btn btn-sch-grey-inv" id="log-trig">LOGIN</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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
	