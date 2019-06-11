<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up Form by Colorlib</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

  <div class="main">

    <!-- Sign up form -->
    <!-- Sing in  Form -->
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure><img src="<?php echo base_url(); ?>assets/images/signin-image.jpg" alt="sing up image"></figure>
            <a href="<?php echo base_url(); ?>welcome/register" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
           <!-- alert box -->
           <div class="col-sm-12" >
            <?php if ($this->session->flashdata('errors')) { ?>
              <div class="alert alert-danger">
                <?=$this->session->flashdata('errors'); ?>
              </div>
            <?php } ?>
            <!-- success -->
            <?php if ($this->session->flashdata('suc')) { ?>
              <div class="alert alert-success">
                <?=$this->session->flashdata('suc'); ?>
              </div>
            <?php } ?>
          </div>
          <h2 class="form-title">Login</h2>

          <form method="POST" class="register-form" id="login-form">
            <div class="form-group">
              <label for="email"><i class="zmdi zmdi-email"></i></label>
              <input type="email" name="email" id="email" placeholder="Your Email"/>
            </div>
            <div class="form-group">
              <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
              <input type="password" name="password" id="your_pass" placeholder="Password"/>
            </div>
            <div class="form-group">
              <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
              <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
            </div>
            <div class="form-group form-button">
              <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Sing in  Form -->


</div>

<!-- JS -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>