<?php
// http://localhost/php01/chapter1/1-6/index06.php

//for文
/*
for ($i = 0; $i < 4; $i++) {
    echo $i . br;
}
*/

//練習問題
/*
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br/>";
}
*/

//while文
/*
$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}
*/

//練習問題
/*
$count = 1;
while ($count <= 20) {
    echo $count . "<br/>";
    $count++;
}
*/

//break
/*
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
        // $iが5の時、ループから抜ける。
    }
    echo $i;
    $i++;
}
*/

//continue

/*
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
        // $iが5の時、$iに1を足す処理をし、スキップをする。
    }
    echo $i;
    $i++;
}
*/

//練習問題
/*
$count = 1;
while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br/>";
    $count++;
}
*/

//do while文
/*
$i = 0;
do {
    //trueの時に実行
    echo $i . "<br />";
    $i++;
} while ($i < 5);
*/

//練習問題
/*
$num = 0;
do {
    echo $num . "<br />";
    $num++;
} while ($num <= 3);
*/

//応用問題1
/*
for ($i = 0; $i <= 50; $i++) {
    if ($i === 0) {
        echo $i . "<br />";
    } else if ($i % 3 == 0 && $i % 5 == 0) {
        echo '$i = ' . $i . "FizzBuzz" . "<br />";
    } else if ($i % 3 == 0) {
        echo '$i = ' . $i . "Fizz" . "<br />";
    } else if ($i % 5 == 0) {
        echo '$i = ' . $i . "Buzz" . "<br />";
    } else {
        echo $i . "<br />";
    }
}
*/

//応用問題2

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br />";
}
