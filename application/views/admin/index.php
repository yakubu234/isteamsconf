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
      <!-- //header-ends -->
    
      	<!--//custom-widgets-->
      	<div class="col-md-12" >
      		<!--//outer-wp-->
      		<div class="outter-wp">
      			<!--/sub-heard-part-->
      			<div class="sub-heard-part">
      				<ol class="breadcrumb m-b-0">
      					<li><a href="index.html">Home</a></li>
      					<li class="active">Compose Mail</li>
      				</ol>
      			</div>	
      			<!--/sub-heard-part-->
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
      			<!--/inbox-->
      			<div class="inbox-mail">
      				<div class="col-md-4 compose">
      					
      					<div class="content-box">
      						<ul>
      							<li><span>Todo Menu</span></li>
      							<li><a href="<?php echo base_url('welcome/view'); ?>"><i class="fa fa-star-o"></i>View All  </a></li>
      							<li><a href="#"><i class="fa fa-inbox"></i>Inbox</a></li>
                                                <!-- <li><a href="#"><i class="fa fa-share-square-o"></i>Created Task</a></li> -->
                                                <li><a href="<?php echo base_url('welcome/update'); ?>"><i class="fa fa-pencil-square-o"></i>Edit Task</a></li>
      							<li><a href="<?php echo base_url('welcome/view'); ?>"><i class="fa fa-trash-o"></i>Delete Task</a></li>
      						</ul>
      					</div>

      				</div>
      				<!-- tab content -->
      				<div class="col-md-8 tab-content tab-content-in">
      					<div class="inbox-right">

      						<div class="mailbox-content">
      							<!--Compose New Message -->
      							<div class="compose-mail-box">
      								<div class="compose-bg">
      									Compose New Task 
      								</div>
      								<div class="panel-body">
      									<div class="alert alert-info">
      										Please fill details to add new task
      									</div>
      									<?php echo form_open_multipart ('Welcome/insert_todo') ?>
      									<form  method="POST" action="<?php echo base_url(); ?>welcome/insert_todo" class="com-mail">

      										<input type="text" name="subject" class="form-control1 control3" placeholder="Subject :">
      										<input type="hidden" name="firstname"  class="form-control1 control3" placeholder="Subject :">
      										<input type="hidden" name="surname"  class="form-control1 control3" placeholder="Subject :">

      										<textarea rows="6" name="detail" class="form-control1 control2" placeholder="Details:"></textarea>


      										<select class="form-control1 control3" name="stacks" >
      											<option>Choose Stack</option>
      											<option value="full-stack" >full-stack</option>
      											<option value="front-end" >front end</option>
      											<option value="back-end" >back-end</option>
      										</select>
      										<label>Time Frame</label>
      										<input type="date" name="time-frame" class="form-control1 control3" placeholder="To :">

      										<input type="submit" value="ADD NEW TASK"> 
      									</form>
      								</div>
      							</div>
      							<!--//Compose New Message -->
      						</div>
      					</div>
      				</div>

      				<div class="clearfix"> </div>
      			</div>

      		</div>
      	</div>

      	<!--/candile-->
      	<div class="candile">												
      	</div>
      	<!--/candile-->
      	<!--//outer-wp-->
      </div>
      
      <!--footer section start-->
      <footer>
      	<p>&copy <?php echo date('Y'); ?> Isteams Conference . All Rights Reserved  <a href="https://w3layouts.com/" target="_blank"></a></p>
      </footer>
      <!--footer section end-->
  </div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<div class="sidebar-menu">
	<header class="logo">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>dev-Docket</h1></span> 
			<!--<img id="logo" src="" alt="Logo"/>--> 
		</a> 
	</header>
	<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
	<!--/down-->
	<div class="down">	
		<a href="index.html"><img src="images/admin.jpg"></a>
		<a href="index.html"><span class=" name-caret"><?php echo $name; ?></span></a>
		<p>Administrator</p>
		<ul>
			<li><a class="tooltips" href="#"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
			<li><a class="tooltips" href="#"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
			<li><a class="tooltips" href="<?php echo base_url(); ?>welcome/logout"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
		</ul>
	</div>
	<!--//down-->
	<div class="menu">
		<ul id="menu" >
			<li><a href="<?php echo base_url('welcome/admin'); ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>		
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}

		toggle = !toggle;
	});
</script>
<!--js -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vroom.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vroom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/CSSPlugin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>