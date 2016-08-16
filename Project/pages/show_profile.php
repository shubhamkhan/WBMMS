<!-- Page Content Starts-->
<?php include "../resources/header_user.php";
$res = mysql_query("SELECT * FROM  `register_user_master` WHERE users_id='".$_SESSION['id']."'");
$row = mysql_fetch_array($res);
?>
<!--======================================================= -->
<div id="page-wrapper">
  <?php if (isset($_GET['msg'])){
              echo"<script>window.alert('".$_GET['msg']."');</script>";
   } ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Profile</h1>
      </div>
      <!-- /.col-lg-12 -->
      	<br clear="all">
        <div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">
             <div class="panel-body">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Your Profile Detils
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="row">
                       <div class="col-lg-6">
                          <div class="form-group">
                            <label>First Name</label>
                            <p class="form-control-static"><?php echo $row['first_name']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <p class="form-control-static"><?php echo $row['last_name']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Department Name</label>
                            <p class="form-control-static"><?php echo $row['u_dept']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <p class="form-control-static"><?php echo $row['address']; ?></p>
                          </div>
                       </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                            <label>Sex</label>
                            <p class="form-control-static"><?php echo $row['sex']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Date Of Birth</label>
                            <p class="form-control-static"><?php echo $row['date_of_birth']; ?></p>
                          </div>
                          <div class="form-group">
                            <label>Phon NO</label>
                            <p class="form-control-static"><?php echo $row['phon_no']; ?></p>
                          </div>
                          <div class="form-group">
                               <a style="text-decoration:none" href="edit_profile.php?id=<?php echo $row['users_id'];?>">
                                    <input type="button" value="Update" class="btn btn-primary" />
                               </a>
                          </div>
                       </div>
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
