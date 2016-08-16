<!DOCTYPE html>
<html>
<body>
<?php
intval($_GET['q']);
$con = mysqli_connect('localhost','root','passw0rd','eiem_project') or die(mysql_error());
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
//print_r($_GET['q']);
mysqli_select_db($con,"ajax_demo") or die(mysql_error());
$sql="SELECT * FROM `repair_master` WHERE `status_code`='".$_GET['q']."'";
$result = mysqli_query($con,$sql) or die(mysql_error());
echo "<div class='form-group'>
          <label>Status Code</label>";
		while($ro = mysqli_fetch_array($result)) {
	    echo "<input name='status_details' type='text' class='form-control' placeholder='status details' value=".$ro['status_de']." readonly>
      </div>";
//print_r($ro);
}
mysqli_close($con) or die(mysql_error());
?>
</body>
</html>
