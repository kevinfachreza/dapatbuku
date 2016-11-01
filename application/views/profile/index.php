<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/profile.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	
<div class="container" id="profile-header"> 
	<div class="col-md-12 text-center">
		<img src="https://pbs.twimg.com/profile_images/3743349988/7926e89ff14b79fd94d91a6b823cbd61_400x400.jpeg" class="img-circle" alt="Cinque Terre" width="150" height="150">
		<div class="profile-name">
			KevinFachreza
		</div>
		<div class="profile-data-container">
			<span class="profile-reviews-count">110 Reviews</span> <span class="profile-books-count"> 220 Books </span>
		</div>
		<div class="profile-bio">
			Orang Ganteng
		</div>
		<a href="#"><button type="button" class="btn btn-success">Send Message</button></a>
							
	</div>
	
</div>

	<div class="container"  id="book-container">
			<div class="col-md-12">
				
				<div class="row">
				<?php for ($i=0;$i<6;$i++){ ?>
					<div class="col-md-2 col-sm-4 col-xs-12 book-item">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book2.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
							<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-12 book-item">
						<div class="margin-bot-1 home-book-img">
							<a href="#"><img src="<?php echo base_url()?>assets/img/book/book1.jpg" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="" class="text-primary">Rudy : Kisah Masa Muda Sang Visioner</a></div>
							<div class="author-container"><a href="" class="text-primary">Pengarang</a></div>
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