<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/book/book-class.css">

</head>

<body>
	<?php echo $navbar; ?>


	<!--/////////////////////BOOK///////////////////////////////// -->
	<hr>
	<?php

	// print_r($book_data);
	// exit();
	 ?>
<div class="container" id="book-container">
	<!-- Slider -->
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2">
				<div class="col-sm-12 col-xs-12 padding-5px">
					<img src="<?php echo base_url().$book_data[0]['photo_cover_b']; ?>" class="img-responsive-2">
					<div class="col-md-12 info-small" style="padding:0;">
								<div class="col-md-12 book-star text-center">
								<a href="#review-form"><button type="button" class="btn btn-primary">Nilai Buku Ini</button></a>
								</div>
							</div>
				</div>
		<!--/Slider-->
			</div>
			<div class="col-md-10">
				<div class="col-md-12 book-title">
					<?php echo $book_data[0]['title_b']; ?>
				</div>
				<div class="col-md-12 book-writer">
					<span class="text-muted">oleh</span> <?php echo $book_data[0]['writer']; ?>
				</div>
				<div class="col-md-12 book-rating">
					<div class="book-rating-star">
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="book-rating-text"><?php echo $book_rating[0]['avg']; ?></span>
						<span class="book-rating-count"><?php echo $book_data[0]['total_ratings']; ?> Rating</span>
						<span class="book-review-count"><?php echo $book_data[0]['total_reviews_b']; ?> Review</span>
					</div>
				</div>


				<div class="col-md-12">
				<div class="book-header">Informasi Buku</div>
					<div class="col-md-4 padding-0">
					<div class="row">
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">ISBN
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['no_isbn_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Jumlah Halaman
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['pages']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Cetakan Pertama
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['date_published']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Bahasa
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['language_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Kategori
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php foreach($book_category as $key){
								echo $key['name_b_category']; ?> , <?php
							}?>
							</div>
						</div>

						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Cover
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['cover_type_b']; ?>
							</div>
						</div>
					</div>
					</div>
				</div>

				<div id="book-description" class="col-md-12 product-item">
					<div class="book-header">Deskripsi</div>
					<div class="book-description more">
						<?php echo $book_data[0]['description_b']; ?>
					</div>
				</div>

				<div id="book-buy-store" class="col-md-12 text-center main-bar-item">
					<a href="#"><button type="button" class="btn btn-primary">Tambahkan ke Wishlist</button></a>
					<a href="#"><button type="button" class="btn btn-success">Kunjungi Jual Beli</button></a>
				</div>

			</div>
		</div>
	</div>
</div><!---
	<div id="writer-Info" class="container">
		<div class="col-md-12 0" >
			<div class="row">
				<div class="col-md-12 header-text-2">Tentang Penulis</div>
				<div class="col-md-12 text-center"><hr></div>
				<div class="col-md-12 padding-default">
					<div class="row">
						<div class="col-md-2">
							<img class="img-responsive" src="<?php echo base_url().$writer_data['photo_writer']; ?>">
						</div>
						<div class="col-md-10">
							<p> <?php echo $writer_data['description_writer']; ?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
--->
	<div id="recommended-book" class="container">
		<div class="col-md-12 header-text-2">Buku Rekomendasi</div>
		<div class="col-md-12 text-center"><hr></div>
		<div class="col-md-12 book-container">
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="margin-bot-1 home-book-img">
					<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
				</div>
				<div class="text-center">
					<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
					<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
				</div>
			</div>
		</div>
	</div>

	<div id="ulasan-pembaca" class="container">
		<div class="col-md-12" >
			<div class="col-md-12 header-text-2">Ulasan Pembaca</div>
			<div class="col-md-12 text-center"><hr></div>
			<div class="col-md-8">
				<?php foreach($review_data as $key){
					?>
				<div class="review-wrapper">
					<div class="review-date"><?php echo $key['date_b_review']; ?></div>
					<div class="review-title review-item"><?php echo $key['title_b_review']; ?></div>
					<div class="review-rating review-item">
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#fff;" aria-hidden="true"></span>
						<span class="text-muted" style="padding-left:7px">oleh </span>
						<span class="review-username review-item"><?php echo $key['username_u']; ?></span>
					</div>
					<div class="review-content more">
					<?php echo $key['content_b_review']; ?>
					</div>
					<div class="review-report"><a href="#"><button type="button" class="btn btn-danger  btn-xs">Report</button></a></div>
				</div>
				<?php
					}
					?>
				<!---<div class="review-wrapper">
					<div class="review-date">7 Oktober 2016</div>
					<div class="review-title review-item">Buku terbaik yang pernah saya baca</div>
					<div class="review-rating review-item">
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#fff;" aria-hidden="true"></span>
						<span class="text-muted" style="padding-left:7px">oleh </span>
						<span class="review-username review-item">Hari Setiawan</span>
					</div>
					<div class="review-content more">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel tellus gravida, posuere sapien eu, elementum ex. Ut mattis neque mi, in volutpat magna auctor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eget odio in erat consequat luctus. Nulla tincidunt dictum dui, at tincidunt mi scelerisque accumsan. Aenean vehicula massa vitae urna dapibus fringilla. Maecenas fringilla nunc id neque consectetur, sed ullamcorper erat venenatis. Ut nec blandit ipsum. Sed a tristique est. Donec ultrices eros ac nunc elementum, vel condimentum velit hendrerit. Morbi faucibus mattis faucibus. Sed fringilla justo felis, nec pretium lectus consequat sit amet.
					</div>
					<div class="review-report"><a href="#"><button type="button" class="btn btn-danger  btn-xs" >Report</button></a></div>
				</div>

				<div class="review-wrapper">
					<div class="review-date">7 Oktober 2016</div>
					<div class="review-title review-item">Buku terbaik yang pernah saya baca</div>
					<div class="review-rating review-item">
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#fff;" aria-hidden="true"></span>
						<span class="text-muted" style="padding-left:7px">oleh </span>
						<span class="review-username review-item">Hari Setiawan</span>
					</div>
					<div class="review-content more">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel tellus gravida, posuere sapien eu, elementum ex. Ut mattis neque mi, in volutpat magna auctor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eget odio in erat consequat luctus. Nulla tincidunt dictum dui, at tincidunt mi scelerisque accumsan. Aenean vehicula massa vitae urna dapibus fringilla. Maecenas fringilla nunc id neque consectetur, sed ullamcorper erat venenatis. Ut nec blandit ipsum. Sed a tristique est. Donec ultrices eros ac nunc elementum, vel condimentum velit hendrerit. Morbi faucibus mattis faucibus. Sed fringilla justo felis, nec pretium lectus consequat sit amet.
					</div>
					<div class="review-report"><a href="#"><button type="button" class="btn btn-danger  btn-xs">Report</button></a></div>
				</div>


				<div class="review-wrapper review-form" id="review-form">
					<div class="row">
						<div class="col-md-2">
							<img class="img-responsive" src="https://pbs.twimg.com/profile_images/3743349988/7926e89ff14b79fd94d91a6b823cbd61_400x400.jpeg">
						</div>
						--->
						<div class="col-md-10">
							<label for="comment">
								<div class="rating">
								Rate This Book &nbsp;&nbsp;
								<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><span class=" glyphicon glyphicon-star" aria-hidden="true"></span> </label></span>
								<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								</div>
							</label>
							<form action="<?php echo base_url();?>auth/do_register" method="POST">
							<textarea class="form-control" rows="5" id="comment"></textarea>
							<button type="submit" class="btn btn-primary" value="Submit" style="margin-top:10px;float:right">Submit</button>
							</form>
						</div>
					</div>
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
	var showChar = 480;
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

<script type="text/javascript">

$(document).ready(function(){
//  Check Radio-box
    $(".rating input:radio").attr("checked", false);
    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
    function(){
        var userRating = this.value;
        alert(userRating);
    });
});

  </script>



</body>
</html>
