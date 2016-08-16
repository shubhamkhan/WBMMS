<?php
  $logo="<img src='../images/icon/logo.png' width='50px' height='50px'>";
  $sitename="<font color='#FFFFFF' size='+5'>EIEM</font>";

	$server="localhost";
    $user="root";
    $password="passw0rd";
    $database="eiem_project";

	$con=mysql_connect("$server","$user","$password") or die(mysql_error());
	if(!$con){
		echo "Error Database";
	}else{
		mysql_select_db("$database") or die(mysql_error());
		}
?>
