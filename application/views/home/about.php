<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/category/category.css">

</head>

<body>
	<?php echo $navbar; ?>


	<!--/////////////////////BOOK///////////////////////////////// -->
		<div class="container" id="category-header">
			<div class="jumbotron jumbotron-cat">
			  <h1>Tentang Dapatbuku</h1>
			</div>
		</div>

		<div class="container"  id="category-container">
			<div class="col-md-12">
				<div class="col-md-12 text-center"><hr></div>

				<div class="row">
          <div class="jumbotron jumbotron-cat">
          <p>Dapatbuku merupakan website penyedia jasa layanan jual-beli buku, baik antar sesama member atau kepada toko buku resmi seperti gramedia, togamas, uranus, dan masih banyak lagi.
             Dapatbuku juga menyediakan fitur sewa yang dikhususkan kepada member yang tidak ingin bukunya dibeli. Selain itu Dapatbuku juga mempunyai fitur barter untuk sesama member.</p>

          <p>Berbelanja di Dapatbuku dan rasakan transaksi yang masif, cepat, mudah, lengkap, aman, serta menghemat waktu dan tenaga. Berbagai info detail tersedia seperti  rincian buku,
            perbandingan harga buku, juga review para pembaca lainnya. Dengan berprinsip 'customer oriented' , Dapatbuku akan terus berkembang dengan mengutamakan kepuasan pelanggan dalam melakukan transaksi.</p>
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
