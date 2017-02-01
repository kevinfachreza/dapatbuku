<div class="" id="profile-header"> 
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				<?php echo $navbar2; ?>
			</div>
			<div class="col-md-10 custom-container form-container">
				
				<div class="col-md-6 col-md-offset-3">
				
					<div class="form-profile">
						<div class="header-text-2 text-center"> Ganti Password Kamu </div>
						<?php if(!empty($this->session->flashdata('password_report'))){?> 
							<div class="banner-report"><?php echo $this->session->flashdata('password_report'); ?></div>
						<?php }?> 
						<form action="<?php echo base_url();?>accounts/change_password" method="POST">
							<input name="oldpassword" type="password" class="form-control" placeholder="Password Lama" required  autofocus>
							<input name="newpassword" type="password" class="form-control" placeholder="Password Baru"  required  autofocus>
							<input name="re-newpassword" type="password" class="form-control" placeholder="Ketik Lagi Password Baru"  required  autofocus>
							
							<button type="submit" class="btn btn-md btn-primary">Ganti Password</button>
						</form>
					</div>
				</div>
			</div>
		</div>				
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