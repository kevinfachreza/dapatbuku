<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	<div class="container" style="margin-top:10vh; ">
		<div class="col-md-12 ">
			<div class="row">
				<div class="col-md-2">
					<div class="book-image">
						<img src="<?php echo base_url()?>assets/img/book/book3.jpg" class="img-responsive-2">
					</div>
					
				</div>
				<div class="col-md-10">
					<div class="book-header">
						Perempuan Pencari Tuhan 3
					</div>
					<div class="book-writer text-muted">
						Pengarang
					</div>
						<div class="col-md-2 book-star">
							<div class="rating">
								<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> </label></span>
								<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
								<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
							</div>
							<span class="book-rating">5.0</span>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--/////////////////////CUSTOMER ALSO BOUGHT///////////////////////////////// -->
	<div class="container">
	
	<div id="BestSellerContainer">
		<div class="col-md-12 text-center"><h3>Best Seller</h3></div>
		<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
		<div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="Categories">
			  <div class="carousel-inner carousel-inner3">
				
				<div class="item active ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="text-center">
							<div class="text-size-22 text-header margin-bot-1">#1</div>
						</div>
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200 ">
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
		
	<div class="col-md-12">
	<div id="NewReleaseContainer">
		<div class="col-md-12 text-center"><h3>New Release</h3></div>
		<div class="col-md-12 text-center"><hr class="width-10 bg-color-org" style="margin-top:0"></div>
		<div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" data-type="multi-2" data-interval="0" id="NewRelease">
			  <div class="carousel-inner carousel-inner3">
				
				<div class="item active ">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200">
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
						<div class="margin-bot-1 height-200 ">
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
	</div><!--END OF COL MD-9-->
	
	
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
							<div style="position:absolute;top:70%;left:20px;color:white;font-weight:bold;font-size:10vh">Habibie Oh Habibie</div>
						</div>
					</div>
					</a>
					<a href="">
						<div class="col-md-4 padding-5px">
							<div class="col-md-12 padding-0 news-item">
								<div class="col-md-12 news-height padding-0">
									<img src="<?php echo base_url()?>assets/img/banner/news-5.jpg" class="img-responsive-2">
								</div>
								<div style="position:absolute;top:10%;left:20px;color:white;font-weight:bold;font-size:7vh">Conan Tamat? Shinichi Temui Ajalnya</div>
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
	
	
	</div>

	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  
	
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