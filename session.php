<?php
   include('config.php');
   session_start();
   if(isset($_SESSION['user_id'])){

        $fetch_details_bais = mysqli_query($db,"SELECT bais_weight FROM weight WHERE id = '1' ");
        $row2 = mysqli_fetch_array($fetch_details_bais,MYSQLI_ASSOC);
        $_SESSION['bais_weight']=$row2['bais_weight'];
  
        
       
       $user_id=$_SESSION['user_id'];
      $fetch_details = mysqli_query($db,"SELECT * FROM users WHERE user_id = '$user_id' ");

 
     
       $row = mysqli_fetch_array($fetch_details,MYSQLI_ASSOC);
       
     
       
          $loged_in_user = $row['user_name'];
          $loged_in_user_id = $row['user_id'];
          $loged_in_user_email = $row['user_email'];
          $loged_in_user_image = $row['user_image'];
       
       
       $_SESSION['auth'] = true;
       $_SESSION['user_id']=$loged_in_user_id;
       $_SESSION['user_email'] = $loged_in_user_email;
       $_SESSION['user_name'] = $loged_in_user;
       $_SESSION['user_image'] =  $loged_in_user_image;

    
     
       
   }else{
       header("location:index.php");
   }

?>
