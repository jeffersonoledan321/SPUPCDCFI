<?php include"header.php"; ?>



 <div class="card-header">
              <h3 class="card-title">Register Children</h3>
            </div><br>
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
              <li class="breadcrumb-item active">Add Children</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <br><br>

    <?php 
  include "meRaviQr/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {
    
    $qrfirstname=$_POST['qrfirstname'];
    $qrmiddlename=$_POST['qrmiddlename'];
    $qrlastname=$_POST['qrlastname'];
    $qrbirthdate=$_POST['qrbirthdate'];
    $qrgender=$_POST['qrgender'];
    $qrfathersname=$_POST['qrfathersname'];
    $qrmothersname=$_POST['qrmothersname'];
    $qrbloodtype=$_POST['qrbloodtype'];
    $qrcontactperson=$_POST['qrcontactperson'];
    $qraddress=$_POST['qraddress'];
    $qraccountstatus=$_POST['qraccountstatus'];

    $qrImgName = $qrfirstname.$qrlastname.rand();
    if($qrfirstname=="" && $qrlastname=="")
    {
      echo "<script>alert('Ooops');</script>";
    }
    elseif($qrlastname=="")
    {
      echo "<script>alert('Please Enter your Last Name);</script>";
    }
    elseif($qrfirstname=="")
    {
      echo "<script>alert('Please Enter Your FIrst Name');</script>";
    }
    else
    {
    $dev = " ...Jefferson";
    $final = $qrfirstname.' '.$qrlastname;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($qrimage,$qrlink,$qrfirstname,$qrmiddlename,$qrlastname,$qrbirthdate,$qrgender,$qrfathersname,$qrmothersname,$qrbloodtype,$qrcontactperson,$qraddress,$qraccountstatus );
    if($insQr==true)
    {
      echo "<script>alert('Thank You $qrfirstname. Success Create Your QR Code'); window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 <div align="center">
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="" >
  </div>
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrscanner/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qrlink; ?>" readonly>
    <br><br>
    <div align="center">
<a href="download.php?download=<?php echo $_GET['success']; ?>"><button class="btn btn-success">Download Now</button></a>
<br>
 <br>
    <a href="index.php"><button class="btn btn-secondary">Go Back To Generate Again</button></a>
    </div><br><br>
    
     </div></div>
  <?php
}
else
{
  ?>

  
  <form class="" method="post" enctype="multipart/form-data">
    <div class="container">
      

      <div class="form-row">
    <div class="col">
     <label><b> First Name</b></label>
      <input class="form-control" type="text" name="qrfirstname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrfirstname']; } ?>">
    </div>
    <div class="col">
    <label><b> Middle Name</b></label>
      <input class="form-control" type="text" name="qrmiddlename" value="<?php if(isset($_POST['create'])){ echo $_POST['qrmiddlename']; } ?>">
    </div>
    
  </div><br>

  <div class="form-row">
    <div class="col">
     
     <label ><b> Last Name</b></label>
      <input class="form-control" type="text" name="qrlastname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrlastname']; } ?>">
    </div>
    <div class="col">
    <label ><b> Birth Date</b></label>
      <input class="form-control" type="Date" name="qrbirthdate" value="<?php if(isset($_POST['create'])){ echo $_POST['qrbirthdate']; } ?>"><br>
    </div>
    
  </div>

  <div class="form-row">
    
    <div class="col">
    <label ><b> Father's Name</b></label>
      <input class="form-control" type="text" name="qrfathersname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrfathersname']; } ?>">
    </div>
    <div class="col">
     
     <label ><b> Mother's Name</b></label>
      <input class="form-control" type="text" name="qrmothersname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrmothersname']; } ?>">
    </div>
    
  </div><br>
    

  <div class="form-row">
    <div class="col">
     
    <label><b> Contact Person</b></label>
      <input class="form-control" type="text" name="qrcontactperson" value="<?php if(isset($_POST['create'])){ echo $_POST['qrcontactperson']; } ?>">
    </div>
    <div class="col">
   <label><b> Address</b></label>
      <input class="form-control" type="text" name="qraddress" value="<?php if(isset($_POST['create'])){ echo $_POST['qraddress']; } ?>">
    </div>
    
  </div><br>

  
     
  
   <label>Blood Type</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qrbloodtype" value="<?php if(isset($_POST['create'])){ echo $_POST['qrbloodtype']; } ?>">
    <option value="">Select Blood Type</option>
    <option value="1">A</option>
    <option value="2">B</option>
    <option value="2">AB</option>
    <option value="2">O</option>
    
  </select>
</div><br>

  <label>Gender</label>
  <div class="input-group mb-3">

  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qrgender" value="<?php if(isset($_POST['create'])){ echo $_POST['qrgender']; } ?>">
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
  <select class="custom-select" id="inputGroupSelect01" required=""
  name="qraccountstatus" value="<?php if(isset($_POST['create'])){ echo $_POST['qraccountstatus']; } ?>">
    <option value="">Select Account Status</option>
    <option value="1">Active</option>
    <option value="2">Inactive</option>
    
  </select>
</div><br>
  
        
      <input type="submit" value="Generate QR Code" name="create" class="btn btn-primary">

   </div>
  </form><br><br>
    <?php 
}
   ?>
   </div>



<?php include"footer.php"; ?>
