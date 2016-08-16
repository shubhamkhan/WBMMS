<?php
include "../resources/connection.php";
	if(isset($_POST['hid'])){
		$res=mysql_query("SELECT `users_email`,`users_password` FROM `".$database."`.`users_master` WHERE `users_email`='".$_POST['e_mail']."' and `users_password`='".$_POST['password']."'") or die(mysql_error());
		$num=mysql_num_rows($res) or die(mysql_error());
		if($num == 1){
			$id_req =  mysql_query("SELECT `users_id`,`users_type` FROM `".$database."`.`users_master` WHERE `users_email` = '".$_POST['e_mail']."'") or die(mysql_error());
			$id_data = mysql_fetch_array($id_req) or die(mysql_error());
			$req = mysql_query("SELECT `users_id`,`first_name`,`profile_pic` FROM `".$database."`.`register_user_master` WHERE `users_id`='".$id_data['users_id']."'") or die(mysql_error());
			$data = mysql_fetch_array($req) or die(mysql_error());
			if($id_data['users_type']=="Super Admin"){
				SESSION_START();
				$_SESSION['hunjkghbjhg']=md5(time());
				$_SESSION['id']=$data['users_id'];
				$_SESSION['name']=$data['first_name'];
				$_SESSION['profile_img']=$data['profile_pic'];
				$_SESSION['u_type']=$id_data['users_type'];
			}else{
				header("location:index.php?msg=Login UnSuccessfully");
			}
				date_default_timezone_set('Asia/Kolkata');
				mysql_query("UPDATE `".$database."`.`register_user_master` SET `last_log_in` = '".date("d-m-Y H:i:s")."' WHERE `register_user_master`.`users_id` ='".$_SESSION['id']."'") or die(mysql_error());
				header("location:show_fault.php?msg=Login Successfully");
		}else{
				header("location:index.php?msg=Login UnSuccessfully");
		}
	}
?>
