<div class="form-container custom-container container" id="profile-header">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
		<div class="header-text-2 text-center"> Ubah Iklan Buku </div>
		<?php echo form_open_multipart('mybooks/do_edit?title='.$book_data[0]['slug_title_u_b']); ?>	<div class="row form-book-wrapper">
				<p style="color:rgb(230, 0, 0)" class="text-center"><?php echo $this->session->flashdata('warning'); ?></p>
				<div class="col-md-4 col-sm-2 col-xs-2">Judul</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="judul_in" type="text" class="form-control" value="<?php echo $book_data[0]['title_u_b']; ?>" required  autofocus>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Jual</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga_jual_in" type="text" class="form-control" placeholder="<?php echo $book_data[0]['price_sell_u_b']; ?>" value="<?php echo $book_data[0]['price_sell_u_b']; ?>" autofocus>
					<div class="input-info">*Kosongkan jika tidak ingin dijual</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Sewa</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga_sewa_in" type="text" class="form-control" placeholder="<?php echo $book_data[0]['price_rent_u_b']; ?>"  value="<?php echo $book_data[0]['price_rent_u_b']; ?>"autofocus>
					<div class="input-info">*Kosongkan jika tidak ingin disewakan</div>
					<div class="input-info">**Harga diatas adalah harga sewa perminggu</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Barter</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="checkbox">
						<label><input type="checkbox" value="1"	name="barter_in" <?php if($book_data[0]['barter_u_b'] == 1){ echo "checked"; } ?> >Barter</label>
					</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Kondisi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<select name="kondisi_in" class="form-control" id="kategori">
						<option <?php if($book_data[0]['type_u_b'] == 2) { ?> selected="selected" <?php } ?> value="2">Bekas </option>
						<option <?php if($book_data[0]['type_u_b'] == 1) { ?> selected="selected" <?php } ?> value="1">Baru</option>
					</select>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Jumlah Stok</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="stok_in" type="number" min="0" class="form-control" placeholder="Jumlah stok" value="<?php echo $book_data[0]['stock_u_b']; ?>" required autofocus>
				</div>
			</div>

			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Deskripsi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<textarea name="deskripsi_in" class="form-control" rows="3" id="comment" placeholder="<?php echo $book_data[0]['description_u_b']; ?>" value="<?php echo $book_data[0]['description_u_b']; ?>"></textarea>
				</div>
			</div>



			<div class="row form-book-wrapper   text-center">
			<?php $i=1;
			foreach($current_photo as $key){ ?>
				<div class="col-md-4" style="padding:20px;">
 					<div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:0.5em">
						<img src="<?php echo base_url().$key['image_path']; ?>" class="img-responsive-2" height="200">
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="input-group image-upload" style="margin-bottom:0.5em">
						<label class="input-group-btn">
							<span class="btn btn-primary">
								Ganti<input type="file" name="userfiles[]" style="display: none;">
							</span>
						</label>

								<input name="pict-1" type="text" class="form-control" style=" margin-bottom:0;" readonly>
						<label class="input-group-btn">

						</label>
						</div>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12"><a href="<?php echo base_url()."mybooks/delete_ub_img/".$book_data[0]['slug_title_u_b']."/".$key['id_u_b_img']?>" style="width:100%" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
					</div>
					</div>
					</div>

				<?php $i++; } ?>
				</div>

			<div class="row form-book-wrapper text-center" style="margin-bottom:50px;">
				<div class="input-group image-upload" style="margin-bottom:0.5em">
				<label class="input-group-btn">
				<span class="btn btn-primary">
					Tambah Foto<input type="file" name="newfile" style="display: none;">
				</span>
				</label>
				<input name="pict-add" type="text" class="form-control" style=" margin-bottom:0;" readonly>
			</div>
			</div>

			<div class="col-md-8 col-md-offset-2 col-sm-9 col-sm-offset-1">
			<button type="submit" style="width:100%" class="btn btn-md btn-primary" name="filesubmit" value="1">Edit</button>
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
