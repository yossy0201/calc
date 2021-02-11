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

      //計算結果を表示
      print ($answer."\n");
    ?>
    
   
  </body>
</html>