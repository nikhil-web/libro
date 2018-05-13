<?php
include('session.php');

$loged_in_user_id=$_SESSION['user_email'];

$book_name = mysqli_real_escape_string($db,$_POST['book_name']);
$book_writer = mysqli_real_escape_string($db,$_POST['book_writer']);
$book_type = mysqli_real_escape_string($db,$_POST['book_type']);
$book_detail = mysqli_real_escape_string($db,$_POST['book_detail']);
$book_genre = mysqli_real_escape_string($db,$_POST['book_genre']);
$book_id = mysqli_real_escape_string($db,$_POST['book_id']);

   


if($loged_in_user_id == 'admin'){
    $sql="UPDATE library SET book_name='$book_name',book_writer='$book_writer',book_type='$book_type',book_detail='$book_detail',book_genre='$book_genre' WHERE book_id='$book_id'";
    $result=mysqli_query($db,$sql);
   alert("book Updated");

    if(!$result){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
 echo "no error";
echo("<script>location.href = 'all_books.php';</script>");
       }
    
    } else {
       
    }    

    
     

?>
