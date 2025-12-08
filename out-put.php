<?php
require 'header.php';
?>
<!-- <?php
$price=$_REQUEST['price'];
$count=$_REQUEST['count'];

  echo $price, '円×';
  echo $count, '個=';
  echo ' 料金は、', $price*$count, '円です。<br>';
if ($price != '' || $count != '' ){
  echo 'いずれかの単価と個数を入力して下さい。';
}
if (isset($_REQUEST['mail'])){
  echo 'お買い得情報のメールをお送りさせていただきます。<br>';
} else {
  echo 'お買い得情報のメールをお送りできません。';
}
?> -->
<?php
$req=$_REQUEST['meal'];
if ($req ==  ''){
  echo 'いずれかのラジオボタンを選択して下さい。<br>';
}
switch ($_REQUEST['meal']) {
case '和食':
    echo '焼き魚、煮物、味噌汁、ご飯、果物';
    break;
case '洋食':
    echo 'ジュース、ハンバーグ、オムレツ、ハッシュポテト、パン、コーヒー';
    break;
case '中華':
    echo '餃子、チャーハン、ラーメン、春巻き、杏仁豆腐';
    break;
case '':
    echo 'いずれかの料理を選択して下さい。<br>';
    break;
}
echo 'を提供いたします。';

switch ($_REQUEST['seat']) {
case '指定席':
    echo '追加料金は1200円です。<br>';
    break;
case 'グリーン席':
    echo '追加料金は2500円です。<br>';
    break;
default:
    echo '追加料金はありません。<br>';
    break;
}
// for ($i=0; $i<10; $i++){
//     echo '<option value="',$i, '">', $i, '</option>';
// }
$i=0;
while ($i<10){
  echo '<option value="', $i, '">', $i, '</option>';
  $i++;
}
echo '選択した色は', $_REQUEST['color'], 'です。';
echo '店舗コードは', $_REQUEST['code'], 'です。';
if (isset($_REQUEST['gener'])){
  foreach ($_REQUEST['gener'] as $item){
    echo '<p>', $item, '</p>';
  }
  echo 'に関するお買い得情報をお送りさせて頂きます。<br>';
}
$postcode=$_REQUEST['postcode'];
if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $postcode)){
// if (preg_match('/^[0-9]{7}$/', $postcode)){
  echo '郵便番号は', $postcode, 'を確認しました。';
} else {
  echo $postcode, 'は適切な番号ではありません。';
}
?>
<?php require 'footer.php';?>
