<?php
if(isset($_FILES)){
	var_dump($_FILES);
	ini_set("display_errors","on");
  foreach($_FILES as $file){
		$upload_dir = "../";
		if(move_uploaded_file($file['tmp_name'], $upload_dir.$file['name'])){
			echo ":) File {$file['name']} uploaded successfully<br>";
		} else {
			echo ":( File {$file['name']} could not be uploaded<br>";
		}
	}	
} else {
	echo ":( Oops! Nothing here<br>";
}
?>
