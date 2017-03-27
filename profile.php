<?php 
$sample=$_REQUEST['rid'];

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-red.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
	
	
	
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
	  
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="float: left; position: absolute;">
		<span class="sr-only">Toggle navigation</span>
	  </a>
	
		<a href="index.html" height="30px" width="30px">
			<span><img src="foodconnect.png" height="30px" width="30px" style="display: block; margin: auto; margin-top: 10px; position: relative;"></span>
		</a>
	
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="float: right; position: absolute; display: none;">
		<span class="sr-only">Toggle navigation</span>
	  </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" style="margin-top: -45px;">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="index.html"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="index.html"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="about.html"><i class="fa fa-link"></i> <span>About</span></a></li>
        <li><a href="contact.html"><i class="fa fa-link"></i> <span>Contact Us</span></a></li>
        <li><a href="recommended.php"><i class="fa fa-link"></i> <span>Recommended</span></a></li>
        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content">
	<?php
		include_once("functions.php");	
		$reslist = singleSQL("SELECT * FROM tblrestaurant, tbltype WHERE tblrestaurant.rid = tbltype.rid AND tblrestaurant.rid = '$sample'");
	?>
      <!-- Your Page Content Here -->
	  <div class="row" style="margin-top: -40px;">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../github/foodconnect/assets/uploads/<?php echo $reslist['coverphoto'];?>') center center; background-size: cover;">
            <!--<div class="widget-user-header bg-black" style="background: url('dist/img/mcdolu.jpg') center center; background-size: cover;">-->
              <!--<h3 class="widget-user-username">Mcdonald's</h3>
              <h5 class="widget-user-desc">Fast Food</h5>-->
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../github/foodconnect/assets/uploads/<?php echo $reslist['logo'];?>" alt="User Avatar">
              <!--<img class="img-circle" src="dist/img/mcdo.png" alt="User Avatar">-->
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                  <div class="description-block">
                    <h5 class="description-header">
						<?php echo $reslist['restaurantname'];?>
					</h5>
                    <span class="description"><?php echo $reslist['barangay'];?>, <?php echo $reslist['municipality'];?>, La Union</span>
                  </div>
                  <!-- /.description-block -->
				  <ul class="list-group list-group-unbordered">
						
						<li class="list-group-item">
						  <b>Rating</b> 
						  <p class="pull-right">
							<span class="pull-right">
								<?php 
								
								include_once("functions.php");
								$reviewrate = selectListSQL("SELECT * FROM tblreviews WHERE rid = '$sample'");
								
								//ratings counted
								$ratecount = count($reviewrate);
								//ratings counted
								
								//ratings sumation
								$ratesum = 0;
								foreach ($reviewrate as $rows => $link) {
									$ratenumbers = $link['rating'];
									$ratesum += $ratenumbers;
								}
								//ratings sumation
								
								$rate = ($ratesum/$ratecount);
								$rateroundup = round($rate);
								//echo $rateroundup;

								if($rateroundup=='1'){
									echo "<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>";
								}elseif($rateroundup=='2'){
									echo "<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>";
								}elseif($rateroundup=='3'){
									echo "<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>";
								}elseif($rateroundup=='4'){
									echo "<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star'></i>";
								}elseif($rateroundup=='5'){
										echo "<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>	
										<i class='fa fa-star' style='color: #FFC107;'></i>";
								}else{
									echo "<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>	
										<i class='fa fa-star'></i>";
								}
								?>
							</span>
						  </p>
						</li>
						<li class="list-group-item">
						  <b>Telephone No.</b> <span class="pull-right badge bg-red"><?php echo $reslist['tel'];?></span>
						</li>
						<li class="list-group-item">
						  <b>Fax No.</b> <span class="pull-right badge bg-red"><?php echo $reslist['fax'];?></span>
						</li>
						<li class="list-group-item">
						  <b>Contact Person</b> <span class="pull-right badge bg-red"><?php echo $reslist['contact'];?></span>
						</li>
						<li class="list-group-item">
						  <b>Position</b> <span class="pull-right badge bg-red"><?php echo $reslist['position'];?></span>
						</li>
						<li class="list-group-item">
						  <b>Cellphone No.</b> <span class="pull-right badge bg-red"><?php echo $reslist['cp'];?></span>
						</li>
						<li class="list-group-item">
						  <b>Email</b> <span class="pull-right badge bg-red"><?php echo $reslist['email'];?></span>
						</li>
						
					  </ul>
					  
					  
					  
					  
					  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						  <?php
							include_once("functions.php");
							$first = true;
								$glist = selectListSQL("SELECT * FROM tblgallery WHERE rid = '$sample'");			
								foreach ($glist as $grows => $glink) {
									$gallery = $glink['galleryphoto'];
									
									if($first){
										echo "<div class='item active' style='height: 150px;'>
											  <img src='../github/foodconnect/assets/uploads/$gallery'>
											  </div>";
										$first = false;
									}else{
										echo "<div class='item' style='height: 150px;'>
											  <img src='../github/foodconnect/assets/uploads/$gallery'>
											  </div>";
									}
								}
						?>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="margin-left: -15px;">
						  <span class="fa fa-angle-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						  <span class="fa fa-angle-right"></span>
						</a>
					  </div>
					  
					  
					  
					  
					  
                </div>
                <!-- /.col -->
				
				
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
		
		
      </div>
      <!-- /.row -->
	  
	  
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#reservation" data-toggle="tab">Reservation</a></li>
              <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
              <li><a href="#comment" data-toggle="tab">Comment</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="reservation">
                <form class="form-horizontal" action="reservation.php?email=<?php echo $reslist['email'];?>" method="POST">

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="reservationname" placeholder="Name" name="reservationname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="reservationemail" placeholder="Email" name="reservationemail">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Reservation Message</label>

                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder="Message..." id="reservationmessage" name="reservationmessage"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <center><button type="submit" class="btn btn-danger">Submit</button></center>
                    </div>
                  </div>
                </form>
              </div>
			  
			  <div class="tab-pane" id="reviews">
                <!-- Post -->
				
				<?php 	
				include_once("functions.php");
				$reviewlist = selectListSQL("SELECT * FROM tblreviews WHERE rid = '$sample'");
				foreach ($reviewlist as $rows => $link) {
					$revname = $link['name'];
					$revtimestamp = $link['timestamp'];
					$revcomment = $link['comment'];
					echo "<div class='post'>
                  <div class='user-block'>
					<span style='color: #dd4b39;'><b>
                        $revname
                    </b></span>
					<br>
                    <span>$revtimestamp</span>
                  </div>
                  <p>
                    $revcomment
                  </p>
                </div>";
				}
				?>
                <!-- /.post 
				<div class="form-group">
                    <div class="col-sm-12">
                      <center><button type="submit" class="btn btn-danger">Load More</button></center>
                    </div>
                  </div>-->
                
              </div>
			  
			  
			  
			  
			  
              <div class="tab-pane" id="comment">
                <form class="form-horizontal" action="review.php?resid=<?php echo $sample;?>" method="POST">

				  <div class="form-group">
                    <div class="col-sm-12">
					  <label>I'll give it a:</label>
					  <select class="form-control" id="reviewrating" name="reviewrating">
						<option value="1">1 star rating</option>
						<option value="2">2 star rating</option>
						<option value="3">3 star rating</option>
						<option value="4">4 star rating</option>
						<option value="5">5 star rating</option>
					  </select>
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="reviewname" placeholder="Name" name="reviewname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="reviewemail" placeholder="Email" name="reviewemail">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Comment</label>

                    <div class="col-sm-12">
                      <textarea class="form-control" rows="3" placeholder="Comment..." id="reviewcomment" name="reviewcomment"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <center><button type="submit" class="btn btn-danger">Submit</button></center>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
	  
	  <section class="content-header">
      <h1>
        <!--<small><b>Best Sellers:</b></small>-->
      </h1>
		</section>
		<br>
		
		
		<?php
			include_once("functions.php");
				
				$bsrid = $reslist['rid'];
				
				$bslist = selectListSQL("SELECT * FROM tblbestsellers WHERE rid = '$bsrid' ORDER BY dishname DESC");
				foreach ($bslist as $rows => $link) {
					$dishname = $link['dishname'];
					$price = $link['price'];
					$dishdescription = $link['dishdescription'];
					$dishphoto = $link['dishphoto'];
					
					echo "<div class='col-md-12'>
						  <div class='box box-widget'>
							<div class='box-header with-border'>
							  <div class='user-block'>
								<img class='img-circle' src='foodconnect2.png' alt='User Image'>
								<span class='username'><b style='color: #dd4b39;'>$dishname</b></span>
								<span class='description'>Php $price</span>
							  </div>
							</div>
							<div class='box-body'>
							  <img class='img-responsive pad' src='../github/foodconnect/assets/uploads/$dishphoto' alt='Photo'>
							</div>
							<div class='box-footer'>
								<p>$dishdescription</p>
							</div>
						  </div>
						</div>";
				}
		?>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Food Connect</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
