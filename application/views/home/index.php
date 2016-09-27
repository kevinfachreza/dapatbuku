<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-gallery.css">
  

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////HEADER///////////////////////////////// -->
	
	<div class="container" style="margin-top:10vh; ">
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item height-item active">
          <img class="first-slide" src="<?php echo base_url()?>assets/img/banner/banner1.jpg" class="img-responsive" alt="First slide">
         
        </div>
        <div class="item height-item">
          <img class="second-slide" src="<?php echo base_url()?>assets/img/banner/banner1.png" class="img-responsive" alt="Second slide">
         
        </div>
        <div class="item height-item">
          <img class="third-slide" src="<?php echo base_url()?>assets/img/banner/banner2.png" class="img-responsive"  alt="Third slide">
         
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	</div>
	
	<!--/////////////////////HEADER///////////////////////////////// -->
	
	<!--/////////////////////BODY///////////////////////////////// -->
	<div class="container">
	<div id="BannerContainer1">
		<div class="col-md-12 margin-bot-1" style="padding:0px;">
			<div class="row">
				<div class="col-md-6 margin-bot-1">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner1.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
				<div class="col-md-6 margin-bot-1">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner2.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<div id="BestSellerContainer">
		<div class="col-md-12 text-center"><h3>Best Seller</h3></div>
		<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
		<div class="col-md-12 ">
			<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="Categories">
			  <div class="carousel-inner carousel-inner3">
				
				<div class="item active ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#1</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#2</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#3</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book7.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#4</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book6.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#5</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book5.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#6</div>
						</div>
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book4.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#7</div>
						</div>
						<div class="margin-bot-1 home-book-img ">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				
			  </div>
			  <a class="left carousel-control" href="#Categories" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#Categories" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
		
	<div id="NewReleaseContainer">
		<div class="col-md-12 text-center"><h3>New Release</h3></div>
		<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
		<div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="NewRelease">
			  <div class="carousel-inner carousel-inner3">
				
				<div class="item active ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book7.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book6.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book5.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book4.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img ">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
						</div>
					</div>
				</div>
				
			  </div>
			  <a class="left carousel-control" href="#NewRelease" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#NewRelease" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
		</div>
	
	<div id="BestSellerContainer">
		<div class="col-md-12 text-center"><h3>Yuk Tukar Poin</h3></div>
		<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
		<div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="Poin">
			  <div class="carousel-inner carousel-inner3">
				
				<div class="item active ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book4.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book5.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book6.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book7.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class=""><a href="" class="text-primary">Judul</a></div>
							<div class=""><a href="" class="text-muted">Pengarang</a></div>
							<div class=""><p class="text-third">500 Pts</p></div>
						</div>
					</div>
				</div>
				
			  </div>
			  <a class="left carousel-control" href="#Poin" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#Poin" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
	
	
	<div class="col-md-12 margin-bot-3">
		<div id="News">
			<div class="col-md-12 text-center"><h3>News</h3></div>
			<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
			<div class="col-md-12">
				<div class="row">
					<a href="">
					<div class="col-md-8 padding-5px">
						<div class="col-md-12 padding-0 news-item">
							<div class="col-md-12 news-height padding-0">
								<img src="<?php echo base_url()?>assets/img/banner/news-4.jpg" class="img-responsive-2">
							</div>
						
							<div class="col-md-12 padding-20px home-news-title-1-2">
								<div class="text-center">
									<div class="text-primary text-bold">RUDY</div>
									<div class="text-muted">Habibie Oh Habibie!</div>
								</div>
							</div>
							<div class="home-news-title-2"><span>Habibie Oh Habibie!</span></div>
						</div>
					</div>
					</a>
					<a href="">
						<div class="col-md-4 padding-5px">
							<div class="col-md-12 padding-0 news-item">
								<div class="col-md-12 news-height padding-0">
									<img src="<?php echo base_url()?>assets/img/banner/news-5.jpg" class="img-responsive-2">
								</div>
								<div class="col-md-12 padding-20px home-news-title-1-2">
									<div class="text-center">
										<div class="text-primary text-bold">DETECTIVE CONAN</div>
										<div class="text-muted">Conan Tamat? Shinichi Temui Ajalnya</div>
									</div>
								</div>
								<div class="home-news-title-1"><span>Conan Tamat? Shinichi Temui Ajalnya</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<a href="">
						<div class="col-md-4 padding-5px">
							<div class="col-md-12 padding-0 news-item">
								<div class="col-md-12 news-height padding-0">
									<img src="<?php echo base_url()?>assets/img/banner/news-3.jpg" class="img-responsive-fit">
								</div>
								<div class="col-md-12 padding-20px">
									<div class="text-center">
										<div class="text-primary text-bold">HARRY POTTER AND THE CURSED CHILD</div>
										<div class="text-muted">Buku Harry Potter And The Cursed Child Ludes Terjual Dalam Waktu 24 Jam</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-md-4 padding-5px">
							<div class="col-md-12 padding-0 news-item">
								<div class="col-md-12 news-height padding-0">
									<img src="<?php echo base_url()?>assets/img/banner/news-1.jpg" class="img-responsive-fit">
								</div>
								<div class="col-md-12 padding-20px">
									<div class="text-center">
										<div class="text-primary text-bold">HARRY POTTER AND THE CURSED CHILD</div>
										<div class="text-muted">Buku Harry Potter And The Cursed Child Ludes Terjual Dalam Waktu 24 Jam</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="">
						<div class="col-md-4 padding-5px">
							<div class="col-md-12 padding-0 news-item">
								<div class="col-md-12 news-height padding-0">
									<img src="<?php echo base_url()?>assets/img/banner/news-2.jpg" class="img-responsive-fit">
								</div>
								<div class="col-md-12 padding-20px">
									<div class="text-center">
										<div class="text-primary text-bold">HARRY POTTER AND THE CURSED CHILD</div>
										<div class="text-muted">Buku Harry Potter And The Cursed Child Ludes Terjual Dalam Waktu 24 Jam</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="BannerContainer2">
		<div class="col-md-12 margin-bot-10" style="padding:0px;">
			<div class="row">
				<div class="col-md-6 margin-bot-1">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner1.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
				<div class="col-md-6 margin-bot-1">
					<img src="<?php echo base_url()?>assets/img/banner/mini-banner2.jpg" style="object-fit:cover;min-width:100%" class="img-responsive">
				</div>
			</div>
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
  
  for (var i=0;i<2;i++) {
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