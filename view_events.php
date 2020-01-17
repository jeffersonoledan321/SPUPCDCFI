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
              <h3 class="card-title">Events</h3>
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
              <li class="breadcrumb-item"><a href="blank.php">Graph</a></li>
              <li class="breadcrumb-item active">View Events</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <a href="add_event.php"><i class="btn btn-primary">Add Event</i></a>
</section>

            <!-- /.card-header -->
            <div class="card-body">
            
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr style="background-color: #808080">
                  <th>Event Name</th>
                  <th>Event Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Check Attedance</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
</div>
                
        <?php 
 		$table_name="add_event";
 		$data=get($table_name);
 		foreach ($data as $key => $row) {
 			$id=$row['id'];
 			
 			$eventname=$row['eventname'];
 			$eventdate=$row['eventdate'];
 			$starttime=$row['starttime'];
 			$endtime=$row['endtime'];
 			
 	 ?>
 	 <tr align="center">

 	 	<td><?=$eventname?></td>
 	 	<td><?=$eventdate?></td>
 	 	<td><?=$starttime?></td>
 	 	
 	 	
 	 	<td align="center"><?=$endtime?></td>
    <td><a href="take_attendance.php?id=<?=$id?>"><button class="btn btn-secondary">Attendance</button></a></td>
 	 	<td align="center">
 	 		
			<a href="edit_event.php?id=<?= $id ?>">
				<i class="fas fa-edit" style="color: blue"></i>
			</a>
			&nbsp
			<a href="event_confirmdelete.php?id=<?= $id ?>">
			<i class=" fas fa-trash-alt" style="color: red" >  </i>
			</a>
			&nbsp
			
			<a href="view_attendance.php?id=<?= $id ?>" >
				<i class="  fas fa-users" style="color: green "> </i>
			</a>

		
 	 	</td>
 	 </tr>
 	 <?php } ?>
                </tbody>
                <tfoot align="center">
                <tr  style="background-color: #808080">
                  <th>Event Name</th>
                  <th>Event Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Check Attendance</th>
                  <th>Action</th>
                </tr>
                </tfoot>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
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
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

</script><div></div>
</body>
</html>
