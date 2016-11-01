<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/profile.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/manage-books.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	
<div class="form-container container" id="profile-header"> 
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
		<div class="header-text-2 text-center"> Ubah Iklan Buku </div>
		<form action="<?php echo base_url();?>auth/do_register" method="POST">
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Judul</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="judul" type="text" class="form-control" placeholder="Judul" required  autofocus>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Jual</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga-jual" type="text" class="form-control" placeholder="Harga Jual" autofocus>
					<div class="input-info">Kosongkan jika tidak ingin dijual</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Harga Sewa</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="harga-sewa" type="text" class="form-control" placeholder="Harga Sewa" autofocus>
					<div class="input-info">Kosongkan jika tidak ingin dijual</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Barter</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="checkbox">
						<label><input type="checkbox" value="">Barter</label>
					</div>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Kondisi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<select class="form-control" id="kategori">
						<option>Bekas</option>
						<option>Baru</option>
					</select>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Berat</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="berat" type="number" class="form-control" placeholder="Perkiraan Berat" required autofocus>
				</div>
			</div>
			
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Jumlah Stok</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<input name="stok" type="number" class="form-control" placeholder="Jumlah Stok" required autofocus>
				</div>
			</div>
			
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Deskripsi</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<textarea class="form-control" rows="3" id="comment" placeholder="Deskripsi"></textarea>
				</div>
			</div>
			<div class="row form-book-wrapper">
				<div class="col-md-4 col-sm-2 col-xs-2">Upload Gambar</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="input-group image-upload" style="margin-bottom:0.5em">
						<label class="input-group-btn">
							<span class="btn btn-primary">
								Browse&hellip; <input type="file" style="display: none;" multiple>
							</span>
						</label>
						<input type="text" class="form-control" style=" margin-bottom:0" readonly>
					</div>
					<div class="input-info">Bisa Lebih dari 1 Gambar</div>
					
					
					<div class="col-md-12 uploaded-image-container">
						<div class="uploaded-image-text">Gambar Yang Telah Di Upload Sebelumnya</div>
						<div class="row">
							<div class="col-md-3 book-uploaded-image">
								<img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Black_blank.jpg">
							</div>
							<div class="col-md-3 book-uploaded-image">
								<img src="<?php echo base_url()?>assets/img/book/book2.jpg">
							</div>
							<div class="col-md-3 book-uploaded-image">
								<img src="<?php echo base_url()?>assets/img/book/book2.jpg">
							</div>
							<div class="col-md-3 book-uploaded-image">
								<img src="<?php echo base_url()?>assets/img/book/book2.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-8 col-md-offset-2 col-sm-9 col-sm-offset-1">
			<button type="submit" style="width:100%" class="btn btn-md btn-primary">Edit</button>
			</div>
		</form>		
	</div>
	
</div>
	
	

	<?php echo $footer; ?>
	<script src="<?php echo base_url()?>assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  
	
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
  

  
</body>
</html>