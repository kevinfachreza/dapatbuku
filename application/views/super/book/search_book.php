<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header ?>
		<title>Dashboard </title>
		<link href="<?php echo base_url()?>assets/css/admin/dashboard.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dapatbuku.css">
		<link href="<?php echo base_url()?>assets/css/admin/book.css" rel="stylesheet">
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
					<?php for ($i=0;$i<count($book);$i++){ ?>
						<div class="col-md-2 col-sm-4 col-xs-12 book-item">
							<div class="margin-bot-1 home-book-img">
								<a href="<?php echo base_url()?>book?title=<?php echo $book[$i]->slug_title_b?>"><img src="<?php echo base_url()?><?php echo $book[$i]->photo_cover_b?>" class="img-responsive-2"></a>
							</div>
							<div class="text-center" style="margin-bottom: 10px;">
								<div class="font-semibold title-container"><a href="<?php echo base_url()?>book?title=<?php echo $book[$i]->slug_title_b?>" class="text-primary"><?php echo $book[$i]->title_b?></a></div>
								<div class="author-container"><a href="<?php echo base_url()?>book?title=<?php echo $book[$i]->slug_title_b?>" class="text-primary"><?php echo $book[$i]->writer?></a></div>
								<div class="author-container"><a href="<?php echo base_url()?>book?title=<?php echo $book[$i]->slug_title_b?>" class="text-primary">ID:<?php echo $book[$i]->id_b?></a></div>
							</div>
							<a href="<?php echo base_url()?>super/adminbook/edit_book/<?php echo $book[$i]->id_b?>">
								<button type="button" class="btn btn-primary">Edit</button>
							</a>
							<a href="<?php echo base_url()?>super/adminbook/do_delete_book/<?php echo $book[$i]->id_b?>">
								<button type="button" class="btn btn-danger" onclick="return confirm('Are you sure？')">Delete</button>
							</a>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
    </div>
	<?php echo $footer?>
	</body>
</html>
