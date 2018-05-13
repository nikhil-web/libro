<?php
require('session.php');


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
    <div class="top_bar">


        <div class="topnav">
            <form class="search" action="search.php" method="post">
                <input type="text" name="search" id="search" placeholder="Search.." required>
            </form>


        </div>










        <a href="logout.php">

            <div class="signout top_nav_holder">
                <h4 class="top_nav_btn">Logout</h4>

            </div>

        </a>


        <div id="set_open" class="settings top_nav_holder">
            <h4 id="" class="top_nav_btn">Settings</h4>

        </div>
        <div id="set_close" class="set_close top_nav_holder">
            <h4 id="" class="top_nav_btn">Close</h4>
        </div>




    </div>


    <div class="left_side_bar">

        <div class="admin_pan_lable">
            <h4>ADMIN PANNEL</h4>
        </div>

        <div class="user_image">
            <img class="user_avatar" src="<?php echo( $_SESSION['user_image']); ?>" alt="">
            <div class="user_name">
                <h4>
                    <?php echo( $_SESSION['user_name']); ?>
                </h4>
            </div>
        </div>

        <div class="control_button">

            <?php 

if($_SESSION["user_email"] == "admin"){
echo '<a href="all_books.php"><button class="accordion active">All Books</button></a>

   
<a href="most_popular.php"><button class="accordion">Most Popular</button></a>

<a href="bias_weight.php"><button class="accordion">Bias weight</button></a>
';
}

?>

            <a href="welcome.php"><button class="accordion ">My Shelf</button></a>

            <a href="library.php"><button class="accordion">Library</button></a>

            <a href="upload_section.php"><button class="accordion">Upload</button></a>

            <a href="recent.php"><button class="accordion">Recently Added</button></a>

            <a href="library.php"><button class="accordion">Profile</button></a>




        </div>

    </div>


    <div class="data_container">
        <h2>All Books</h2>
        <p></p>
        <table id="table-1">
            <thead>
                <tr>
                    <th style="width:20px">S.No.</th>
                    <th>Book Name</th>
                    <th>Book Writer</th>
                    <th>book Genre</th>
                    <th>Edit Book</th>
                    <th>Delete Book</th>

                </tr>
            </thead>
            <?php
$sql = "SELECT * FROM library";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row=mysqli_fetch_assoc($result)){
      echo '
      <tr>
      <td>'.$row["book_id"].'</td>
      <td>'.$row["book_name"].'</td>
      <td>'.$row["book_writer"].'</td>
      <td>'.$row["book_genre"].'</td>

      <td>
      <form action="editfromlibrary.php" method="post">          
      <input type="hidden" name="book_id" id="book_id" value="' .$row["book_id"].'">
      <input type="submit" value="Edit " name="submit">
      </form>
      </td>
      
            <td>
      <form action="removefromlibrary.php" method="post">          
      <input type="hidden" name="book_id" id="book_id" value="' .$row["book_id"].'">
      <input class="delete" type="submit" value="Remove " name="submit">
      </form>
      </td>
      
    
    ';
  
    }
    
} else {
    echo '<h3 class="No books">shelf is empty</h3>';
   
}

?>

        </table>



    </div>


</body>

</html>
