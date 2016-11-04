<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/messages/messages.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	
<div class="container" id="messages"> 
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3" id="message-users">
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="#"><img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">  Kevin</a></li>
				  <li role="presentation"><a href="#"><img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">  The Reverse Kevin</a></li>
				  <li role="presentation" class="active"><a href="#"><img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">  The Other Kevin</a></li>
				</ul>
			</div>
			<div class="col-md-9" id="message-room">
				<div class="header-text-2 text-center"> Percakapan Dengan Kevin </div>
				<div class="manage-books-container">
				<?php for($i=0;$i<2;$i++) { ?>
					
					<div class="col-md-12 chatbox left-side">
						<div class="chat-user">
							<img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">
							<span class="chat-username ">The Other Kevin</span>
						</div>
						<div class="chat-content">
							Hola
						</div>
					</div>
					<div class="col-md-12 chatbox right-side">
						<div class="chat-user">
							<span class="chat-username ">The Other Kevin</span>
							<img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">
						</div>
						<div class="chat-content">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non est quis diam egestas tempor sit amet et odio. Proin ac tortor eu augue vestibulum efficitur non eu velit. Aliquam lacinia sodales quam. Nam eu bibendum velit. Morbi ac est quis tellus commodo volutpat sed et velit. Pellentesque at nulla at neque facilisis sodales ut eget leo. Nunc id tellus venenatis, semper nulla ac, eleifend diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce aliquam sit amet ante nec porttitor. Donec porta erat non tellus aliquam mollis sed elementum tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						</div>
					</div>
				<?php } ?>
				
					<div class="col-md-12 chatbox">
						<div class="chat-user">
							<img class="img-circle" src="https://scontent-sin6-1.cdninstagram.com/t51.2885-19/11849231_1115027588527403_1040877616_a.jpg" height="30" width="30">
							<span class="chat-username ">The Other Kevin</span>
						</div>
						<div class="">
							<form action="<?php echo base_url();?>auth/do_register" method="POST">
								<textarea class="form-control" rows="3" id="comment" placeholder="Deskripsi"></textarea>
								<button type="submit"  class="btn btn-md btn-primary pull-right">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
</div>
	
	
	<?php echo $footer; ?>
	
</body>
</html>