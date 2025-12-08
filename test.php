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
  </select><br>
  <select name="color">
    <?php
     $color=['ホワイト','ブルー','レッド','イエロー','ブラック'];
     foreach ($color as $c){
        echo '<option value="', $c,'">', $c, '</option>';
     }
    ?>
  </select>
  <select name="code">
    <?php
    $store=[
      '新宿'=>100,'秋葉原'=>101,'上野'=>102, '横浜'=>200,'川崎'=>201,
      '札幌'=>300,'仙台'=>400,'名古屋'=>500, '京都'=>600,'博多'=>700
    ];
    foreach  ($store as $key=>$value){
      echo '<option value="', $value, '">', $key, '</option>';
    }
    ?>
  </select>
  <?php
  $gener=['カメラ','パソコン','時計','家電','書籍','文房具','食品'];
  foreach ($gener as $item){
    echo '<p>';
    echo '<input type="checkbox" name="gener[]" value="', $item, '">';
    echo $item;
    echo '</p>';
  }
  date_default_timezone_set('Japan');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
  echo rand(1, 6);
  echo '<img alt="image" src="item', rand(0, 2), '.png">';
  ?>
  <input type="text" name="postcode">
  <p><input type="submit" value="確定"></p>
</form>
<?php require './footer.php' ?>
