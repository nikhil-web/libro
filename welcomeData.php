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

        <a href="welcome.php"><button class="accordion active">My Shelf</button></a>
       
        <a href="library.php"><button class="accordion">Library</button></a>

        <a href="upload_section.php"><button class="accordion">Upload</button></a>

        <a href="recent.php"><button class="accordion">Recently Added</button></a>

        <a href="library.php"><button class="accordion">Profile</button></a>

    </div>

</div>







<div id="book_display" class="display_pannel">
<h3 class="top_heading_recom">Your Shelf</h3>

    <?php
    $flag=TRUE;
$user_id=$_SESSION['user_id'];
$sql = "SELECT * FROM shelf WHERE user_id='$user_id' ORDER BY book_id DESC";
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
                 
                 
<form action="read_page.php" method="post" >
 <input type="hidden" name="book_loc" id="book_loc" value="' .$row["book_loc"].'">
 <input class="read_button" type="submit" value="Read " name="submit">
</form>         
                 
        <form action="removefromshelf.php" method="post">          
          <input type="hidden" name="book_shelf_id" id="book_shelf_id" value="' .$row["shelf_id"].'">
          <input type="submit" value="Remove from shelf " name="submit">
        </form>


        </div>
    </div>
    
   
    
    
    ';
        $flag=TRUE;
    }
    
} else {
    echo '<h3 class="top_heading_empty_alert">shelf is empty</h3>';
      $flag=FALSE;
}

?>



</div>












<div id="book_display_recomend" class="book_display_recomend">

<h3 class="top_heading_recom">Recommended Books</h3>

<?php
  $count=0;
    //Words to exclude from the query
    $commonWords = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","z","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",'THE','The','the','an',"","of","Of","OF","and","And","Im","in","In","the","of","and","a","to","in","is","you","that","it","he","was","for","on","are","as","with","his","they","I","at","be","this","have","from","or","one","had","by","word","but","not","what","all","were","we","when","your","can","said","there","use","an","each","which","she","do","how","their","if","will","up","other","about","out","many","then","them","these","so","some","her","would","make","like","him","into","time","has","look","two","more","write","go","see","number","no","way","could","people","my","than","first","water","been","call","who","oil","its","now","find","long","down","day","did","get","come","made","may","part","Novel","novel");
    
$user_id=$_SESSION['user_id']; 
$x=0 ;   
$query = "SELECT book_id FROM shelf WHERE user_id='$user_id'";
$temp_result = mysqli_query($db, $query); 
if (mysqli_num_rows($temp_result) > 0) {
    while($row=mysqli_fetch_assoc($temp_result)){
       
        $book_ids[$x] = $row["book_id"];
        $x++;
        $flag=TRUE;
    } 
}else{
    echo '<h3 class="top_heading_empty_alert">No Recommendation</h3>';
       $flag=FALSE;
}

    
if($flag == TRUE){    
  
    $loop = "SELECT * FROM shelf WHERE user_id='$user_id'";
    $loop_exe = mysqli_query($db, $loop); 
    if (mysqli_num_rows($loop_exe) > 0) {
  
    while($row=mysqli_fetch_assoc($loop_exe)){

        $book_names[$x] = $row["book_name"];
        $book_writer[$x] = $row["book_writer"];
        $book_genre[$x] = $row["book_genre"];
          
        
        $x++;
        
    }
}
        
       //main string maipulation 
        
        
        $str = implode(" ",$book_names);
     
        $str2 = implode(" ",$book_writer);

        $str3 = implode(" ",$book_genre);

        
        
$keyword_name = (explode(" ",$str));
$keyword_writer =(explode(" ",$str2));
$keyword_genre = (explode(" ",$str3));

    
$len1 = sizeof($keyword_name);

        
$len2 = sizeof($keyword_writer);
      
    
$len3 = sizeof($keyword_genre);
    
    

for ($x = 0; $x < $len1; $x++) {
    if (in_array($keyword_name[$x],$commonWords))
     {
      continue;
       }else
    {
        $snip[$x] = " OR book_name LIKE '%$keyword_name[$x]%'";
    }
   } 
       
   for ($x = 0; $x < $len2; $x++) 
   {
     if (in_array($keyword_writer[$x],$commonWords))
     {
      continue;
     }else
      {
        $snip2[$x] = " OR book_writer LIKE '$keyword_writer[$x]'";
       }
   } 
       
   for ($x = 0; $x < $len3-1; $x++) 
   {
       if (in_array($keyword_genre[$x],$commonWords))
         {
            continue;
          }else
          {
            $snip3[$x] = "OR book_genre LIKE '%$keyword_genre[$x]%'";
          }
   } 
       
       
   
            if (in_array($keyword_name[0],$commonWords))
     {
      $first_letter="999999999999";
          }else{
      $first_letter=$keyword_name[0];
    }  
       
   $snip_unique=array_unique($snip);  
   $snip2_unique=array_unique($snip2);    
   $snip3_unique=array_unique($snip3);        
       
   $made_up_query1= implode(" ",$snip_unique);
   $made_up_query2= implode(" ",$snip2_unique);
   $made_up_query3= implode(" ",$snip3_unique);   
   
   

   //actual query   
         
if($len1>1 ){ 
   $sql = "SELECT * FROM library WHERE book_name LIKE '%$first_letter%' $made_up_query1 $made_up_query2 $made_up_query3  ORDER BY rank_point DESC";
     }else{
         $sql = "SELECT * FROM library WHERE book_name LIKE '%$str%' $made_up_query2 $made_up_query3  ORDER BY rank_point DESC";
}
    
    
//echo $sql; //Uncomment this to see the dynamic sql in action

    
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    $count=0;
    
    while($row=mysqli_fetch_assoc($result)){
    if (in_array($row["book_id"], $book_ids)){
       continue;
  }
else
  { 
     $count = $count+1;
    
      echo ' <div class="book_item">
      <div class="book_item_overlay">
           <form action="addtoshelf_fromrecom.php" method="post">
                  
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
         
    
         <input type="submit" value="add to shelf" name="submit">
    </form>
               </div> 
        <div class="book_cover">
            <img src="' .$row["book_cover"].'" alt="">
        </div>

        <div class="book_data">
            <h1>' .$row["book_name"].'</h1>
            
          
                 
                 
                  
        </div>
        

        
    </div>
     
    ';
  }
     
    }
    
} else {
    echo '<h3 class="top_heading_empty_alert">No Recommendation</h3>';
}

    }
    if($count == 0 AND $flag == TRUE){

        echo '<h3 class="top_heading_empty_alert">All Recommendations Added</h3>';

    }        

    
    
    
    

    
?>

<h3 style="z-index=999"></h3>

</div>



<div id="settings_bar" class="settings_bar">  <!--Change Add Code here -->

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





