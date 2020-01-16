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
              <h3 class="card-title">Users</h3>
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
              <li class="breadcrumb-item active">View Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<a href="add_staff.php"><i class="btn btn-primary">Add Staff</i></a>
</section>

            <!-- /.card-header -->
            <div class="card-body">
            
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr style="background-color: #808080">
                  <th>Profile Picture</th>
                  <th>First Name</th>
                  <th>Last Name</th>

                  <th>Account Type</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
</div>
                
        <?php 
 		$table_name="staff";
 		$data=get($table_name);
 		foreach ($data as $key => $row) {
 			$id=$row['id'];
 			$username=$row['username'];
 			$password=$row['password'];
 			$firstname=$row['firstname'];
 			$lastname=$row['lastname'];
 			$middlename=$row['middlename'];
 			$birthdate=$row['birthdate'];
      $photo = $row['photo'];
      $photo_url = base_url().'staff_pics/'.$photo;
 			$gender=$row['gender'];

 			if ($gender ==1 ) {
 				$gender="Male";
 			}
 			else if ($gender == 2) {
 				$gender="Female";
 			}
 			$email=$row['email'];
 			$contact=$row['contact'];
 			$address=$row['address'];
 			$account_status=$row['account_status'];
      $account_type=$row['account_type'];
      
 			
 	 ?>
 	 <tr align="center">
       <td class="center span2">
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
            </td>
 	 	<td><?=$firstname?></td>
 	 	<td><?=$lastname?></td>
 	 
 	 	
 	 	
 	 	    <td align="center">
              <?php
              if($account_type==1) {
              ?>
              <span class="btn btn-danger">Super Admin</span>
              <?php
              } elseif($account_type == 2) {
              ?>
              <span class="btn btn-primary">Admin</span>
              <?php
              } elseif($account_type == 3) {
                ?>
                <span class="btn btn-info">Staff</span>
                <?php
              }
              ?>  
            </td>
 	 	<td>
 	 		
      <?php
        if (($account_type == 1 || $account_type == 2 || $account_type == 3) && $_SESSION['acct_type'] == 1) {
          echo(
            '
            <a href="edit_staff.php?id='.$id.'">
              <i class="fas fa-edit" style="color: blue"></i>
            </a>
            &nbsp;
            <a href="staff_confirmdelete.php?id='.$id.'">
              <i class=" fas fa-trash-alt" style="color: red" >  </i>
            </a>
            &nbsp
            '
          );
        }

        if (($username == $_SESSION['username'] || $account_type == 3) && $_SESSION['acct_type'] == 2) {
          echo(
            '
            <a href="edit_staff.php?id='.$id.'">
              <i class="fas fa-edit" style="color: blue"></i>
            </a>
            &nbsp;
            <a href="staff_confirmdelete.php?id='.$id.'">
              <i class=" fas fa-trash-alt" style="color: red" >  </i>
            </a>
            &nbsp
            '
          );
        }

        if ($username == $_SESSION['username'] && $_SESSION['acct_type'] == 3) {
          echo(
            '
            <a href="edit_staff.php?id='.$id.'">
              <i class="fas fa-edit" style="color: blue"></i>
            </a>
            &nbsp;
            <a href="staff_confirmdelete.php?id='.$id.'">
              <i class=" fas fa-trash-alt" style="color: red" >  </i>
            </a>
            &nbsp
            '
          );
        }
      ?>
			
 			
			<a href="staff_profile.php?id=<?= $id ?>" >
				<i class="  fas fa-user-alt" style="  "> </i>
			</a>

		
 	 	</td>
 	 </tr>
 	 <?php } ?>
                </tbody>
                <tfoot align="center">
                <tr  style="background-color: #808080">
                  <th>Profile Picture</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Account Type</th>
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
