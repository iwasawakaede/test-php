<?php
require './header.php';
?>
<p>アップロードするファイルを選択して下さい。</p>
<form action="uploaf-output.php" method="post" enctype="multipart/form-data">
  <p><input type="file" name="file"></p>
  <p><input type="submit" value="アップロード"></p>
</form>
<?php require './footer.php'; ?>
