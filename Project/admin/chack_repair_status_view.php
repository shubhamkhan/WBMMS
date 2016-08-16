<!-- Page Content Starts-->
<?php include "../resources/header.php";
if(isset($_GET['id'])){
 $res = mysql_query("SELECT * FROM `".$database."`.`fault_master` M, `".$database."`.`fault_details` D WHERE M.`fault_id`= D.`fault_id` AND M.`fault_id`='".$_GET['id']."'") or die(mysql_error());
while($row = mysql_fetch_array($res)){
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
          <h1 class="page-header">Repair Status</h1>
      </div>
      <!-- /.col-lg-12 -->
      <!-- Your Work area START -->
      <!-- =================================== -->
        <br clear="all">
      	<div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">
          	  <div class="panel-body">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      View Repair Details
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="row">
                       <div class="col-lg-6">
                          <div class="form-group">
                            <label>Fault ID</label>
                            <p class="form-control-static"><?php echo $row['fault_id']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Serial NO</label>
                            <p class="form-control-static"><?php echo $row['sl_no']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Status Details</label>
                            <p class="form-control-static"><?php echo $row['status_details']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Booking Date</label>
                            <p class="form-control-static"><?php echo $row['book_date']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Clear Date</label>
                            <p class="form-control-static"><?php echo $row['clear_date']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Update Date</label>
                            <p class="form-control-static"><?php echo $row['update_date']; ?></p>
                          </div>
                       </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                            <label>Update By</label>
                            <p class="form-control-static"><?php echo $row['update_by']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Authority</label>
                            <p class="form-control-static"><?php echo $row['authority']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Item Location</label>
                            <p class="form-control-static"><?php echo $row['i_loation']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Fault</label>
                            <p class="form-control-static"><?php echo $row['fault']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Fault Details</label>
                            <p class="form-control-static"><?php echo $row['fault_details']; ?></p>
                          </div>
                       </div>
                        <?php }} ?>
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
