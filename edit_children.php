
<?php 
	include"perfect_function.php";
	include"header.php";

	$id = $_GET['id'];
	$form_edit="edit_children_proc.php?id=".$id;

	$table="qrcodes";
	$user_data=get_where($table,$id);

	foreach ($user_data as $key => $row) {
		$id=$row['id'];
		$qr_Img=$row['qrImg'];
		$qrlink=$row['qrlink'];
		$qrfirstname=$row['qrfirstname'];
		$qrmiddlename=$row['qrmiddlename'];
		$qrlastname=$row['qrlastname'];
		$qrbirthdate=$row['qrbirthdate'];
		$qrgender=$row['qrgender'];
		$qrfathersname=$row['qrfathersname'];
    $qrmothersname=$row['qrmothersname'];
		$qrcontactperson=$row['qrcontactperson'];
		$qraddress=$row['qraddress'];
    $photo = $row['photo'];
    $photo_url = base_url().'children_pics/'.$photo;
		$qraccountstatus=$row['qraccountstatus'];
    $qrbloodtype=$row['qrbloodtype'];

     
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Add director</title>
</head>
<body style="background-color: lavender">
	 
   <div class="card-header">
                <h3 class="card-title">Edit Children</h3>
              </div> 
	
<section class="content">

	<div class=" container"> 
   <section class="content-header">

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
        <a href="<?= base_url() ?>director_uploadphoto.php?id=<?= $id ?>">
          <button type="button" class="btn btn-primary">Upload Photo</button>
        </a>
        <?php
        } else {
        ?>
        <img src="<?= $photo_url ?>" style="height: 200px;width: 200px;" class="img-responsive">
        <br><br>
        <a href="<?= base_url() ?>director_deletephoto.php?id=<?= $id ?>">
          <button type="button" class="btn btn-danger">Delete Photo</button>
        </a>
        <br>
        <?php
        }
        ?>
      </div>
    </div>
  </div><br> 

		 <form class="<?=$form_edit?>" method="post">
    <div class="container">
      

      <div class="form-row">
    <div class="col">
     <label><b> First Name</b></label>
      <input class="form-control" type="text" name="qrfirstname" value="<?=$qrfirstname?>">
    </div>
    <div class="col">
    <label><b> Middle Name</b></label>
      <input class="form-control" type="text" name="qrmiddlename" value="<?=$qrmiddlename?>">
    </div>
    
  </div><br>

  <div class="form-row">
    <div class="col">
     
     <label ><b> Last Name</b></label>
      <input class="form-control" type="text" name="qrlastname" value="<?=$qrlastname?>">
    </div>
    <div class="col">
    <label ><b> Birth Date</b></label>
      <input class="form-control" type="Date" name="qrbirthdate" value="<?=$qrbirthdate?>"><br>
    </div>
    
  </div>

  <div class="form-row">
    
    <div class="col">
    <label ><b> Father's Name</b></label>
      <input class="form-control" type="text" name="qrfathersname" value="<?=$qrfathersname?>">
    </div>
    <div class="col">
     
     <label ><b> Mother's Name</b></label>
      <input class="form-control" type="text" name="qrmothersname" value="<?=$qrmothersname?>">
    </div>
    
  </div><br>
    

  <div class="form-row">
    <div class="col">
     
    <label><b> Contact Person</b></label>
      <input class="form-control" type="text" name="qrcontactperson" value="<?=$qrcontactperson?>">
    </div>
    <div class="col">
   <label><b> Address</b></label>
      <input class="form-control" type="text" name="qraddress" value="<?=$qraddress?>">
    </div>
    
  </div><br>

  
     
  
   <label>Blood Type</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qrbloodtype" value="<?=$qrbloodtype?>">
      <?php   if ($qrbloodtype==1) {?>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">AB</option>
                <option value="4">O</option>
      
      <?php } ?>

       <?php   if ($qrbloodtype==2) {?>
                <option value="2">B</option>
                <option value="1">A</option>
                <option value="3">AB</option>
                <option value="4">O</option>
      
      <?php } ?>

      <?php   if ($qrbloodtype==3) {?>
                <option value="3">AB</option>
                <option value="2">B</option>
                <option value="1">A</option>
                <option value="4">O</option>
      
      <?php } ?>

      <?php   if ($qrbloodtype==4) {?>
                <option value="4">O</option>
                <option value="2">B</option>
                <option value="3">AB</option>
                <option value="1">O</option>
      
      <?php } ?>
    
  </select>
</div><br>

  <label>Gender</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qrgender" value="<?=$qrgender?>">
    <?php   if ($qrgender==1) {?>
                <option value="1">Male</option>
                <option value="2">Female</option>
               
      
      <?php } ?>

      <?php   if ($qrgender==2) {?>
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
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qraccountstatus" value="<?=$qraccountstatus?>">
   <?php   if ($qraccountstatus==1) {?>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
               
      
      <?php } ?>
      <?php   if ($qraccountstatus==2) {?>
                <option value="2">Inactive</option>
                <option value="1">Active</option>
                
      
      <?php } ?>
    
  </select>
</div><br>
  
        
       <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
          <strong style="color: blue"></strong>I  agree to the terms and conditions
      </label>
      <div class="invalid-feedback">
        
      </div>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Update</button>
   &nbsp
  <a href="view_children.php"><i class="btn btn-danger">Cancel</i></a>

   </div>
  </form><br><br>
  

</div>
	 </section><br><br><br><br><br>


</body>
</html>
<?php include"footer.php" ?>
 