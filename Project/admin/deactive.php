<?php
 include "../resources/connection.php";
  SESSION_START();
  if(!$_SESSION['hunjkghbjhg']){
		SESSION_DESTROY();
		header("location:index.php?msg=UnSuccessfully");
	}
 if(isset($_GET['id'])){
	 $req = mysql_query("SELECT u_status FROM `".$database."`.`users_master` WHERE users_id ='".$_GET['id']."'") or die(mysql_error());
	$data = mysql_fetch_array($req);
		if($data['u_status']==0){
				mysql_query("UPDATE `".$database."`.`users_master` SET u_status='1' WHERE `users_master`.users_id ='".$_GET['id']."'") or die(mysql_error());
			}else if($data['u_status']==1){
				mysql_query("UPDATE `".$database."`.`users_master` SET u_status='0' WHERE `users_master`.users_id ='".$_GET['id']."'") or die(mysql_error());
			}
		header("location:show_register_user.php?msg=Successfully");
 }
?>
