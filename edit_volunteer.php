  
<?php 
  include"perfect_function.php";
  include"header.php";

  $id = $_GET['id'];
  $form_edit="edit_volunteer_proc.php?id=".$id;

  $table="add_volunteer";
  $user_data=get_where($table,$id);

  foreach ($user_data as $key => $row) {
    $id=$row['id'];
    
    $firstname=$row['firstname'];
    $middlename=$row['middlename'];
    $lastname=$row['lastname'];
    $birthdate=$row['birthdate'];
    $gender=$row['gender'];
    $email=$row['email'];
    $photo = $row['photo'];
    $photo_url = base_url().'volunteer_pics/'.$photo;
    $contact=$row['contact'];
    $address=$row['address'];
    $account_status=$row['account_status'];
    $status=$row['status'];
    $profession=$row['profession'];
    $education=$row['education'];
    
    $skills=$row['skills'];


  }
  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Add director</title>
</head>
<body style="background-color: lavender">
  
   <div class="card-header">
                <h3 class="card-title">Edit Staff</h3>
              </div> 
  
  <section class="content">

  <div class=" container"> 
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
              <li class="breadcrumb-item active">Edit Staff</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
  <div><br>
  <div class="row-fluid sortable">
    <div class="box span12">
      <div class="box-header" data-original-title>
       
      </div>
      <div class="box-content">
        <?php
        if ($photo == ""){
        ?>
        <a href="<?= base_url() ?>volunteer_uploadphoto.php?id=<?= $id ?>">
          <button type="button" class="btn btn-primary">Upload Photo</button>
        </a>
        <?php
        } else {
        ?>
        <img src="<?= $photo_url ?>" style="height: 200px;width: 200px;" class="img-responsive">
        <br><br>
        <a href="<?= base_url() ?>volunteer_deletephoto.php?id=<?= $id ?>">
          <button type="button" class="btn btn-danger">Delete Photo</button>
        </a>
        <br>
        <?php
        }
        ?>
      </div>
    </div>
  </div><br>
    <form action="<?=$form_edit?>" method="post">
  
  <div class="form-row">
    <div class="col">
    <label>First Name</label>
      <input type="text" name="firstname"  class="form-control" placeholder="First Name" required="" value="<?=$firstname?>">
    </div>
    <div class="col">
    <label>Middle Name</label>
      <input type="text" name="middlename"  class="form-control" placeholder="Middle Name" required=""  value="<?=$middlename?>">
    </div>    
  </div><br>
  <div class="form-row">
    <div class="col">
    <label>Lastname</label>
      <input type="text" name="lastname"  class="form-control" placeholder="Last Name" required=""  value="<?=$lastname?>">
    </div>
    <div class="col">
    <label>Birthdate</label>
      <input type="date" name="birthdate"  class="form-control" placeholder="Birthdate" required=""  value="<?=$birthdate?>">
    </div>    
  </div><br>
   <div class="form-row">
    <div class="col">
    <label>Email</label>
      <input type="email" name="email"  class="form-control" placeholder="Email" required=""  value="<?=$email?>">
    </div>
    <div class="col">
    <label>Contact</label>
      <input type="text" name="contact"  class="form-control" placeholder="Contact" required=""  value="<?=$contact?>">
    </div>    
  </div><br>
   <div class="form-row">
    <div class="col">
    <label>Address</label>
      <input type="text" name="address"  class="form-control" placeholder="Address" required=""  value="<?=$address?>">
    </div>
     
     <div class="col">
    <label>Profession</label>
      <input type="text" name="profession"  class="form-control" placeholder="Status" required="" value="<?=$profession?>">
    </div>

    

      
  </div><br>

  <div class="form-row">
    <div class="col">
    <label>Education</label>
      <input type="text" name="education"  class="form-control" placeholder="Education required=""  value="<?=$education?>">
    </div>
     
     <div class="col">
    <label>Skills</label>
      <input type="text" name="skills"  class="form-control" placeholder="Skills" required="" value="<?=$skills?>">
    </div>

      
  </div><br>
  <label>Civil Status</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="status" class="custom-select" id="inputGroupSelect01" required=""  value="<?=$status?>">
      <?php if ($status == "1") { ?>
          <option value="1">Single</option>
          <option value="2">Married</option>
        
        <?php } ?>

        <?php if ($status=="2") { ?>
        <option value="2">Married</option>
        <option value="1">Single</option>
        <?php } ?>
    
  </select>
</div><br>

  <label>Gender</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="gender" class="custom-select" id="inputGroupSelect01" required=""  value="<?=$gender?>">
      <?php if ($gender == "1") { ?>
          <option value="1">Male</option>
          <option value="2">Female</option>
        
        <?php } ?>

        <?php if ($gender=="2") { ?>
        <option value="2">Female</option>
        <option value="1">Male</option>
        <?php } ?>
    
  </select>
</div><br>



<label>Account Status</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="account_status" class="custom-select" id="inputGroupSelect01" required=" tanginamo"  value="<?=$account_status?>">
    <?php if ($account_status == "1") { ?>
        <option value="1">Active</option>
        <option value="2">Inactive</option>
        <?php } ?>

        <?php if ($account_status == "2") { ?>
        <option value="2">Inactive</option>
        <option value="1">Active</option>
        <?php } ?>
    
  </select>
</div><br><br>



  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
          <strong style="color: blue"></strong>I  agree to the terms and conditions
      </label>
      <div class="invalid-feedback">
        
      </div>
    </div>
  </div> -->
  <button class="btn btn-primary" type="submit">Update</button>
   &nbsp
  <a href="view_staff.php"><i class="btn btn-danger">Cancel</i></a>
</form> 

</div>
   </section><br><br><br><br><br>


</body>
</html>
<?php include"footer.php" ?>
 