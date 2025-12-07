<?php
require './header.php';
const MESSAGE='単価と個数を入力して下さい。';
echo MESSAGE;
$price='';
?>
<!-- <p>お名前を入力してください。</p> -->
<form action="out-put.php" method="post">
  単価<input type="text" name="price"> 円
  ×
  個数<input type="text" name="count"> 円<br>
  <input type="checkbox" name="mail"><br>
  <input type="submit" value="確定">
</form>
<?php require './footer.php' ?>
