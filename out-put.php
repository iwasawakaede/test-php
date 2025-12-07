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

for ($i=0; $i<10; $i++){
    echo '<option value="',$i, '">', $i, '</option>';
}
?>
<?php require 'footer.php';?>
