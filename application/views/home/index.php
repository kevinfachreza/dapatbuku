<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
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

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
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
						          	<img class="<?php echo $numbering?> img-responsive img-responsive-3" src="<?php echo base_url()?>assets/img/banner/<?php echo $data->pict?>" alt="<?php echo $alt?> slide">
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
