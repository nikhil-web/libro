<?php
include('session.php');

$loged_in_user_id=$_SESSION['user_email'];


$bais_weight = mysqli_real_escape_string($db,$_POST['bais_weight']);

   


if($loged_in_user_id == 'admin'){
    $sql="UPDATE weight SET bais_weight='$bais_weight' WHERE id='1'";
    $result=mysqli_query($db,$sql);
   alert("Weight Updated");

    if(!$result){
      $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    echo $error_fetch ;
    }else{
echo("<script>location.href = 'bias_weight.php';</script>");
       }
    
    } else {
       alert("Error");
    }    

    
     

?>
