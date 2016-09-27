<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <?php echo form_open('Auth/login'); ?>
    <h1>Insert your username and password</h1>
    </hr>
    <?php if(isset($result)) {  echo $result; ?>
      <h3> Login Successful </h3> <?php
      } ?>
      <br />

      <?php echo form_label('Your Email :'); ?>
      <?php echo form_input(array('id' => 'emailin', 'name' => 'emailin')); ?>

      <?php echo form_label('Your Password :'); ?>
      <?php echo form_input(array('id' => 'passin', 'name' => 'passin', 'type' => 'password')); ?>

      <?php echo form_submit(array('id' => 'submit', 'value' => 'Login')); ?>
      <?php echo form_close(); ?> <br />
  </body>

</html>
