<!doctype html>

<html lang="en">
<head>

	<title><?php echo $page_title ?> - Dapatbuku</title>
	<meta charset="utf-8">
	<meta name="description" content="Marketplace Buku Terbesar di Surabaya">
	<meta name="author" content="SitePoint">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/simple-sidebar.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dapatbuku.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/index.css">
	<?php echo $header ?>

</head>

<body>
	<?php echo $navbar; ?>



<div id="wrapper" class="">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
           <?php echo $sidebar ?>
        </div>
        <!-- /#sidebar-wrapper -->


	<div class="dim"  id="dim">
	</div>  

        <!-- Page Content -->
        	<div id="page-content-wrapper">
            	<div class="container-fluid">
                	<div class="row">
					<div id="main" class="col-md-12 container-padding">

						<?php echo $content; ?>

					</div>
           		</div>
          	</div>

	<?php echo $footer; ?>

        </div>
        <!-- /#page-content-wrapper -->

</div>


	
<script>
$("#menu-toggle").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled");
   $("#main").toggleClass("toggled");
   $("#dim").toggleClass("toggled");
});
</script>

</body>
</html>
