<?php
$search = mysqli_real_escape_string($db,$_POST['selection']);
?>




    <div class="top_bar">
        <div class="library_pan_lable_home">
            <h4>Home</h4>
        </div>

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
        <h4>GENRE FILTER</h4>
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


        <a href="library.php"><button class="accordion">Library</button></a>

        <a href="welcome.php"><button class="accordion">My Shelf</button></a>

       <a href="upload_section.php"><button class="accordion">Upload</button></a>
        
         <a href="recent.php"><button class="accordion">Recently Added</button></a>

        <a href="library.php"><button class="accordion">Profile</button></a>

        </div>

    </div>

    <?php
    echo '<h3 class="top_heading_products">Books marked as '.$search.' </h3>';
?>



        <div id="book_display" class="display_pannel">



            <?php

$user_id=$_SESSION['user_id'];
            
if($search!='All'){
$sql = "SELECT * FROM library WHERE book_genre LIKE '%$search%' ORDER BY book_id ASC";
    }else{
        $sql = "SELECT * FROM library";
    }
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
    
         <input type="submit" value="add to shelf" name="submit">
    </form>
        </div>
        
          
        
    </div>
     
    ';
    }
    
} else {
    echo "No Matching Results";
}

?>

        </div>


        <!--Setting-->

        <div id="settings_bar" class="settings_bar">

            <div class="single_item">
                <h2>Change profile Picture</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">

                    <input type="file" name="fileToUpload" id="fileToUpload" class="inputfile" required />
                    <label for="fileToUpload"><h4>Choose Photo</h4></label>
                    <input class="confirm_upload" type="submit" value="Save" name="submit">
                </form>
            </div>

        </div>










        <script>
            var open_listen = document.getElementById("set_open");
            var close_listen = document.getElementById("set_close");

            open_listen.addEventListener('click', function() {

                console.log("open pressed");
                document.getElementById("settings_bar").style.right = "0%";
                document.getElementById("set_close").style.display = "block";
                document.getElementById("set_open").style.display = "none";

            });

            close_listen.addEventListener('click', function() {
                console.log("CLose preses");

                document.getElementById("settings_bar").style.right = "-99%";
                document.getElementById("set_close").style.display = "none";
                document.getElementById("set_open").style.display = "block";
            });

        </script>


        <script>
            var listner = document.getElementById("book_display");
            listner.addEventListener("mouseover", function() {

                document.getElementById("book_display").style.borderLeft = "3px solid #de5b49";
                document.getElementById("book_display").style.borderTop = "3px solid #de5b49";

            });

            listner.addEventListener("mouseout", function() {

                document.getElementById("book_display").style.border = "3px solid rgba(0, 0, 0, 0)";


            });

        </script>

        <script>
            $("#main_button").click(function() {
                $('.login_box').toggleClass('transform-active');
            });

        </script>
