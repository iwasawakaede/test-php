<?php
require './header.php';
const MESSAGE='単価と個数を入力して下さい。';
echo MESSAGE;
?>
<!-- <p>お名前を入力してください。</p> -->
<form action="out-put.php" method="post">
  <!-- 単価<input type="text" name="price" value="0"> 円
  ×
  個数<input type="text" name="count" value="0">円<br>
  <input type="checkbox" name="mail"><br> -->
  <p><input type="radio" name="meal" value="和食">和食</p>
  <p><input type="radio" name="meal" value="洋食">洋食</p>
  <p><input type="radio" name="meal" value="中華">中華</p>
  <select name="seat">
    <option value="">席を指定して下さい。</option>
    <option value="自由席">自由席</option>
    <option value="指定席">指定席</option>
    <option value="グリーン席">グリーン席</option>
  </select>
  <select name="num">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  <p><input type="submit" value="確定"></p>
</form>
<?php require './footer.php' ?>
