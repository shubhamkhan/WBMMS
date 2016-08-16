<!-- Page Content Starts-->
<?php include "../resources/header.php";
 if(isset($_GET['id'])){
	$res = mysql_query("SELECT * FROM `".$database."`.`repair_master` WHERE stasts_code='".$_GET['id']."'") or die(mysql_error());
	while($row = mysql_fetch_array($res)){
?>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Edit</h1>
      </div>
      <!-- /.col-lg-12 -->
      <!-- Your Work area START -->
      <!-- =================================== -->
      <br clear="all">
        <div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">
              <div class="panel-heading">
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              	<div class="row">
                 <form action="" method="POST">
                   <div class="col-lg-6">
                   		<div class="form-group">
                            <label>Status Detils</label>
                            <input name="status_de" type="text" class="form-control" placeholder="Status Detils" value="<?php echo $row['status_de'];?>">
                        </div>
                   </div>
                  <div class="col-lg-6">
                  </div>
                   <div class="col-xs-12 col-md-12">
                         <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <input type="hidden" name="hid">
                         </div>
                   </div>
                 </form>
 <?php
 }}
if(isset($_POST['hid'])){
	mysql_query("UPDATE `".$database."`.`repair_master` SET `status_de` = '".$_POST['status_de']."' WHERE `repair_master`.`stasts_code` = '".$_GET['id']."'") or die(mysql_error());
	//header("location:show_repair.php?msg=Edit Successfully");
  echo '<script>window.location.assign("show_repair.php?msg=Update Successfully");</script>';
}
			?>
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
