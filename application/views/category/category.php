
		<div class="custom-container" id="category-header">
			<div class="jumbotron jumbotron-cat">
			  <h1><?php echo $category_now[0]->name_b_category?></h1>
			  <p><?php echo $category_now[0]->desc_b_category ?></p>
			</div>
		</div>

		<div class="custom-container"  id="category-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 header-text-2">Buku Kategori <span class="search-cat"><?php echo $category_now[0]->name_b_category?></span></div>
					<div class="col-md-12 text-center"><hr></div>

					<div class="row-eq-height">
						<?php if(empty($book)){ ?>
							<div class="text-center">
								Maaf Buku Kategori ini masih belum ada
							</div>

					<?php }	else if($book != null){
							for ($i=0;$i<count($book);$i++){ ?>
						<div class="col-md-2 col-sm-4 col-xs-12 book-item">
							<div class="margin-bot-1 home-book-img">
								<a href="<?php echo base_url()?>book/b/<?php echo $book[$i]->slug_title_b ?>"><img src="<?php echo base_url()?><?php echo $book[$i]->thumb_cover_b ?>" class="img-responsive-2" height="240"></a>
							</div>
							<div class="text-center">
								<div class="font-semibold title-container"><a href="<?php echo base_url()?>book/b/<?php echo $book[$i]->slug_title_b ?>" class="text-primary"><?php echo $book[$i]->title_b ?>


								</a></div>
								<div class="author-container"><?php echo $book[$i]->writer ?></div>
							</div>
						</div>
						<?php	}
							?>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
								<div class="text-center">
								  <ul class="pagination">
									<li><a href="<?php echo base_url()?>category/<?php echo $category_now[0]->slug_category?>?
												page=1">First</a></li>
										<?php for($i=1;$i<=$page_total;$i++){
											if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
										?>
											<li <?php if($i == $page_now) echo 'class="active"' ?>  >
												<a href="<?php echo base_url()?>category/<?php echo $category_now[0]->slug_category?>?
												page=<?php echo $i?>
												">
												<?php echo $i ?><span class="sr-only">(current)</span></a></li>
										<?php }} ?>
										<li><a href="<?php echo base_url()?>category/<?php echo $category_now[0]->slug_category?>?
												page=<?php echo $page_total?>">Last</a></li>
								  </ul>
								</div>
							</nav>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
