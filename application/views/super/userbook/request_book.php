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
					<?php echo $this->session->flashdata('report');?>

					<div class="row">

					<table>
					  <tr>
					    <th>No</th>
					    <th>Judul Iklan</th>
					    <th>Username</th>
					    <th>Tanggal Created</th>
					    <th>Check</th>
					  </tr>
					<?php for ($i=0;$i<count($book);$i++){ ?>
					<tr>
					  	<td><?php echo $i+1 ?></td>
					  	<td><?php echo $book[$i]->title_u_b?></td>
					  	<td><?php echo $book[$i]->username_u?></td>
					  	<td><?php echo $book[$i]->created_at?></td>
					  	<td>
					  		<a href="<?php echo base_url()?>super/userbook/detail/<?php echo $book[$i]->slug_title_u_b?>">
					  		<button type="button" class="btn btn-primary">Detail</button>
					  		</a>
					  	</td>	
					</tr>
					<?php } ?>
					</table>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
							<div class="text-center">
							 	<ul class="pagination">
								<li><a href="<?php echo base_url()?>super/userbook/userbookrequest?page=1">First</a></li>
									<?php for($i=1;$i<=$page_total;$i++){ 
										if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
									?>
										<li <?php if($i == $page_now) echo 'class="active"' ?>  >
											<a href="<?php echo base_url()?>super/userbook/userbookrequest?
											page=<?php echo $i?>
											">
											<?php echo $i ?><span class="sr-only">(current)</span></a></li>
									<?php }} ?>
									<li><a href="<?php echo base_url()?>super/userbook/userbookrequest?page=<?php echo $page_total?>">Last</a></li>
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
