<?php
// http://localhost/php01/chapter1/1-5/index05.php
const br = "<br/>";

//if文
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
    echo br;
    echo "$a" . "は5です" . br;
    echo '$a' . "は5です" . br;
} else {
    echo "\$aは5以外です" . br;
}

if ($a === 7) {
    echo "\$aは7です" . br;
} else if ($a === 5) {
    echo "\$aは5です" . br;
} else {
    echo "\$aは5と7以外です" . br;
}

//switch文
$people = "Taro";
switch ($people) {
    case "Saburo":
        echo "三郎です" . br;
        break;
    case "Jiro";
        echo "次郎です" . br;
        break;
    default:
        echo "次郎と三郎以外です<br>";
        break;
}

//三項演算子
//$result = (条件式) ? "TRUE時の値" : "FALSE時の値";

$result = ($a === 8) ? "TRUE" : "FALSE";
echo $result . br;
