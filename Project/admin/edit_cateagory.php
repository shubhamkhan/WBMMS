<!-- Page Content Starts-->
<?php include "../resources/header.php";
 if(isset($_GET['id'])){
	$res = mysql_query("SELECT * FROM `".$database."`.`cateagory_master` WHERE ct_code='".$_GET['id']."'") or die(mysql_error());
	while($row = mysql_fetch_array($res)){
?>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Edit Cateagory</h1>
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
                      Update Cateagory Details
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="row">
                     <form action="" method="POST">
                       <div class="col-lg-6">
                       		<div class="form-group">
                                <label>Cateagory Code</label>
                                <input name="ct_code" type="text" class="form-control" placeholder="Cateagory Code" value="<?php echo $row['ct_code'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Cateagory Name</label>
                                <input name="ct_nm" type="text" class="form-control" placeholder="Cateagory Name" value="<?php echo $row['ct_nm'];?>">
                            </div>
                            <div class="form-group">
                                <label>Cateagory Specification</label>
                                <input name="ct_specification" type="text" class="form-control" placeholder="Cateagory Specification" value="<?php echo $row['ct_specification'];?>">
                            </div>
                       </div>
                      <div class="col-lg-6">
                             <div class="form-group">
                                <label>Cateagory Type</label>
                                <input name="ct_type" type="text" class="form-control" placeholder="Cateagory Type" value="<?php echo $row['ct_type'];?>">
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <input name="unit" type="text" class="form-control" placeholder="unit" value="<?php echo $row['unit'];?>">
                            </div>
                            <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <input type="hidden" name="hid">
                             </div>
                      </div>
                     </form>
     <?php
     }}
    if(isset($_POST['hid'])){
        mysql_query("UPDATE `".$database."`.`cateagory_master` SET  `ct_nm` = '".$_POST['ct_nm']."', `ct_specification` = '".$_POST['ct_specification']."', `ct_type` = '".$_POST['ct_type']."', `unit` =  '".$_POST['unit']."' WHERE `cateagory_master`.`ct_code` = '".$_GET['id']."'") or die(mysql_error());;
        //header("location:show_cateagory.php?msg=Edit Successfully");
        echo '<script>window.location.assign("show_cateagory.php?msg=Update Successfully");</script>';
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
