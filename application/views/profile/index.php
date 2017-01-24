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

<?php foreach ($userdata as $user ) { ?>
<div class="custom-container container" id="profile-header">
	<div class="col-md-12 text-center">
		<img src="<?php echo base_url()?><?php echo $user->photo_profile_u ?>" class="img-circle" alt="Cinque Terre" width="150" height="150">
		<div class="profile-name">
			<?php echo $user->username_u ?>
		</div>
		<div class="profile-data-container">
			<span class="profile-reviews-count"><?php echo $review_total; ?> Reviews</span> <span class="profile-books-count"> <?php echo $book_total; ?> Books </span>
		</div>
		<div class="profile-bio">
			<?php echo $user->bio_u ?>
		</div>
		<?php if($this->session->logged_in==1)
			{?>
		<?php if($user->username_u == $user_login->username_u) {?>
			<a href="<?php echo base_url()?>accounts/settings/"><button type="button" class="btn btn-success">Edit Profile</button></a>
		<?php } else {?>
			<a href="<?php echo base_url()?>messages/<?php echo $user->username_u ?>"><button type="button" class="btn btn-success">Send Messages</button></a>
			<?php }} ?>

	</div>

</div>

<?php } ?>

	<div class="custom-container container"  id="book-container">
			<div class="col-md-12">

				<div class="row">
				<?php for ($i=0;$i<count($books);$i++){ ?>
					<div class="col-md-2 col-sm-4 col-xs-12 book-item">
						<div class="margin-bot-1 home-book-img">
							<a href="<?php echo base_url()."book/product/".$books[$i]->slug_title_u_b; ?>"><img src="<?php echo base_url()?><?php echo $books[$i]->image_thumb?>" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="<?php echo base_url()?><?php echo $books[$i]->slug_title_u_b?>" class="text-primary"><?php echo $books[$i]->title_u_b?></a></div>
						</div>
					</div>

				<?php } ?>
					<div class="col-md-12">
						<nav aria-label="Page navigation">
							<div class="text-center">
							  <ul class="pagination">
								<li><a href="#">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()?>super/adminbook/bookmanager?
											page=<?php echo $i?>
											">
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
