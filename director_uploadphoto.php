<?php 
include"perfect_function.php";
include"header.php";
	 
	$id = $_GET['id'];
?>
 <div class="card-header">
                <h3 class="card-title"><b>Upload Director Photo</b></h3>
              </div> 
<br><br>

<!-- main content -->
<div class="container">
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Upload</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                 
                  <div class="box-content">
			<?php
			if (isset($_SESSION['pic_errormsg'])) {
			?>
			<div class="alert alert-warning">
				<?= $_SESSION['pic_errormsg'] ?>
			</div>
			<?php
			}
			
			?>

			<form method="post" action="director_uploadphoto_proc.php?id=<?= $id ?>" enctype="multipart/form-data">
			<p style="margin-top:24px;">
				Please choose a file from your computer and then press 'Upload'.
			</p>
			  <fieldset>
				<div class="control-group" style="height:200px;">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" name="fileToUpload" type="file" required>
				  </div>
				</div>       
			  </fieldset>
			
		</div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="Yes - Delete Blog Entry" class="btn btn-primary">Upload</button>
                  <i class="btn btn-danger" style="float: right"><a href="directors_view.php"> Cancel</a></i>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div>
            </div>
<div class="container">
<div class="row-fluid sortable">
	<div class="box span12">
		<!-- <div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Image</h2>
		</div> -->
		
	</div><!--/span-->
</div><!--/row-->
</div>

<!-- close main content -->
<?php include"footer.php"; ?>

