<div class="" id="profile-header">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				<?php echo $navbar2; ?>
			</div>
			<div class="col-md-10 custom-container form-container">

				<div class="col-md-6 col-md-offset-3">
					<div class="form-profile">
						<div class="header-text-2 text-center"> Ganti Avatar Kamu </div>
						<?php if(!empty($this->session->flashdata('profile_report'))){?>
							<div class="banner-report"><?php echo $this->session->flashdata('profile_report'); ?></div>
						<?php }?>
						<?php echo form_open_multipart('accounts/change_photo');?>
							<div class="col-md-12 text-center"><div class="photo-profile-container">

								<img src="<?php echo base_url()?><?php echo $user[0]->photo_profile_u ?>" class="img-circle" style="width:150px"alt="Cinque Terre">
							</div></div>
							<div class="input-group" style="margin-bottom:0.5em">
								<label class="input-group-btn">
									<span class="btn btn-primary">
										Browse&hellip; <input type="file" name="picture-file" style="display: none;" >
									</span>
								</label>
								<input type="text" class="form-control" style=" margin-bottom:0" readonly>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-md btn-primary" name="picture-submit">Submit</button>
							</div>
						</form>
					</div>

					<div class="form-profile">
						<div class="header-text-2 text-center"> Ganti Data Kamu </div>
						<form action="<?php echo base_url();?>accounts/do_update_profile" onsubmit="return checkNum()" method="POST">
						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Email</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
								<input name="email" type="Email" class="form-control" placeholder="Email" value="<?php echo $user[0]->email_u ?>"required >
							</div>
						</div>

						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Username</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
								<input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $user[0]->username_u ?>" required  disabled >
							</div>
						</div>

						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Nama</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
								<input name="firstname" type="text" class="form-control" placeholder="First Name" value="<?php echo $user[0]->firstname_u ?>" style=" float:left;width:49%;margin-right:2%" required  >
								<input name="lastname" type="text" class="form-control" placeholder="Last name" value="<?php echo $user[0]->lastname_u ?>" style="width:49%;" required  >
							</div>
						</div>

						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Tanggal Lahir</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
								<input name="date" type="date"  class="form-control" placeholder="Tanggal Lahir" value="<?php echo $user[0]->date_of_birth_u ?>" required >
							</div>
						</div>
						<p style="color:rgb(230, 0, 0)" id="num-warn"></p>

						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">No HP</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<input name="phone" id="numhp" onfocusout="checkNum()" type="text" class="form-control" placeholder="Nomor HP/Telepon" value="<?php echo $user[0]->phone_number_u ?>" required  >
							</div>
							</div>


						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">LINE</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<input name="line_in" type="text" class="form-control" placeholder="ID Line" value="<?php echo $user[0]->line_u ?>"  >
							</div>
							</div>


						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Whatsapp</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<input name="whatsapp_in" type="text" class="form-control" placeholder="Nomor Whatsapp" value="<?php echo $user[0]->whatsapp_u ?>"  >
							</div>
							</div>


						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Provinsi</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<select class="form-control" name="province" id="provinsi">
								<option disabled>Provinsi</option>
								 <?php
									foreach($provinsi as $data){

										if($data->id == $user[0]->province_u)
										{
											echo '<option value="' . $data->id . '" selected>' . $data->name . '</option>';
										}
										else{
											echo '<option value="' . $data->id . '">' . $data->name . '</option>';
										}
									}
								?>
							</select>
							</div>
							</div>


						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Kota</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<select id="kota" name="city" class="form-control">
								<option disabled selected>Kota</option>
							</select>
							</div>
							</div>


						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2">Biodata</div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<textarea name="bio" class="form-control" rows="3" id="comment" placeholder="Bio" required><?php echo $user[0]->bio_u ?></textarea>
							</div>
							</div>

						<div class="row form-profile-wrapper">
							<div class="col-md-3 col-sm-2 col-xs-2"></div>
							<div class="col-md-9 col-sm-8 col-xs-10">
							<button type="submit" class="btn btn-md btn-primary">Edit</button>
							</div>
							</div>
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


<script>
$( document ).ready(function() {
	var prov_id = $('#provinsi').find(":selected").val();
		console.log(prov_id);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>accounts/get_cities/'+prov_id,
            //contentType: "application/json; charset=utf-8",
            dataType:"json",
            //traditional: true,
            success:function(response){
                        console.log(response);
                        $('#kota').empty();
						for (var i = 0; i < response.length; i++) {
							if(<?php echo $user[0]->city_u ?>== + response[i].id )
							{
								var checkBox = "<option value='" + response[i].id + "' selected>" + response[i].name + "</option>";
							}
							else{
								var checkBox = "<option value='" + response[i].id + "'>" + response[i].name + "</option>";
							}
							$(checkBox).appendTo('#kota');
						}

                    },
            error: function(response){
						console.log(response);

                }
            });
});
</script>

<script>
$('#provinsi').change(function() {
		var prov_id = $('#provinsi').find(":selected").val();
		console.log(prov_id);
        $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>accounts/get_cities/'+prov_id,
            //contentType: "application/json; charset=utf-8",
            dataType:"json",
            //traditional: true,
            success:function(response){
                        console.log(response);
                        $('#kota').empty();
						for (var i = 0; i < response.length; i++) {
							var checkBox = "<option value='" + response[i].id + "'>" + response[i].name + "</option>";
							$(checkBox).appendTo('#kota');
						}

                    },
            error: function(response){
						console.log(response);

                }
            });
	});
</script>

<script>
	function checkNum(){
		var num = document.getElementById('numhp').value;
		var check = /^\d+$/.test(num);
		if(check){
			document.getElementById('num-warn').innerHTML = "";
			return true;
		}
		else{
			document.getElementById('num-warn').innerHTML = "Nomor HP anda hanya boleh berisi nomor";
			return false;
		}
	}
</script>
</body>
</html>
