<?php

/* PHP/Laravel 02 PHPの型と基本的な式を理解しよう */

echo "\n";
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";
echo "\n";

$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];
echo "\n";
echo "\n";

$hello = "Hello,";
$name = "Yu";
$world = "'s World!";
echo $hello . $name . $world;
echo "\n";
echo "\n";

$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;
echo "\n";
echo "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
echo "\n";
echo "\n";



/* PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう */

$name = "優";
if($name == "優" ){
  echo "私は" . $name . "です";
} else{
  echo "あなたの名前ではありません";
}
echo "\n";
echo "\n";


$total = 0;
for($i = 0; $i <= 10000; $i++){
  $total += $i; 
}
echo $total;
echo "\n";
echo "\n";


$fruits = array("apple", "orange", "grape", "cherry", "lemon");
foreach($fruits as $fruit){
  echo $fruit;
}
echo "\n";
echo "\n";


/* for文の始めの値を定義する*/
$start = 1;
/*for文の終わりの値を定義する*/
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  } 
}
echo "\n";
echo "\n";


/* PHP/Laravel 04 関数を理解しよう */

// 数値を2倍にして返す関数
function double($a) {
    return $a * 2;
    echo "\n";
    echo "\n";
}
echo double(3);
echo "\n";
echo "\n";


// $aと$bを足す関数

function f($a, $b){
    return $a + $b;
}
echo f(5,7);
echo "\n";
echo "\n";


?>