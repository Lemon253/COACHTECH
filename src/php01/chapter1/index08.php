<?php
// http://localhost/php01/chapter1/index08.php

//配列
//$people = array('Taro', 'Jiro', 'Saburo');
//変数の要素確認
//var_dump($people);
//echo $people[0];

//連想配列
/*
$people = array(
    "person1" => "Taro",
    "person2" => "Jro",
    "person3" => "Saburo"
);

var_dump($people);
*/

//[]でも可
/*
$people = [
    "person1" => "Taro",
    "person2" => "Jro",
    "person3" => "Saburo"
];

var_dump($people);
//変数の値取得は[]で取得
echo $people["person1"];
*/

//多次元配列

/*
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];

echo $people[0]["last_name"];
*/


//foreach文

/*
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
    echo $person;
    echo '<br />';
}
*/

//連想配列
/*
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}
*/

//多次元配列

/*
$people = [
    [
        "name" => "Taro",
        "age" => 25,
        "gender" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => 20,
        "gender" => "men"
    ],
    [
        "name" => "hanako",
        "age" => 16,
        "gender" => "women"
    ]
];

foreach ($people as $person => $details) {
    echo $details["name"] . "(" . $details["age"] . "歳" . $details["gender"] . ")" . "<br />";
}
*/

//回答

$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}
