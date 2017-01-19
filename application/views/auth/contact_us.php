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
	<script type="text/javascript">
	    $(document).ready(function(){
	        $("#contactModal").modal('show');
	    });
	</script>
		<!-- ////////////////////////////////MODAL//////////////// -->
	<?php if($this->session->flashdata('contactus') == true) { ?>
	<div id="contactModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Pesan Terkirim!!!</h4>
	            </div>
	            <div class="modal-body">
	                <p>Terima Kasih</p>
	            </div>
	        </div>
	    </div>
	</div>
	<?php } ?>

	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
		<div class="custom-container"  id="category-container">
			<div class="row">
				<div class="header text-center">
			  	<h1>Contact Us</h1>
			  	<hr>
			  	</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		        	<form action="<?php echo base_url(); ?>/auth/do_contact_us" method="post">
								<?php if($this->session->logged_in != 1) {	?>
		            	<input name="name" type="text"  class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
									<input name="email" type="text" class="form-control" placeholder="Alamat Emailmu" style="margin-bottom:0.5em" required autofocus>
									<?php } ?>
		            	<textarea name="message" class="form-control" rows="5" id="messages" placeholder="Tulis pesan kamu disini"></textarea>
		            	<button type="submit" class="btn btn-primary" value="Submit" style="margin-top:10px;float:right">Kirim</button>
		          </form>
		          </div>
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
