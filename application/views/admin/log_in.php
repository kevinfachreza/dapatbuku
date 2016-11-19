<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $header?>
    <title>Signin </title>
    <link href="<?php echo base_url()?>assets/css/admin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
		
      <form class="form-signin" action="<?php echo base_url();?>sayabatman/do_login" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in
		<?php echo $this->session->batman ?></button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
