<script type="text/javascript">
	    $(document).ready(function(){
	        $("#addModal").modal('show');
	    });
	</script>
		<!-- ////////////////////////////////MODAL//////////////// -->
	<?php if($this->session->flashdata('add') == 2) { ?>
		<div id="addModal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header alert alert-success">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h3 class="modal-title">Buku gagal ditambahkan</h3>
		            </div>
		            <div class="modal-body">
									<div class="text-center">
		                <button type="button" class="btn btn-success" data-dismiss="modal">Lanjutkan</button>
									</div>
		            </div>
		        </div>
		    </div>
		</div>
	<?php } ?>

<div class="form-container custom-container container" id="profile-header">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
		<div class="header-text-2 text-center"> Tambahkan Buku </div>
		<?php echo form_open_multipart('mybooks/do_add', 'onsubmit="return checkform()"'); ?>
			<div class="row form-book-wrapper">
				<p style="color:rgb(230, 0, 0)" class="text-center"><?php echo $this->session->flashdata('kosong'); ?></p>
				<div class="col-md-4 col-sm-2 col-xs-2">Judul</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="judul_in" type="text" class="form-control" placeholder="Judul" required  autofocus>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Jual</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga_jual_in" type="text" class="form-control" placeholder="Harga Jual" autofocus>
					<div class="input-info">*Kosongkan jika tidak ingin dijual</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Sewa</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga_sewa_in" type="text" class="form-control" placeholder="Harga Sewa" autofocus>
					<div class="input-info">*Kosongkan jika tidak ingin disewakan</div>
					<div class="input-info">**Harga diatas adalah harga sewa perminggu</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Barter</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="checkbox">
						<label><input name="barter_in" type="checkbox" value="1">Barter</label>
					</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Kondisi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<select name="kondisi_in" class="form-control" id="kategori">
						<option value="1">Bekas</option>
						<option value="2">Baru</option>
					</select>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Jumlah Stok</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="stok_in" min="1" type="number" class="form-control" placeholder="Jumlah Stok" required autofocus>
				</div>
			</div>

			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Deskripsi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<textarea name="deskripsi_in" class="form-control" rows="3" id="comment" placeholder="Deskripsi"></textarea>
					<p id="photowarn" style="color:rgb(230, 0, 0)"></p>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Upload Gambar</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="input-group image-upload" style="margin-bottom:0.5em">
						<label class="input-group-btn">
							<span class="btn btn-primary">
								Browse&hellip; <input name="userfiles[]" type="file" style="display: none;" id="photo" multiple>
							</span>
						</label>
						<input name="pict_1" type="text" class="form-control" style=" margin-bottom:0" required readonly>
					</div>
					<div class="input-info">Gunakan gambar pertama untuk gambar utama. Bisa Lebih dari 1 Gambar</div>
				</div>
			</div>

			<div class="col-md-8 col-md-offset-2 col-sm-9 col-sm-offset-1">
			<button type="submit" style="width:100%" class="btn btn-md btn-primary" value="mybooks" name="filesubmit">Submit</button>
			</div>
		</form>
	</div>

</div>






	<script>
	$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });

});
</script>
<script>
	function checkform(){
		var x = document.getElementById('photo').files.length;
		var warn = document.getElementById('photowarn');
		if(x <= 0){
			warn.innerText = "Maaf, anda harus memasukkan foto buku anda";
			return false;
		}
		else{
			return true;
		}
	}
</script>
