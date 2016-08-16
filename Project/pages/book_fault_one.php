<!-- Page Content Starts-->
<?php include "../resources/header_user.php";
if(isset($_POST['hid'])){
  $res = mysql_query("SELECT * FROM `cateagory_master` WHERE `ct_nm` ='".$_POST['ct_nm']."'") or die(mysql_error());
  if(mysql_num_rows($res)<1){
	  $note="<center><span class='btn btn-warning'>Object is Not Found</span></center>";
	  }else{
		  $note="";
	  }
?>
<!--======================================================= -->
<div id="page-wrapper">
<?php if (isset($_GET['msg'])){
                echo"<script>window.alert('".$_GET['msg']."');</script>";
                //echo "<center><span class='btn btn-worning'>".$_GET['msg']."</span></center>";
   } ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Fault Booking <?php echo $note; ?></h1>
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
                        Select Fault Item
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Cateagory Code</th>
                                        <th>Cateagory Specification</th>
                                        <th>Cateagory Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysql_fetch_array($res)){ ?>
                                    <tr>
                                    	<td><?php echo $row['ct_nm'];?></td>
                                        <td><?php echo $row['ct_code'];?></td>
                                        <td><?php echo $row['ct_specification'];?></td>
                                        <td><?php echo $row['ct_type'];?></td>
                                        <td align="center"><a style="text-decoration:none" href="book_fault_two.php?id=<?php echo $row['ct_code'];?>">
											<input type="button" value="Book Fault" class="btn btn-primary" /></a>
                                        </td>
                                    </tr>
					               <?php }} ?>
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
