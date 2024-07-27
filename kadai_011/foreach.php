<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP_kadai011</title>
</head>
<body>
<p>
<?php
$personal_items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

// 連想配列$personal_dataのキーと値を1つずつ順番に出力する
foreach ($personal_items as $key => $value) {
  echo "{$key}：{$value} <br>";
}
?>
</p>

</body>
</html>