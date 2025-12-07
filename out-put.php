<?php
require 'header.php';
?>
<?php
$price=$_REQUEST['price'];
$count=$_REQUEST['count'];

  echo $price, '円×';
  echo $count, '個=';
  echo ' 料金は、', $price*$count, '円です。<br>';

if (isset($_REQUEST['mail'])){
  echo 'お買い得情報のメールをお送りさせていただきます。<br>';
} else {
  echo 'お買い得情報のメールをお送りできません。';
}
?>
<?php require 'footer.php';?>
