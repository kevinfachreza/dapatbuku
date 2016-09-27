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
	
	
<div class="container" style="margin-top:15vh;margin-bottom:10vh; "> 
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-md-9">
				<div class="col-md-6">
					<div class="col-sm-12 col-xs-12 padding-5px">
					   <div class="col-xs-12 padding-5px" id="slider">
							<!-- Top part of the slider -->
							<div class="row">
								<div class="col-sm-12 " id="carousel-bounding-box">
									<div class="carousel slide" id="myCarousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="active item" data-slide-number="0">
												<img src="http://placehold.it/470x480&text=zero"></div>

											<div class="item" data-slide-number="1">
												<img src="http://placehold.it/470x480&text=1"></div>

											<div class="item" data-slide-number="2">
												<img src="http://placehold.it/470x480&text=2"></div>

											<div class="item" data-slide-number="3">
												<img src="http://placehold.it/470x480&text=3"></div>

										   
										</div>
										<!-- Carousel nav -->
										<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
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
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-xs-3 col-sm-3 padding-5px">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
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
				<div class="col-md-6">
				<div class="book-header">
								Perempuan Pencari Tuhan 3
							</div>
							<div class="book-writer text-muted">
								Pengarang
								</div>
							
							<hr class="thin">
							
							
							
							<div class="book-price-container product-item">
								<div class="row margin-0">
									<div class="col-md-4 book-price-item">
										<div class="book-price-info">
											Jual Buku
										</div>
										<div class="book-price-number">
											Rp 123,100
										</div>
									</div>
									<div class="col-md-4 book-price-item">
										<div class="book-price-info ">
											Sewa Buku
										</div>
										<div class="book-price-number">
											Rp 1000
											<span class="book-price-day">
											/hari
											</span>
										</div>
									</div>
									<div class="col-md-4 book-price-item">
										<div class="book-price-info">
											Barter Buku
										</div>
										<div class="book-price-number"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 product-item padding-0">
							<div class="product-header">Informasi Buku</div>
								<div class="row">
									<div class="col-md-6 table-container">
										<div class="col-md-6  table-header">Kondisi
										</div>
										<div class="col-md-6 table-content">Bekas 90%
										</div>
									</div>
									<div class="col-md-6 table-container">
										<div class="col-md-6 table-header">Berat
										</div>
										<div class="col-md-6 table-content">1000g
										</div>
									</div>
									<div class="col-md-6 table-container">
										<div class="col-md-6 table-header">Stok
										</div>
										<div class="col-md-6 table-content">10
										</div>
									</div>
									<div class="col-md-6 table-container">
										<div class="col-md-6 table-header">Tahun Beli
										</div>
										<div class="col-md-6 table-content">2010
										</div>
									</div>
								</div>
							</div>
							
							<div id="product-description" class="product-item">
								<div class="product-header">Deskripsi</div>
								<p>Apapun yang terjadi malam ini,aku akan terus melanjutkan kehidupanku. Dan mungkin saja untuk selamanya tidak akan pernah kembali lagi ke kota ini
								</p>
							</div>
							
							
							
							<div id="book-buy-store" class="text-center main-bar-item">
								<a href="#"><button type="button" class="btn btn-primary">Tambahkan ke Wishlist</button></a>
								<a href="#"><button type="button" class="btn btn-success">Kunjungi Jual Beli</button></a><br><br>
								<a href="#">Cek Review Buku Ini</a>
							</div>
				</div>
			</div>
			<div class="col-md-3" id="sidebar">
				<div id="about-seller" class="side-bar-item">
					<div class="side-bar-title"> TENTANG PENJUAL </div>
					<img src="http://www.famous-entrepreneurs.com/images/robert-kiyosaki.jpg" class="img-responsive-2" style="margin-bottom:7px">
					<div class="seller-username"> RobertKiyosaki </div>
					<div class="seller-location text-muted"> Jakarta </div>
					<div class="seller-rank text-muted">Business Worm</div>
					<div class="seller-sales">
						<div class="row" id="seller-sales-container">
							<div class="col-md-6">
								<div class="seller-sales-percent">99%</div>
								<div class="seller-sales-info">Transaksi Sukses</div>
							</div>
							<div class="col-md-6 seller-sales-divider">
								<div class="seller-sales-percent">12321</div>
								<div class="seller-sales-info">Buku Terjual</div>
							</div>
						</div>	
					</div>
				</div>
				
				<div id="recommend-book" class="side-bar-item">
					<div class="side-bar-title"> BUKU LAIN MILIK PENJUAL </div>
					<div class="row margin-0">
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						
					</div>
				</div>
				
				<div id="recommend-book" class="side-bar-item">
					<div class="side-bar-title"> BUKU LAIN MILIK PENJUAL </div>
					<div class="row margin-0">
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						<div class="col-md-4 book-side-bar">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2"></a>
						</div>
						
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
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

  </script>
  
</body>
</html>