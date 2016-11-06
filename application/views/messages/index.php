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
					<?php for($i=0;$i<count($messages_room_user);$i++){ ?>
					<li role="presentation">
						<a href="<?php echo base_url()?>messages/<?php echo $messages_room_user[$i]->username_u?>">
							<img class="img-circle" src="<?php echo base_url().$messages_room_user[$i]->photo_profile_u ?> " height="30" width="30">  
							<?php echo $messages_room_user[$i]->username_u?>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-md-9" id="message-room">
				<div class="header-text-2 text-center"> Percakapan Dengan <?php echo $openedUser ?> </div>
				<div class="manage-books-container">
				<?php 
				if(count($messages_list)>0){
				for($i=0;$i<count($messages_list);$i++) { ?>
					
					<?php 
						if($user_login->username_u == $messages_list[$i]->username_u)
						{
							$side = 'left-side';
							$offset = '';
						}
						else 
						{
							$side = 'right-side';
							$offset = 'col-md-offset-6';
						}
					?>
					<div class="col-md-12 chatbox <?php echo $side ?>">
						<div class="chat-user">
							<img class="img-circle" src="<?php echo base_url().$messages_list[$i]->photo_profile_u ?>" height="30" width="30">
							<span class="chat-username "><?php echo $messages_list[$i]->username_u?></span>
						</div>
						<div class="chat-content col-md-6 <?php echo $offset ?>">
							<?php echo $messages_list[$i]->message?>
						</div>
					</div>
					
				<?php }} ?>
				
				
				
				
				
					<div class="col-md-12 chatbox">
						<div class="chat-user">
							<img class="img-circle" src="<?php echo base_url().$user_login->photo_profile_u?>" height="30" width="30">
							<span class="chat-username "><?php echo $user_login->username_u?></span>
						</div>
						<div class="">
							<form action="
							<?php echo base_url();?>messages/send_message?
								room=<?php echo $openedRoomChatID?>
								&user2=<?php echo $openedUser ?>
								"
								
							method="POST">
								<textarea class="form-control" name="message" rows="3" id="comment" placeholder="Pesan"></textarea>
								<button type="submit"  class="btn btn-md btn-primary pull-right">Send</button>
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