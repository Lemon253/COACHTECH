<?php
// http://localhost/php01/chapter1/index07.php

//関数_引数と戻り値あり
function outputNumber($a)
{
    echo "引数の値は" . $a ."です". "<br />";
    return;
}
//関数の呼び出しと引数の設定
outputNumber(2);

//関数_引数と戻り値なし
function outputHello()
{
    echo "Hello world". "<br />";
}
//関数の呼び出し
outputHello();
/*
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
//$totalに関数textの戻り値を代入
$total = text(2, 4);
echo $total ."<br />";
*/

//練習問題1
/*
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total ."<br />";
*/

//練習問題1
/*
function test($score1, $score2, $score3)
{
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo "合計点は$sum"."なので合格です";
    } else {
        echo "合計点は$sum"."なので不合格です";
    }
}
test(70, 70, 70);
*/

//回答
/*
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));
*/

//練習問題2

//三角形の面積
function triangle_area($bottom, $height)
{
    return $triangle =  ($bottom * $height) / 2;
}

//四角形(長方形)の面積
function rectangle_area($vertical, $width)
{
    return $rectangle = $vertical * $width;
}

//台形の面積
function trapezoid_area($top_base, $bottom_base, $height)
{
    return $trapezoid = (($top_base + $bottom_base) * $height) / 2;
}

echo ("三角形の面積は". triangle_area(40, 40). "<br />");
echo ("四角形(長方形)の面積は". rectangle_area(50, 60). "<br />");
echo ("台形の面積は". trapezoid_area(70, 80, 50). "<br />");


//回答

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);