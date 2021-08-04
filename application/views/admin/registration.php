<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/') ?>login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="<?php echo base_url('assets/login/images/img-01.png') ?>" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="post" action="<?php echo base_url('login/registration'); ?>">
          <span class="login100-form-title">
            Account Registration
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input class="input100" type="text" name="name" placeholder="Username" value="<?= set_value('name'); ?>">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
            <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
            <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password1" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
            <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password2" placeholder="Repeat Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Registration
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>
          <div class="text-center p-t-4">
          <a class="txt2" href="<?= base_url('login'); ?>">
              Already have an account? Login!
            </a>
          </div>

          <div class="text-center p-t-136">
          </div>
        </form>
      </div>
    </div>
  </div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?= base_url('assets/') ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/') ?>login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/') ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/') ?>login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/') ?>login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>