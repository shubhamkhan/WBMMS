<!-- Page Content Starts-->
<?php include "../resources/header_user.php";
if (isset($_GET['id'])){
 	$res = mysql_query("SELECT * FROM `cateagory_master` WHERE `ct_code` ='".$_GET['id']."'") or die(mysql_error());
	$row = mysql_fetch_array($res);
}
?>
<!--======================================================= -->
<div id="page-wrapper">
<?php if (isset($_GET['msg'])){
                  echo"<script>window.alert('".$_GET['msg']."');</script>";
                //echo "<center><span class='btn btn-success'>".$_GET['msg']."</span></center>";
   } ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Fault Booking</h1>
      </div>
      <!-- /.col-lg-12 -->
      <!-- Your Work area START -->
      <!-- =================================== -->
       <br clear="all">
      	<div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">

              <!-- /.panel-heading -->
              <div class="panel-body">
              	<div class="panel panel-default">
                    <div class="panel-heading">
                        Fault Entry
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
              	<div class="row">
                 <form action="" method="POST">
                   <div class="col-lg-6">
                        <div class="form-group">
                            <label>Category Code</label>
                            <input name="ct_code" type="text" class="form-control" placeholder="Category Code" value="<?php echo $row['ct_code'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input name="ct_nm" type="text" class="form-control" placeholder="Item Name" value="<?php echo $row['ct_nm'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Category Specification</label>
                            <input name="ct_specification" type="text" class="form-control" placeholder="Category Specification" value="<?php echo $row['ct_specification'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Serial No</label>
                            <input name="sl_no" type="text" class="form-control" placeholder="Serial No" required>
                        </div>
                   </div>
                  <div class="col-lg-6">
                        <div class="form-group">
                            <label>Location</label>
                            <input name="i_location" type="text" class="form-control" placeholder="Location" required>
                        </div>
                        <div class="form-group">
                            <label>Fault</label>
                            <input name="fault" type="text" class="form-control" placeholder="Fault" required>
                        </div>
                        <div class="form-group">
                            <label>Fault Details</label>
                            <textarea name="fault_details" class="form-control" placeholder="Fault Details" rows="4" required></textarea>
                        </div>
                  </div>
                   <div class="col-xs-12 col-md-12">
                     <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <input type="hidden" name="hid">
                     </div>
                   </div>
                 </form>
                 <?php if(isset($_POST['hid'])){

	$id=time()+1;
	date_default_timezone_set('Asia/Kolkata');
		mysql_query("INSERT INTO `eiem_project`.`fault_details` (`fault_id`, `sl_no`, `i_loation`, `fault`, `fault_details`) VALUES ('".$id."', '".$_POST['sl_no']."', '".$_POST['i_location']."', '".$_POST['fault']."', '".$_POST['fault_details']."');");
		mysql_query("INSERT INTO `eiem_project`.`fault_master` (`fault_id`, `status_code`, `status_details`, `update_date`, `update_by`, `user_id`, `book_date`) VALUES ('".$id."', 'FB', 'Fault_Booking', '".date("d-m-Y H:i:s")."','".$_SESSION['name']."','".$_SESSION['id']."','".date("d-m-Y H:i:s")."');");
		header("location:show_profile.php?msg=Create Successfully");
	}
	?>
                </div>
                <!-- /.panel -->
              </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- =================================== -->
      <!-- Your Work area END -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- ============================================================ -->
<!-- /#page-wrapper End -->
<?php include "../resources/footer.php"; ?>
