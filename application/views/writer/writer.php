<div class="container-padding">
	<div class="row">
		<div class="col-md-12">
			<div class="custom-container row" id="book-container">
				<!-- Slider -->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="col-sm-12 col-xs-12 padding-5px">
								<img src="<?php echo base_url().$writer[0]->photo_writer; ?>" class="img-responsive-2">
								<div class="col-md-12 info-small" style="padding:0;">
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="book-header">
								<?php echo $writer[0]->name_writer; ?>
							</div>

							<div class="col-md-12 product-item padding-0 ">
							<div class="product-header">Informasi Penulis</div>
								<div class="col-md-4  padding-0 ">
								<div class="row">
									<div class="col-md-12 table-container">
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">Asal Penulis :
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">
											<?php echo $writer[0]->origin_writer; ?>
										</div>
									</div>
									<div class="col-md-12 table-container">
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">Tanggal Lahir Penulis :
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 table-content">
											<?php echo $writer[0]->date_of_birth_writer; ?>
										</div>
									</div>
								</div>
								</div>
								</div>
						</div>

						<div id="product-description" class="product-item">
							<div class="product-header">Deskripsi</div>
							<div class="product-description more">
								<?php echo $writer[0]->description_writer; ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div id="NewReleaseContainer" class=" custom-container row">
			<div class="col-md-12 header-text-2">Buku yang Ditulis</div>
			<div class="col-md-12 text-center"><hr></div>
			<div class="col-md-12 book-container">
				<?php foreach($books as $key){ ?>
				<div class="col-md-2 col-sm-4 col-xs-12">
					<div class="margin-bot-1 home-book-img">
						<a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo base_url().$key['photo_cover_b']; ?>" class="img-responsive-2"></a>
					</div>
					<div class="text-center">
						<div class="font-semibold title-container"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>" class="text-primary"><?php echo $key['title_b']; ?></a></div>
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
