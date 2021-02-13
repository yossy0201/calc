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
<div class="one">性別
 <?php 
  print($gender);
 ?>
</div>
<div class="one">年齢
 <?php 
  print($name);
 ?>才
</div>
<div class="one">ご要望について
 <?php 
  print($title);
 ?>
</div>
  </body>
</html>