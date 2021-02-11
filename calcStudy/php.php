<html>
  <head>
    <title>calc.php</title>
  </head>
  <body>
    <?php
      //値を取得
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $calcType = $_POST['calcType'];

      //セレクトボックスによって処理を変える
      switch ($calcType) {
        case "plus":
          $answer = $number1 + $number2;
          break;
        case "minus":
          $answer = $number1 - $number2;
          break;
        case "multiplication":
          $answer = $number1 * $number2;
          break;
        default:
          break;
      }
    ?>
  <form action ="php.php" method="post">
  数字1<input type="text" class="num1" name="number1" value=""><br>
  数字2<input type="text" class="num2" name="number2" value=""><br>
  計算方法
   
   <select class="name" name="calcType">
     <option value="plus">
      ＋
     </option>
     <option value="minus">
      −
    </option>
    <option value="multiplication">
      ×
    </option>
   </select><br>
   <input type="submit" class ="button" name="result" value="計算する"></button>
   <input type = "reset" value = "クリア">
  </form>

   
  </body>
  //計算結果を表示
      <?php
      print ($answer."\n");

</html>