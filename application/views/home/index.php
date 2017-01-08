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


	<!--/////////////////////HEADER///////////////////////////////// -->

	<div id="HeaderContainer" class="container" >
	 <div id="HeaderCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
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
	      		<a href="<?php echo $data->link?>">
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
    </div><!-- /.carousel -->
	</div>

	<!--/////////////////////HEADER///////////////////////////////// -->

	<!--/////////////////////BODY///////////////////////////////// -->

	<div id="BannerContainer1" class="custom-container container">
		<div class="col-md-12 padding-0" >
			<div class="row">
				<div class="col-md-6 padding-default">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner1.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
				<div class="col-md-6 padding-default">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner2.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<div id="BestSellerContainer" class="custom-container container">
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
							<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo $key['photo_cover_b']; ?>" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
							<div class="author-container"><a href="#" class="text-primary"><?php echo $key['writer'] ?></a></div>
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
							<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo base_url().$key['photo_cover_b']; ?>" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
							<div class="author-container"><a href="#" class="text-primary"><?php echo $key['writer']; ?></a></div>
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

	<div id="NewReleaseContainer" class="custom-container container">
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
							<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo base_url().$key['photo_cover_b']; ?>" class="img-responsive-2"></a>
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
							<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo base_url().$key['photo_cover_b']; ?>" class="img-responsive-2"></a>
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
	<?php echo $footer; ?>


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


</body>
</html>
