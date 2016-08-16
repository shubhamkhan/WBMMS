<?php
include "../resources/connection.php";
	if(isset($_POST['hid'])){
		$res=mysql_query("SELECT `users_email`,`users_password`,`users_email` FROM `users_master` WHERE `users_email`='".$_POST['e_mail']."' and `users_password`='".$_POST['password']."' and `u_status`='0'");
		$num=mysql_num_rows($res);
		if($num == 1){
			$id_req =  mysql_query("SELECT `users_id`,`users_type` FROM `users_master` WHERE `users_email` = '".$_POST['e_mail']."'");
			$id_data = mysql_fetch_array($id_req);
			$req = mysql_query("SELECT `users_id`,`first_name`,`profile_pic` FROM `register_user_master` WHERE `users_id`='".$id_data['users_id']."'");
			$data = mysql_fetch_array($req);
			if($id_data['users_type']!="Administrator"){
				SESSION_START();
				$_SESSION['khjshdagsj']=md5(time());
				$_SESSION['id']=$data['users_id'];
				$_SESSION['name']=$data['first_name'];
				$_SESSION['profile_img']=$data['profile_pic'];
				$_SESSION['u_type']=$id_data['users_type'];
			}else{
				header("location:index.php?msg=Login UnSuccessfully");
			}
				date_default_timezone_set('Asia/Kolkata');
				mysql_query("UPDATE `eiem_project`.`register_user_master` SET `last_log_in` = '".date("d-m-Y H:i:s")."' WHERE `register_user_master`.`users_id` ='".$_SESSION['id']."'");
				header("location:create_book_fault.php?msg=Login Successfully");
		}else{
				header("location:index.php?msg=Login UnSuccessfully");
		}
	}
?>
