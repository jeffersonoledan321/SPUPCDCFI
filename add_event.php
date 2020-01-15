<?php include"perfect_function.php";
      include"header.php";
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>	Add Events</title>
</head>
<body>
	 <div class="card-header">
                <h3 class="card-title">Add Events</h3>
              </div> 
	
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Event</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
</section>
<section class="content">

	<div>
		<form action="add_event_proc.php" method="post">
  <div class="form-row">
    <div class="col">
    <label>Event Name</label>
      <input type="text" name="eventname" class="form-control" placeholder="Event Name">
    </div>
    <div class="col">
    <label>Event Date</label>
      <input type="date" name="eventdate"  class="form-control" placeholder="Event Date">
    </div>
    
  </div><br>
  <div class="form-row">
    <div class="col">
    <label>Start Time</label>
      <input type="time" name="starttime" class="form-control" placeholder="Start Time">
    </div>
    <div class="col">
    <label>End Time</label>
      <input type="time" name="endtime"  class="form-control" placeholder="End Time">
    </div>
    
  </div><br>



  
  <button class="btn btn-primary" type="submit">Submit</button>
</form> 


	 </section><br><br><br><br><br>
   </div>
</body>
</html>
<?php include"footer.php"; ?>