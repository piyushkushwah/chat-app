<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cynixIM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="instant chating application">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="CYNIX">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize-icons.css">
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <!-- css -->
 <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">-->
 <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">-->
  <?php foreach($styles as $style):?>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $style; ?>.css">
      <?php endforeach;?>
  <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chat.css">-->
  <script  src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/socket/socket.io.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
</head>
<body>
<?php if($header === true): ?>
<!-- navigation bar -->
<nav>
    <div class="nav-wrapper #880e4f pink darken-4">
      <a href="#!" class="brand-logo left"><i class="material-icons">message</i>cynIM</a>
      <ul id="nav-mobile"  class="right">
        <li class="medium"><a href="#"><i class="left material-icons">person_pin</i>Login</a></li>
        <li class="medium"><a href="#"><i class="left material-icons">person_add</i>Register</a></li>
      </ul>
    </div>
  </nav>
  <div>
<?php endif; ?>

<input type="hidden" value="<?php echo SERVER_URL;?>" id='SERVER_URL'>
<input type="hidden" value='<?php echo base_url(); ?>' id='BASE_URL'>