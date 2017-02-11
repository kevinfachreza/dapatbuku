<div class="container container-blank"  id="book-container">
	<div class="col-md-3 col-sm-3 col-xs-12 custom-container container">
		<div class="search-side-item" style="margin-top:0">
			<form action="<?php echo base_url()."Search"; ?>" method="get">
			<div class="header-text-2">Cari</div>
			<div class="activity-wrapper">
				<input name="keyword" type="text" class="form-control" placeholder="Search" value="<?php echo $keyword ?>"style="margin-bottom:0.5em" required  autofocus>
			</div>
		</div>

		<div class="search-side-item">
			<div class="header-text-2">Kategori</div>
			<div class="activity-wrapper">
				<select class="form-control" id="kategori" name="kategori-in">
					<option>-Pilih Kategori-</option>
					<?php foreach($nav_category as $key){ ?>
					<option value="<?php echo $key['id_b_category']; ?>"><?php echo $key['name_b_category']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="search-side-item">
			<div class="header-text-2">Kategori Lain</div>
			<div class="activity-wrapper">
				<div class="checkbox">
				  <label><input name="best-sell-flag" type="checkbox" value="1">Best Seller</label>
				</div>
				<div class="checkbox">
				  <label><input name="rekomendasi-flag" type="checkbox" value="1">Rekomendasi</label>
				</div>
			</div>
		</div>

		<div class="search-side-item">
			<div class="header-text-2">Tebal</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="page-min-in" min="0" max="100" step="10"  placeholder="Min">
			</div>
			<div class="activity-wrapper">
				<input type="number"  class="form-control" name="page-max-in" min="0" max="100" step="10"  placeholder="Max">
			</div>
		</div>

		<div class="search-side-item border-none">
			<div class="activity-wrapper">
				<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
				<button type="submit" class="btn btn-danger" value="reset" style="margin-left:10px;">Reset</button>

			</div>
		</div>
	</form>

	</div>
	<div class="col-md-8 col-sm-8 col-xs-12 col-xs-offset-0	">
		<div class="col-md-12 container custom-container ">
			<div class="col-md-12 header-text-2">Buku yang mungkin kamu cari</div>
			<div class="col-md-12 text-center"><hr></div>

			<div class="row">
			<?php if(count($book > 0)){
				$i = 0;
			foreach($book as $key){
				if($i >= 4){
					break;
				}?>
				<div class="col-md-3 search-item">
					<div class="book-class-image"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><img src="<?php echo $key['photo_cover_b']; ?>"></a>
					</div>
					<div class="book-class-title"><a href="<?php echo base_url()."book/b/".$key['slug_title_b']; ?>"><?php echo $key['title_b']; ?></a>
					</div>
					<div class="author-container text-center"><?php echo $key['writer']; ?></div>
				</div>
			<?php
					$i++; }
         	}
					 if(count($book) == 0){  ?>
						 <div class="text-center">
 							Maaf, hasil pencarian tidak ditemukan...<br>
 							Request Buku Yang Kamu Inginkan Disini <br><br>
 							<a href="<?php echo base_url()?>requestbook"><button class="btn btn-primary">Request Book</button>
 						</div>
						<?php } ?>
			</div>
		</div>
	</div>
</div>
