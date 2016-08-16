<!-- Page Content Starts-->
<?php include "../resources/header.php";
?>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Password</h1>
      </div>
      <!-- /.col-lg-12 -->
       <br clear="all">
      	<div class="row">
          <!-- /.panel -->
          <div class="panel panel-default">

              <div class="panel-body">
              	<div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <div class="row">
                         <form action="" method="POST">
                           <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Old Password" required>
                                </div>
                                 <div class="form-group">
                                    <label>New Password</label>
                                    <input name="users_password" id="p1" type="password" class="form-control" placeholder="New Password" required>
                                </div>
                                 <div class="form-group">
                                    <label>Re-type New Password</label>
                                    <input name="users_password1" id="p2" type="password" class="form-control" placeholder="Re-type New Password" required>
                                </div>
                           </div>
                           <div class="col-xs-12 col-md-12">
                             <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                                <button type="submit" class="btn btn-primary" onClick="validation();">Submit</button>
                                <input type="hidden" name="hid">
                             </div>
                           </div>
                         </form>
                         <?php if(isset($_POST['hid'])){
							 $pass=$_POST['password'];
							 $pas1=$_POST['users_password'];
							 $pas2=$_POST['users_password1'];
							 $id_req =  mysql_query("SELECT `users_password` FROM `".$database."`.`users_master` WHERE `users_id` = '".$_SESSION['id']."'") or die(mysql_error());
							 $id_data = mysql_fetch_array($id_req) or die(mysql_error());
							 if($id_data['users_password'] != $pass){
								 echo "<span class='btn btn-danger'>Old Password Missmach</span>";
							 }else{
								 if($pas1==$pas2){
		mysql_query("UPDATE `".$database."`.`users_master` SET `users_password` = '".$_POST['users_password']."' WHERE `users_master`.`users_id` = '".$_SESSION['id']."'") or die(mysql_error());
		//header('location:show_profile.php');
    echo '<script>window.location.assign("location:show_profile.php");</script>';
		}
				}
						 }?>
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
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- ============================================================ -->
<!-- /#page-wrapper End -->
<?php include "../resources/footer.php"; ?>
<script>
function validation(){
var a= document.getElementById("p1").value;
var b= document.getElementById("p2").value;
if(a!=b){
	alert('New Password Missmach');
}
}
</script>
