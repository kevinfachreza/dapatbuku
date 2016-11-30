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
				<form action="<?php echo base_url()."Search/book"?>" method="get" ?>
				<div class="header-text-2">Cari</div>
				<div class="activity-wrapper">
					<label>Masukkan judul atau nama penulis</label>
					<input name="search-key" type="text" class="form-control" placeholder="Search" style="margin-bottom:0.5em"
					 			<?php if($key_before[0] != null) echo "value=".$key_before[0]; ?> autofocus>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori</div>
				<div class="activity-wrapper">
					<select class="form-control" name="category-in" id="kategori">
						<option>-Pilih Kategori-</option>
						<?php foreach($category as $key){ ?>
						<option value="<?php echo $key['id_b_category'];?>" <?php if($key_before[1] == $key['id_b_category']) echo "selected"; ?> ><?php echo $key['name_b_category']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="search-side-item">
				<div class="header-text-2">Kategori Lain</div>
				<div class="activity-wrapper">
					<div class="checkbox">
					  <label><input name="best_seller_flag" type="checkbox" value="1" <?php if($key_before[2] == 1) echo "checked"; ?> >Best Seller</label>
					</div>
					<div class="checkbox">
					  <label><input name="rekomendasi_flag" type="checkbox" value="1">Rekomendasi</label>
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
				//var_dump($book_result);
				if($has_result == 1){
					if(count($book_result) > 0){
						foreach ($book_result as $key) { ?>
						<div class="col-md-3 search-item">
							<div class="book-class-image"><a href="<?php echo base_url()."Book?title=".$key['slug_title_b']; ?>"><img src="<?php echo $key['photo_cover_b']; ?>"></a>
							</div>
							<div class="book-class-title"><a href="<?php echo base_url()."Book?title=".$key['slug_title_b']; ?>"><?php echo $key['title_b']; ?></a>
							</div>
						</div>
					<?php
							}
					}
					?>
				<?php
					if(count($book_result) == 0) {	?>
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
					<div class="col-md-12">
						<nav aria-label="Page navigation">
						<div class="text-center">
						  <ul class="pagination">
								<li><a href="#">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()."search/book?page=".$i;?>">
											<?php echo $i ?><span class="sr-only">(current)</span></a></li>
									<?php }} ?>
									<li><a href="#">Last</a></li>
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
