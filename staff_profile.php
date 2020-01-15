<?php include"header.php"; 
  include"perfect_function.php";


  $id = $_GET['id'];

  

  $table="staff";
  $user_data=get_where($table,$id);

  foreach ($user_data as $key => $row) {
    $id=$row['id'];
    $username=$row['username'];
    $password=$row['password'];
    $firstname=$row['firstname'];
    $middlename=$row['middlename'];
    $lastname=$row['lastname'];
    $birthdate=$row['birthdate'];
    $gender=$row['gender'];
    $email=$row['email'];
    $contact=$row['contact'];
    $address=$row['address'];
    $photo = $row['photo'];
    $photo_url = base_url().'staff_pics/'.$photo;
    $account_status=$row['account_status'];
    $status=$row['status'];
    $profession=$row['profession'];
    $education=$row['education'];
    $skills=$row['skills'];
    

  }
 


?>
<!--  -->
<div class="container">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= $photo_url ?>"
                       alt="User profile picture">
                </div><br>  

                <h3 class="profile-username text-center"><?php echo $firstname." ".$lastname ?></h3>

                <p class="text-muted text-center"><?php echo $profession ?>

<br><br>
               <button class="btn btn-primary btn-block">Active</button>
               

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                <?php echo $education;
                 ?>
                 
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted"><?php echo $address; ?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <?php echo $skills; ?>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Dont sleep when you are tired. Sleep when your done.</p>
              </div>
              <!-- <a href="edit_directorprofile.php?id=<?= $id ?>" style="background-color: #F5FFFA" class="btn btn-block"><b>EDIT</b></a> -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Personal Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      
                      <!-- /.user-block -->
                      <div class="tab-pane" id="settings">
                    <form class="form-horizontal" style="">
                    
               <!--        <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php echo $firstname.' '.$lastname ?>
                        </div> -->
                        
                       
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Birth Date:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php echo $birthdate ?>
                        </div>
                        
                       
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Gender:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                         <?php if ($gender =="1") {
                           echo "Male";
                         }
                         else{
                          echo "Female";
                          } ?>
                        </div>
                          
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Civil Status:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php if ($status =="1") {
                           echo "Single";
                         }
                         else{
                          echo "Married";
                          } ?>
                        </div>
                       
                      </div>
                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Contact:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php echo $contact ?>
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php echo $email ?>
                        </div>
                       
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Home Address:</label>
                        <div class="col-sm-10" style="margin-top:8px ">
                          <?php echo $address ?>
                        </div>
                       
                      </div>
                     
                      
                      
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                     
                    </form>
                  </div>
                     

                     

                    <!-- /.post -->

                    <!-- Post -->
                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  </div>
  
  <?php include"footer.php"; ?>