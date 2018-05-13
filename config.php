<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
       <?php




       /*place database credintials here*/
       
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'LIBRO_v1.2');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 

// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
        else{
        
        }
        
        function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
    </body>
</html>


