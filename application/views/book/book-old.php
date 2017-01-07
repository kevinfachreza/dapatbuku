<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/book/book-class.css">

</head>

<body>
	<?php echo $navbar; ?>

	<!--/////////////////////BOOK///////////////////////////////// -->
	<hr>
	<?php

	// print_r($book_data);
	// exit();
	 ?>

<div class="col-md-10 col-md-offset-1">
	<div class="row">
		<div class="col-md-12">
			<?php echo $bookleft; ?>
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

<?php if($this->session->logged_in==1){?>

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
        console.log(userRating);
         $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>book/add_rate_book?star='+userRating+'&book=<?php echo $book_data[0]['id_b']?>&user=<?php echo $user->id_u ?>',
            //contentType: "application/json; charset=utf-8",
            dataType:"json",
            //traditional: true,
            success:function(response){
                       alert(response);

                    },
            error: function(response){
						alert(response);

                }
            });
    });
});

  </script>

  <script>

	$(".comment-for-star").hide();
	$("#user_rating_star").hover(
		function(e){
			$(".comment-for-star").show();

		},
		function(e){
			$(".comment-for-star").hide();
		}
	);

  </script>

<?php } ?>

</body>
</html>
