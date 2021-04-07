<?php 
error_reporting(0);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 	<input type="file" name="uploadfile">
 	<input type="submit" name="submit">
 </form>
 </body>
 </html>
<?php 

$folder = "student/" ;
$filename = "$_FILES["uploadfile"] ["name"]
$filename = $_FILES["uploadfile"] ["tmp_name"]
$ _FILES ["uploadfile"];


?>