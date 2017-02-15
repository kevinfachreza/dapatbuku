<div class="custom-container" id="book-container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<div class="col-sm-12 col-xs-12 padding-5px">
					<img src="<?php echo base_url().$book_data[0]['thumb_cover_b']; ?>" class="img-responsive-2">
					<div class="col-md-12 info-small" style="padding:0;">
						<div class="col-md-12 book-star text-center">
							<a href="#review-form"><button type="button" class="btn btn-primary">Nilai Buku Ini</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="col-md-12 book-title">
					<?php echo $book_data[0]['title_b']; ?>
				</div>
				<div class="col-md-12 book-writer">
					<span class="text-muted">oleh</span> <?php echo $book_data[0]['writer']; ?>
				</div>
				<div class="col-md-12 book-rating">
					<div class="book-rating-star">
						<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
						<span class="book-rating-text"><?php echo $book_rating[0]['avg']; ?></span>
						<span class="book-rating-count"><?php echo $book_data[0]['total_ratings']; ?> Rating</span>
						<span class="book-review-count"><?php echo $book_data[0]['total_reviews_b']; ?> Review</span>
					</div>
				</div>

				<div id="book-description" class="col-md-12 product-item">
					<div class="book-header">Deskripsi</div>
					<div class="book-description more">
						<?php echo $book_data[0]['description_b']; ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div id="informasi-buku" class="custom-container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12 header-text-2">Informasi Buku</div>
			<div class="col-md-12 text-center"><hr></div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">ISBN
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['no_isbn_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Jumlah Halaman
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['pages']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Cetakan Pertama
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['date_published']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Bahasa
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['language_b']; ?>
							</div>
						</div>
						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Kategori
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">
							<?php
								$counter=1;
								foreach($book_category as $key){
									if($counter!=1)echo ', ';
									echo $key['name_b_category'];
									$counter++;
								}
								?>
							</div>
						</div>

						<div class="col-md-12 table-container">
							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Cover
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $book_data[0]['cover_type_b']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="ulasan-pembaca" class="custom-container">
	<div class="row">
		<div class="col-md-12" >
			<div class="col-md-12 header-text-2">Ulasan Pembaca</div>
			<div class="col-md-12 text-center"><hr></div>
			<div class="col-md-8">
				<?php foreach($review_data as $key){
					if($key['id_u'] != $this->session->userdata('id_u')){?>
					<div class="review-wrapper">
						<div class="review-date">
						<?php echo date('j-F-Y', strtotime($key['date_b_review']) );?></div>
						<div class="review-title review-item"><?php echo $key['title_b_review']; ?></div>
						<div class="review-rating review-item">
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#fff;" aria-hidden="true"></span>
							<span class="text-muted" style="padding-left:7px">oleh </span>
							<span class="review-username review-item"><?php echo $key['username_u']; ?></span>
						</div>
						<div class="review-content more">
							<?php echo $key['content_b_review']; ?>
						</div>
					</div>
				<?php } }?>
			</div>
		</div>
	</div>
</div>

	<?php
		if($this->session->logged_in==1){
	if($my_review == null){?>
	<div  id="review-form" class="custom-container">
		<div class="row">
			<div class="col-md-12" >
				<div class="col-md-12 header-text-2">Tulis Ulasanmu Sendiri</div>
				<div class="col-md-12 text-center"><hr></div>
				<div class="col-md-8">
					<?php if( $my_rating == null){?>
					<label for="comment">
						<div class="rating">
						Rate This Book &nbsp;&nbsp;
						<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><span class=" glyphicon glyphicon-star" aria-hidden="true"></span> </label></span>
						<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
						<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
						<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
						<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></label></span>
						</div>
					</label>
					<p style="color:rgb(230, 0, 0)" id="rate-warn"></p>
					<?php } else {?>
						<div class="review-rating review-item" id="user_rating_star">
							<?php for($i=0;$i<$my_rating[0]->rating;$i++){?>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
							<?php } ?>

							<?php for($i=0;$i<5-$my_rating[0]->rating;$i++){?>
							<span class="glyphicon glyphicon-star glyphicon-large" style="color:#777;" aria-hidden="true"></span>
							<?php } ?>

							<span class="comment-for-star">Nilai kamu untuk buku ini</span>
						</div>
					<?php } ?>


					<form action="<?php echo base_url();?>book/add_review_book?book=<?php echo $book_data[0]['slug_title_b']?>" onsubmit="return checkRate()" method="POST">
						<span class="label-for-textarea">Tulis ulasan kamu untuk buku ini</span>
						<input name="title" type="text" class="form-control" placeholder="Judul Ulasan"  style="margin-bottom:10px;" required >

						<textarea name="review" class="form-control" rows="5" id="comment" placeholder="Tulis ulasan kamu"></textarea>
						<button type="submit" class="btn btn-primary" value="Submit" style="margin-top:10px;float:right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php }
		if($my_review != null){	?>
			<div  id="review-form" class="custom-container">
				<div class="row">
					<div class="col-md-12" >
						<div class="col-md-12 header-text-2">Ulasan Kamu</div>
						<div class="col-md-12 text-center"><hr></div>
						<div class="review-date">
						<?php echo date('j-F-Y', strtotime($my_review[0]->date_b_review) );?></div>
						<div class="review-title review-item"><?php echo $my_review[0]->title_b_review; ?></div>
								<div class="review-rating review-item" id="user_rating_star">
									<?php for($i=0;$i<$my_rating[0]->rating;$i++){?>
									<span class="glyphicon glyphicon-star glyphicon-large" style="color:#E69515;" aria-hidden="true"></span>
									<?php } ?>

									<?php for($i=0;$i<5-$my_rating[0]->rating;$i++){?>
									<span class="glyphicon glyphicon-star glyphicon-large" style="color:#777;" aria-hidden="true"></span>
									<?php } ?>

									<span class="comment-for-star">Nilai kamu untuk buku ini</span>
									<div class="review-content more">
										<?php echo $my_review[0]->content_b_review; ?>
									</div>
								</div>
						</div>
					</div>
				</div>


			<?php
		}
	}
	else{
			?>
	<div  id="review-form" class="custom-container">
		<div class="row">
			<div class="col-md-12" >
				<div class="col-md-12 header-text-2">Silahkan <a href="<?php echo base_url() ?>login">Login </a> untuk bisa memberikan Review/Rating</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
