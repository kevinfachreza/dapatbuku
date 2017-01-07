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
				<form action="<?php echo base_url()."Search"; ?>">
				<div class="header-text-2">Cari</div>
				<div class="activity-wrapper">
					<input name="key-in" type="text" class="form-control" placeholder="Search" style="margin-bottom:0.5em" required  autofocus>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori</div>
				<div class="activity-wrapper">
					<select class="form-control" id="kategori" name="kategori-in">
						<option>-Pilih Kategori-</option>
						<?php foreach($category as $key){ ?>
						<option value="<?php echo $key['id_b_category']; ?>"><?php echo $key['name_b_category']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori Lain</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input name="best-sell-flag" type="checkbox" value="">Best Seller</label>
					</div>
					<div class="checkbox">
					  <label><input name="rekomendasi-flag" type="checkbox" value="">Rekomendasi</label>
					</div>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kondisi</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input type="checkbox" name="bekas-flag" value="">Bekas</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="baru-flag" value="">Baru</label>
					</div>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Lokasi</div>
				<div class="activity-wrapper">
					<label for="sel1">Provinsi</label>
					<select class="form-control" id="provinsi" name="provincies_in">
						<option>-Pilih Provinsi-</option>
						<?php foreach($provincies as $key){ ?>
						<option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
						<?php } ?>
					</select>
				</div>

				<?php if($this->session->province_search != NULL)
				{ ?>
				<div class="activity-wrapper">
					<label for="sel1">Kota</label>
					<select class="form-control" id="kota" name="regencies_in">
						<option value="">-Pilih Kota-</option>
						<?php foreach($location as $key){ ?>
						<option value="<?php echo $key['id']; ?>"><?php echo $key['name'];?></option>
						<?php } ?>
					</select>
				</div>
				<?php } ?>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Tebal</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="page-min-in" min="0" max="100" step="10"  placeholder="Min">
				</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="page-max-in" min="0" max="100" step="10"  placeholder="Max">
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Harga</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="harga-min-in" min="0" max="100" step="10"  placeholder="Min">
				</div>
				<div class="activity-wrapper">
					<input type="number"  class="form-control" name="harga-max-in" min="0" max="100" step="10"  placeholder="Max">
				</div>
			</div>

			<div class="search-side-item border-none">
				<div class="header-text-2">Lainnya</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input type="checkbox" value="1" name="jual-in">Jual</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="1" name="sewa-in">Sewa</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" value="1" name="barter_in">Barter</label>
					</div>
				</div>
			</div>

			<div class="search-side-item border-none">
				<div class="activity-wrapper">
					<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
					<button type="submit" class="btn btn-danger" value="reset" style="margin-left:10px;">Reset</button>

				</div>
			</div>
		</form>

		</div>
		<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0	">
			<div class="col-md-12 container">
				<div class="col-md-12 header-text-2">Buku yang mungkin kamu cari</div>
				<div class="col-md-12 text-center"><hr></div>

				<div class="row">
				<?php if(count($book_result > 0)){
					$i = 0;
				foreach($book_result as $key){
					if($i >= 4){
						break;
					}?>
					<div class="col-md-3 search-item">
						<div class="book-class-image"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo $key['photo_cover_b']; ?>"></a>
						</div>
						<div class="book-class-title"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><?php echo $key['title_b']; ?></a>
						</div>
					</div>
				<?php
						$i++; }
					}
						 if(count($book_result) == 0){?>
							 <div class="text-center">
	 							Maaf, hasil pencarian tidak ditemukan...
	 						</div>
							<?php } ?>
					<div class="col-md-12">
						<a href="<?php echo base_url()."search/book"; ?>" ><button type="submit" class="btn btn-primary" value="submit" style="width:100%;">Cari Yang Lain</button></a>
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

				<?php
				if($has_result == 1){
					if(count($product_result) > 0){
						foreach ($product_result as $key) { ?>
							<div class="col-md-3 search-item">
								<div class="book-image"><a href="<?php echo base_url()."book/product/".$key['slug_title_u_b'];?>"><img src="<?php echo $key['main_image_u_b']?>"></a>
								</div>
								<div class="book-info-section">
									<div class="book-title"><a href="<?php echo base_url()."book/product/".$key['slug_title_u_b'];?>"><?php echo $key['title_u_b']; ?></a>
									</div>
									<div class="book-down-section">
										<div class="book-tag">
											<?php if($key['rent_u_b'] == 1){ ?>
											<div class="tag-sewa">Sewa</div>
											<?php } if($key['barter_u_b'] == 1){ ?>
											<div class="tag-barter">Barter</div>
											<?php } ?>
										</div>
										<div class="book-price"><?php echo $key['price_sell_u_b']; ?>
										</div>
										<div class="book-location"><?php echo $key['name']; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
									<a href="<?php echo base_url()."search/book"; ?>" ><button type="submit" class="btn btn-primary" value="submit" style="width:100%;">Cari Yang Lain</button></a>
							</div>
					<?php
							}
					}
					?>
				<?php
					if(count($product_result) == 0) {	?>
						<div class="text-center">
							Maaf, hasil pencarian tidak ditemukan...
						</div>
					 <?php }
					}
							else{
				 ?>
				 	<div class="text-center">
						Silahkan masukkan Kategori pencarian
					</div>
					<?php
							}
					?>
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
