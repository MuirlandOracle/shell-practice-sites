<?php
	if(!empty($_FILES["upload"]["tmp_name"])){
		$uploadDir = "uploads/";
		$fileName = $_FILES["upload"]["name"];
		$newName = $uploadDir . $fileName;
		$encodedName = $uploadDir . rawurlencode($fileName);
		$file = $_FILES["upload"]["tmp_name"];
		if(move_uploaded_file($file, $uploadDir . $fileName)){
			$uploadResponse = "File uploaded Successfully to: <a href=\"$encodedName\">$newName</a>";
		}
		else {
			$uploadResponse = "File upload failed";
		}
	}
	if(PHP_OS == "WINNT"){
		$os = "Windows";
	}
	else{
		$os = PHP_OS;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $os;?> Uploads</title>
		<meta charset="utf-8">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
		<link type="text/css" rel="stylesheet" href="style.php"?>
		<script>
			function fileChanged (uploadBox) {
				const msg = document.querySelector("#selectedFile");
				const successMsg = document.querySelector("#uploadResponse");
				const fileName = uploadBox.value.split("\\");
				msg.innerHTML = fileName[fileName.length-1];
				if (successMsg){
					successMsg.remove();
				}
			};

			function fileClicked () {
				document.querySelector("#fileUpload").click();
			}
		</script>

	</head>
	<body>
		<h1>File Uploads</h1>
		<p>This is a simple page to practice file uploads. All files will go to the <code>/uploads</code> directory<br>No filters are in place</p>
		<button id="fileSelect" onclick="fileClicked()">Browse</button>
		<form method="POST" enctype="multipart/form-data">
			<input type=file onchange="fileChanged(this)" onload="this.value == ''" name=upload id="fileUpload" style="display:none">
			<input type=submit value=Submit>
		</form>
		<p id="selectedFile"></p>
		<?php if(isset($uploadResponse)){ echo "<p id=uploadResponse>$uploadResponse</p>";};?>
	</body>
</html>
