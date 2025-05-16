<?php
// http://localhost/php01/chapter1/1-4/index04.php
$br = "<br/>";

$a = 15;
$b = 3;
$c = 10;
$d = 5;


//算術演算子
echo $a + $b . $br;
echo $a - $b . $br;
echo $a * $b . $br;
echo $a / $b . $br;
echo $a % $c . $br;

//複合演算子
$answer1 = $b;
$answer2 = $c += $d;
echo $answer1 . $br;
echo $answer2 . $br;

//比較演算子
echo ($a > $b);
echo $br;

//論理演算子
echo ($a > 10 && $a < 30);
echo $br;

//加算子、減算子
$aa = 10;
$bb = 10;
$cc = 5;
$dd = 5;

echo $aa = ++$aa;
echo $br;
echo $bb = $bb++;
echo $br;
echo $cc = --$cc;
echo $br;
echo $dd = $dd--;
