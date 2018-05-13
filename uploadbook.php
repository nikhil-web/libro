<?php
include('session.php');
$current_timestamp = time();

$book_name = mysqli_real_escape_string($db,$_POST['book_name']);
$book_writer = mysqli_real_escape_string($db,$_POST['book_writer']);
$book_type = mysqli_real_escape_string($db,$_POST['book_type']);
$book_detail = mysqli_real_escape_string($db,$_POST['book_detail']);
$book_genre = mysqli_real_escape_string($db,$_POST['book_genre']);



$target_dir = "book_covers/";
$type=explode(".",$_FILES["fileToUpload"]["name"]);
$target_file = $target_dir.$_SESSION['user_id'].$current_timestamp.'.'.end($type);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




$target_dir2 = "book/";
$target_file2 = $target_dir2.$current_timestamp.basename($_FILES["fileToUpload2"]["name"]);
$upload2Ok = 1;
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType2 != "pdf" && $imageFileType2 != "cbr") {
    alert("Sorry, only PDF files allowed.");
    //echo("<script>location.href = 'library.php';</script>");
    $upload2Ok = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    //echo("<script>location.href = 'library.php';</script>");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 AND $upload2Ok == 0) {
    alert("Sorry, your file was not uploaded.");
    // echo("<script>location.href = 'library.php';</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) ) {
        
         $file_cover= $target_file;
         $file_loc= $target_file2;
        
   
         $sql="INSERT INTO library (book_name,book_cover,book_writer,book_type,book_detail,book_genre,book_loc) VALUES ('$book_name','$file_cover','$book_writer','$book_type','$book_detail','$book_genre','$file_loc')";

$result=mysqli_query($db,$sql);
if(!$result){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
 echo "no error";
       }
    
          header("location:library.php");
      
    } else {
         alert("Sorry, there was an error uploading your file. query did not run");
       // echo("<script>location.href = 'library.php';</script>");
         
    }    
} 
    
     

?>
