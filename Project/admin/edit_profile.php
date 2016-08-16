<!-- Page Content Starts-->
<?php include "../resources/header.php";
if(isset($_GET['id'])){
	$res = mysql_query("SELECT * FROM  `".$database."`.`register_user_master` WHERE users_id='".$_SESSION['id']."'") or die(mysql_error());
	while($row = mysql_fetch_array($res)){
?>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Profile Update</h1>
      </div>
      <!-- /.col-lg-12 -->
      	<br clear="all">
        <div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">

              <div class="panel-body">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Update Your Profile Detils
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="row">
                       <form action="" method="POST" enctype="multipart/form-data">
                       <div class="col-lg-6">
                       		  <div class="form-group">
                                <label>First Name</label>
                                <input name="first_name" type="text" class="form-control" placeholder="First Name" value="<?php echo $row['first_name']; ?>">
                              </div>
                              <div class="form-group">
                                <label>Last Name</label>
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name" value="<?php echo $row['last_name']; ?>">
                              </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Address" value="<?php echo $row['address']; ?>">
                               </div>
                               <div class="form-group">
                                <label>Phone NO</label>
                                <input name="phone_no" type="text" class="form-control" placeholder="Phone NO" value="<?php echo $row['phone_no']; ?>">
                               </div>
                       </div>
                       <div class="col-lg-6">
                       		  <div class="form-group">
                                  <label>Depertment</label>
                                  <input type="text" name="u_dept"  placeholder="Depertment" class="form-control" value="<?php echo $row['u_dept']; ?>" >
                              </div>
                              <div class="form-group">
                                  <label>Date Of Birth</label>
                                  <input name="dob" type="text"  placeholder="date of birth" class="form-control" value="<?php echo $row['date_of_birth']; ?>">
                                  <p class="help-block">Example: yyyy-mm-dd like 1980-10-30 input.</p>
                              </div>
                              <div class="form-group">
                                <label>Image</label>
                                <input name="img" type="file">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <input type="hidden" name="hid">
                              </div>
                          </div>
                       </form>
                        <?php
     }
	 }
    if(isset($_POST['hid'])){
        if($_FILES['img']['name'] != null or ""){
			$req = mysql_query("SELECT profile_pic FROM `".$database."`.`register_user_master` WHERE users_id ='".$_GET['id']."'") or die(mysql_error());
			$data = mysql_fetch_array($req) or die(mysql_error());
			unlink("../images/profile_image/".$data['profile_pic']."");
            $link=time()."-".$_FILES['img']['name'];
            copy($_FILES['img']['tmp_name'],'../images/profile_image/'.$link);
       }else{
        $link="default/pic.png";
	   }
        mysql_query("UPDATE `".$database."`.`register_user_master` SET `first_name` = '".$_POST['first_name']."',`last_name` = '".$_POST['last_name']."',`address` = '".$_POST['address']."',`date_of_birth`='".$_POST['dob']."',`u_dept`='".$_POST['u_dept']."',`phone_no` = '".$_POST['phone_no']."',`profile_pic` = '".$link."' WHERE `register_user_master`.`users_id` = '".$_SESSION['id']."'") or die(mysql_error());
				echo '<script>window.location.assign("show_profile.php?msg=Update Successfully");</script>';
				//header("Location: show_profile.php?msg=Update Successfully");
    }
                ?>
                     </div>
                  </div>
                  <!-- /.panel-body -->
                   </div>
                <!-- /.panel -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- ============================================================ -->
<!-- /#page-wrapper End -->
<?php include "../resources/footer.php"; ?>
