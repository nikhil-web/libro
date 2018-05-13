<?php
include('session.php');

$loged_in_user_id=$_SESSION['user_email'];
$book_id = mysqli_real_escape_string($db,$_POST['book_id']);


echo $loged_in_user_id;

if($loged_in_user_id == 'admin'){
    

$sql = "DELETE FROM library WHERE book_id='$book_id'";
$result=mysqli_query($db,$sql);

if(!$result){
    $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
  alert("Book Removed from to your Shelf");
  echo("<script>location.href = 'all_books.php';</script>");
       }

    }else{
        alert("You have no power here");
    }
    
?>
