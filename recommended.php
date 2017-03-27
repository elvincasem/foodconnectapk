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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
	
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
        <li><a href="about.html"><i class="fa fa-link"></i> <span>About</span></a></li>
        <li><a href="contact.html"><i class="fa fa-link"></i> <span>Contact Us</span></a></li>
        <li class="active"><a href="recommended.php"><i class="fa fa-link"></i> <span>Recommended</span></a></li>
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
	
	<section class="content-header">
      <h3>
		Recommended Restaurants:
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
	  <div class="row">
		
		<?php
						include_once("functions.php");
							
							$reslist = selectListSQL("SELECT * FROM tblrestaurant, tblreviews WHERE tblrestaurant.rid = tblreviews.rid ORDER BY restaurantname DESC");
							
							foreach ($reslist as $rows => $link) {
								$restaurantname = $link['restaurantname'];
								$street = $link['street'];
								$barangay = $link['barangay'];
								$municipality = $link['municipality'];
								$type = $link['type'];
								$rid = $link['rid'];
								$logo = $link['logo'];
								
									$reviewrate = selectListSQL("SELECT * FROM tblreviews WHERE rid = '$rid'");
									
									$ratecount = count($reviewrate);
									$ratesum = 0;
									foreach ($reviewrate as $row => $links) {
										$ratenumbers = $links['rating'];
										$ratesum += $ratenumbers;
									}
									$rate = ($ratesum/$ratecount);
									$rateroundup = round($rate);
									
								
							}
							
							if($rateroundup=='4'){
									echo "
									<div class='col-md-6'>
								  <div class='box box-widget collapsed-box'>
									<div class='box-header with-border'>
									  <div class='user-block'>
										<img class='img-circle' src='../github/foodconnect/assets/uploads/$logo' alt='User Image'>
										<span class='username'><a href='profile.php?rid=".$rid."'>$restaurantname</a></span>
										<span class='description'>$street, $barangay, $municipality, La Union</span>
										<span class='description'>
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star'></i>	
										</span>
									  </div>
									</div>
								  </div>
								</div>";
								}elseif($rateroundup=='5'){
										echo "
										<div class='col-md-6'>
								  <div class='box box-widget collapsed-box'>
									<div class='box-header with-border'>
									  <div class='user-block'>
										<img class='img-circle' src='../github/foodconnect/assets/uploads/$logo' alt='User Image'>
										<span class='username'><a href='profile.php?rid=".$rid."'>$restaurantname</a></span>
										<span class='description'>$street, $barangay, $municipality, La Union</span>
										<span class='description'>
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
											<i class='fa fa-star' style='color: #FFC107;'></i>	
										</span>
									  </div>
									</div>
								  </div>
								</div>";
								}else{
									echo "<div class='col-md-6'>
								  <div class='box box-widget collapsed-box'>
									<div class='box-header with-border'>
									  <div class='user-block'>
										<img class='img-circle' src='foodconnect2.png' alt='User Image'>
										<span class='username'><b>Sorry, nothing found here</b></span>
										<span class='description'>No available restaurants under these categories.</span>

									  </div>
									</div>
								  </div>
								</div>";
								}
					?>
		
        <!--<div class="col-md-6">
          <div class="box box-widget collapsed-box">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="dist/img/mcdo.png" alt="User Image">
                <span class="username"><a href="profile.html">Mcdonalds</a></span>
                <span class="description">Marcos Highway, Plaza, City of San Fernando, La Union</span>
                <span class="description">
					<i class="fa fa-star" style="color: #FFC107;"></i>	
					<i class="fa fa-star" style="color: #FFC107;"></i>	
					<i class="fa fa-star" style="color: #FFC107;"></i>	
					<i class="fa fa-star" style="color: #FFC107;"></i>	
					<i class="fa fa-star" style="color: #FFC107;"></i>	
				</span>
              </div>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
            </div>
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
              </div>

              <div class="box-comment">

                <img class="img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
              </div>
            </div>
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
          </div>
        </div>-->
		
		
		
		
      </div>
      <!-- /.row -->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
