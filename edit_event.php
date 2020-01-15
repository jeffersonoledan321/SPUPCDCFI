<?php include"perfect_function.php";
      include"header.php";
        

      $id = $_GET['id'];
  $form_edit="edit_event_proc.php?id=".$id;

  $table="add_event";
  $user_data=get_where($table,$id);

  foreach ($user_data as $key => $row) {
    $id=$row['id'];
    $eventname=$row['eventname'];
    $eventdate=$row['eventdate'];
    $starttime=$row['starttime'];
    $endtime=$row['endtime'];
   

  }

   ?>
<!DOCTYPE html>
<html>
<head>
	<title>	Add Events</title>
</head>
<body>
<div class="card-header">
                <h3 class="card-title">Edit Event</h3>
              </div> 
	
	
<div class="container">
	 
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="blank.php">Home</a></li>
              <li class="breadcrumb-item active">View Staff</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



<section class="content">

	<div><br>
		<form action="<?=$form_edit?>" method="post">
  <div class="form-row">
    <div class="col">
    <label>Event Name</label>
      <input type="text" name="eventname" class="form-control" placeholder="Event Name" value="<?=$eventname?>">
    </div>
    <div class="col">
    <label>Event Date</label>
      <input type="date" name="eventdate"  class="form-control" placeholder="Event Date" value="<?=$eventdate?>">
    </div>
    
  </div><br>
  <div class="form-row">
    <div class="col">
    <label>Start Time</label>
      <input type="time" name="starttime" class="form-control" placeholder="Start Time" value="<?=$starttime?>">
    </div>
    <div class="col">
    <label>End Time</label>
      <input type="time" name="endtime"  class="form-control" placeholder="End Time" value="<?=$endtime?>">
    </div>
    
  </div><br>
  </div>



  
  <button class="btn btn-primary" type="submit">Update</button>
   &nbsp
  <a href="view_events.php"><i class="btn btn-danger">Cancel</i></a>
</form> 


	 </section><br><br><br><br><br></div>
</body>
</html>
<?php include"footer.php"; ?>
