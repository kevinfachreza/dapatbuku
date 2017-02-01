	

	<nav class="navbar navbar-default navbar-padding navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
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
			</a></li>

			<?php $data = $this->session->userdata();?>

			<li class="dropdown">

			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url()."Profile"; ?>">My Profile</a></li>
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
