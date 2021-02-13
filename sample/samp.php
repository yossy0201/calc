<html>
  <head>
    <title>welcome</title>
  </head>
  <body>
<?php
$gender = $_POST ['gender'];
$name = $_POST ['name'];
$title = $_POST ['title'];
?>
<div class="one">
 <?php 
  print($gender);
 ?>
</div>
<div class="one">
 <?php 
  print($name);
 ?>才
</div>
<div class="one">
 <?php 
  print($title);
 ?>
</div>
  </body>
</html>