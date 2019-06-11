      <?php 
      $email =  $this->session->userdata['logged_in']['email'];
      if ($email == '' ) {
      	redirect(base_url().'welcome/index');
      }else{
      	$firstname =  $this->session->userdata['logged_in']['firstname'];
      	$surname = $this->session->userdata['logged_in']['surname'] ;
      	$type = $this->session->userdata['logged_in']['type'] ;
      	$id = $this->session->userdata['logged_in']['id'] ;
      	$phone = $this->session->userdata['logged_in']['phone'] ;
      	$role = $this->session->userdata['logged_in']['role'] ;
      	$gender = $this->session->userdata['logged_in']['gender'] ;
      	$todos = $this->session->userdata['logged_in']['todos'] ;
      	$total = '4';
      }

      $query = $this->db->query('SELECT * FROM user');
      $num_of_user = $query->num_rows();
      $query = $this->db->query('SELECT * FROM todolist');
      $total_tasks = $query->num_rows();
      // session for the selected data to view
      $admin_firstname =  $this->session->userdata['todo']['firstname'];
      $admin_surname = $this->session->userdata['todo']['surname'] ;
      $todo_id = $this->session->userdata['todo']['id'] ;
      $todo_subject = $this->session->userdata['todo']['subject'] ;
      $todo_detail = $this->session->userdata['todo']['detail'] ;
      $todo_role = $this->session->userdata['todo']['role'] ;
      $todo_time_frame = $this->session->userdata['todo']['timeframe'] ;
      $date_assigned = $this->session->userdata['todo']['time'] ;
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
           <li class="active">View full detailsk</li>
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
     </ul>
     <?php echo form_open_multipart ('Welcome/recent_todos') ?>
     <form  method="POST" action="<?php echo base_url(); ?>welcome/recent_todos" class="com-mail form-new">
      <label style="margin-left: 3%;" >View Old Todo's</label>
      <select class="form-control1 control3 form-new" name="search" >
        <option value="" selected="true" disabled="" >-- Choose the Subject--</option>
        <?php 
        if ($todorole) {
         foreach ($todorole as $todoroles){?>
           <option value="<?php echo $todoroles->id ; ?>" ><?php echo $todoroles->subject ; ?></option> 
         <?php }
       } ?>

     </select>
     <button type="submit" class="btn btn-primary " >view</button>
   </form>
 </div>

</div>
<!-- tab content -->
<div class="col-md-8 tab-content tab-content-in">
 <div class="inbox-right">

  <div class="mailbox-content">
   <!--Compose New Message -->
   <div class="compose-mail-box">
    <div class="compose-bg">
     Here's Full Detail 
   </div>
   <div class="panel-body">
    <form  method="POST" action="#" class="com-mail">
      <label>Todo Subject</label>
      <input type="text" name="subject" class="form-control1 control3" value="<?php echo $todo_subject; ?>"  placeholder="Subject :">
      <label>Todo Details</label>
      <textarea rows="6" name="detail" class="form-control1 control2" placeholder="Details:"><?php echo $todo_detail; ?></textarea>
      <label>Time Frame</label>
      <input type="text" value="<?php echo $todo_time_frame; ?>" name="timeframe" class="form-control1 control3" placeholder="Subject :">
      <label>Todo Role</label> 
      <input type="text" name="subject" value="<?php echo $todo_role; ?>" class="form-control1 control3" placeholder="Subject :">
      <label>Todo Assigned By</label>
      <input type="text" name="time-frame" value="<?php echo $admin_surname.' '.$admin_firstname; ?>" class="form-control1 control3" placeholder="To :">

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
 <p>&copy <?php echo date('Y'); ?> Dev-Docket . All Rights Reserved  <a href="https://w3layouts.com/" target="_blank"></a></p>
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
		<a href="index.html"><span class=" name-caret"><?php echo $firstname.' '.$surname; ?></span></a>
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