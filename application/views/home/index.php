<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-gallery.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/index.css">

</head>

<body>
	<?php echo $navbar; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#regisModal").modal('show');
    });
</script>
<?php if($register == 1) {?>
<div id="regisModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Registrasi Selesai</h4>
            </div>
            <div class="modal-body">
                <p>Silahkan login untuk mulai menggunakan dapatbuku</p>
				<form action="<?php echo base_url();?>Auth/do_login" method="POST">
					<input name="log-user_in" type="text"  class="form-control" placeholder="Masukkan Email anda" style="margin-bottom:0.5em" required autofocus>
					<input name="log-pass" type="password" class="form-control" placeholder="Masukkan Password anda" style="margin-bottom:1em" required  autofocus>
					<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color btn-primary">LOGIN</button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div id="wrapper" class="">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<?php
			if ($this->session->logged_in == 1){?>
            	<div class="row profile-container hidden-md hidden-lg" style="margin-bottom: 15px;">
            		<div class="col-md-12">
					<?php $data = $this->session->userdata();
						$data = $data['userdata'][0];
					?>
					<img src="<?php echo base_url()?><?php echo $data->photo_profile_u?>" class="img-circle" height="50">
            		</div>
            		<div class="col-md-12" style="margin-top: 10px">
            			<?php echo $data->username_u ?><br>
            			<?php echo $data->email_u ?>
            		</div>
            	</div>
            	<?php } ?>
			<li><a href="<?php echo base_url()?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a> </li>
            	<li class="hidden-md hidden-lg"><a href="<?php echo base_url()?>search"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Search</a></li>
            	<?php
			if ($this->session->logged_in == 1){?>
			<li><a href="<?php echo base_url()?>profile"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>My Profile</a></li>
			<li><a href="<?php echo base_url()?>mybooks/manager/"><i class="fa fa-book fa-fw" aria-hidden="true"></i>My Books</a></li>
			<?php } ?>
			<li><a href="<?php echo base_url(); ?>book/best_seller"><i class="fa fa-certificate fa-fw" aria-hidden="true"></i>Best Seller</a></li>
			<li><a href="<?php echo base_url(); ?>book/new_release"><i class="fa fa-bolt fa-fw" aria-hidden="true"></i>New Release</a></li>
			<li><a href="<?php echo base_url(); ?>book/most_viewed"><i class="fa fa-fire fa-fw" aria-hidden="true"></i>Most Viewed</a></li>

            	<?php
			if ($this->session->logged_in == 1){?>
    			<li role="separator" class="hidden-md hidden-lg divider"></li>
			<li class="hidden-md hidden-lg" ><a href="<?php echo base_url().'accounts/settings'; ?>"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</a></li>
			<li class="hidden-md hidden-lg" ><a href="<?php echo base_url().'Profile/logging_out'; ?>"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Log-out</a></li>

            	<?php } else { ?>
    			<li role="separator" class="hidden-md hidden-lg divider"></li>
			<li><a href="<?php echo base_url()?>login"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Login</a></li>
			<li><a href="<?php echo base_url()?>register"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>Register</a></li>

            	<?php } ?>


    			<li role="separator" class="divider"></li>
               <li class="sidebar-header"><a href="#">CATEGORIES </a></li>
               <?php foreach($nav_category as $key){?>
				<li>
					<a href="<?php echo base_url().'category/'.$key['slug_category'];?>"><?php echo $key['name_b_category']; ?></a>
     			</li>
			<?php } ?>
              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
				<div id="main" class="col-md-12 container-padding">
				<div id="HeaderContainer" class="row" >

				 	<div id="HeaderCarousel" class="carousel slide" data-ride="carousel">
			      		<ol class="carousel-indicators">
			        			<li data-target="#HeaderCarousel" data-slide-to="0" class="active"></li>

							<?php for($i=1;$i<count($banner);$i++){?>
								<li data-target="#HeaderCarousel" data-slide-to="<?php echo $i ?>"></li>
							<?php } ?>
			     		</ol>
				      	<div class="carousel-inner" role="listbox">
				     	<?php $i = 1;?>
				 		<?php foreach($banner as $data){?>
					      	<?php
						     if($i==1) {$numbering = 'first';$alt='First';$active='active';}
						     else if($i==2) {$numbering = 'second';$alt='Second';}
						     else if($i==3) {$numbering = 'third';$alt='Third';}
						     else if($i==4) {$numbering = 'fourth';$alt='Fourth';}
						     else if($i==5) {$numbering = 'fifth';$alt='Fifth';}
					      	$numbering.='-slide';
					       	?>

						    <div class="item height-item <?php echo $active?>">
					      		<a href="<?php echo $data->link?>" target="_blank">
						          	<img class="<?php echo $numbering?> img-responsive img-responsive-2" src="<?php echo base_url()?>assets/img/banner/<?php echo $data->pict?>" alt="<?php echo $alt?> slide">
					       		</a>
						    </div>

						    <?php $i++; $active='';?>
				        	<?php } ?>
				      	</div>
					     <a class="left carousel-control" href="#HeaderCarousel" role="button" data-slide="prev">
					        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					        	<span class="sr-only">Previous</span>
					     </a>
				      	<a class="right carousel-control" href="#HeaderCarousel" role="button" data-slide="next">
				        		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        		<span class="sr-only">Next</span>
				      	</a>
			    		</div>
				</div>
				<div id="BestSellerContainer" class="row custom-container">
					<div class="col-md-12 header-text"><h3>Best Seller</h3></div>
					<div class="col-md-12 text-center"><hr></div>
					<div class="col-md-12 book-container">
						<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="Categories">
						  <div class="carousel-inner carousel-inner3">
							<?php
								$i = 0;
								foreach ($best_sell as $key) {
										if($i == 0){
									?>
							<div class="item active ">
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="text-center">
										<div class="text-size-22 text-header margin-bot-1"><?php echo $i+1; ?></div>
									</div>
									<div class="margin-bot-1 home-book-img">
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>">
										<img src="<?php echo $key['thumb_cover_b']; ?>" class="img-responsive-3" height="200">
										</a>
									</div>
									<div class="text-center">
										<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
										<div class="author-container"><?php echo $key['writer'] ?></div>
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><button type="button" class="font-light btn btn-primary">Beli</button></a>
									</div>
								</div>
							</div>
							<?php }
									else{
							?>
							<div class="item ">
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="text-center">
										<div class="text-size-22 text-header margin-bot-1"><?php echo $i+1; ?></div>
									</div>
									<div class="margin-bot-1 home-book-img">
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo $key['thumb_cover_b']; ?>" class="img-responsive-3" height="200"></a>
									</div>
									<div class="text-center">
										<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
										<div class="author-container"><?php echo $key['writer']; ?></div>
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><button type="button" class="font-light btn btn-primary">Beli</button></a>
									</div>
								</div>
							</div>
							<?php }
								$i++;
							}
							?>
						  </div>
						  <a class="left carousel-control" href="#Categories" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						  <a class="right carousel-control" href="#Categories" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div id="NewReleaseContainer" class="custom-container row">
					<div class="col-md-12 header-text"><h3>New Release</h3></div>
					<div class="col-md-12 text-center"><hr></div>
					<div class="col-md-12 book-container">
						<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="NewRelease">
						  <div class="carousel-inner carousel-inner3">
								<?php $i = 0;
									foreach($new_release as $key){
										if($i == 0){
								?>
							<div class="item active ">
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="margin-bot-1 home-book-img">
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>">
										<img src="<?php echo $key['thumb_cover_b']; ?>" class="img-responsive-3" height="200">
									</div>
									<div class="text-center">
										<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
										<div class="author-container"><?php echo $key['writer']; ?></div>
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><button type="button" class="font-light btn btn-primary">Beli</button></a>
									</div>
								</div>
							</div>
								<?php }
									else {
								?>
							<div class="item ">
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="margin-bot-1 home-book-img">
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo $key['thumb_cover_b']; ?>" class="img-responsive-3" height="200">
									</div>
									<div class="text-center">
										<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
										<div class="author-container"><?php echo $key['writer']; ?></div>
										<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><button type="button" class="font-light btn btn-primary">Beli</button></a>
									</div>
								</div>
							</div>
							<?php
								}
								$i++;
							}
							?>

						  </div>
						  <a class="left carousel-control" href="#NewRelease" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						  <a class="right carousel-control" href="#NewRelease" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
						</div>
					</div>
					</div>
				</div>
                </div>
            </div>

	<?php echo $footer; ?>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
	<script type="text/javascript">
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<3;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});
  </script>

  	<script type="text/javascript">
$('.carousel[data-type="multi-2"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});




  </script>

<script>
	$(document).ready(function() {
  		 $(".carousel-inner").swiperight(function() {
    		  $(this).parent().carousel('prev');
	    		});
		   $(".carousel-inner").swipeleft(function() {
		      $(this).parent().carousel('next');
	   });
	});
	</script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#main").toggleClass("toggled");
    });
    </script>

</body>
</html>
