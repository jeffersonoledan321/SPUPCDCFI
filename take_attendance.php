<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPUPCDCFI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

          <!-- /.card -->
<?php include"header.php"; 
include"perfect_function.php";?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Children</h3>
            </div><br>
          
<div class="  container">
       <section class="content-header">
          <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="blank.php">Home</a></li>
              <li class="breadcrumb-item active">View Children</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
         
</section>
		<form name="attendance-event" id="attendance-event" method="POST" action="attendance_process.php">


            <!-- /.card-header -->
            <div class="card-body">
            <br><br>
            
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr style="background-color: #808080">
                  <th>Present?</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Time Attended</th>

                  
                 

                </tr>
                </thead>
                <tbody>
</div>
                
        <?php 
 		$table_name="qrcodes";
 		$data=get($table_name);
 		foreach ($data as $key => $row) {
 			$id=$row['id'];
 			$qrImg=$row['qrImg'];
 			$qrlink=$row['qrlink'];
 			
 			$qrfirstname=$row['qrfirstname'];
 			$qrlastname=$row['qrlastname'];
 			$qrmiddlename=$row['qrmiddlename'];
 			$qrfathersname=$row['qrfathersname'];
 			$qrmothersname=$row['qrmothersname'];
 			$qrbirthdate=$row['qrbirthdate'];
      /*$photo = $row['photo'];
      $photo_url = base_url().'children_pics/'.$photo;*/
 			$qrgender=$row['qrgender'];

 			if ($qrgender ==1 ) {
 				$qrgender="Male";
 			}
 			else if ($qrgender == 2) {
 				$qrgender="Female";
 			}
 			
 			$qrcontactperson=$row['qrcontactperson'];
 			$qraddress=$row['qraddress'];
 			$qraccountstatus=$row['qraccountstatus'];
 			
 			$qrbloodtype=$row['qrbloodtype'];
 			if ($qrbloodtype==1) {
 				$qrbloodtype="A";
 			}
 			else if($qrbloodtype==2){
 				$qrbloodtype="B";
 			}
 			else if($qrbloodtype==3){
 				$qrbloodtype="AB";
 			}
 			else if($qrbloodtype==4){
 				$qrbloodtype="O";
 			}
 		
 	 ?>
 	 <tr align="center">
      <!--  <td class="center span2">
              <?php
              if ($photo == "") {
              echo "<i>No photo available.</i>";
              }
              else {
              ?>
              <img src="<?= $photo_url ?>" style="height: 100px;width:100px;" class="img-responsive">
              <?php
              }
              ?>
            </td> -->
    <td><input type="checkbox" name="student-<?=$id?>" id="student-<?=$id?>"></td>
 	 	<td><?=$qrfirstname?></td>
 	 	<td><?=$qrlastname?></td>
 	 	<td><?=$qrmiddlename?></td>
    <td>Present: <input type="time" name="present-<?=$id?>" id="present-<?=$id?>" disabled>
    Dismissal: <input type="time" name="dismissal-<?=$id?>" id="dismissal-<?=$id?>" disabled></td>

 	 
 	 	
 	 	
 	 	   

 	 	
 	 </tr>
 	 <?php } ?>
                </tbody>
                <tfoot align="center">
                <tr  style="background-color: #808080">
                  <th>Present?</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Time Attended</th>
                  
                </tr>
                </tfoot>

              </table>
              <br>
      <button type="submit" class="btn btn-success">Save</button>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      </form>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();

    $('input[type=checkbox]').change(
    function(){
        var id = $(this).attr('id').substring(8);
        if (this.checked) {
            $('#present-' + id).prop("disabled", false);
            $('#dismissal-' + id).prop("disabled", false);
        } else {
            $('#present-' + id).attr('value', '');
            $('#present-' + id).val('');
            $('#dismissal-' + id).attr('value', '');
            $('#dismissal-' + id).val('');
            $('#present-' + id).prop("disabled", true);
            $('#dismissal-' + id).prop("disabled", true);
        }
    });
  });



</script><div></div>
</body>
</html>
