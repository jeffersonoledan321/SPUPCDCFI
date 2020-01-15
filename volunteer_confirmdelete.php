<?php 
	include"header.php";
	include"perfect_function.php";
 ?>
 <?php
				//get user ID from URL
				$id = $_GET['id']; 
				$form_location = base_url()."delete_volunteer.php?id=".$id; 
			?>
  <div class="card">
            <div class="card-header">
              <h3 class="card-title">Delete Volunteer</h3>
            </div><br><br><br><br>
 <div class="container">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Delete</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?=$form_location?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                   
                    <div class="col-sm-10" style="font-family: sans-serif;"><br>
                      <h2 align="center"><b>Are you sure you want to delete this user? </b></h2>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-danger">Yes - Delete Volunteer</button>
                 <i class="btn btn-secondary float-right" style=""><a href="volunteer_view.php">Cancel</a></i>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div><br><br><br><br><br><br><br><br>
            </div>
<?php include"footer.php"; ?>