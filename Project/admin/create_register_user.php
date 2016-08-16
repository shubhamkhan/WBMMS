<?php
include "../resources/header.php";
if(isset($_POST['hid'])){
	$id=time()+1;
	$pass1=$_POST['pasword'];
	$pass2=$_POST['pasword1'];
	$eml1=$_POST['email_id'];
	$eml2=$_POST['email_id1'];
	if($pass1==$pass2 and $eml1==$eml2){
		if($_FILES['img']['name'] != null or ""){
	      $link=time()."-".$_FILES['img']['name'];
	      copy($_FILES['img']['tmp_name'],'../images/profile_image/'.$link);
	  }else{
	      $link="default/pic.png";
		}
		mysql_query("INSERT INTO `".$database."`.`register_user_master` (`users_id`, `first_name`, `last_name`, `u_dept`, `address`, `sex`, `date_of_birth`, `phon_no`, `profile_pic`) VALUES ('".$id."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['u_dept']."', '".$_POST['address']."', '".$_POST['sex']."', '".$_POST['dob']."', '".$_POST['phone_no']."', '".$link."');") or die(mysql_error());
		mysql_query("INSERT INTO `".$database."`.`users_master` (`users_id`, `users_email`, `users_password`, `users_type`) VALUES ('".$id."', '".$_POST['email_id']."', '".$_POST['pasword']."','".$_POST['user_type']."');") or die(mysql_error());
		//header('location:show_register_user.php');
		echo '<script>window.location.assign("show_register_user.php?msg=Create Successfully");</script>';
		}
	}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Register User</h1>
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
                        Create A New User
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="row">
                            <form role="form" action="" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="col-xs-10 col-sm-12 col-md-6">
                                        <div class="form-group">
                                        <label>First Name<span class="text-danger">*</span></label>
                                            <input id="textinput" name="first_name" type="text"  placeholder="first name" class="form-control" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name<span class="text-danger">*</span></label>
                                            <input type="text" name="last_name"  placeholder="last name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Depertment<span class="text-danger">*</span></label>
                                            <input type="text" name="u_dept"  placeholder="Depertment" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Email ID<span class="text-danger">*</span></label>
                                            <input type="email" name="email_id" id="e1"  placeholder="email ID" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Re-Type Email ID<span class="text-danger">*</span></label>
                                           <input type="email" name="email_id1" id="e2"  placeholder="Re-Type email ID" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Address:</label>
                                            <input type="text" name="address" placeholder="address" class="form-control">
                                        </div>
																				<div class="form-group">
																				<label>User Type:</label>
																						<select class="form-control" name="user_type">
																								<option>User</option>
																								<option>Master Admin</option>
																								<option>Super Admin</option>
																						</select>
																				</div>
                                    </div>
                                    <div class="col-xs-10 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label>Sex<span class="text-danger">*</span></label>
                                            <label class="radio-inline">
                                                <input name="sex" value="Male" type="radio" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input name="sex" value="Female" type="radio">Female
                                            </label>
                                         </div>
                                        <div class="form-group">
                                            <label>Date Of Birth<span class="text-danger">*</span></label>
                                            <input name="dob" type="text"  placeholder="date of birth" class="form-control" required>
                                            <p class="help-block">Example: yyyy-mm-dd like 1980-10-30 input here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <input type="password" id="p1" name="pasword"  placeholder="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Re-Type Password<span class="text-danger">*</span></label>
                                            <input type="password" id="p2" name="pasword1" placeholder="Re-Type password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Phone No</label>
                                            <input type="tel" name="phone_no" maxlength="10"  placeholder="phon no" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Upload Image</label>
                                            <input type="file" name="img" accept="image/jpeg">
                                        </div>
																				<div class="form-group col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-2">
                                             <button type="submit" class="btn btn-lg bg_green  btn-block" onClick="validation();">Submit</button>
                                             <input type="hidden" name="hid">
                                        </div>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                    </div> -->
                                </fieldset>
                            </form>
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
<?php include "../resources/footer.php";?>
<script>
function validation(){
	var a= document.getElementById("p1").value;
	var b= document.getElementById("p2").value;
	if(a!=b){
		alert('Password Missmach');
	}
	var c= document.getElementById("e1").value;
	var d= document.getElementById("e2").value;
	if(c!=d){
		alert('Email Missmach');
	}
}
</script>
