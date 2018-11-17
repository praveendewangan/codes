<?php
    if(isset($_POST['submit'])){
        // echo "<pre>";
        // echo var_dump($_FILES['file']);
        // echo "</pre>";
        $name = $_FILES['file']['name'];
        $extension = strtolower(substr($name,strpos($name,'.')+1));
        $size = $_FILES['file']['size'];
        $max_size = 2097152;
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        if(isset($name)){
            if(!empty($name)){
                if(($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg') && $max_size >= $size){
                    $location = "upload/";
                    move_uploaded_file($tmp_name,$location.$name);
                    echo "uploaded!";
                }else{
                    echo "File must be jpg/jpeg and should be less than 2Mb";
                }
            }else{
                echo "Please choose a file";
            }
        }
    }
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit">
</form>