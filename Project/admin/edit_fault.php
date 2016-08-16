<!-- Page Content Starts-->
<?php include "../resources/header.php"; ?>
 <?php
 if(isset($_GET['id'])){
	$res = mysql_query("SELECT * FROM `".$database."`.`fault_master` WHERE fault_id='".$_GET['id']."'") or die(mysql_error());
	while($row = mysql_fetch_array($res)){
?>
<script>
function showUser(str) {

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";

        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
		xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
		//alert (str);
        xmlhttp.open("GET","getdata.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Update Fault Status</h1>
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
                  Edit Fault Status
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              	<div class="row">
				<?php
                $con = mysql_connect('localhost','root','','eiem_project') or die(mysql_error());
                if (!$con) {
                    die('Could not connect: ' . mysqli_error($con));
                }
                mysql_select_db($con,"ajax_demo") or die(mysql_error());
                $sql="SELECT * FROM `repair_master`";
                $result = mysql_query($con,$sql);
                ?>
                 <form action="" method="POST">
                   <div class="col-lg-6">
                   		<div class="form-group">
                            <label>Status Code</label>
                            <select class="form-control" name="status_code" onchange="showUser(this.value)">
                            <?php
								  while($ro = mysql_fetch_array($result)) {?>

								  <option value="<?php echo $ro['status_code'];?>"><?php echo $ro['status_code'];?></option>

							<?php }
								  ?>
                            </select>
                            <div ><b>Status Code info will be listed here...</b></div>
                        </div>
                        <div class="form-group" id="txtHint">
                            <label>Status Details</label>
                               <input name="status_details" type="text" class="form-control" placeholder="status details" readonly>
                        </div>
                   </div>
                  <div class="col-lg-6">
                        <div class="form-group">
                            <label>Authority</label>
                            <input name="authority" type="text" class="form-control" placeholder="authority" value="<?php echo $row['authority'];?>">
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
	date_default_timezone_set('Asia/Kolkata');
	mysql_query("UPDATE `".$database."`.`fault_master` SET  `status_code` = '".$_POST['status_code']."',`status_details` = '".$_POST['status_details']."', `update_date` = '".date("d-m-Y H:i:s")."', `authority` = '".$_POST['authority']."', `update_by` =  '".$_SESSION['name']."' WHERE `fault_master`.`fault_id` = '".$_GET['id']."'") or die(mysql_error());
	if($_POST['status_code']=="RP"){
		mysql_query("UPDATE `".$database."`.`fault_master` SET `clear_date`= '".date("d-m-Y H:i:s")."' WHERE `fault_master`.`fault_id` = '".$_GET['id']."'") or die(mysql_error());
		}
	//header("location:show_fault.php?msg=Edit Successfully");
  echo '<script>window.location.assign("show_fault.php?msg=Update Successfully");</script>';
}
			?>
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.panel-body -->
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
