<ul class="sidebar-nav">
            	<?php
			if ($this->session->logged_in == 1){?>
            	<div class="row profile-container hidden-md hidden-lg" style="margin-bottom: 15px;">
            		<div class="col-md-12">
					<?php $data = $this->session->userdata();
						$data = $data['userdata'][0];
					?>
					<img src="<?php echo base_url()?><?php echo $data->photo_profile_u?>" class="img-circle" height="50">
            		</div>
            		<div class="col-md-12" style="margin-top: 10px">
            			<?php echo $data->username_u ?><br>
            			<?php echo $data->email_u ?>
            		</div>
            	</div>
            	<?php } ?>
			<li><a href="<?php echo base_url()?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a> </li>
            	<li class="hidden-md hidden-lg"><a href="<?php echo base_url()?>search"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Search</a></li>
                <li class="hidden-md hidden-lg"><a href="<?php echo base_url()?>search"><i class="glyphicon glyphicon-book fa-fw" aria-hidden="true"></i>Tambah Buku</a></li>
            	<?php
			if ($this->session->logged_in == 1){?>
			<li><a href="<?php echo base_url()?>profile"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>My Profile</a></li>
			<li><a href="<?php echo base_url()?>mybooks/manager/"><i class="fa fa-book fa-fw" aria-hidden="true"></i>My Books</a></li>
			<?php } ?>
			<li><a href="<?php echo base_url(); ?>book/best_seller"><i class="fa fa-certificate fa-fw" aria-hidden="true"></i>Best Seller</a></li>
			<li><a href="<?php echo base_url(); ?>book/new_release"><i class="fa fa-bolt fa-fw" aria-hidden="true"></i>New Release</a></li>
			<li><a href="<?php echo base_url(); ?>book/most_viewed"><i class="fa fa-fire fa-fw" aria-hidden="true"></i>Most Viewed</a></li>

            	<?php
			if ($this->session->logged_in == 1){?>
    			<li role="separator" class="hidden-md hidden-lg divider"></li>
			<li class="hidden-md hidden-lg" ><a href="<?php echo base_url().'accounts/settings'; ?>"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</a></li>
			<li class="hidden-md hidden-lg" ><a href="<?php echo base_url().'Profile/logging_out'; ?>"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Log-out</a></li>

            	<?php } else { ?>
    			<li role="separator" class="hidden-md hidden-lg divider"></li>
			<li><a href="<?php echo base_url()?>login"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Login</a></li>
			<li><a href="<?php echo base_url()?>register"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>Register</a></li>

            	<?php } ?>


    			<li role="separator" class="divider"></li>
               <li class="sidebar-header"><a href="#">CATEGORIES </a></li>
               <?php foreach($nav_category as $key){?>
				<li>
					<a href="<?php echo base_url().'category/'.$key['slug_category'];?>"><?php echo $key['name_b_category']; ?></a>
     			</li>
			<?php } ?>
              
            </ul>