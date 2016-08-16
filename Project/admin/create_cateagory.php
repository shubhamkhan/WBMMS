<!-- Page Content Starts-->
<?php include "../resources/header.php";
 if(isset($_POST['hid'])){
	 //$cateagory_master=mysql_fetch_array(mysql_query("SELECT MAX(`ct_code`) FROM `cateagory_master`"));
	 //$id=$cateagory_master['MAX(`ct_code`)'] +1;
		mysql_query("INSERT INTO `".$database."`.`cateagory_master` (`ct_code`, `ct_nm`, `ct_specification`, `ct_type`, `unit`) VALUES ('".$_POST['ct_code']."', '".$_POST['ct_nm']."', '".$_POST['ct_specification']."', '".$_POST['ct_type']."', '".$_POST['unit']."');") or die(mysql_error());
		//header("location:show_cateagory.php?msg=Create Successfully");
    echo '<script>window.location.assign("show_cateagory.php?msg=Create Successfully");</script>';
	}
?>
<!--======================================================= -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">New Cateagory Entry</h1>
      </div>
      <br  clear="all">
      <!-- /.col-lg-12 -->
      <!-- Your Work area START -->
      <!-- =================================== -->
       <br clear="all">
      	<div class="row">
          <!-- /.panel -->
         <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Add New Cateagory Entry
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              	<div class="row">
                 <form action="" method="POST" autocomplete="off">
                   <div class="col-lg-6">
                   		<div class="form-group">
                            <label>Cateagory Code</label>
                            <input name="ct_code" type="text" class="form-control" placeholder="Cateagory Code" required>
                        </div>
                        <div class="form-group">
                            <label>Cateagory Name</label>
                            <input name="ct_nm" type="text" class="form-control" placeholder="Cateagory Name" required>
                        </div>
                        <div class="form-group">
                            <label>Cateagory Specification</label>
                            <input name="ct_specification" type="text" class="form-control" placeholder="Cateagory Specification" required>
                        </div>
                   </div>
                  <div class="col-lg-6">
                    	 <div class="form-group">
                            <label>Cateagory Type</label>
                            <input name="ct_type" type="text" class="form-control" placeholder="Cateagory Type" required>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input name="unit" type="text" class="form-control" placeholder="unit" required>
                        </div>
                        <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                        <button type="submit" class="btn btn-success">Create</button>
                        <input type="hidden" name="hid">
                     </div>
                  </div>
                 </form>
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.panel-body -->
              </div>
              <!-- /.panel-body -->
            </div>
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
