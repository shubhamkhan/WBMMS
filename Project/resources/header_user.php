<?php
 include "../resources/connection.php";
 SESSION_START();
 	//echo $_SESSION['khjshdagsj'];
 	//echo $_SESSION['id'];
	//echo $_SESSION['name'];
	//echo $_SESSION['profile_img'];
	if(!$_SESSION['khjshdagsj']){
		SESSION_DESTROY();
		header("location:index.php?msg=UnSuccessfully");
	}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Theme</title>
	<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

     <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">
    
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="../css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- DataTables Responsive CSS -->
    <link href="../css/dataTables.responsive.css" rel="stylesheet">
    
    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
     
     <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation Starts-->
        <nav class="navbar navbar-default navbar-static-top bg_red" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            <?php echo $GLOBALS["logo"]; ?>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="create_book_fault.php"><?php echo $GLOBALS["sitename"]; ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i><img src="../images/icon/glyphicons/glyphicons-4-user.png"></i>
                        <i><img src="../images/icon/glyphicons/glyphicons-602-chevron-down.png"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li><a href="../pages/reset_password.php"><i><img src="../images/icon/glyphicons/glyphicons-137-cogwheel.png"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i><img src="../images/icon/glyphicons/glyphicons-388-log-out.png"></i> Logout</a>
                        </li>
                    </ul>
                     <!--/.dropdown-user-->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse user_list">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search user_head">
                            <img src="../images/profile_image/<?php echo $_SESSION['profile_img']; ?>" alt="" class="thumbicon" >
                            <h3><?php echo $_SESSION['name']; ?></h3>
                            <p><?php echo $_SESSION['u_type']; ?></p>
                            <div class="clearfix"></div>
                        </li>
                        <li><a href="../pages/show_profile.php"> User Profile</a></li>
                        <li><a href="../pages/create_book_fault.php"> Book Fault</a></li>
                        <li><a href="../pages/chack_fault_status.php"> Check Fault Status</a></li> 
                        <li><a href="../pages/show_repair_history.php"> Check Repair History</a></li>                                               
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Navigation End -->