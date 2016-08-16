<!-- Page Content Starts-->
<?php include "../resources/header.php";
 $res = mysql_query("SELECT * FROM `".$database."`.`cateagory_master`") or die(mysql_error());
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
          <h1 class="page-header">Show Cateagory</h1>
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
                        Show All Cateagory
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Cateagory Code</th>
                                        <th>Cateagory Name</th>
                                        <th>Cateagory Specification</th>
                                        <th>Cateagory Type</th>
                                        <th>Unit</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysql_fetch_array($res)){ ?>
                                    <tr>
                                        <td><?php echo $row['ct_code'];?></td>
                                        <td><?php echo $row['ct_nm'];?></td>
                                        <td><?php echo $row['ct_specification'];?></td>
                                        <td><?php echo $row['ct_type'];?></td>
                                        <td><?php echo $row['unit'];?></td>
                                        <td align="center"><a style="text-decoration:none" href="edit_cateagory.php?id=<?php echo $row['ct_code'];?>">
											<input type="button" value="Edit" class="btn btn-primary" /></a>
                                        </td>
                            			<td align="center"><a style="text-decoration:none" href="delete_cateagory.php?id=<?php echo $row['ct_code'];?>">
											<input type="button" value="Delete" class="btn btn-danger" /></a>
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
