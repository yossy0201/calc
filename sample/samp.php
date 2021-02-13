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
<div class="one">才
 <?php 
  print($name);
 ?>
</div>
<div class="one">
 <?php 
  print($title);
 ?>
</div>
  </body>
</html>