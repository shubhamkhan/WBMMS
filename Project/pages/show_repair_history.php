<?php include "../resources/header_user.php";
 $res = mysql_query("SELECT * FROM `fault_master` WHERE user_id='".$_SESSION['id']."' AND `status_code` ='RP' order by `update_date` DESC") or die(mysql_error());
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
          <h1 class="page-header">Repair Status List</h1>
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
                        Chack Repair History
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Fault ID</th>
                                        <th>Status Code</th>
                                        <th>Update Date</th>
                                        <th>Update By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysql_fetch_array($res)){ ?>
                                    <tr>
                                        <td><?php echo $row['fault_id'];?></td>
                                        <td><?php echo $row['status_code'];?></td>
                                        <td><?php echo $row['update_date'];?></td>
                                        <td><?php echo $row['update_by'];?></td>
                                        <td><a style="text-decoration:none" href="chack_fault_status_view.php?id=<?php echo $row['fault_id'];?>">
											<input type="button" value="View Details" class="btn btn-primary" /></a>
                                        </td>
                                    </tr>
					               <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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
