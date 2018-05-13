<?php
require('config.php');

session_start();

//login logic
if(isset($db,$_POST['login_sel'])){
// Before using $_POST['value'] 
if (isset($db,$_POST['user_email'])) 
{ 
$username = mysqli_real_escape_string($db,$_POST['user_email']);
$pass = mysqli_real_escape_string($db,$_POST['password']);    
$query = "SELECT * FROM users WHERE user_email='$username' and user_password='$pass' ";
$result = mysqli_query($db,$query);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     if($row["user_email"] == "admin"){

      $_SESSION['user_id'] = $row["user_id"];
      $session_id=$_SESSION['user_id'];
       header("location:all_books.php?#". $session_id);
     }else{
         alert("Sorry You have no power here");
     }
} else {
    alert(" User Does not exist.");
}  
} 
}


mysqli_close($db);
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Libro</title>
        <link rel="stylesheet" href="assets/admin_style.css">

        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>

    <body>
    


    <body>
        <!--Navigation-->
        <div id="nav" class="nav">
            <ul>

            </ul>
        </div>
        <!--Home-->
        <div id="hero" class="home">
            <div id="left" class="content left">
                <div class="text_content">
                    <h2 class="small"></h2>
                    <h1 class="big"> ADMIN</h1>
                    <h2 class="med"></h2>
  
                </div>
            </div>
            <div id="right" class="content right">

            

                <div id="login_box" class="login_box">
                    <div class="login">
                        <h2>Admin Login</h2>
                        <hr>
                        <form action="" method="post">
                            <h3>Username</h3>
                            <input type="text" name="user_email" placeholder="admin name" autocomplete="on">
                            <h3>Password</h3>
                            <input type="password" name="password" placeholder="***********">
                            <input type="hidden" name="login_sel" value="login">

                            <input type="submit" value="Login">


                        </form>

                        <div class="or_sig">
                            <h4 class="or">or</h4>
                            <hr class="small_line">
                          
                                <h4 class="signup" id="reg_button">Signup</h4>
                      
                        </div>

                    </div>
                </div>
            </div>
        </div>





    <!--javasctipts-->
        <script src="script.js"></script>




    </body>

    </html>
