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
					<div class="col-xs-12 col-sm-12 col-md-8 book-item">
						<div class="margin-bot-1 home-book-img">
							<a href="<?php echo base_url()."book/product/".$books[$i]->slug_title_u_b; ?>"><img src="<?php echo base_url()?><?php echo $books[$i]->image_thumb?>" class="img-responsive-2"></a>
						</div>
						<div class="text-center">
							<div class="font-semibold title-container"><a href="<?php echo base_url()."book/product/"?><?php echo $books[$i]->slug_title_u_b?>" class="text-primary"><?php echo $books[$i]->title_u_b?></a></div>
						</div>
					</div>

				<?php } ?>
					<div class="col-md-12">
						<nav aria-label="Page navigation">
							<div class="text-center">
							  <ul class="pagination">
								<li><a href="<?php echo base_url()."profile/".$user->username_u."?page=1"; ?>">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()."profile/".$user->username_u ?>
											?page=<?php echo $i?>
											">
											<?php echo $i ?><span class="sr-only">(current)</span></a></li>
									<?php }} ?>
									<li><a href="<?php echo base_url()."profile/".$user->username_u."?page=".$page_total; ?>">Last</a></li>
							  </ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
	</div>
