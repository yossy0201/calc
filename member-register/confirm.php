<html>
  <head>
    <meta charset="utf-8">
    <title>メンバー登録確認</title>
  </head>
  <body>
    登録名は<br>
    <?php 
    $name=$_POST["name"]
    ?>
    <?php
    print $name;
    ?>
    になります<br>
    よろしいですか？<br>

    <?php 
    $dsn='mysql:host=localhost;dbname='member-register';charset=utf8';
    $user='name';
    $password='yossy0201';
    ?>
    
    <form action="done.php" method="POST">
    <p><input type="submit" value="はい"></p>
    <p><input type="submit" value="いいえ"></p>
  </form>
  </body>
</html>