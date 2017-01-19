<!doctype html>

<html lang="en">
<head>

	<title>DapatBuku - Cari Buku Jadi Lebih Mudah</title>
	<?php echo $header; ?>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/carousel-thumbnail.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/profile.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/profile/manage-books.css">

</head>

<body>
	<?php echo $navbar; ?>

	<!--/////////////////////BOOK///////////////////////////////// -->

<div class="container" id="profile-header">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				<?php echo $navbar2; ?>
			</div>
			<div class="custom-container col-md-10">
					<div class="header-text-2 text-center"> Atur Bukumu </div>
					<div class="manage-books-container">
					<?php
					foreach($all_book as $key) { if($key['active'] != 0){?>
						<div class="col-md-6 manage-books-item">
							<div class="row books-wrapper">
								<div class="col-md-12 info-books-container">
									<div class="col-md-2 padding-0">
										<div class="book-image">
											<img src="<?php echo base_url().$key['image_thumb']; ?>" class="img-responsive-2">
										</div>
									</div>
									<div class="col-md-10">
										<div class="book-title"> <a href="<?php echo base_url()?>book/product/<?php echo $key['slug_title_u_b']?>"><?php echo $key['title_u_b']; ?></a></div>
										<div class="book-price"> <?php echo $key['price_sell_u_b']; ?> </div>
										<div class="book-date"> Last Edit : 2 Oktober 2016 </div>
										<?php if($key['active'] == 1){ ?>
											<div class="active-book">Tervalidasi</div>
											<?php }
											else if($key['active'] == 2){ ?>
												<div class="inactive-book">Belum Divalidasi</div>
												<?php } ?>
									</div>
								</div>
								<div class="col-md-12" style="">
									<a href="<?php echo base_url()."Mybooks/edit?title=".$key['slug_title_u_b']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
									<a data-toggle="modal" href="#shortModal" ><button type="button" class="btn btn-primary">Delete</button></a>

								</div>
							</div>
						</div>

						<!--DELETE ALERT-->
						<div id="shortModal" class="modal modal-wide fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Apakah anda yakin menghapus buku ini?</h4>
									</div>
									<div class="modal-body">
										<a href="<?php echo base_url()."Mybooks/delete?id-book=".$key['id_u_b']; ?>"><button type="button" class="btn btn-danger">Ya</button></a>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					<?php } } ?>
					</div>

					<div class="col-md-12">
						<nav aria-label="Page navigation">
						<div class="text-center">
						  <ul class="pagination">
								<li><a href="#">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()."mybooks/manager?page=".$i;?>">
											<?php echo $i ?><span class="sr-only">(current)</span></a></li>
									<?php }} ?>
									<li><a href="#">Last</a></li>
						  </ul>
						</div>
						</nav>
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
