<?php 
	include"header.php";
	include"perfect_function.php";
 ?>
 <?php
				//get user ID from URL
				$id = $_GET['id']; 
				$form_location = base_url()."delete_event.php?id=".$id; 
			?>
  <div class="card">
            <div class="card-header">
              <h3 class="card-title">MAHALQ-25!</h3>
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
                      <h2 align="center"><b>Are you sure you want to delete this event? </b></h2>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-danger">Yes - Delete Event</button>
                <i class="btn btn-secondary float-right" style=""><a href="view_events.php">Cancel</a></i>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div><br><br><br><br><br><br><br><br>
            </div>
<?php include"footer.php"; ?>