<html>
  <head>
    <title>welcome</title>
  </head>
  <body>
<?php
$gender = $_POST ['gender'];
$name=$_POST['name'];
$age = $_POST ['age'];
$address=$_POST['address'];
$area = $_POST['area'];
$title = $_POST ['title'];
?>

<div class="one">性別:
 <?php 
  print($gender);
 ?>
</div>

<div class="one">お名前:
 <?php 
  print($name);
 ?>
</div>

<div class="one">年齢:
 <?php 
  print($age);
 ?>才
</div>

<div class="one">入力した住所:
 <?php 
  print($address);
 ?>
</div>

</div>
<div class="one">選択した住所:
 <?php 
  print($area);
 ?>
</div>

<div class="one">ご要望について:
 <?php 
  print($title);
 ?>
</div>

  </body>
</html>