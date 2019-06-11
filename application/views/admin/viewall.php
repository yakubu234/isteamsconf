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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
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
    <div class="col-sm-12" >
      <div class="row"> 
        <div class="col-sm-12  middle1" >
          <table id="myTable" class="table table-bordered table-striped table-hover" >
            <thead>
             <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Phone</th>                            
              <th>institution</th>                            
              <!-- <th>Reg - Time</th> -->
              <th></th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            <?php 
            $start = 0 ;
            if ($billings) {
              foreach ($billings as $billing){?>
                <tr>
                  <td><?php echo ++$start ?> </td>
                  <td><?php echo $billing->title  ; ?></td>
                  <td><?php echo $billing->name ; ?></td>                  
                  <td><?php echo $billing->email ?></td>
                  <td><?php echo $billing->gender ?></td>
                  <td><?php echo $billing->phone ?></td>
                  <td><?php echo $billing->institution ?></td>                  
                 <!--  <td><?php $date //= $billing->time_inserted ; $new_datetime //= DateTime::createFromFormat ( "Y-m-d,h:i:s", $date );echo $new_datetime->format('d/m/y ,h:i:s');
                  ?>
                </td> --> 
                <td>
                  <a href="<?php echo base_url('welcome/edit_todo/'.$billing->id); ?>" ><button><span title="Edit" class="fa fa-pencil-square-o text-primary" ></span></button></a>
                </td> 
                <td>
                  <a href="<?php echo base_url('welcome/delete/'.$billing->id); ?>" ><button><span title="Delete" class="fa fa-trash-o redr" ></span></button></a>
                </td>  
              <?php }
            } ?>
          </tr> 
        </tbody>
      </table>
    </div>
  </div>                    
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
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