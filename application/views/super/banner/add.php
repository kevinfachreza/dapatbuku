<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header ?>
		<title>Dashboard </title>
		<link href="<?php echo base_url()?>assets/css/admin/dashboard.css" rel="stylesheet">
	</head>

	<body>

	<?php echo $navbar?>
    <div class="container-fluid">
		<div class="row">
		<?php echo $sidebar?>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Add Book</h1>
				<?php echo form_open_multipart('super/a_banner/do_add');?>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Judul</span>
					<input type="text" name="judul" class="form-control" placeholder="Judul" aria-describedby="sizing-addon2">
				</div>
				
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Link</span>
					<input type="text" name="link" class="form-control" placeholder="Link" aria-describedby="sizing-addon2">
				</div>
				
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Picture</span>
					<input type="file" name="picture" class="form-control" aria-describedby="sizing-addon2">
				</div>
				
				
				<div class="input-group">
					<button type="submit" class="btn btn-default btn-primary">Submit</button>
				</div>
				
				</form>
			</div>
		</div>
    </div>
	<?php echo $footer?>
	</body>
</html>
