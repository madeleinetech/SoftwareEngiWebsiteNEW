<?php
//automatic redirection back to landing page by using a header
header("location:index.php"); 
// Getting uploaded file
$file = $_FILES["file"];
 
// Uploading in "uploads" folder
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
 

