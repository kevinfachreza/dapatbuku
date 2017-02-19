<script type="text/javascript">
	    $(document).ready(function(){
	        $("#contactModal").modal('show');
	    });
	</script>
		<!-- ////////////////////////////////MODAL//////////////// -->
	<?php if($this->session->flashdata('contactus') == 1) { ?>
		<div id="contactModal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header alert alert-success">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h3 class="modal-title">Pesan telah terkirim</h4>
		            </div>
		            <div class="modal-body">
									<div class="text-center">
		                <h4>Terima Kasih</h4>
										<button type="button" class="btn btn-success" data-dismiss="modal">Lanjutkan</button>
									</div>
		            </div>
		        </div>
		    </div>
		</div>
	<?php }
			if($this->session->flashdata('contactus') == 2){?>
				<div id="contactModal" class="modal fade">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header alert alert-danger">
				                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                <h3 class="modal-title">Pesan gagal terkirim</h4>
				            </div>
				            <div class="modal-body">
											<div class="text-center">
				                <h4>Mohon maaf</h4>
												<button type="button" class="btn btn-success" data-dismiss="modal">Coba lagi</button>
											</div>
				            </div>
				        </div>
				    </div>
				</div>
		<?php } ?>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
		<div class="custom-container"  id="category-container">
			<div class="row">
				<div class="header text-center">
			  	<h1>Contact Us</h1>
			  	<hr>
			  	</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
		        		<form action="<?php echo base_url(); ?>auth/do_contact_us" method="post">
								<?php if($this->session->logged_in != 1) {	?>
			            	<input name="name" type="text"  class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
										<input name="email" type="text" class="form-control" placeholder="Alamat Emailmu" style="margin-bottom:0.5em" required autofocus>
										<?php } ?>
			            	<textarea name="message" class="form-control" rows="5" id="messages" placeholder="Tulis pesan kamu disini"></textarea>
			            	<button type="submit" class="btn btn-primary" value="Submit" style="margin-top:10px;float:right">Kirim</button>
		          	</form>
		          </div>
			</div>
		</div>
	</div>
	</div>
