
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>

  <div class="main">

    <!-- Sign up form -->
    <section class="signup">

      <div class="container">
        <div class="signup-content">

          <div class="signup-form">
            <div class="col-sm-12" >
              <?php if ($this->session->flashdata('errors')) { ?>
                <div class="alert alert-danger">
                  <?=$this->session->flashdata('errors'); ?>
                  <meta http-equiv="refresh">
                </div>
              <?php } ?>
              <!-- success -->
              <?php if ($this->session->flashdata('suc')) { ?>
                <div class="alert alert-success">
                  <?=$this->session->flashdata('suc'); ?>
                </div>
              <?php } ?>
            </div>
            <h2 class="form-title">Sign up</h2>

            <?php echo form_open_multipart ('Welcome/superadmin_create') ?>
            <form method="POST" class="register-form" action="<?php echo base_url();?>Welcome/superadmin_create" id="register-form">

                  <!-- <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="" id="name" placeholder="Your Name"/>
                  </div> --> 
                  <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="name" id="name" placeholder="Your Name"/>
                  </div>
                  <div class="form-group">
                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                    <input type="email" name="email" id="email" placeholder="Your Email"/>
                  </div>
                  <div class="form-group">
                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="your_pass" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-phone-locked material-icons-name"></i></label>
                    <input type="text" name="phone" id="name" placeholder="Your Phone"/>                    
                  </div>                
                  <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="gender" list="gender" id="name" placeholder="Gender"  />
                    <datalist id="gender">
                      <option value="Male">
                       <option value="Female">
                         <option value="write your own">
                         </datalist>
                       </div>
                       <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                      </div> 
                    </form>
                  </div>                      
                  <div class="signup-image">
                    <figure><img src="<?php echo base_url(); ?>assets/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="<?php echo base_url(); ?>welcome/login" class="signup-image-link">Login as Admin</a>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <!-- JS -->
          <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
        </html>