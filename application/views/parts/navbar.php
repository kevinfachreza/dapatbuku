	<nav class="navbar navbar-mini navbar-default navbar-padding navbar-fixed-top" style="padding-top:50px;background-color:#E68037">
	  <div class="container-fluid" style="">
		<div class="collapse navbar-collapse" id="secondary-navbar">
		  <ul class="nav navbar-nav navbar-nav-mini">
			<li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hot List<span class="caret"></span></a>
			  	<ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>book/best_seller">Best Seller</a></li>
					<li><a href="<?php echo base_url(); ?>book/new_release">New Release</a></li>
				<li><a href="<?php echo base_url(); ?>book/most_viewed">Most Viewed</a></li>
			  	</ul>
			</li>
			<li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori<span class="caret"></span></a>
			  	<ul class="dropdown-menu">
					<li><a href="#">Rekomendasi</a></li>
					<li class="dropdown-submenu">
                	<a tabindex="-1" href="#">Agama</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<?php echo base_url()."category/c/1" ?>">Islam</a></li>
	                  	<li><a href="<?php echo base_url()."category/c/2" ?>">Kristen</a></li>
	                  	<li><a href="<?php echo base_url()."category/c/3" ?>">Katolik</a></li>
						<li><a href="<?php echo base_url()."category/c/4" ?>">Buddha</a></li>
						<li><a href="<?php echo base_url()."category/c/4" ?>">Hindu</a></li>
						<li><a href="<?php echo base_url()."category/c/4" ?>">Lain lain</a></li>
	                </ul>
             		</li>
             		<li class="dropdown-submenu">
                	<a tabindex="-1" href="#">Bisnis</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<?php echo base_url()."category/c/1" ?>">Pemasaran</a></li>
	                  	<li><a href="<?php echo base_url()."category/c/2" ?>">Startup</a></li>
	                  	<li><a href="<?php echo base_url()."category/c/3" ?>">Ide Bisnis</a></li>
	                </ul>
             		</li>
			  	</ul>
			</li>
			<li class="navbar-hide"><a href="#">Profile</a></li>
		  </ul>

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
		  <a class="navbar-brand" href="<?php echo base_url().""; ?>"><img src="<?php echo base_url()?>assets/img/logo-nav-white.png"></a>

		</div>

		<div class="collapse navbar-collapse" >
		  	<form action="<?php echo base_url()."Search"?>" action="get" class="navbar-form navbar-left form-group-navbar" role="search" id="NavbarSearch">
				<div class="form-group">
				  	<input type="text" class="form-control" placeholder="Search" name="key-in" required>
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		  	</form>
		  <ul class="nav navbar-nav navbar-right">

			<?php
			if ($this->session->logged_in == 1){?>
			<li><a href="<?php echo base_url()?>mybooks/add" data-toggle="tooltip" title="Tambah Buku" data-placement="bottom"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<div class="icon-wrapper">
					<i class="fa fa-envelope fa-5x fa-border icon-grey"></i>
				</div>
			</a></li>

			<li class="dropdown">

			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#"><?php echo $this->session->userdata('my_name'); ?></a></li>
				<li><a href="<?php echo base_url()."Profile"; ?>">Dashboard</a></li>
				<li><a href="<?php echo base_url()."Accounts/settings"; ?>">Settings</a></li>
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
