<div class="container-padding">
	<div class="row">
		<div class="col-md-12">
			<div class="custom-container row" id="book-container">
				<!-- Slider -->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="col-sm-12 col-xs-12 padding-5px">
							   <div class="col-xs-12 padding-5px" id="slider">
									<div class="row">
										<div class="col-sm-12 " id="carousel-bounding-box">
											<div class="carousel slide" id="ProductCarousel">
												<div class="carousel-inner" style="height:300px;">
													<?php $i = 0;
														foreach($book_image as $key){
														?>
													<div class="<?php if($i == 0)	echo "active"; ?> item" data-slide-number="<?php echo $i?>">
														<img src="<?php echo base_url().$key['image_path']; ?>" class="img-responsive-2">
													</div>
													<?php
														$i++;
													} ?>
												</div>
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
									<?php $i=0; ?>
									<?php foreach($book_image as $key){	?>
									<?php $carousel = 'carousel-selector-';
									$carousel .= $i; ?>
									<li class="col-xs-3 col-sm-3 padding-5px">
										<a class="thumbnail" id="<?php echo $carousel ?>">
											<img src="<?php echo base_url().$key['image_thumb']; ?>">
										</a>
									</li>
									<?php $i++; ?>
									<?php } ?>
								</ul>
							</div>
					<!--/Slider-->
						</div>
						<div class="col-md-8">
							<div class="book-header">
								<?php echo $book_result[0]['title_u_b']; ?>
							</div>
							<div class="book-price">

								<?php if($book_result[0]['price_sell_u_b'] == "Rp 0")
								{
									echo "Buku ini tidak dijual";
								}
								else
								{
									echo $book_result[0]['price_sell_u_b'];
								}
								 ?>
							</div>
							<div class="book-rent">
								<?php if($book_result[0]['price_rent_u_b'] == "Rp 0"){ ?><span class="book-ok-icon glyphicon glyphicon-remove" aria-hidden="true"></span> Sewa<?php } ?>
								<?php if($book_result[0]['price_rent_u_b'] != "Rp 0"){ ?><span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span> Sewa : <?php echo $book_result[0]['price_rent_u_b']; ?>/minggu<?php } ?>
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
									<!-- <div class="col-md-12 table-container">
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">Berat
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">
											<?php echo $book_result[0]['berat_u_b']; ?>
										</div>
									</div> -->
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
								<?php if(!empty($book_origin)){ ?>
								<a href="<?php echo base_url()."book/b/".$book_origin[0]->slug_title_b; ?>"><button type="button" class="btn btn-primary book-review-button">Cek Review Buku Ini</button></a>
								<?php } ?>
								</div>
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

			<div id="Seller-Info" class=" custom-container row">
				<div class="col-md-12" >
					<div class="row">
						<div class="col-md-12 header-text-2">Tentang Penjual</div>
						<div class="col-md-12 text-center"><hr></div>
						<div class="col-md-6 padding-default">
							<div class="row">
								<div class="col-md-4">
									<img class="img-responsive" style="height:200px" src="<?php echo base_url().$user_result[0]['photo_profile_u']; ?>">
								</div>
								<div class="col-md-8 seller-container">
									<div class="seller-container-text"><span class="seller-username"><?php echo $user_result[0]['username_u']; ?></span></div>
									<div class="seller-container-text"><span class="seller-location"><?php echo $user_result[0]['name']; ?> </span></div>
									<div class="seller-container-text"><span class="text-muted">member sejak </span><span class="seller-member-date"><?php echo $user_result[0]['created_at']; ?></span></div>
									<div class="seller-send-message">

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 padding-default">
							<div class="row">
								<div class="col-md-6 seller-container">
									<div class="seller-contact-container seller-phone"><img src="<?php echo base_url()?>assets/img/socialmedia/phone-2.png" height="25"> <?php echo $user_result[0]['phone_number_u']; ?></div>
									<div class="seller-contact-container seller-whatsapp"><img src="<?php echo base_url()?>assets/img/socialmedia/whatsapp-2.png" height="25"> <?php echo $user_result[0]['whatsapp_u']; ?></div>
									<div class="seller-contact-container seller-line"><img height="25" src="<?php echo base_url()?>assets/img/socialmedia/line-2.png"> <?php echo $user_result[0]['line_u']; ?> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="NewReleaseContainer" class=" custom-container row">
			<div class="col-md-12 header-text-2">Buku Sejenis</div>
			<div class="col-md-12 text-center"><hr></div>
			<div class="col-md-12 book-container">
				<?php foreach($n_release as $key){ ?>
				<div class="col-md-2 col-sm-4 col-xs-12">
					<div class="margin-bot-1 home-book-img">
						<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo base_url().$key['photo_cover_b']; ?>" class="img-responsive-2"></a>
					</div>
					<div class="text-center">
						<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
						<div class="author-container"><a href="#" class="text-primary"><?php echo $key['writer']; ?></a></div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		</div>
	</div>
</div>




	
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