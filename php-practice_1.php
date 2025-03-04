<?php
// Q1 変数と文字列
<?php

$name = "上里 翔星";
echo "私の名前は「" . $name . "」です。";

?>

// Q2 四則演算
<?php

$num = 4 * 5;

var_dump($num);
var_dump($num / 2);

?>

// Q3 日付操作
<?php

date_default_timezone_set('Asia/Tokyo'); //現在時刻がずれていた為、デフォルト設定
echo date("現在時刻は、" . "Y/m/d H:i:s" . "です。");

?>

// Q4 条件分岐-1 if文
<?php

$device = "windows";

if ($device == "windows"){
    echo "使用OSは、windowsです。";
} elseif ($device == "mac") {
    echo "使用OSは、macです。";
} else {
    echo "どちらでもありません。";
}

?>

// Q5 条件分岐-2 三項演算子
<?php

$age = 20;

echo ($age < 18) ? "未成年です。" : "成人です。";

?>

// Q6 配列
<?php

$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "群馬県", "茨城県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

?>

// Q7 連想配列-1
<?php

$kanto = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($kanto as $capital) {
  echo $capital . "\n";
}

?>



// Q8 連想配列-2
<?php

$kanto = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($kanto as $prefecture => $capital) {
  if ($prefecture === "埼玉県") {
    echo $prefecture . "の県庁所在地は、" . $capital . "です。";
  }
}

?>


// Q9 連想配列-3
<?php

$kanto = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "沖縄県" => "那覇市",
  "北海道" => "札幌市"
];

foreach ($kanto as $prefecture => $capital) {
  if ($prefecture == "沖縄県" || $prefecture == "北海道") {
    echo $prefecture . "は関東地方ではありません。\n";
  } else {
    echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  }
}

?>


// Q10 関数-1
<?php

function hello($name) {
  return "{$name}さん、こんにちは。";
}

echo hello("上里") . "\n";
echo hello("田中");

?>


// Q11 関数-2
<?php

function calcTaxInPrice($price) {
  return $price * 1.10;
}

$price = 1000;

echo $price . "円の商品の税込価格は" . calcTaxInPrice($price) . "円です。";

?>


// Q12 関数とif文
<?php

function distinguishNum($num) {
  return ($num % 2 == 0) ? $num . "は偶数です。" : $num . "は奇数です.";
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

?>


// Q13 関数とswitch文
<?php

function evaluateGrade($grade) {
  switch ($grade) {
    case 'A':
    case 'B':
        return "合格です。";
    case 'C':
        return "合格ですが追加課題があります。";
    case 'D':
        return "不合格です。";
    default:
        return "判定不明です。講師に問い合わせてください。";
  }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";

?>
