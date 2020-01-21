



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
              <li class="breadcrumb-item"><a href="blank.php">Home</a></li>
              <li class="breadcrumb-item active">Attendance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </section>

  <div class="row no-print">
                <div class="col-12">
                  <a href="" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a><br>
                  
                  
      </div>
 </div>

            <!-- /.card-header -->
            <div class="card-body">
            
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr style="background-color: grey">
                  <th style="color: white">Full Name</th>
                  <th style="color: white">Event Date</th>
                  <th style="color: white">Arrival</th>
                  <th style="color: white">Departure</th>
                  

                </tr>
                </thead>
                <tbody>
</div>
                
        <?php 
    $event_id = $_GET['id'];
    $data=get_attendance($event_id);
    $row = $data->fetch_assoc();
    $event = get_where("add_event", $event_id);
    $event_data = $event->fetch_assoc();
    $json_obj = json_decode($row['attendance'], true);
    foreach ($json_obj['attendance'] as $key => $val) {      
      
   ?>
   <tr align="center">

    <td>
      <?php
        $qrcodes = get_where("qrcodes", $val['id']);
        $qrcodes_data = $qrcodes->fetch_assoc();
        echo $qrcodes_data['qrfirstname']." ".$qrcodes_data['qrlastname'];
      ?>
    </td>
    <td><?=$event_data['eventdate'] ?></td>
    <td><?=$val['present'] ?></td>
    
    
    <td align="center"><?=$val['dismissal'] ?></td>
   
   </tr>
   <?php } ?>
                </tbody>
                <tfoot align="center">
                <tr  style="background-color: grey">
                  <th style="color: white">Full Name</th>
                  <th style="color: white">Event Date</th>
                  <th style="color: white">Arrival</th>
                  <th style="color: white">Departure</th>
                  
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


