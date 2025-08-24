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

##continue文
// 現在の周をスキップしループは継続する
<?php

// この下にfor文を書いてください
for ($i = 1; $i <= 1000; $i++) {
  if ($i % 3 == 0) {
    continue;
  }
  echo $i;
  echo '<br>';
}

?>


##foreach文
// 配列または連想配列に対して、先頭のデータから順に繰り返し処理を行う
<?php

$scores = array('数学' => 70, '英語' => 90, '国語' => 80);

// この下にforeach文を書いてください
foreach ($scores as $key => $value) {
  echo $key.'は'.$value.'点です。';
}
?>

##関数
<?php

$str = 'progate';

// strlenを用いて$strの長さをechoしてください
echo strlen ($str);

echo '<br>';

$array = array('HTML', 'CSS', 'PHP');

// countを用いて$arrayの要素数をechoしてください
echo count ($array);

echo '<br>';

// randを用いて10から15までのランダムな数字をechoしてください
echo rand (10, 15);

?>

##関数を自作する
<?php

// 関数helloを定義してください
function hello () {
  echo 'Hello, world!';
}

// 関数helloを呼び出してください
hello();

echo '<br>';
// 関数printRectangleAreaを定義してください
function printRectangleArea ($height,$width) {
  echo $height * $width;
}

// 引数を(5, 10)としてprintRectangleAreaを呼び出してください
printRectangleArea(5, 10);

?>

##戻り値
<?php

// 関数getCircleAreaを定義してください
function getCircleArea($radius) {
  return $radius * $radius * 3;
}

// 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
$circleArea = getCircleArea(5);

// $circleAreaをechoしてください
echo $circleArea;

?>

##お問い合わせフォームを作ろう
// formタグ
/// action=送信先 method=getかpost

<form action="sent.php" method="post">
</form>

##テキストボックス
<form method="post" action="sent.php">
  <div class="form-item">名前</div>
  <!-- この下にinputタグを書いていきましょう -->
  <input type="text" name="name">
  
  <div class="form-item">内容</div>
  <!-- この下にtextareaタグを書いていきましょう -->
  <textarea name="body"></textarea>
  
</form>

##送信ボタン
<input type="submit" value="送信">

<!-- nameを受け取りechoしましょう -->
<?php echo $_POST['name']; ?>
<div class="form-item">■ 内容</div>
<!-- bodyを受け取りechoしましょう -->
<?php echo $_POST['body']; ?>

##セレクトボックス
<select name="age">
  <option value="未選択">選択してください</option>
  <option value="20代">20代</option>
  <option value="30代">30代</option>
</select>

<!-- ageを受け取りechoしましょう --> 
<?php echo $_POST['age'] ?>

##フォーム完成
<select name="age">
  <option value="未選択">選択してください</option>
  <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
  <?php 
    for ($i = 6; $i <= 100; $i++) {
      echo "<option value='{$i}'>{$i}</option>";
    }
  ?>
</select>

<div class="form-item">お問い合わせの種類</div>
<?php 
  $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
  ?>
<!-- この下にselectタグを書いていきましょう -->
<select name="category">
  <option value="未選択">選択してください</option>
  <?php
    foreach ($types as $type) {
      echo "<option value='{$type}'>{$type}</option>";
    }
    ?>
</select>

<!-- この下でcategoryを受け取りechoしましょう -->
<?php echo $_POST['category']; ?>