<?php
//もし計算するボタンが押されたら
if(isset($_POST['result'])){

//足し算の時
if($_POST["value"] === "+"){
  $set=$_POST["number1"] + $_POST["number2"];
  echo '<input type="text" value="'.$set.'" name="two">'; //足し算の値を表示
  }



?>