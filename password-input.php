<?php
require './header.php';
?>
<p>パスワードを入力して下さい。</p>
<p>(8文字以上で、英小文字、英大文字、数字を各１文字以上を含むこと)</p>
<form action="password-output.php" method="post">
  <input type="password" name="password">
  <input type="submit" value="OK">
</form>
<?php require './footer.php'; ?>
