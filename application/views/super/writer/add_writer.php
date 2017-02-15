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
		<script>
					$(document).ready(function(){
					var next = 1;
					$(".add-more").click(function(e){
						e.preventDefault();
						var addto = "#field" + next;
						var addRemove = "#field" + (next);
						next = next + 1;
						var newIn = '<input autocomplete="off" class="input form-control" placeholder="Masukkan Buku yang telah ditulis" id="field' + next + '" name="field' + next + '" type="text">';
						var newInput = $(newIn);
						var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
						var removeButton = $(removeBtn);
						$(addto).after(newInput);
						$(addRemove).after(removeButton);
						$("#field" + next).attr('data-source',$(addto).attr('data-source'));
						$("#count").val(next);

								$('.remove-me').click(function(e){
										e.preventDefault();
										var fieldNum = this.id.charAt(this.id.length-1);
										var fieldID = "#field" + fieldNum;
										$(this).remove();
										$(fieldID).remove();
								});
				});



			});

		</script>
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
				<?php echo form_open_multipart('super/writer/do_add_writer');?>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Nama Penulis</span>
					<input type="text" name="nama_in" class="form-control" placeholder="Nama Penulis" aria-describedby="sizing-addon2" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Asal Penulis</span>
					<input type="text" name="asal_in" class="form-control" placeholder="Asal kota Penulis" aria-describedby="sizing-addon2" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Tanggal Lahir Penulis</span>
					<input type="date" name="ttl_in" class="form-control" placeholder="Tanggal Lahir Penulis" aria-describedby="sizing-addon2" required>
				</div>
        <div class="input-group">
          <span class="input-group-addon" id="sizing-addon2">Foto</span>
          <input type="file" name="picture" class="form-control" aria-describedby="sizing-addon2" required>
        </div>
				<div class="input-group">
					<div class="form-group">
					  <label for="comment">Deskripsi:</label>
					  <textarea name="deskripsi_in" class="form-control" rows="8" cols="80" id="comment" placeholder="Deskripsi Penulis" required></textarea>
					</div>
				</div>

				<input type="hidden" name="count" value="1" />
				<div class="col-xs-4" id="fields">
					<div class="control-group" id="profs">
						<label class="control-label" for="field1">Add More</label>

              <div id="field"><input class="input form-control" id="field1" name="field1" type="text" placeholder="Masukkan ID Buku yang telah ditulis" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
							<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Jumlah Buku:</span>
									<input type="number" name="book_count" min="0" class="form-control" placeholder="Jumlah Buku yang anda masukkan" aria-describedby="sizing-addon2">
							</div>
					<button type="submit" class="btn btn-default btn-primary">Submit</button>
				</div>
				</div>

				</form>
			</div>
		</div>
    </div>

	</body>
</html>
