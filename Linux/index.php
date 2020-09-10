<?php
	if(isset($_FILES["upload"]["tmp_name"])){
		$uploadDir = "/var/www/html/uploads/";
		$fileName = $_FILES["upload"]["name"];
		$newName = $uploadDir . $fileName;
		$file = $_FILES["upload"]["tmp_name"];
		if(move_uploaded_file($file, $uploadDir . $fileName)){
			$uploadResponse = "<a href=$newName>File uploaded Successfully to: $newName</a>";
		}
		else {
			$uploadResponse = "File upload failed";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Linux Uploads</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>File Uploads</h1>
		<h3>This is a simple page to practice file uploads. All files will go to the <code>/uploads</code> directory<br>No filters are in place</h3>
		<form method="POST" enctype="multipart/form-data">
			<input type=file name=upload id="fileUpload">
			<input type=submit value=Submit>
		</form>
		<?php if(isset($uploadResponse)){ echo "<p>$uploadResponse</p>"; };?>
	</body>
</html>
