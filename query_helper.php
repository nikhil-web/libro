<!DOCTYPE html>
<html>

<body>

    <?php
    
    $commonWords = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","z","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",'THE','The','the','an',"");
    
    
include('session.php');
  $user_id=$_SESSION['user_id']; 
$x=0 ;   
$query = "SELECT book_id FROM shelf WHERE user_id='$user_id'";
$temp_result = mysqli_query($db, $query); 
if (mysqli_num_rows($temp_result) > 0) {
    while($row=mysqli_fetch_assoc($temp_result)){
        echo('Book ID'.$row["book_id"]);
        $book_ids[$x] = $row["book_id"];
            echo "<br>";
        
        $x++;
    } 
}

         echo "<br>";
           echo "<br>";
$loop = "SELECT * FROM shelf WHERE user_id='$user_id'";
$loop_exe = mysqli_query($db, $loop); 
if (mysqli_num_rows($loop_exe) > 0) {
  
    while($row=mysqli_fetch_assoc($loop_exe)){

        $book_names[$x] = $row["book_name"];
        $book_writer[$x] = $row["book_writer"];
            echo "<br>";
        
        $x++;
        
    }
}
        
        
        
        
        
        
        
        
        $str = implode(" ",$book_names);
        echo $str;
              echo "<br>";
        $str2 = implode(" ",$book_writer);
        echo $str2;
              echo "<br>";
        
        
$keyword_name = (explode(" ",$str));
$keyword_writer = (explode(" ",$str2));

$len1 = sizeof($keyword_name);
        echo $len1;
        
$len2 = sizeof($keyword_writer);
        echo $len2;
        
if($len1>1 ){
   $string=""; 

   for ($x = 1; $x <= $len1-1; $x++) {
 if (in_array($keyword_name[$x],$commonWords))
  {
   continue;
       }else{
     $snip[$x] = " OR book_name LIKE '%$keyword_name[$x]%' ";
 }
   } 
    
       for ($x = 0; $x <= $len2-2; $x++) {
           if (in_array($keyword_writer[$x],$commonWords))
  {
   continue;
       }else{
   $snip2[$x] = " OR book_writer LIKE '%$keyword_writer[$x]%' ";
 }
        
       } 
   
    if (in_array($keyword_writer[0],$commonWords))
  {
   $first_letter="999999999999";
       }else{
   $first_letter=$keyword_writer[0];
 }
    
$made_up_query= implode(" ",$snip);
$made_up_query2= implode(" ",$snip2);
      echo "<br>";
//echo($made_up_query);  
      echo "<br>";
//echo($made_up_query2);
      echo "<br>";
    $sql = "SELECT * FROM library WHERE book_name LIKE '%$first_letter%' $made_up_query $made_up_query2 ORDER BY book_id ASC";
  echo "<br>";
     }else{
         $sql = "SELECT * FROM library WHERE book_name LIKE '%$str%' OR book_writer LIKE '%$str%' ORDER BY book_id ASC";
}
       reset($keyword_name);
    echo($sql);

          echo "<br>";



    
    
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row=mysqli_fetch_assoc($result)){
    if (in_array($row["book_id"], $book_ids)){
       continue;
  }
else
  {
  echo ' <div class="book_item">
  <div class="book_item_overlay">
        <div class="book_data">
            <h1>' .$row["book_name"].'</h1>
            
        </div>
    </div>
    </div>
    ';
  }
     
    }
    
} else {
   
}

        
        

    
    
    
    
    

    
?>

</body>

</html>
