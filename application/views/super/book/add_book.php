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
				<?php echo form_open_multipart('super/adminbook/do_add_book');?>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Judul Buku</span>
					<input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Pengarang</span>
					<input type="text" name="pengarang" class="form-control" placeholder="Pengarang" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Publisher</span>
					<input type="text" name="publisher" class="form-control" placeholder="Pengarang" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">ISBN</span>
					<input type="text" name="isbn" class="form-control" placeholder="ISBN" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Jumlah Halaman</span>
					<input type="number" name="halaman" class="form-control" placeholder="Jumlah Halaman" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Berat Buku</span>
					<input type="text" name="berat" class="form-control" placeholder="Berat buku dalam kg" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Tags</span>
					<input type="text" name="tags" class="form-control" placeholder="Tags" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Cover</span>
					<input type="file" name="picture" class="form-control" aria-describedby="sizing-addon2">
				</div>

				<div class="input-group">
					<div class="form-group">
					  <label for="cetakan_pertama">Cetakan Pertama</label>
					  <select name="cetakan_pertama" class="form-control" id="cetakan_pertama">
						<?php for($i=1980;$i<2017;$i++){?>
						<option value="<?php echo $i ?>"><?php echo $i ?></option>
						<?php } ?>
					  </select>
					</div>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="sel1">Bahasa</label>
					  <select name="bahasa" class="form-control" id="sel1">
						<option value="indonesia">Indonesia</option>
						<option value="inggris">Inggris</option>
					  </select>
					</div>
				</div>
				<div class="input-group">
					<label for="kategori">Kategori</label>
					<?php for($i=0;$i<count($categories);$i++){?>
					<div class="checkbox" id="kategori">
						<label><input name="category[]" type="checkbox" value="<?php echo $categories[$i]->id_b_category?>"><?php echo $categories[$i]->name_b_category?></label>
					</div>
					<?php } ?>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="sel2">Cover</label>
					  <select name="cover" class="form-control" id="sel2">
						<option value="soft">Soft Cover</option>
						<option value="hard">Hard Cover</option>
						<option value="both">Keduanya</option>
					  </select>
					</div>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="comment">Sinopsis:</label>
					  <textarea name="sinopsis" class="form-control" rows="8" cols="80" id="comment" placeholder="Sinopsis"></textarea>
					</div>
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
