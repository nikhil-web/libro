<?php
include('session.php');

$weight_add= $_SESSION['bais_weight'];

$loged_in_user_id=$_SESSION['user_id'];
$book_name = mysqli_real_escape_string($db,$_POST['book_name']);
$book_cover = mysqli_real_escape_string($db,$_POST['book_cover']);
$book_writer = mysqli_real_escape_string($db,$_POST['book_writer']);
$book_type = mysqli_real_escape_string($db,$_POST['book_type']);
$book_detail = mysqli_real_escape_string($db,$_POST["book_detail"]);
$book_id = mysqli_real_escape_string($db,$_POST['book_id']);
$book_loc = mysqli_real_escape_string($db,$_POST['book_loc']);
$book_genre = mysqli_real_escape_string($db,$_POST['book_genre']);
$rank_point = mysqli_real_escape_string($db,$_POST['rank_point']);
$clicks = mysqli_real_escape_string($db,$_POST['click']);

$int_click = (int)$clicks;

$new_click = $int_click+1;

$float_rank_point= (float)$rank_point;

$new_rank_point = $float_rank_point + $weight_add;


$flag=TRUE;

$sql = "SELECT user_id,book_id FROM shelf WHERE book_id='$book_id'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    
    while($row=mysqli_fetch_assoc($result)){
  
        if($loged_in_user_id == $row["user_id"]){
          
            $flag=FALSE;
        }else{
           
            $flag=TRUE;
        }
        
        
    } 
}else{
    
}

if($flag == TRUE){
     $sql2="INSERT INTO shelf (user_id,book_name,book_cover,book_writer,book_type,book_detail,book_id,book_loc,book_genre) VALUES 
     ('$loged_in_user_id','$book_name','$book_cover','$book_writer','$book_type','$book_detail','$book_id','$book_loc','$book_genre')";
    
    $sqlupdaterank="UPDATE library SET rank_point = '$new_rank_point',clicks ='$new_click' WHERE book_id='$book_id' ";
    $result3=mysqli_query($db,$sqlupdaterank);


$result2=mysqli_query($db,$sql2);

if(!$result2){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{

  echo("<script>location.href = 'welcome.php';</script>");
       }
}else{
    alert("Book Already in your shelf");
  echo("<script>location.href = 'welcome.php';</script>");
}
    
?>
