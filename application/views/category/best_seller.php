	
		<div class="custom-container" id="category-header">
			<div class="jumbotron jumbotron-cat">
			  <h1><?php echo $title_page; ?></h1>
			</div>
		</div>

		<div class="custom-container"  id="category-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 header-text-2">Buku <span class="search-cat">Best Seller</span></div>
					<div class="col-md-12 text-center"><hr></div>

					<div class="row">
					<?php foreach($book_result as $book){ ?>
						<div class="col-md-2 col-sm-4 col-xs-12 book-item">
							<div class="margin-bot-1 home-book-img">
								<a href="<?php echo base_url()?>book/b/<?php echo $book['slug_title_b'] ?>"><img src="<?php echo base_url()?><?php echo $book['thumb_cover_b'] ?>" class="img-responsive-3" height="240"></a>
							</div>
							<div class="text-center">
								<div class="font-semibold title-container"><a href="<?php echo base_url()?>book/b/<?php echo $book['slug_title_b'] ?>" class="text-primary"> <?php echo $book['title_b']?>
									</a></div>
								<div class="author-container"><?php echo $book['writer'] ?></div>
							</div>
						</div>
					<?php } ?>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
								<div class="text-center">
								  <ul class="pagination">
									<li><a href="<?php echo base_url()?>book/<?php echo $slug_page; ?>?
												page=1">First</a></li>
										<?php for($i=1;$i<=$page_total;$i++){
											if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
										?>
											<li <?php if($i == $page_now) echo 'class="active"' ?>  >
												<a href="<?php echo base_url()?>book/<?php echo $slug_page; ?>?
												page=<?php echo $i?>
												">
												<?php echo $i ?><span class="sr-only">(current)</span></a></li>
										<?php }} ?>
										<li><a href="<?php echo base_url()?>book/<?php echo $slug_page; ?>?
												page=<?php echo $page_total?>">Last</a></li>
								  </ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
