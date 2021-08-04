<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login2/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap4/css/bootstrap.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <img class="wave" src="<?= base_url('assets/login2/img/wave1.png'); ?>">
  <div class="container">
    <div class="img">
      <img src="<?= base_url('assets/login2/img/bg1.svg'); ?>">
    </div>
    <div class="login-content">
      <form action="<?= base_url('login'); ?>" method="post">
        <img src="<?= base_url('assets/login2/img/avatar1.svg'); ?>">
        <h2 class="title">Welcome</h2>

        <?= $this->session->flashdata('message'); ?>

              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password">
                    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                 </div>
              </div>
              <button type="submit" class="btn" value="Login">Login</button>
              <a href="#">Forgot Password?</a>
              <a href="<?= base_url('login/registration'); ?>">Create an Account!</a>
             
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/bootstrap4/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/login2/js/main.js'); ?>"></script>
</body>
</html>
