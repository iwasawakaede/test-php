<?php
require './header.php';
?>
<?php
$count=mb_convert_kana($_REQUEST['count'], 'n');
if (preg_match('/^[0-9]+$/', $count)){
   echo 'フリガナは「', $count, '」です。';
} else {
   echo 'フリガナが入力されていません。';
}
?>
<?php require './footer.php'; ?>
