<!-- Page Content Starts-->
<?php include "../resources/header_user.php";
?>
<!--======================================================= -->
<?php if (isset($_GET['msg'])){
			echo"<script>window.alert('".$_GET['msg']."');</script>";
			//echo "<center><span class='btn btn-danger'>".$_GET['msg']."</span></center>";
} ?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Fault Booking</h1>
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
                        Search Item
                    </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <div class="row">
                         <form action="book_fault_one.php" method="POST">
                           <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input name="ct_nm" type="text" class="form-control" placeholder="Item Name" required>
                                </div>
                           </div>
                           <div class="col-xs-12 col-md-12">
                             <div class="form-group col-md-2 col-xs-4 col-md-offset-5 col-xs-offset-4">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <input type="hidden" name="hid">
                             </div>
                           </div>
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
<?php include "../resources/footer.php"; ?>
