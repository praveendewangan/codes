<?php

//var_dump($_FILES);
$file_name = $_FILES['file1']["name"];
$file_tmp_name = $_FILES['file1']["tmp_name"];
$file_type = $_FILES['file1']["type"];
$file_size = $_FILES['file1']["size"];
$file_error = $_FILES['file1']["error"];

if(!$file_tmp_name){
	echo "Error : Please browse file before clicking on the uplaod button";
	exit();
}

if(move_uploaded_file($file_tmp_name,"upload/$file_name")){
	echo "$file_name upload is complete";
}else{
	echo "move upload file function is failed";
}
?>