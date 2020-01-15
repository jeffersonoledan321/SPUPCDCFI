jeff
<form method="post" action="user_uploadphoto_proc.php?id=<?= $id ?>">
			<p style="margin-top:24px;">
				Please choose a file from your computer and then press 'Upload'.
			</p>
			  
				<div class="control-group" style="height:200px;">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" name="fileToUpload" type="file" required>
				  </div>
				</div>       
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Upload</button>
				  <a href="user_edit.php?id=<?= $id ?>" value="Cancel" class="btn">Cancel</a>
				</div>
			 
			</form>  