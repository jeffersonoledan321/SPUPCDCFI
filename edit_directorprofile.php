 
 <?php  include"header.php";
        include"perfect_function.php";




 ?>

 <?php 
  

  $id = $_GET['id'];
  $form_edit="edit_director_proc.php?id=".$id;

  $table="add_director";
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
    $photo_url = base_url().'director_pics/'.$photo;
    $account_status=$row['account_status'];
    $status=$row['status'];
    $profession=$row['profession'];

    

  }
  ?>
  <!DOCTYPE html>
   <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div> 
              <div class="container" style="margin-top:5% ">
                 <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?=$form_edit?>" method="post">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Profession</label>
                        <div class="col-sm-10">
                          <input type="text" name="profession" class="form-control" id="inputName" placeholder="profession" value="<?=$profession?>">
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Education" name="education">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Location" name="location">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Skills" name="skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Motto</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  placeholder="Motto" name="motto"></textarea>
                        </div>
                      </div> -->
                  
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

<?php include"footer.php"; ?>