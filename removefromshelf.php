<?php
include('session.php');

$loged_in_user_id=$_SESSION['user_id'];
$book_shelf_id = mysqli_real_escape_string($db,$_POST['book_shelf_id']);



$sql = "DELETE FROM shelf WHERE shelf_id='$book_shelf_id'";

$result=mysqli_query($db,$sql);

if(!$result){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
  alert("Book Removed from to your Shelf");
  echo("<script>location.href = 'welcome.php';</script>");
       }

 
    
?>
