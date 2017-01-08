<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header ?>
		<title>Dashboard </title>
		<link href="<?php echo base_url()?>assets/css/admin/dashboard.css" rel="stylesheet">
	</head>
	<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: center;
	    padding: 8px;
	}

	</style>
	<body>

	<?php echo $navbar?>
    <div class="container-fluid">
		<div class="row">
		<?php echo $sidebar?>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Banner Manager</h1>
				<div class="container" style="margin-bottom: 12px;">
				    <a href="<?php echo base_url()?>super/a_banner/add">
						<button type="submit" class="btn btn-default btn-primary">Tambahkan Banner Baru</button>
					</a>
				</div>
				<div class="container" style="margin-bottom: 12px;">
				    <a href="<?php echo base_url()?>super/a_banner/showall">
						<button type="submit" class="btn btn-default btn-primary">Show Deleted</button>
					</a>
				</div>

				<table >
				  <tr>
				    <th>Id</th>
				    <th>Pict</th>
				    <th>Link</th>
				    <th>Created At</th>
				    <th>Active Status</th>
				    <th>Activate</th>
				    <th>Delete</th>
				  </tr>
				    <?php foreach ($banner as $data) {?>
					  <tr>
					    <td><?php echo $data->id?></td>
					    <td><img src="<?php echo base_url()?>assets/img/banner/<?php echo $data->pict?>" width="200"></td>
					    <td><?php echo $data->link?></td>
					    <td><?php echo $data->created_at?></td>
					    <td>


					    	<?php if($data->active == 1){ ?>
					    		<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					    	<?php } 
					    	else if($data->active == 0){ ?>
					    		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					    	<?php } 
					    	else if($data->active == 10){ ?>
					    		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
					    	<?php } ?>


					    </td>
					    <td>

					    	<?php if($data->active == 1){ ?>
					    		
						    <a href="<?php echo base_url()?>super/a_banner/deactivate/<?php echo $data->id?>">
							<button type="submit" class="btn btn-default btn-warning">Deactivate</button>
							</a>
					    	<?php } 
					    	else if($data->active == 0){ ?>
					    		
						    <a href="<?php echo base_url()?>super/a_banner/activate/<?php echo $data->id?>">
							<button type="submit" class="btn btn-default btn-primary">Activate</button>
							</a>
					    	<?php } 
					    	else if($data->active == 10){ ?>
					    		
						    <a href="<?php echo base_url()?>super/a_banner/deactivate/<?php echo $data->id?>">
							<button type="submit" class="btn btn-default btn-success">Restore</button>
							</a>
					    	<?php } ?>

						</td>
					    <td>
						    <a href="<?php echo base_url()?>super/a_banner/delete/<?php echo $data->id?>">
							<button type="submit" class="btn btn-default btn-danger" onclick="return confirm('Are you sure？')">Delete</button>
							</a>
						</td>
					  </tr>

				    <?php } ?>
				</table>

			</div>
		</div>
    </div>
	<?php echo $footer?>
	</body>
</html>
