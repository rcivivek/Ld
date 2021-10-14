<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login_center.css'); ?>">  
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="login_center" style="margin-top: 50px;">
  <h2>Admin Login</h2><hr>
  <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('msg').'<i class="fa fa-times" aria-hidden="true"></i>'; ?></div>
<?php endif; ?>
<?php echo form_open('admin_login/validate'); ?> 
    <label for="username">Username:</label>
    <input type="Username" name="username" value="<?php echo set_value('username'); ?>" >
    <?php echo form_error('username','<div class="text-danger" >','</div>'); ?>
    <label for="pwd">Password:</label>
    <input type="password" name="password">
    <?php echo form_error('password','<div class="text-danger" >','</div>'); ?>
    <button type="submit" class="btn btn-default" id="login_btn">Submit</button>
<?php echo form_close(); ?>
</div>
</body>
</html>