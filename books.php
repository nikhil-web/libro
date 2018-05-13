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




    <div id="set_close" class="set_close top_nav_holder">
        <h4 id="" class="top_nav_btn">Close</h4>
    </div>




</div>

<div class="left_side_bar">

    <div class="admin_pan_lable">
        <h4>LIBRARY</h4>
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

        <a href="welcome.php"><button class="accordion">My Shelf</button></a>
       
        <a href="library.php"><button class="accordion active">Library</button></a>

      <a href="upload_section.php"><button class="accordion">Upload</button></a>

       <a href="recent.php"><button class="accordion">Recently Added</button></a>

        <a href="library.php"><button class="accordion">Profile</button></a>

    </div>

</div>

<div id="book_display" class="display_pannel_library">

    <?php
$user_id=$_SESSION['user_id'];
    
$x=0 ;   
$query = "SELECT book_id FROM shelf WHERE user_id='$user_id'";
$temp_result = mysqli_query($db, $query); 
if (mysqli_num_rows($temp_result) > 0) {
    while($row=mysqli_fetch_assoc($temp_result)){

        $book_ids[$x] = $row["book_id"];
        $x++;
    } 
}else{
         $book_ids[0]=99999999999999;
     
}
    
    
$sql = "SELECT * FROM library ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row=mysqli_fetch_assoc($result)){
      echo ' <div class="book_item">
        <div class="book_cover">
            <img src="' .$row["book_cover"].'" alt="">
        </div>

        <div class="book_data">
            <h1>' .$row["book_name"].'</h1>
            
            <h2>' .$row["book_writer"].'</h2>
         
                      <h2 class="small_text">' .$row["book_genre"].'</h2>
                     
                <h3>Preface</h3>
                 <p class="book_preface" >' .$row["book_detail"].'</p>
                 
                 
                  <form action="addtoshelf_fromlibrary.php" method="post">
                  
        <input type="hidden" name="book_name" id="book_name" value="' .$row["book_name"].'">
        <input type="hidden" name="book_cover" id="book_cover" value="' .$row["book_cover"].'  ">
        <input type="hidden" name="book_writer" id="book_writer" value="' .$row["book_writer"].' ">
        <input type="hidden" name="book_type" id="book_type"  value="' .$row["book_type"].' ">
        <input type="hidden" name="book_detail" id="book_detail" value="' .$row["book_detail"].' "> 
        <input type="hidden" name="book_id" id="book_id" value="' .$row["book_id"].' ">
        <input type="hidden" name="book_loc" id="book_loc" value="' .$row["book_loc"].' ">
        <input type="hidden" name="book_genre" id="book_genre" value="' .$row["book_genre"].' ">
        <input type="hidden" name="rank_point" id="rank_point" value="' .$row["rank_point"].' ">
        <input type="hidden" name="click" id="click" value="' .$row["clicks"].' ">
         
         ';
        if (in_array($row["book_id"], $book_ids)){ 
            echo ' <input type="submit" class="al_added" value="In Your Shelf" name="submit">';
         } else{
            echo '<input type="submit" value="Add to shelf" name="submit">';
         }
    echo '</form>
        </div>
        
          
        
    </div>
     
    ';
    }
    
} else {

    echo "Library is Empty";

}

?>

</div>
