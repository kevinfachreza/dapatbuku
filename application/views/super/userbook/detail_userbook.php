<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header ?>
		<title>Dashboard </title>
		<link href="<?php echo base_url()?>assets/css/admin/dashboard.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dapatbuku.css">
		<link href="<?php echo base_url()?>assets/css/admin/book.css" rel="stylesheet">
		<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	</head>

	<body>

	<?php echo $navbar?>
    <div class="container-fluid ">
		<div class="row">
		<?php echo $sidebar?>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4">
									<div class="col-sm-12 col-xs-12 padding-5px">
									   <div class="col-xs-12 padding-5px" id="slider">
											<div class="row">
												<div class="col-sm-12 " id="carousel-bounding-box">
													<div class="carousel slide" id="ProductCarousel">
														<div class="carousel-inner" style="height:300px;">
															<?php $i = 0;
																foreach($book_image as $key){
																?>
															<div class="<?php if($i == 0)	echo "active"; ?>item" data-slide-number="0">
																<img src="<?php echo base_url().$key['image_path']; ?>">
															</div>
															<?php
																$i++;
															} ?>

														</div>
														<a class="left carousel-control" href="#ProductCarousel" role="button" data-slide="prev">
															<span class="glyphicon glyphicon-chevron-left"></span>
														</a>
														<a class="right carousel-control" href="#ProductCarousel" role="button" data-slide="next">
															<span class="glyphicon glyphicon-chevron-right"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12  " id="slider-thumbs">
									<!-- Bottom switcher of slider -->
										<ul class="hide-bullets">
											<li class="col-xs-3 col-sm-3 padding-5px">
												<?php foreach($book_image as $key){	?>
												<a class="thumbnail" id="carousel-selector-0">
													<img src="<?php echo base_url().$key['image_path']; ?>">
												</a>
											</li>
											<?php } ?>
										</ul>
									</div>
							<!--/Slider-->
								</div>
								<div class="col-md-8">
									<div class="book-header">
										<?php echo $book_result[0]['title_u_b']; ?>
									</div>
									<div class="book-price">
										<?php if($book_result[0]['sell_u_b'] != 1)
										{
											echo "Buku ini tidak dijual";
										}
										else
										{
											echo $book_result[0]['price_sell_u_b'];
										}
										 ?>
									</div>
									<div class="book-rent">
										<?php if($book_result[0]['rent_u_b'] == 1){ ?><span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span> Sewa : <?php echo $book_result[0]['price_rent_u_b']; ?>/minggu<?php }  else { ?><span class="book-ok-icon glyphicon glyphicon-remove" aria-hidden="true"></span>Sewa :<?php } ?>
									</div>
									<div class="book-barter">
										<?php if($book_result[0]['barter_u_b'] == 1){ ?><span class="book-ok-icon glyphicon glyphicon-ok" aria-hidden="true"></span><?php } ?>
										<?php if($book_result[0]['barter_u_b'] == 0){ ?><span class="book-ok-icon glyphicon glyphicon-remove" aria-hidden="true"></span><?php } ?> Barter
									</div>


									<div class="col-md-12 product-item padding-0 ">
									<div class="product-header">Informasi Buku</div>
										<div class="col-md-4  padding-0 ">
										<div class="row">
											<div class="col-md-12 table-container">
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">Kondisi
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">
													<?php if($book_result[0]['type_u_b'] == 1){	echo "Baru"; }
																else if($book_result[0]['type_u_b'] == 2){ echo "Bekas"; } ?>
												</div>
											</div>
											<div class="col-md-12 table-container">
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">Berat
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">
													<?php echo $book_result[0]['berat_u_b']; ?>
												</div>
											</div>
											<div class="col-md-12 table-container">
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">Stok
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">
													<?php echo $book_result[0]['stock_u_b']; ?>
												</div>
											</div>
											<div class="col-md-12 table-container">
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">Tahun Beli
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6 table-content">
													<?php echo $book_result[0]['tahun_beli_u_b']; ?>
												</div>
											</div>
										</div>
										</div>
									</div>

									<div id="product-description" class="col-md-10 product-item">
										<div class="product-header">Deskripsi</div>
										<div class="product-description more">
											<?php echo $book_result[0]['description_u_b']; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">

  						<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#accept">Accept</button>
 						<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#reject">Reject</button>
					    
						</div>

				</div>
			</div>
		</div>
    </div>


<!-- Modal -->
  <div class="modal fade" id="accept" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hubungkan ke Source</h4>
        </div>
        <div class="modal-body">
         	<div class="form-group">
	        	<div class="input-group">
					<?php echo form_open_multipart('super/userbook/acceptbook?id='.$book_result[0]['id_u_b']);?>
		          	<div class="col-md-8">
		          		<input type="text" id="search" name="book_source" class="form-control" aria-label="" placeholder="Input ID">
		          	</div>
		          	<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					</form>
		        </div>
		    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Close Modal -->


<!-- Modal -->
  <div class="modal fade" id="reject" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alasan</h4>
        </div>
        <div class="modal-body">
         	<div class="form-group">
	        	<div class="input-group">
					<?php echo form_open_multipart('super/userbook/rejectbook?id='.$book_result[0]['id_u_b']);?>
		          	<div class="col-md-8">
		          		<input type="text" id="search" style="width:100%" class="form-control" aria-label="" name="reject_code"  placeholder="Kode Alasan">
		          	</div>
		          	<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					</form>
					<div class="col-md-12">
					<table style="margin-top:20px;">
					  <tr>
					    <th>Kode</th>
					    <th>Alasan</th>
					  </tr>
					  <?php foreach($reject_code as $key){ ?>
					  <tr>
					    <td><?php echo $key['code']?></td>
					    <td><?php echo $key['content']?></td>
					  </tr>
					  <?php } ?>
					  </table>
					</table>
					</div>
		        </div>
		    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!--Close Modal -->


</script>
    

	<?php echo $footer?>
	</body>
</html>
