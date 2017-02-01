<div class="" id="profile-header">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				<?php echo $navbar2; ?>
			</div>
			<div class="custom-container col-md-10">
					<div class="header-text-2 text-center"> Atur Bukumu </div>
					<div class="manage-books-container">
					<?php
					foreach($all_book as $key) { if($key['active'] != 0){?>
						<div class="col-md-6 manage-books-item">
							<div class="row books-wrapper">
								<div class="col-md-12 info-books-container">
									<div class="col-md-2 padding-0">
										<div class="book-image">
											<img src="<?php echo base_url().$key['image_thumb']; ?>" class="img-responsive-2">
										</div>
									</div>
									<div class="col-md-10">
										<div class="book-title"> <a href="<?php echo base_url()?>book/product/<?php echo $key['slug_title_u_b']?>"><?php echo $key['title_u_b']; ?></a></div>
										<div class="book-price"> <?php echo $key['price_sell_u_b']; ?> </div>
										<div class="book-date"> Last Edit :
										<?php
											$date = date_create($key['updated_at']);
											echo date_format($date, 'd-M-Y');
										?>
										</div>
										<?php if($key['active'] == 1){ ?>
											<div class="active-book">Tervalidasi</div>
											<?php }
											else if($key['active'] == 2){ ?>
												<div class="inactive-book">Belum Divalidasi</div>
												<?php } ?>
									</div>
								</div>
								<div class="col-md-12" style="">
									<a href="<?php echo base_url()."Mybooks/edit?title=".$key['slug_title_u_b']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
									<a data-toggle="modal" data-target="#<?php echo $key['id_u_b'];?>Modal" ><button type="button" class="btn btn-primary">Delete</button></a>

								</div>
							</div>
						</div>

						<div id="<?php echo $key['id_u_b'];?>Modal" class="modal fade">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Apakah anda yakin ingin menghapus buku ini?</h4>
						            </div>
						            <div class="modal-body">
													<a href="<?php echo base_url()."Mybooks/delete?slug=".$key['slug_title_u_b']; ?>"><button type="button" class="btn btn-danger">Ya</button></a>
													<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
						            </div>
						        </div>
						    </div>
						</div>

					<?php } } ?>
					</div>

					<div class="col-md-12">
						<nav aria-label="Page navigation">
						<div class="text-center">
						  <ul class="pagination">
								<li><a href="#">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()."mybooks/manager?page=".$i;?>">
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

</div>