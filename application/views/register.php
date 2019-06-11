<?php
   $sql ="SELECT * FROM user WHERE Status = '5'";
   $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
          $status = 5 ;
  }else{
    $status = 0;
  }
  ?>
  <!DOCTYPE html>
<html class="no-js" lang="en">
<head>

  <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="description" content="">
    <meta name="author" content="">

  <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">


  <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  </head>
  <body id="home">
    <section id="register">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 ">
            <!-- alert box -->
            <div class="col-sm-12" >
              <?php if ($this->session->flashdata()) { ?>
                <div class="alert alert-danger">
                  <?=$this->session->flashdata('errors'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="py-5">
              <h2 class="display-3 text-center py-3"><a href="<?php echo base_url(); ?>welcome/index" class="text-white">Register</a></h2>
              <?php echo form_open_multipart ('Welcome/register') ?>
              <form action="<?php echo base_url();?>Welcome/register" method="POST">
                <div class="form-group">
                  <label for="name" class="text-white">First Name</label>
                  <input type="text" id="email" class="form-control form-control-lg" name="firstname" placeholder="Your First Name">
                </div>
                <div class="form-group">
                  <label for="name" class="text-white">Surname</label>
                  <input type="text" id="email" class="form-control form-control-lg" name="surname" placeholder="Your Surname">
                </div>
                <div class="form-group">
                  <label for="email" class="text-white">Email address</label>
                  <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password" class="text-white">Password</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="phone" class="text-white">Phone Number</label>
                  <input type="text" name="phone" name="email" class="form-control form-control-lg" placeholder="e.g. 080000000111">
                </div>
                <div class="form-group">
                  <label for="gender" class="text-white">Gender</label>
                  <select class="form-control" name="gender">
                    <option value="">-- Select Gender --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="role" class="text-white">Role</label>
                  <select class="form-control" name="role">
                    <option value="">-- Select Role --</option>
                    <option value="full-stack">Full-Stack</option>
                    <option value="front-end">Front-end</option>
                    <option value="back-end">Back-end</option>
                  </select>
                </div>
                <button class="btn btn-lg bg-white btn-block" type="submit">Register</button>
              </form>
              <p class="text-center" >
                <div <?php echo ($status == 5) ? 'style="display:none;"':'' ?> >  
                  <a href="<?php echo base_url(); ?>Welcome/superadmin_create" style="float: right;color: red;">Register Super Admin ? Click Here!</a>
                </div>
              </p>
              <div class="py-5">
                <a href="index.html" class="pr-5"><i class="fa fa-arrow-left"></i><small class="px-2 text-white text-right">Back to homepage</small></a>
                <a href="login.html" class="pl-3"><small class="text-white text-left px-2 pt-2">Login Here</small><i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECOND FOOTER -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <script src="<?php echo base_url();?>jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url();?>jquery/popper.min.js"></script>
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>
