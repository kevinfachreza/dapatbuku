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
				<h3 class="text-center">Writer Manager</h3>
        <a href="<?php echo base_url(); ?>super/writer/add_writer"><button type="button" class="btn btn-primary">Add More</button></a>
				<div class="col-md-12">
					<?php echo $this->session->flashdata('report');?>

					<div class="row">

					<table>
					  <tr>
  						<th>No</th>
							<th>ID</th>
  						<th>Name</th>
  						<th>Origin</th>
              <th>Detail</th>
  						<th>Action</th>
					  </tr>
					<?php for ($i=0;$i<count($writer);$i++){ ?>
					  <tr>
					  	<td><?php echo $i+1 ?></td>
							<td><?php echo $writer[$i]['id_writer']; ?></td>
					  	<td><?php echo substr($writer[$i]['name_writer'], 0, 10);?></td>
					  	<td><?php echo $writer[$i]['origin_writer']; ?></td>
              <td><a data-toggle="modal" data-target="#<?php echo $writer[$i]['slug_writer']; ?>detailModal"><button type="button" class="btn btn-primary">Show</button></a></td>
					  	<td>
  							<a href="<?php echo base_url()?>super/writer/edit_writer?slug=<?php echo $writer[$i]['slug_writer']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
  							<a data-toggle="modal" data-target="#<?php echo $writer[$i]['slug_writer']; ?>deleteModal"><button type="button" class="btn btn-danger">Delete</button></a>
					  	</td>
					</tr>

          <div id="<?php echo $writer[$i]['slug_writer']; ?>detailModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Detail Penulis</h4>
                </div>
                <div class="modal-body">
                  <div class="book-image">
                    <img src="<?php echo base_url().$writer[$i]['photo_writer']; ?>" class="img-responsive-2">
                  </div>
                  <div id="informasi-buku" class="custom-container">
                  	<div class="row">
                  		<div class="col-md-12">
                  			<div class="col-md-12 header-text-2">Informasi Penulis</div>
                  			<div class="col-md-12 text-center"><hr></div>
                  			<div class="row">
                  				<div class="col-md-12">
                  					<div class="col-md-4">
                  						<div class="col-md-12 table-container">
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Nama:
                  							</div>
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $writer[$i]['name_writer']; ?>
                  							</div>
                  						</div>
                  						<div class="col-md-12 table-container">
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Asal Kota
                  							</div>
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $writer[$i]['origin_writer']; ?>
                  							</div>
                  						</div>
                  						<div class="col-md-12 table-container">
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content">TTL:
                  							</div>
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $writer[$i]['date_of_birth_writer']; ?>
                  							</div>
                  						</div>
                  						<div class="col-md-12 table-container">
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content">Deskripsi:
                  							</div>
                  							<div class="col-md-6 col-sm-6 col-xs-6 table-content"><?php echo $writer[$i]['description_writer']; ?>
                  							</div>
                  						</div>

                  					</div>
                  				</div>
                  			</div>
                  		</div>
                  	</div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div id="<?php echo $writer[$i]['slug_writer']; ?>deleteModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Apakah Anda yakin menghapus penulis ini?</h4>
                </div>
                <div class="modal-body">
                  <a href="<?php echo base_url(); ?>super/writer/delete_writer?slug=<?php echo $writer[$i]['slug_writer']; ?>"><button type="button" class="btn btn-danger">Ya</button></a>
                  <button type="button" class="btn btn-warning" data-dismiss="modal" >Batal</button>
                </div>
              </div>
            </div>
          </div>
					<?php } ?>
					</table>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
							<div class="text-center">
							 	<ul class="pagination">
								<li><a href="<?php echo base_url()?>super/user/RequestUser?page=1">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()?>super/user/RequestUser?
											page=<?php echo $i?>
											">
											<?php echo $i ?><span class="sr-only">(current)</span></a></li>
									<?php }} ?>
									<li><a href="<?php echo base_url()?>super/user/RequestUser?page=<?php echo $page_total?>">Last</a></li>
							  	</ul>
							</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<?php echo $footer?>
	</body>
</html>
