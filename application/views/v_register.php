<html>
  <head>
    <title>REGISTER</title>
  </head>

  <body>
    <?php echo form_open('Auth/register'); ?>
    <h1>Insert your data honestly</h1></hr>
    <?php if(isset($message)) { ?>
      <h3 style="color:green">Data Inserted succesfully</h3>
      <br />
      <?php } ?>
      <?php echo form_label('Your username :'); ?> <?php echo form_error('userin'); ?>
      <?php echo form_input(array('id' => 'userin', 'name' => 'userin')); ?>
      <br />

      <?php echo form_label('Your Email : '); ?> <?php echo form_error('emailin'); ?>
      <?php echo form_input(array('id' => 'emailin', 'name' => 'emailin')); ?>
      <br />

      <?php echo form_label('Your Password: '); ?> <?php echo form_error('passin'); ?>
      <?php echo form_input(array('id' => 'passin', 'name' => 'passin', 'type' => 'Password')); ?>
      <br />

      <?php echo form_label('First name : '); ?> <?php echo form_error('fnamein'); ?>
      <?php echo form_input(array('id' => 'fnamein', 'name' => 'fnamein')); ?>
      <br />

      <?php echo form_label('Surname :'); ?>
      <?php echo form_input(array('id' => 'snamein', 'name' => 'snamein')); ?>
      <br />

      <?php echo form_label('Date of Birth :'); ?> <?php echo form_error('birthin'); ?>
      <?php echo form_input(array('id' => 'birthin', 'name' => 'birthin', 'type' => 'Date')); ?>
      <br />

      <?php echo form_label('Phone number :'); ?> <?php echo form_error('phonein'); ?>
      <?php echo form_input(array('id' => 'phonein', 'name' => 'phonein')); ?>
      <br />

      <?php echo form_label('Address :'); ?> <?php echo form_error('addressin'); ?>
      <?php echo form_input(array('id' => 'addressin', 'name' => 'addressin')); ?>
      <br />

      <?php echo form_label('City :'); ?> <?php echo form_error('cityin'); ?>
      <?php echo form_input(array('id' => 'cityin', 'name' => 'cityin')); ?>
      <br />

      <?php echo form_label('Bio  :'); ?> <?php echo form_error('bioin'); ?>
      <?php echo form_input(array('id' => 'bioin', 'name' => 'bioin')); ?>
      <br />

      <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
      <?php echo form_close(); ?><br />

  </body>
</html>
