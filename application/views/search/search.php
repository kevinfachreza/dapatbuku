<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/search/search.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	<div class="container container-blank"  id="book-container">
		<div class="col-md-2 col-sm-3 col-xs-12 container">
			<div class="search-side-item" style="margin-top:0">
				<div class="header-text-2">Cari</div>
				<div class="activity-wrapper">
					<input name="reg-name" type="text" class="form-control" placeholder="Search" style="margin-bottom:0.5em" required  autofocus>
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Kategori</div>
				<div class="activity-wrapper">
					<select class="form-control" id="kategori">
						<?php for($i=0; $i<100; $i++){ ?>
						<option><?php echo $i?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Kategori Lain</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input type="checkbox" value="">Best Seller</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Rekomendasi</label>
					</div>
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Kondisi</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input type="checkbox" value="">Bekas</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Baru</label>
					</div>
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Lokasi</div>
				<div class="activity-wrapper">
					<label for="sel1">Provinsi</label>
					<select class="form-control" id="provinsi">
						<?php for($i=0; $i<100; $i++){ ?>
						<option><?php echo $i?></option>
						<?php } ?>
					</select>
				</div>
				<div class="activity-wrapper">
					<label for="sel1">Kota</label>
					<select class="form-control" id="kota">
						<?php for($i=0; $i<100; $i++){ ?>
						<option><?php echo $i?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Tebal</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="points" min="0" max="100" step="10"  placeholder="Min">
				</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="points" min="0" max="100" step="10"  placeholder="Max">
				</div>
			</div>
			
			<div class="search-side-item">
				<div class="header-text-2">Harga</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="points" min="0" max="100" step="10"  placeholder="Min">
				</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="points" min="0" max="100" step="10"  placeholder="Max">
				</div>
			</div>
			
			<div class="search-side-item border-none">
				<div class="header-text-2">Lainnya</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input type="checkbox" value="">Jual</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Sewa</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="">Barter</label>
					</div>
				</div>
			</div>
			
			<div class="search-side-item border-none">
				<div class="activity-wrapper">
					<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
					<button type="submit" class="btn btn-danger" value="reset" style="margin-left:10px;">Reset</button>
									
				</div>
			</div>
		
		
		</div>
		<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0	">
			<div class="col-md-12 container">
				<div class="col-md-12 header-text-2">Buku yang mungkin kamu cari</div>
				<div class="col-md-12 text-center"><hr></div>
				
				<div class="row">
				<?php for ($i=0;$i<4;$i++){ ?>
					<div class="col-md-3 search-item">
						<div class="book-class-image"><a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg"></a>
						</div>
						<div class="book-class-title"><a href="#">Rudy Habibie : Visioner Murah Meriah</a>
						</div>
					</div>
				<?php } ?>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary" value="submit" style="width:100%;">Cari Yang Lain</button>
					</div>
				</div>
			</div>
			<div class="col-md-12 container">
				<div class="col-md-12 header-text-2">Kategori <span class="search-cat">Best Seller</span>
				<div class="sort-by">
					<select class="form-control" id="kota">
						<?php for($i=0; $i<100; $i++){ ?>
						<option><?php echo $i?></option>
						<?php } ?>
					</select>
				</div>
				</div>
				<div class="col-md-12 text-center"><hr></div>
				
				<div class="row">
				<?php for ($i=0;$i<16;$i++){ ?>
					<div class="col-md-3 search-item">
						<div class="book-image"><a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg"></a>
						</div>
						<div class="book-info-section">
							<div class="book-title"><a href="#">Rudy Habibie : Visioner Murah Meriah</a>
							</div>
							<div class="book-down-section">
								<div class="book-tag">
									<div class="tag-sewa">Sewa</div>
									<div class="tag-barter">Barter</div>
								</div>
								<div class="book-price">Rp 50.000
								</div>
								<div class="book-location">Surabaya
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					<div class="col-md-12">
						<nav aria-label="Page navigation">
						<div class="text-center">
						  <ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							  </a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  <a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
						  </ul>
						</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	

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