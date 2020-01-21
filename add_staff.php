  <!DOCTYPE html>
<html>
<head>
  <title>Add Staff</title>
</head>
<body style="background-color: ">
  <?php 
    include"perfect_function.php";
    include"header.php";
   ?>
   <div class="card-header">
                <h3 class="card-title">Add Users </h3>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

</section> 
  <div>
    <form action="add_staff_proc.php" method="post">
  <div class="form-row">
    <div class="col">
    <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required="">
    </div>
    <div class="col">
    <label>Password</label>
      <input type="password" name="password"  class="form-control" placeholder="Password" required="">
    </div>
    
  </div><br>
  <div class="form-row">
    <div class="col">
    <label>First Name</label>
      <input type="text" name="firstname"  class="form-control" placeholder="First Name" required="">
    </div>
    <div class="col">
    <label>Middle Name</label>
      <input type="text" name="middlename"  class="form-control" placeholder="Middle Name" required="">
    </div>    
  </div><br>
  <div class="form-row">
    <div class="col">
    <label>Lastname</label>
      <input type="text" name="lastname"  class="form-control" placeholder="Last Name" required="">
    </div>
    <div class="col">
    <label>Birthdate</label>
      <input type="date" name="birthdate"  class="form-control" placeholder="Birthdate" required="">
    </div>    
  </div><br>
   <div class="form-row">
    <div class="col">
    <label>Email</label>
      <input type="email" name="email"  class="form-control" placeholder="Email" required="">
    </div>
    <div class="col">
    <label>Contact</label>
      <input type="text" name="contact"  class="form-control" placeholder="Contact" required="">
    </div>    
  </div><br>

   <div class="form-row">
    <div class="col">
    <label>Education</label>
      <input type="text" name="education"  class="form-control" placeholder="Education" required="">
    </div>
    <div class="col">
    <label>skills</label>
      <input type="text" name="skills"  class="form-control" placeholder="Skills" required="">
    </div>    
  </div><br>

   <div class="form-row">
    <div class="col">
    <label>Address</label>
      <input type="text" name="address"  class="form-control" placeholder="Address" required="">
    </div>

      <div class="col">
    <label>Profession</label>
      <input type="text" name="profession"  class="form-control" placeholder="Profession" required="">
    </div>


    
     
  </div><br>
  <label>Account Type</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="account_type" class="custom-select" id="inputGroupSelect01" required="">
    <option value="">Account Type</option>
    <?php
      if ($_SESSION['acct_type'] == 1) {
        echo('
        <option value="1">Super Admin</option>
        <option value="2">Admin</option>
        ');
      }
    ?>
    
    <option value="3">Staff</option>
    
  </select>
</div><br>

  <label>Civil Status</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="status" class="custom-select" id="inputGroupSelect01" required="">
    <option value="">Select Civil Status</option>
    <option value="1">Single</option>
    <option value="2">Married</option>
    
  </select>
</div><br>

 

  <label>Gender</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="gender" class="custom-select" id="inputGroupSelect01" required="">
    <option value="">Select Gender</option>
    <option value="1">Male</option>
    <option value="2">Female</option>
    
  </select>
</div><br>
<label>Account Status</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select name="account_status" class="custom-select" id="inputGroupSelect01" required="">
    <option value="">Select Account Status</option>
    <option value="1">Active</option>
    <option value="2">Inactive</option>
    
  </select>
</div><br>
<!-- <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Motto</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  placeholder="Motto" name="motto"></textarea>
                        </div>
                      </div> -->



 
  <button class="btn btn-primary" type="submit">Submit</button>
</form> 

</div>
   </section><br><br><br><br><br>


</body>
</html>
<?php include"footer.php" ?>