#ここにPHP学習のコードやメモを追加します。

## 配列
<?php

  // この下に配列を作ってください
  $colors = array('赤','青','黄');
  echo $colors[0];

  $colors[] = '白';
  echo $colors[3];
  
?>

## 連想配列
<?php

// この下に連想配列を作ってください
$scores = array(
    '数学' => '70',
    '英語' => '90',
    '国語' => '80',
  );

$scores['国語'] += 5;

echo $scores['国語'];
?>

##for文
<?php

// この下にfor文を書いてください
for($i = 51; $i <=100; $i++) {
  echo $i;
  echo '<br>';
}

?>

##while文
<?php

// 変数$iを定義してください
$i = 2;

// while文を書いてください
while ($i <= 100) {
if ($i % 2 == 0) {
  echo $i;
  echo '<br>';
}

$i++;
}
?>

##break文
<?php

// この下にfor文を書いてください
for ($i = 1; $i <= 1000; $i++) {
  if ($i > 500) {
    break;
  }
  echo $i;
  echo '<br>';
}

?>