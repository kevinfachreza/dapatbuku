<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header ?>
		<title>Dashboard </title>
		<link href="<?php echo base_url()?>assets/css/admin/dashboard.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css">
    <style>
					* {
						.border-radius(0) !important;
						}

					#field {
						margin-bottom:20px;
						}
    </style>
	</head>

	<body>

	<?php echo $navbar?>
    <div class="container-fluid">
		<div class="row">
		<?php echo $sidebar?>
		<?php echo $footer?>
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
		<!-- <script type="text/javascript">
		$(function(){
			$("#").autocomplete({
				source: "<?php base_url(); ?>super/writer/get_suggest_book" // path to the get_birds method
				});
			});
		</script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		<script>
		webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
		$.webshims.formcfg = {
		en: {
		    dFormat: '-',
		    dateSigns: '-',
		    patterns: {
		        d: "yy-mm-dd"
		    }
		}
		};
		</script>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Add Writer</h1>
				<?php echo form_open_multipart('super/writer/do_edit_writer');?>
				<input type="hidden" name="slug" value="<?php echo $writer[0]->slug_writer; ?>">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Nama Penulis</span>
					<input type="text" name="nama_in" class="form-control" placeholder="Nama Penulis" value="<?php echo $writer[0]->name_writer; ?>" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Asal Penulis</span>
					<input type="text" name="asal_in" class="form-control" placeholder="Asal kota Penulis" value="<?php echo $writer[0]->origin_writer; ?>" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Tanggal Lahir Penulis</span>
					<input type="date" name="ttl_in" class="form-control" placeholder="Tanggal Lahir Penulis" value="<?php echo $writer[0]->date_of_birth_writer; ?>" aria-describedby="sizing-addon2">
				</div>
        <div class="input-group">
          <img src="<?php echo base_url()?><?php echo $writer[0]->photo_writer ?>" style="margin-bottom:20px; max-height:100px;">
          <span class="input-group-addon" id="sizing-addon2">Foto</span>
          <input type="file" name="picture" class="form-control" aria-describedby="sizing-addon2">
        </div>
				<div class="input-group">
					<div class="form-group">
					  <label for="comment">Deskripsi:</label>
					  <textarea name="deskripsi_in" class="form-control" rows="8" cols="80" id="comment" value="<?php echo $writer[0]->description_writer ?>" placeholder="Deskripsi Penulis"></textarea>
					</div>
				</div>
        <h4>Anda bisa mengganti buku yang ditulis langsung, pada book manager</h4>
        <button type="submit" class="btn btn-default btn-primary">Submit</button>

				</form>
			</div>
		</div>
    </div>

	</body>
</html>
