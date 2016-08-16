<!-- Page Content Starts-->
<?php include "../resources/header.php";
 $res = mysql_query("SELECT * FROM `".$database."`.`register_user_master` order by `last_log_in` DESC") or die(mysql_error());
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
          <h1 class="page-header">Users List</h1>
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
                        All Users Detils
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Users Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>U Dept</th>
                                        <th>Last Log In</th>
                                        <th>Address</th>
                                        <th>Sex</th>
                                        <th>Date Of Birth</th>
                                        <th>Phon No</th>
										<th>Profile Pic</th>
                                        <th>User Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysql_fetch_array($res)){ ?>
                                    <tr>
                                        <td><?php echo $row['users_id'];?></td>
                                        <td><?php echo $row['first_name'];?></td>
                                        <td><?php echo $row['last_name'];?></td>
                                        <td><?php echo $row['u_dept'];?></td>
                                        <td><?php echo $row['last_log_in'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['sex'];?></td>
                                        <td><?php echo $row['date_of_birth'];?></td>
                                        <td><?php echo $row['phon_no'];?></td>
										<td><img src="../images/profile_image/<?php echo $row['profile_pic'];?>" width="100px" height="100px"></td>
                                        <td align="center"><a style="text-decoration:none" href="deactive.php?id=<?php echo $row['users_id'];?>">
                                        			<input type="button" value="<?php
									$req = mysql_query("SELECT u_status FROM `".$database."`.`users_master` WHERE users_id ='".$row['users_id']."'") or die(mysql_error());
													$data = mysql_fetch_array($req) or die(mysql_error());
																		if($data['u_status']==0){
																			echo "Deactive";
																		}else if($data['u_status']==1){
																			echo "Active";
																		} ?>" class="btn btn-primary" /></a>
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
