<?php
include('session.php');

$current_timestamp = time();
$target_dir = "user_profile/";
$type=explode(".",$_FILES["fileToUpload"]["name"]);
$target_file = $target_dir.$_SESSION['user_id'].$current_timestamp.'.'.end($type);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    echo("<script>location.href = 'welcome.php';</script>");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    alert("Sorry, your file was not uploaded.");
     echo("<script>location.href = 'welcome.php';</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_name= $target_file;
         $user_id = $_SESSION['user_id'];
        $sql = "UPDATE users SET user_image='$file_name' WHERE user_id='$user_id'";
        mysqli_query($db, $sql);
          header("location:welcome.php");
      
    } else {
         alert("Sorry, there was an error uploading your file.");
        echo("<script>location.href = 'welcome.php';</script>");
         
    }
}
     

?>