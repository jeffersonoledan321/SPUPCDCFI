<?php 
	include"perfect_function.php";
	include"header.php";

 ?>
  <div class="card-header">
              <h3 class="card-title">Attendance</h3>
            </div><br>
            <div class="container">
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
              <li class="breadcrumb-item active">View All</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <a href="index.php"><i class="btn btn-primary">Add Student</i></a>
</section>


 <form action="attendance.php">
 		<table class="	table table-striped">
 				<th>First Name</th>
 				<th>Last Name</th>
 				<th>Address</th>
 				<th>Attendance Status</th>

 			 <tbody>
</div>
                
        <?php 
 		$table_name="qrcodes";
 		$data=get($table_name);
 		foreach ($data as $key => $row) {
 			$id=$row['id'];
 			
 			$firstname=$row['qrfirstname'];
 			$lastname=$row['lastname'];
 			$middlename=$row['middlename'];
 			$birthdate=$row['birthdate'];
       $photo = $row['photo'];
      $photo_url = base_url().'volunteer_pics/'.$photo;
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
              if($account_status==1) {
              ?>
              <span class="btn btn-primary">ACTIVE</span>
              <?php
              } else {
              ?>
              <span class="btn btn-danger">INACTIVE</span>
              <?php
              }
              ?>  
            </td>
 	 	<td align="center">
 	 		
			<a href="edit_volunteer.php?id=<?= $id ?>">
				<i class="fas fa-edit" style="color: blue"></i>
			</a>
			&nbsp
			<a href="volunteer_confirmdelete.php?id=<?= $id ?>">
			<i class=" fas fa-trash-alt" style="color: red" >  </i>
			</a>
			&nbsp
			
			<a href="volunteer_profile.php?id=<?= $id ?>" >
				<i class="  fas fa-user-alt" style="  "> </i>
			</a>

		
 	 	</td>
 	 </tr>
 	 <?php } ?>
                </tbody>


 			</table>
 	
 </form>
 </div>