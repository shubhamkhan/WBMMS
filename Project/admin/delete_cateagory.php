<?php
 include "../resources/connection.php";
 SESSION_START();
  if(!$_SESSION['hunjkghbjhg']){
		SESSION_DESTROY();
		header("location:index.php?msg=UnSuccessfully");
	}
 if(isset($_GET['id'])){
		mysql_query("DELETE FROM `".$database."`.`cateagory_master` WHERE ct_code='".$_GET['id']."'") or die(mysql_error());
		header("location:show_cateagory.php?msg=Delete Successfully");
	}else{
		header("location:show_cateagory.php?msg=Delete UnSuccessfully");
		}
?>
