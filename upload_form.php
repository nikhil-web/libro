<div class="top_bar">


    <div class="topnav">
        <form class="search" action="search.php" method="post">
            <input type="text" name="search" id="search" placeholder="Search.." required>
        </form>

        <form class="search" action="catagories_wise_search.php" method="post" style="left: 5px">
            <select name="selection" id="selection" class="selection" required>
  <option value="All">All</option>
   <?php
     $sqlop = "SELECT DISTINCT book_genre FROM library";
      $resultop = mysqli_query($db, $sqlop);
      if (mysqli_num_rows($resultop) > 0) {
          while($row=mysqli_fetch_assoc($resultop)){
              echo'<option value="'.$row["book_genre"].'">'.$row["book_genre"].'</option>';
          }
      }else {
    echo "Sorry No Location";
}
    ?> 
  </select>
            <input type="submit" class="seletion_submit">
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
        <h4>SHELF</h4>
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
echo '<a href="all_books.php"><button class="accordion">All Books</button></a>
   
<a href="most_popular.php"><button class="accordion">Most Popular</button></a>

<a href="bias_weight.php"><button class="accordion">Bias weight</button></a>
';
}

?>



        <a href="welcome.php"><button class="accordion ">My Shelf</button></a>

        <a href="library.php"><button class="accordion">Library</button></a>

        <a href="upload_section.php"><button class="accordion active">Upload</button></a>

        <a href="recent.php"><button class="accordion">Recently Added</button></a>

        <a href="library.php"><button class="accordion">Profile</button></a>

    </div>

</div>


<div id="book_display" class="display_pannel_upload_form">
    <h3 class="top_heading_recom">Upload book to library</h3>
    <form action="uploadbook.php" method="post" enctype="multipart/form-data">
        <h3 class="form_sep_head">Book Details</h3>
        <input type="text" name="book_name" id="book_name" placeholder="Book Name" required>
        <input type="text" name="book_writer" id="book_writer" placeholder="Book Writer" required>
        <input type="text" name="book_type" id="book_type" placeholder="Book type" required>
        <input type="text" name="book_detail" id="book_detail" placeholder="Book details" required>
        <input type="text" name="book_genre" id="book_genre" placeholder="Book Genre" required>
        <h3 class="form_sep_head">Book Thumbnail</h3>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <h3 class="form_sep_head">Book PDF</h3>
        <input type="file" name="fileToUpload2" id="fileToUpload">

        <input type="submit" value="Upload Book" name="submit">
        <input type="reset" value="Reset">
    </form>

</div>
