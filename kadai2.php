<?php

/* PHP/Laravel 04 関数を理解しよう */

echo "\n";

// [ 1 ] 数値を2倍にして返す関数
function double($a) {
    return $a * 2;
    echo "\n";
    echo "\n";
}
echo double(3);
echo "\n";
echo "\n";


// [ 2 ] $aと$bを足す関数

function f($a, $b){
    return $a + $b;
}
echo f(5,7);
echo "\n";
echo "\n";


// [ 3 ] 配列array(1, 3, 5 ,7, 9)をすべてかける

function kaketekureru($arr){
    $result = $arr[0];
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo kaketekureru(array(1,3,5,7,9));
echo "\n";
echo "\n";


// [ 4 ]

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(3,7,5,8,25,100,75));
echo "\n";
echo "\n";


// [ 5 ]

// strip_tags  HTMLタグを取り除く

$string ='<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
echo "\n";
echo "\n";

// array_push  末尾にデータを追加

$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);
echo "\n";
echo "\n";

// array_merge  複数配列の結合

$params01 = [1, 2, 3, 4, 5];
$params02 = [6, 7, 8, 9, 10];
$result = array_merge($params01, $params02);
print_r($result);
echo "\n";
echo "\n";

// time    現在時刻のUNIXタイムスタンプを取得
// mktime  指定した日時のUNIXタイムスタンプを取得 (時間,分,秒,月,日,年)

$now = time();
print $now;
echo "\n";
echo "\n";


$timestamp = mktime(0,0,0,1,3,2019);
print $timestamp;
echo "\n";
echo "\n";


//date  日付の取得

// 'Y/m/d'
$date1 = date('Y/m/d');
 
// 'Y-m-d H:i:s'
$date2 = date('Y-m-d H:i:s');
 
// 'Y年m月d日　H時i分s秒'
$date3 = date('Y年m月d日　H時i分s秒');
 
// 'Y/m/d'曜日
$w = date('w');
$week = ['日', '月', '火', '水', '木', '金', '土'];
$date4 = date('Y/m/d').$week[$w];
 
// 時刻を出力
echo $date1;
echo "\n";

echo $date2;
echo "\n";

echo $date3;
echo "\n";

echo $date4;
echo "\n";


?>