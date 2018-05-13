<?php
include("session.php");
$file = mysqli_real_escape_string($db,$_POST["book_loc"]);
header('Content-type: application/pdf');
header('Content-Description: inline;filename ="'.$file.'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges:byte');
@readfile($file);
?>
