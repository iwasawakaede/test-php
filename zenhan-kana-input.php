<?php
require './header.php';
?>
<p>お名前のフリガナを入力して下さい。</p>
<form action="zenhan-kana-output.php" method="post">
  <!-- <input type="text" name="furigana"> -->
  <input type="text" name="count">
  <input type="submit" value="確定">
</form>
<?php require './footer.php'; ?>
