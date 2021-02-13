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
<?php
  print($name);
  print($title);
?>
  </body>
</html>