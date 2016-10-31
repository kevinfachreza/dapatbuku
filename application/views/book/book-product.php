<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/book/book-product.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	
<div class="container" id="book-container"> 
	<!-- Slider -->
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="col-sm-12 col-xs-12 padding-5px">
				   <div class="col-xs-12 padding-5px" id="slider">
						<!-- Top part of the slider -->
						<div class="row">
							<div class="col-sm-12 " id="carousel-bounding-box">
								<div class="carousel slide" id="ProductCarousel">
									<!-- Carousel items -->
									<div class="carousel-inner" style="height:300px;">
										<div class="active item" data-slide-number="0">
											<img src="<?php echo base_url()?>assets/img/book/book2.jpg">
										</div>

										<div class="item" data-slide-number="1">
											<img src="<?php echo base_url()?>assets/img/book/book1.jpg"></div>

										<div class="item" data-slide-number="2">
											<img src="http://placehold.it/470x480&text=2"></div>

										<div class="item" data-slide-number="3">
											<img src="http://placehold.it/470x480&text=3"></div>

									   
									</div>
									<!-- Carousel nav -->
									<a class="left carousel-control" href="#ProductCarousel" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#ProductCarousel" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 padding-0" id="slider-thumbs">
				<!-- Bottom switcher of slider -->
					<ul class="hide-bullets">
						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-0">
								<img src="<?php echo base_url()?>assets/img/book/book2.jpg">
							</a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-1">
								<img src="<?php echo base_url()?>assets/img/book/book1.jpg">
							</a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
						</li>
					</ul>
				</div>
		<!--/Slider-->
			</div>
			<div class="col-md-8">
				<div class="book-header">
					Perempuan Pencari Tuhan 3
				</div>
				<div class="book-price">
					Rp 50.000
				</div>
				<div class="book-rent">
					<span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span> Sewa : 3500/minggu
				</div>
				<div class="book-barter">
					<span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span> Barter
				</div>
				
				
				<div class="col-md-12 product-item padding-0">
				<div class="product-header">Informasi Buku</div>
					<div class="col-md-4 padding-0">
					<div class="row">
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Kondisi
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Bekas 90%
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Berat
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">1000g
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Stok
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">10
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Tahun Beli
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">2010
							</div>
						</div>
					</div>
					<a href="#"><button type="button" class="btn btn-primary book-review-button">Cek Review Buku Ini</button></a>
					</div>
				</div>
				
				<div id="product-description" class="product-item">
					<div class="product-header">Deskripsi</div>
					<div class="product-description more">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sa agittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit. Donec.
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

	<div id="Seller-Info" class="container">
		<div class="col-md-12 padding-0" >
			<div class="row">
				<div class="col-md-12 header-text-2">Tentang Penjual</div>
				<div class="col-md-12 text-center"><hr></div>
				<div class="col-md-6 padding-default">
					<div class="row">
						<div class="col-md-4">
							<img class="img-responsive" src="https://pbs.twimg.com/profile_images/3743349988/7926e89ff14b79fd94d91a6b823cbd61_400x400.jpeg">
						</div>
						<div class="col-md-8 seller-container">
							<div class="seller-container-text"><span class="seller-username">Amiko</span></div>
							<div class="seller-container-text"><span class="seller-location">Surabaya </span></div>
							<div class="seller-container-text"><span class="text-muted">member sejak </span><span class="seller-member-date">15 Agustus 2016</span></div>
							<div class="seller-send-message">
							<a href="#"><button type="button" class="btn btn-success">Send Message</button></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 padding-default">
					<div class="row">
						<div class="col-md-6 seller-container">
							<div class="seller-contact-container seller-phone"><img src="https://image.freepik.com/free-icon/smartphone_318-33441.jpg" height="25"> 0881231232</div>
							<div class="seller-contact-container seller-whatsapp"><img src="http://diylogodesigns.com/blog/wp-content/uploads/2016/04/whatsapp-official-logo-png-download.png" height="25"> 0881231232</div>
							<div class="seller-contact-container seller-line"><img height="25" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRKRHTY5RL6cHrkwb-nmWX16if2typM10v6LIOVPKNj1b9t8hSC"> @kevinfachreza </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="NewReleaseContainer" class="container">
		<div class="col-md-12 header-text"><h3>New Release</h3></div>
		<div class="col-md-12 text-center"><hr></div>
		<div class="col-md-12 book-container">
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
					<a href="#"><button type="button" class="font-light btn btn-primary">Beli</button></a>
				</div>
			</div>
		</div>
		</div>
	
	<!--/////////////////////CUSTOMER ALSO BOUGHT///////////////////////////////// -->

	
	

	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  
	
	<script type="text/javascript">
  jQuery(document).ready(function($) {
 
        $('#ProductCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#ProductCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#ProductCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

  </script>
  
  
  <script>
  $(document).ready(function() {
	var showChar = 100;
	var ellipsestext = "...";
	var moretext = "selengkapnya";
	var lesstext = "";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

			var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
</script>
  
</body>
</html>