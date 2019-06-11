      <?php 
      $email =  $this->session->userdata['logged_in']['email'];
      if ($email == '' ) {
      	redirect(base_url().'welcome/index');
      }else{
      	$name =  $this->session->userdata['logged_in']['name'];
      	$id = $this->session->userdata['logged_in']['id'] ;
      	$phone = $this->session->userdata['logged_in']['phone'] ;
      	$gender = $this->session->userdata['logged_in']['gender'] ;
      	$total = '4';
      }

      $query = $this->db->query('SELECT * FROM admin');
      $num_of_user = $query->num_rows();
      $query = $this->db->query('SELECT * FROM admin');
      $total_tasks = $query->num_rows();
      ?>
      <!DOCTYPE HTML>
      <html>
      <head>
      	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      	<script src="<?php echo base_url(); ?>styles/js/jquery-1.10.2.min.js"></script>
      	<!-- Bootstrap Core CSS -->
      	<link href="<?php echo base_url(); ?>styles/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
      	<!-- Custom CSS -->
      	<link href="<?php echo base_url(); ?>styles/css/style.css" rel='stylesheet' type='text/css' />
      	<!-- Graph CSS -->
      	<link href="<?php echo base_url(); ?>styles/css/font-awesome.css" rel="stylesheet"> 
      	<!-- jQuery -->
      	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
      	<!-- lined-icons -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>styles/css/icon-font.min.css" type='text/css' />
      	<!-- //lined-icons -->
      	<script src="<?php echo base_url(); ?>styles/js/jquery-1.10.2.min.js"></script>
      	<script src="<?php echo base_url(); ?>styles/js/amcharts.js"></script>	
      	<script src="<?php echo base_url(); ?>styles/js/serial.js"></script>	
      	<script src="<?php echo base_url(); ?>styles/js/light.js"></script>	
      	<script src="<?php echo base_url(); ?>styles/js/radar.js"></script>	
      	<link href="<?php echo base_url(); ?>styles/css/barChart.css" rel='stylesheet' type='text/css' />
      	<link href="<?php echo base_url(); ?>styles/css/fabochart.css" rel='stylesheet' type='text/css' />
      	<!--clock init-->
      	<script src="<?php echo base_url(); ?>styles/js/css3clock.js"></script>
      	<!--Easy Pie Chart-->
      	<!--skycons-icons-->
      	<script src="<?php echo base_url(); ?>styles/js/skycons.js"></script>

      	<script src="<?php echo base_url(); ?>styles/js/jquery.easydropdown.js"></script>
      	<style type="text/css">
      		.form-new{
      			margin: 2%;
      			width: 96%;
      		}
      	</style>

      	<!--//skycons-icons-->
      </head> 
      <body>
      	<div class="page-container">
      		<!--/content-inner-->
      		<div class="left-content">
      			<div class="inner-content">
      				<!-- header-starts -->
      				<div class="header-section">
      					<!--menu-right-->
      					<div class="top_menu">
      						
      						<!--/profile_details-->
      						<div class="profile_details_left">
      							<ul class="nofitications-dropdown">
      								<li class="dropdown note">
      									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

      									
      									<ul class="dropdown-menu two first">
      										<li>
      											<div class="notification_header">
      												<h3>You have 3 new messages  </h3> 
      											</div>
      										</li>
      										<li><a href="#">
      											<div class="user_img"><img src="images/1.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet</p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li class="odd"><a href="#">
      											<div class="user_img"><img src="images/in.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet </p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li><a href="#">
      											<div class="user_img"><img src="images/in1.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet </p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li>
      											<div class="notification_bottom">
      												<a href="#">See all messages</a>
      											</div> 
      										</li>
      									</ul>
      								</li>										
      								<li class="dropdown note">
      									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

      									<ul class="dropdown-menu two">
      										<li>
      											<div class="notification_header">
      												<h3>You have 5 new notification</h3>
      											</div>
      										</li>
      										<li><a href="#">
      											<div class="user_img"><img src="images/in.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet</p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li class="odd"><a href="#">
      											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet </p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li><a href="#">
      											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
      											<div class="notification_desc">
      												<p>Lorem ipsum dolor sit amet </p>
      												<p><span>1 hour ago</span></p>
      											</div>
      											<div class="clearfix"></div>	
      										</a></li>
      										<li>
      											<div class="notification_bottom">
      												<a href="#">See all notification</a>
      											</div> 
      										</li>
      									</ul>
      								</li>	
      								<li class="dropdown note">
      									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
      									<ul class="dropdown-menu two">
      										<li>
      											<div class="notification_header">
      												<h3>You have 9 pending task</h3>
      											</div>
      										</li>
      										<li><a href="#">
      											<div class="task-info">
      												<span class="task-desc">Database update</span><span class="percentage">40%</span>
      												<div class="clearfix"></div>	
      											</div>
      											<div class="progress progress-striped active">
      												<div class="bar yellow" style="width:40%;"></div>
      											</div>
      										</a></li>
      										<li><a href="#">
      											<div class="task-info">
      												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
      												<div class="clearfix"></div>	
      											</div>
      											
      											<div class="progress progress-striped active">
      												<div class="bar green" style="width:90%;"></div>
      											</div>
      										</a></li>
      										<li><a href="#">
      											<div class="task-info">
      												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
      												<div class="clearfix"></div>	
      											</div>
      											<div class="progress progress-striped active">
      												<div class="bar red" style="width: 33%;"></div>
      											</div>
      										</a></li>
      										<li><a href="#">
      											<div class="task-info">
      												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
      												<div class="clearfix"></div>	
      											</div>
      											<div class="progress progress-striped active">
      												<div class="bar  blue" style="width: 80%;"></div>
      											</div>
      										</a></li>
      										<li>
      											<div class="notification_bottom">
      												<a href="#">See all pending task</a>
      											</div> 
      										</li>
      									</ul>
      								</li>		   							   		
      								<div class="clearfix"></div>	
      							</ul>
      						</div>
      						<div class="clearfix"></div>	
      						<!--//profile_details-->
      					</div>
      					<!--//menu-right-->
      					<div class="clearfix"></div>
      				</div>
      				<div class="outter-wp">
      					<!--custom-widgets-->
      					<div class="custom-widgets">
      						<div class="row-one">
      							<div class="col-md-3 widget">
      								<div class="stats-left ">
      									<h5>Today</h5>
      									<h4> Users</h4>
      								</div>
      								<div class="stats-right">
      									<label><?php echo $num_of_user; ?></label>
      								</div>
      								<div class="clearfix"> </div>	
      							</div>
      							<div class="col-md-3 widget states-mdl">
      								<div class="stats-left">
      									<h5>Today</h5>
      									<h4>Visitors</h4>
      								</div>
      								<div class="stats-right">
      									<label> 85</label>
      								</div>
      								<div class="clearfix"> </div>	
      							</div>
      							<div class="col-md-3 widget states-thrd">
      								<div class="stats-left">
      									<h5>Today</h5>
      									<h4>Tasks</h4>
      								</div>
      								<div class="stats-right">
      									<label>51</label>
      								</div>
      								<div class="clearfix"> </div>	
      							</div>
      							<div class="col-md-3 widget states-last">
      								<div class="stats-left">
      									<h5>Total</h5>
      									<h4>Tasks</h4>
      								</div>
      								<div class="stats-right">
      									<label><?php echo $total_tasks; ?></label>
      								</div>
      								<div class="clearfix"> </div>	
      							</div>
      							<div class="clearfix"> </div>	
      						</div>
      					</div>