
		<div class="custom-container">
			<div class="header-text-2">Dapatkan Buku Di</div>
			<div class="text-center"><hr></div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
		          	<div class="panel-group" id="accordion">
		            <?php if (count($book_sale)>0)
		            {
						foreach($book_sale as $key){ ?>
			            <div class="panel panel-default">
			              	<div class="panel-heading">
			               		<h4 class="panel-title">
			                  		<a data-toggle="collapse" data-parent="#accordion" href="#gramedia">
			                    	</span><?php echo $key['username_u']?></a>
			                	</h4>
			              	</div>
			              	<div id="gramedia" class="panel-collapse collapse">
				                <div class="list-group">
				                  	<a href="<?php echo base_url()?>book/product/<?php echo $key['slug_title_u_b']?>" class="list-group-item">
				                  		<div class="group-panel group-panel-price">
					                    	<p class="list-group-item-text">Jual : <?php echo $key['price_sell_u_b']?></p>
					                    	<p class="list-group-item-text">Sewa : <?php echo $key['price_rent_u_b']?></p>
					                    	<p class="list-group-item-text">Barter</p>
				                    	</div>
				                    	<hr class="group-panel-hr">
				                  		<div class="group-panel">
					                    	<p class="list-group-item-text"><?php echo $key['name']?></p>
					                    	<p class="list-group-item-text">Stock : <?php echo $key['stock_u_b']?></p>
				                    	</div>
				                  	</a>
				                </div>
			                </div>
			            </div>
			          <?php }} else {?>
									<div class="text-center">
		          					<div class="col-md-12">Belum ada yang menyediakan buku ini.</div>
									<?php if($this->session->logged_in == 1){ ?>
			          				<a href="<?php echo base_url()?>mybooks/add">
									<?php }	else{ ?>
									<a data-toggle="modal" data-target="#loginModal">
										<?php } ?>
										<button type="button" class="btn btn-success">Jual Sekarang</button></a></div>

										<div id="loginModal" class="modal fade">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										                <h4 class="modal-title">Silahkan Login</h4>
										            </div>
										            <div class="modal-body">
										                <p>Anda harus login untuk mulai menjual buku</p>
														<form action="<?php echo base_url();?>Auth/do_login?sale=true" method="POST">
															<input name="log-user_in" type="text"  class="form-control" placeholder="Masukkan Email anda" style="margin-bottom:0.5em" required autofocus>
															<input name="log-pass" type="password" class="form-control" placeholder="Masukkan Password anda" style="margin-bottom:1em" required  autofocus>
															<button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color btn-primary">LOGIN</button>
														</form>
														<p style="margin-top:1em; font-size:1.2em">Belum punya akun?</p>
														<a href="<?php echo base_url()?>auth/register" >REGISTER</a>
										            </div>
										        </div>
										    </div>
										</div>

			          <?php } ?>

			        </div>
		        </div>
	        </div>
		</div>