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
				<form action="<?php echo base_url()."Search/product"?>" method="get" id="search_form" ?>
				<div class="header-text-2">Cari</div>
				<div class="activity-wrapper">
					<input name="key-in" type="text" class="form-control" placeholder="Search" style="margin-bottom:0.5em"
								 value="<?php if($key_before[0] != NULL) echo $key_before[0]; ?>" autofocus>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori</div>
				<div class="activity-wrapper">
					<select class="form-control" id="kategori" name="category-in">
						<option value="">-Pilih Kategori-</option>
						<?php foreach($category as $key){ ?>
						<option value="<?php echo $key['id_b_category']; ?>" <?php if($key['id_b_category'] == $key_before[1])	echo "selected"; ?> ><?php echo $key['name_b_category']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori Lain</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input name="best_seller_flag" type="checkbox" value="1" <?php if($key_before[2] == 1)	echo "checked"; ?>>Best Seller</label>
					</div>
					<div class="checkbox">
					  <label><input name="rekomendasi_flag" type="checkbox" value="1" >Rekomendasi</label>
					</div>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kondisi</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input name="bekas_flag" type="checkbox" value="1" <?php if($key_before[3] == 1)	echo "checked"; ?> >Bekas</label>
					</div>
					<div class="checkbox">
					  <label><input name="baru_flag" type="checkbox" value="1" <?php if($key_before[4] == 1)	echo "checked"; ?> >Baru</label>
					</div>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Lokasi</div>
				<div class="activity-wrapper">
					<label for="sel1">Provinsi</label>
					<select class="form-control" id="provinsi" name="provincies_in">
						<option value="">-Pilih Provinsi-</option>
						<?php foreach($provincies as $key){ ?>
						<option value="<?php echo $key['id']; ?>" <?php if($key['id'] == $provincies_pass)	echo "selected"; ?>><?php echo $key['name']; ?></option>
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
					<option value="<?php echo $key['id']; ?>" <?php if($key['name'] == $key_before[5])	echo "selected"; ?>><?php echo $key['name'];?></option>
					<?php } ?>
				</select>
			</div>
			<?php } ?>
		</div>

		<div class="search-side-item">
			<div class="header-text-2">Tebal</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="tebal-min-in" min="0" max="100" step="10"  placeholder="Min" value="<?php if($key_before != NULL) echo $key_before[6]; ?>" >
			</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="tebal-max-in" min="0" max="100" step="10"  placeholder="Max" value="<?php if($key_before != NULL) echo $key_before[7]; ?>">
			</div>
		</div>

		<div class="search-side-item">
			<div class="header-text-2">Harga</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="harga-min-in" min="0" max="100" step="10"  placeholder="Min" value="<?php if($key_before != NULL) echo $key_before[8]; ?>">
			</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="harga-max-in" min="0" max="100" step="10"  placeholder="Max" value="<?php if($key_before != NULL) echo $key_before[9]; ?>">
			</div>
		</div>

		<div class="search-side-item border-none">
			<div class="header-text-2">Lainnya</div>
			<div class="activity-wrapper">
				<div class="checkbox">
					<label><input type="checkbox" value="" name="jual-in"<?php if($key_before[10] == 1) echo "selected"; ?>>Jual</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="" name="sewa-in" <?php if($key_before[11] == 1) echo "selected"; ?>>Sewa</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="" name="barter_in" <?php if($key_before[12] == 1) echo "selected"; ?>>Barter</label>
				</div>
			</div>
		</div>
		<div class="search-side-item border-none">
			<div class="activity-wrapper">
				<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
				<button type="reset" class="btn btn-danger" value="Reset" id="reset" style="margin-left:10px;">Reset</button>
			</div>
		</div>
	</form>

	</div>

		<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0	">

			<div class="col-md-12 container">
				<div class="col-md-12 header-text-2"><span class="search-cat">Hasil Pencarian</span>
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

				<?php
				if($has_result == 1){
					if(count($result) > 0){
						foreach($result as $key){
							?>
							<div class="col-md-3 search-item">
								<div class="book-image"><a href="<?php echo base_url()."book/product?slug=".$key['slug_title_u_b']; ?>"><img src="<?php echo $key['main_image_u_b']; ?>"></a>
								</div>
								<div class="book-info-section">
									<div class="book-title"><a href="<?php echo base_url()."book/product?slug=".$key['slug_title_u_b']; ?>"><?php echo $key['title_u_b']; ?></a>
									</div>
									<div class="book-down-section">
										<div class="book-tag">
										<?php
											if($key['rent_u_b'] == 1){	?>
												<div class="tag-sewa">Sewa</div>
											<?php } ?>
										<?php
										 	if($key['barter_u_b'] == 1){ ?>
											<div class="tag-barter">Barter</div>
										<?php } ?>
										</div>
										<div class="book-price">Rp <?php echo $key['price_sell_u_b']; ?>
										</div>
										<div class="book-location"><?php echo $key['city_u']; ?>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
					}
					?>
				<?php
					if(count($result) == 0) {	?>
						<div class="text-center">
							Maaf, hasil pencarian tidak ditemukan...
						</div>
					 <?php } ?>
				<?php }
							else{
				 ?>
				 	<div class="text-center">
						Silahkan masukkan Kategori pencarian
					</div>
					<?php
							}
					?>

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
