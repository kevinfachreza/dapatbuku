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
			<?php echo $navbar2?>
			<div class="col-md-10">
					<div class="header-text-2 text-center"> Atur Bukumu </div>
					<div class="manage-books-container">
					<?php foreach($all_book as $key) { ?>
						<div class="col-md-6 manage-books-item">
							<div class="row books-wrapper">
								<div class="col-md-12 info-books-container">
									<div class="col-md-2 padding-0">
										<div class="book-image">
											<a href="#"><img src="<?php echo base_url().$key['main_image_u_b']; ?>" class="img-responsive-2"></a>
										</div>
									</div>
									<div class="col-md-10">
										<div class="book-title"> <a href="#"><?php echo $key['title_u_b']; ?></a></div>
										<div class="book-writer"> <?php echo $key['writer']; ?> </div>
										<div class="book-price"> <?php echo $key['price_sell_u_b']; ?> </div>
										<div class="book-date"> Last Edit : 2 Oktober 2016 </div>
									</div>
								</div>
								<div class="col-md-12" style="">
									<a href="<?php echo base_url()."Mybooks/edit?id-books=".$key['id_u_b']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
									<a href="<?php echo base_url()."Mybooks/delete?id-book=".$key['id_u_b']; ?>"><button type="button" class="btn btn-primary">Delete</button></a>

										<!---<a href="#!" data-toggle="modal" data-target="#notification" aria-haspopup="true" aria-expanded="false"><button type="button" class="btn btn-danger">Delete</button></a>--->
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<!--NOTIFICATION-->
					<div class="modal fade" id="notification" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<h3>Are you sure to Delete this book?</h3>
								<a href="<?php echo base_url()."Mybooks/delete?id-books=".$key['id_u_b']; ?>"><button type="button" class="btn btn-danger">YES</button></a>
								<a href="<?php echo base_url()."Mybooks"; ?>"><button type="button" class="btn btn-warning">NO</button></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<nav aria-label="Page navigation">
						<div class="text-center">
						  <ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							  </a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  <a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
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
