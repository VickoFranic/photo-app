<div class="row">
	<form id="upload" class="form form-inline col-md-6" method="POST" enctype="multipart/form-data">
		<span id="upload" class="btn btn-default btn-file">
			Upload<input name="slike[]" id="browse" type="file" multiple="multiple" />
		</span>
		<div class="form-group">
			<input class="btn btn-info" id="upload" type="submit" disabled="disabled" value="Upload"></input>
		</div>
	</form>
	<?php 
		if(!empty($_FILES)) {
			$dest = $_SERVER['DOCUMENT_ROOT'] . '/slike/' . $ime . "/";

			foreach ($_FILES['slike']['tmp_name'] as $key => $tmp) {
				move_uploaded_file($tmp, $dest . $_FILES['slike']['name'][$key]);
				header('refresh:0');
			}
		}
	?>
