<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>
	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/profile.css">

</head>

<body>
	<?php echo $navbar; ?>
	
	
	<!--/////////////////////BOOK///////////////////////////////// -->
	
	
<div class="container" id="profile-header"> 
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2  text-center">
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="#">Edit Profile</a></li>
				  <li role="presentation"><a href="#">Change Password</a></li>
				  <li role="presentation"><a href="#">Manage Books</a></li>
				</ul>
			</div>
			<div class="col-md-10 form-container">
				
				<div class="col-md-6 col-md-offset-3">
					<div class="form-profile">
						<div class="header-text-2 text-center"> Ganti Foto Kamu </div>
						<form action="<?php echo base_url();?>auth/do_register" method="POST">
							<div class="photo-profile-container text-center">
								<img src="https://pbs.twimg.com/profile_images/3743349988/7926e89ff14b79fd94d91a6b823cbd61_400x400.jpeg" class="img-circle" alt="Cinque Terre" width="150" height="150">
							</div>
							<div class="input-group" style="margin-bottom:0.5em">
								<label class="input-group-btn">
									<span class="btn btn-primary">
										Browse&hellip; <input type="file" style="display: none;" multiple>
									</span>
								</label>
								<input type="text" class="form-control" style=" margin-bottom:0" readonly>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-md btn-primary">Submit</button>
							</div>
						</form>
					</div>
				
					<div class="form-profile">
						<div class="header-text-2 text-center"> Ganti Data Kamu </div>
						<form action="<?php echo base_url();?>auth/do_register" method="POST">
							<input name="email" type="Email" class="form-control" placeholder="Email" required  autofocus>
							<input name="username" type="text" class="form-control" placeholder="Username" required  autofocus>
							<input name="firstname" type="text" class="form-control" placeholder="First Name" style=" float:left;width:49%;margin-right:2%" required  autofocus>
							<input name="lastname" type="text" class="form-control" placeholder="Last name" style="width:49%;" required  autofocus>
							
							<input name="date" type="Date"  class="form-control" placeholder="Tanggal Lahir" required autofocus>
							
							<input name="phone" type="text" class="form-control" placeholder="Nomor HP/Telepon" required  autofocus>
							
							<select class="form-control" id="provinsi">
								<option disabled selected>Provinsi</option>
								<?php for($i=0; $i<100; $i++){ ?>
								<option><?php echo $i?></option>
								<?php } ?>
							</select>
							<select class="form-control" id="kota">
								<option disabled selected>Kota</option>
								<?php for($i=0; $i<100; $i++){ ?>
								<option><?php echo $i?></option>
								<?php } ?>
							</select>
							<textarea class="form-control" rows="3" id="comment" placeholder="Bio"></textarea>
							<button type="submit" class="btn btn-md btn-primary">Edit</button>
						</form>
					</div>
				</div>
			</div>
		</div>				
	</div>
	
</div>
	
	<?php echo $footer; ?>
	
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