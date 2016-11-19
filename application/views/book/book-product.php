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
											<img src="<?php echo $book_image[0]['image_path']; ?>">
										</div>

										<div class="item" data-slide-number="1">
											<img src="<?php echo $book_image[1]['image_path']; ?>"></div>

										<div class="item" data-slide-number="2">
											<img src="<?php echo $book_image[2]['image_path']; ?>"></div>

										<div class="item" data-slide-number="3">
											<img src="<?php echo $book_image[3]['image_path']; ?>"></div>


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
				<div class="col-xs-12 col-sm-12  " id="slider-thumbs">
				<!-- Bottom switcher of slider -->
					<ul class="hide-bullets">
						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-0">
								<img src="<?php echo $book_image[0]['image_path']; ?>">
							</a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-1">
								<img src="<?php echo $book_image[1]['image_path']; ?>">
							</a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-2"><img src="<?php echo $book_image[2]['image_path']; ?>"></a>
						</li>

						<li class="col-xs-3 col-sm-3 padding-5px">
							<a class="thumbnail" id="carousel-selector-3"><img src="<?php echo $book_image[2]['image_path']; ?>"></a>
						</li>
					</ul>
				</div>
		<!--/Slider-->
			</div>
			<div class="col-md-8">
				<div class="book-header">
					<?php echo $book_result[0]['title_u_b']; ?>
				</div>
				<div class="book-price">
					<?php if($book_result[0]['sell_u_b'] == 1)
					{
						echo "Buku ini tidak dijual";
					}
					else
					{
						echo "Rp ".$book_result[0]['price_sell_u_b'];
					}
					 ?>
				</div>
				<div class="book-rent">
					<?php if($book_result[0]['rent_u_b'] == 1){ ?><span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span>Sewa : Rp <?php echo $book_result[0]['price_rent_u_b']; ?>/minggu<?php } ?>
					<?php if($book_result[0]['rent_u_b'] == 0){ ?><span class="book-ok-icon glyphicon glyphicon-remove" aria-hidden="true"></span>Sewa :<?php } ?>
				</div>
				<div class="book-barter">
					<?php if($book_result[0]['barter_u_b'] == 1){ ?><span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span><?php } ?>
					<?php if($book_result[0]['barter_u_b'] == 0){ ?><span class="book-ok-icon glyphicon glyphicon-remove" aria-hidden="true"></span><?php } ?> Barter
				</div>


				<div class="col-md-12 product-item padding-0 ">
				<div class="product-header">Informasi Buku</div>
					<div class="col-md-4  padding-0 ">
					<div class="row">
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Kondisi
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">
								<?php if($book_result[0]['type_u_b'] == 1){	echo "Baru"; }
											else if($book_result[0]['type_u_b'] == 2){ echo "Bekas"; } ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Berat
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">
								<?php echo $book_result[0]['berat_u_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Stok
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">
								<?php echo $book_result[0]['stock_u_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Tahun Beli
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">
								<?php echo $book_result[0]['tahun_beli_u_b']; ?>
							</div>
						</div>
					</div>
					<a href="#"><button type="button" class="btn btn-primary book-review-button">Cek Review Buku Ini</button></a>
					</div>
				</div>

				<div id="product-description" class="product-item">
					<div class="product-header">Deskripsi</div>
					<div class="product-description more">
						<?php echo $book_result[0]['description_u_b']; ?>
					</div>
				</div>



			</div>
		</div>
	</div>
</div>

	<div id="Seller-Info" class="container">
		<div class="col-md-12  " >
			<div class="row">
				<div class="col-md-12 header-text-2">Tentang Penjual</div>
				<div class="col-md-12 text-center"><hr></div>
				<div class="col-md-6 padding-default">
					<div class="row">
						<div class="col-md-4">
							<img class="img-responsive" src="<?php echo $user_result[0]['photo_profile_u']; ?>">
						</div>
						<div class="col-md-8 seller-container">
							<div class="seller-container-text"><span class="seller-username"><?php echo $user_result[0]['username_u']; ?></span></div>
							<div class="seller-container-text"><span class="seller-location"><?php echo $user_result[0]['name']; ?> </span></div>
							<div class="seller-container-text"><span class="text-muted">member sejak </span><span class="seller-member-date"><?php echo $user_result[0]['join_date_u']; ?></span></div>
							<div class="seller-send-message">
							<a href="#"><button type="button" class="btn btn-success">Send Message</button></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 padding-default">
					<div class="row">
						<div class="col-md-6 seller-container">
							<div class="seller-contact-container seller-phone"><img src="https://image.freepik.com/free-icon/smartphone_318-33441.jpg" height="25"> <?php echo $user_result[0]['phone_number_u']; ?></div>
							<div class="seller-contact-container seller-whatsapp"><img src="http://diylogodesigns.com/blog/wp-content/uploads/2016/04/whatsapp-official-logo-png-download.png" height="25"> <?php echo $user_result[0]['whatsapp_u']; ?></div>
							<div class="seller-contact-container seller-line"><img height="25" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRKRHTY5RL6cHrkwb-nmWX16if2typM10v6LIOVPKNj1b9t8hSC"> <?php echo $user_result[0]['line_u']; ?> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="NewReleaseContainer" class="container">
		<div class="col-md-12 header-text-2">New Release</div>
		<div class="col-md-12 text-center"><hr></div>
		<div class="col-md-12 book-container">
			<?php foreach($n_release as $key){ ?>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="<?php echo base_url()."book?title=".$key['slug_title_b']; ?>"><img src="<?php echo $key['photo_cover_b']; ?>" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="<?php echo base_url()."book?title=".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
					<div class="author-container"><a href="" class="text-primary"><?php echo $key['writer']; ?></a></div>
				</div>
			</div>
			<?php } ?>
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
