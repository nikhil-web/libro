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
      $_SESSION['user_id'] = $row["user_id"];
      $session_id=$_SESSION['user_id'];
       header("location:welcome.php?#". $session_id);
} else {
    alert(" User Does not exist.");
}  
} 
}

//register logic
if(isset($db,$_POST['reg_sel'])){
   if (isset($db,$_POST['username'])) 
{ 
$user_name = mysqli_real_escape_string($db,$_POST['username']);
$user_mail = mysqli_real_escape_string($db,$_POST['user_email']);
$user_pass = mysqli_real_escape_string($db,$_POST['password']);   
       
       
if($user_mail==true){
}
$query2 = "INSERT INTO users (user_name,user_email,user_password) VALUES ('$user_name','$user_mail','$user_pass')";   
$result=mysqli_query($db,$query2);
       
if(!$result){
    $error_fetch = mysqli_real_escape_string($db,mysqli_error($db));
    $known="Duplicate entry '$user_mail' for key 'UNIQUE'";
      if(strcmp("$error_fetch","$known"))
        {
        alert("This Email is Already in use ,Login or use another mail");
        echo("<script>location.href = 'index.php';</script>");
        }
    
}else{
$query3 = "SELECT * FROM users WHERE user_email='$user_mail' and user_password='$user_pass' ";
$result3 = mysqli_query($db,$query3);
   if (mysqli_num_rows($result3) > 0) {
    $row = mysqli_fetch_array($result3,MYSQLI_ASSOC);
      $_SESSION['user_id'] = $row["user_id"];
           header("location:welcome.php");
       }
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
        <link rel="stylesheet" href="assets/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>

    <body>
        <!--Navigation-->
        <div id="nav" class="nav">
            <ul>
                <li><a href="admin.php">Admin</a></li>

                <li id="reg_button" class="register"><a>Register</a></li>
                <li id="close_button" class="close"><a>Close</a></li>
            </ul>
        </div>
        <!--Home-->
        <div id="hero" class="home">
            <div id="left" class="content left">
                <div class="text_content">
                    <h2 class="small">Experience books Like never before</h2>
                    <h1 class="big"> LIBRO</h1>
                    <h2 class="med">You can read, discover and find new Books which make you a better you</h2>
                    <button class="button" id="main_button"><h6>Start Reading</h6></button>
                </div>
            </div>
            <div id="right" class="content right">

                <img id="book_image" class="book_image" src="images/book%20copy.png" alt="">

                <div id="login_box" class="login_box">
                    <div class="login">
                        <h2>Login</h2>
                        <hr>
                        <form action="" method="post">
                            <h3>Username</h3>
                            <input type="email" name="user_email" placeholder="example@example.com" autocomplete="on">
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

        <div id="register_block" class="register_block">
            <div id="left" class="content left">
                <div class="text_content">
                    <h2 class="small">Not a member? Just</h2>
                    <h1 class="big">Sign Up</h1>
                    <h2 class="med">With LIBRO you can read, discover and find new Books which make you a better you</h2>
                    <button class="button" id="main_button"><h6>Start Reading</h6></button>
                </div>
            </div>
            <div id="reg_box" class="reg_box">
                <div class="reg">
                    <h2>Signup</h2>
                    <hr>
                    <form action="" method="post">
                        <h3>Name</h3>
                        <input type="text" name="username" placeholder="First - Last " autocomplete="on" required>
                        <h3>Email</h3>
                        <input type="email" name="user_email" placeholder="example@example.com" required autocomplete="on">
                        <h3>Password</h3>
                        <input type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                        <input type="hidden" name="reg_sel" value="signup" >
                        <input type="submit" value="Signup">

                    </form>



                </div>
            </div>
        </div>
        <!--javasctipts-->
        <script src="script.js"></script>

        <script>
            //click event

            var open_button = document.getElementById('reg_button');
            open_button.addEventListener('click', function() {
                var slide = document.getElementById('register_block');
                document.getElementById('close_button').style.opacity = "1";
                slide.style.right = ("0%");
            });

            var close_button = document.getElementById('close_button');
            close_button.addEventListener('click', function() {
                var slide = document.getElementById('register_block');
                document.getElementById('close_button').style.opacity = "0";
                slide.style.right = ("-100%");
            });

        </script>

    </body>

    </html>
