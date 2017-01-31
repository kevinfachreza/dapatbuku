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
				<h1 class="page-header">Edit Book</h1>
				<?php echo form_open_multipart('super/adminbook/do_edit_book?id='.$book[0]->id_b);?>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Judul Buku</span>
					<input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" aria-describedby="sizing-addon2" value="<?php echo $book[0]->title_b ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Pengarang</span>
					<input type="text" name="pengarang" class="form-control" placeholder="Pengarang" aria-describedby="sizing-addon2" value="<?php echo $book[0]->writer ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Publisher</span>
					<input type="text" name="publisher" class="form-control" placeholder="Publisher" aria-describedby="sizing-addon2" value="<?php echo $book[0]->publisher ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">ISBN</span>
					<input type="text" name="isbn" class="form-control" placeholder="ISBN" aria-describedby="sizing-addon2" value="<?php echo $book[0]->no_isbn_b ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Jumlah Halaman</span>
					<input type="number" name="halaman" class="form-control" placeholder="Jumlah Halaman" aria-describedby="sizing-addon2" value="<?php echo $book[0]->pages ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Berat Buku</span>
					<input type="text" name="berat" class="form-control" placeholder="Jumlah Halaman" aria-describedby="sizing-addon2" value="<?php echo $book[0]->berat_b ?>">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Tags</span>
					<input type="text" name="tags" class="form-control" placeholder="Tags" aria-describedby="sizing-addon2" value="<?php echo $book[0]->tags ?>">
				</div>
					<img src="<?php echo base_url()?><?php echo $book[0]->photo_cover_b ?>" style="margin-bottom:20px; max-height:100px;">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Cover</span>
					<input type="file" name="picture" class="form-control" aria-describedby="sizing-addon2">
				</div>

				<?php
					$date = date_create($book[0]->date_published);

				?>

				<div class="input-group">
					<div class="form-group">
					  <label for="cetakan_pertama">Cetakan Pertama</label>
					  <input type="date" name="cetakan_pertama" class="form-control" aria-describedby="sizing-addon2" value="<?php echo date_format($date, 'Y-m-d');  ?>">
					</div>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="sel1">Bahasa</label>
					  <select name="bahasa" class="form-control" id="sel1">
						<option value="indonesia" <?php if($book[0]->language_b == 'indonesia') echo 'selected' ?>>Indonesia</option>
						<option value="inggris" <?php if($book[0]->language_b == 'inggris') echo 'selected' ?>>Inggris</option>
					  </select>
					</div>
				</div>
				<div class="input-group">
					<label for="kategori">Kategori</label>
					<?php
					$flag=0;
					for($i=0;$i<count($categories);$i++){?>
					<div class="checkbox" id="kategori">
						<label><input name="category[]" type="checkbox" value="<?php echo $categories[$i]->id_b_category?>" <?php echo $categories[$i]->checked?>><?php echo $categories[$i]->name_b_category?></label>
					</div>
					<?php } ?>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="sel2">Cover</label>
					  <select name="cover" class="form-control" id="sel2">
						<option value="soft" <?php if($book[0]->cover_type_b == 'soft') echo 'selected' ?>>Soft Cover</option>
						<option value="hard" <?php if($book[0]->cover_type_b == 'hard') echo 'selected' ?>>Hard Cover</option>
						<option value="both" <?php if($book[0]->cover_type_b == 'both') echo 'selected' ?>>Keduanya</option>
					  </select>
					</div>
				</div>
				<div class="input-group">
					<div class="form-group">
					  <label for="comment">Sinopsis:</label>
					  <textarea name="sinopsis" class="form-control" rows="8" cols="80" id="comment" placeholder="Sinopsis"> <?php echo $book[0]->description_b?></textarea>
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
