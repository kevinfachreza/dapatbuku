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
			  <h1><?php echo ucwords($category_now) ?></h1>
			  <p><?php echo $book[0]->desc_b_category ?>
			  </p>
			</div>
		</div>
		
		<div class="container"  id="category-container">
			<div class="col-md-12">
				<div class="col-md-12 header-text-2">Kategori <span class="search-cat"><?php echo ucwords($category_now) ?></span></div>
				<div class="col-md-12 text-center"><hr></div>
				
				<div class="row">
				<?php for ($i=0;$i<count($book);$i++){ ?>
					<div class="col-md-2 col-sm-4 col-xs-12 book-item">
						<div class="margin-bot-1 home-book-img">
							<a href="<?php echo base_url()?>book/<?php echo $book[$i]->slug_title_b?>"><img src="<?php echo base_url()?><?php echo $book[$i]->photo_cover_b?>" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="" class="text-primary"><?php echo $book[$i]->title_b?></a></div>
							<div class="author-container"><a href="" class="text-primary"><?php echo $book[$i]->writer?></a></div>
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
										<a href="<?php echo base_url()?>category/<?php echo $category_now?>?
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