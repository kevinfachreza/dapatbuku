<script type="text/javascript">
	    $(document).ready(function(){
	        $("#requestModal").modal('show');
	    });
	</script>

		<!-- ////////////////////////////////MODAL//////////////// -->
	<?php if($this->session->flashdata('request') == 1) { ?>
	<div id="requestModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header alert alert-success">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h3 class="modal-title">Permintaan telah terkirim</h4>
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
	<?php } if($this->session->flashdata('request') == 2){?>
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

	<!--/////////////////////BOOK///////////////////////////////// -->
	<div class="row" style="margin:30px 0px;">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
			<div class="custom-container"  id="category-container">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 header-text-2">Tidak Menemukan Buku yang Kamu Cari?</div>
					<div class="col-md-12 text-center"><hr></div>
					<div class="col-md-12">
					<?php if($this->session->logged_in == 1){ ?>
						<form action="<?php echo base_url(); ?>auth/do_book_request" method="post">
						<!-- <div class="row form-profile-wrapper">
							<div class="col-md-4 col-sm-12 col-xs-12">Nama</div>
							<div class="col-md-8 col-sm-12 col-xs-12">
							<input name="name" type="text"  class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
							</div>
						</div>
						<div class="row form-profile-wrapper">
							<div class="col-md-4 col-sm-12 col-xs-12">Nomor HP</div>
							<div class="col-md-8 col-sm-12 col-xs-12">
							<input name="hp" type="text"  class="form-control" placeholder="Nomor HP" style="margin-bottom:0.5em" required autofocus>
							</div>
						</div> -->
						<div class="row form-profile-wrapper">
							<div class="col-md-4 col-sm-12 col-xs-12">Judul</div>
							<div class="col-md-8 col-sm-12 col-xs-12"><input name="title" type="text"  class="form-control" placeholder="Judul Buku" style="margin-bottom:0.5em" required autofocus>
							</div>
						</div>

						<div class="row form-profile-wrapper"  style="margin-bottom:0.5em">
							<div class="col-md-4 col-sm-12 col-xs-12">Pengarang
							<small id="emailHelp" class="form-text text-muted">(	Optional)</small></div>
							<div class="col-md-8 col-sm-12 col-xs-12">
       						<input name="author" type="text" class="form-control" placeholder="Pengarang"  autofocus>
							</div>
						</div>

						<div class="row form-profile-wrapper"  style="margin-bottom:0.5em">
							<div class="col-md-4 col-sm-12 col-xs-12">Butuh Buku Untuk</div>
							<div class="col-md-8 col-sm-12 col-xs-12">
							<select name="interest" class="form-control" id="interest">
								<option value="informasi">Informasi </option>
								<option value="jual">Jual</option>
								<option value="sewa">Sewa</option>
								<option value="barter">Barter</option>
							</select>
							</div>
						</div>

			            <button type="submit" class="btn btn-primary" value="Submit" style="margin-top:10px;float:right">Kirim</button>
			          </form>
					<?php }
						else {
						?>
						<div class="text-center">Silahkan login terlebih dahulu</div>
						<a data-toggle="modal" data-target="#loginModal"><button type="submit" class="btn btn-primary" value="Login" style="margin-top:10px;float:right">Login</button></a>
						<div id="loginModal" class="modal fade">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Login</h4>
						            </div>
						            <div class="modal-body">
						                <p>Silahkan login untuk mulai menggunakan dapatbuku</p>
													<form  action="<?php echo base_url();?>Auth/do_login" method="POST">
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
		</div>
	</div>
