<script type="text/javascript">
	    $(document).ready(function(){
	        $("#requestModal").modal('show');
	    });
	</script>
		<!-- ////////////////////////////////MODAL//////////////// -->
	<?php if($this->session->flashdata('request') == true) { ?>
	<div id="requestModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Permintaan Terkirim!!!</h4>
	            </div>
	            <div class="modal-body">
	                <p>Terima Kasih</p>
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
			          <form action="<?php echo base_url(); ?>/auth/do_book_request" method="post">
					<?php if($this->session->logged_in != 1){ ?>
						<div class="row form-profile-wrapper">
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
						</div>
					<?php } ?>

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
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

