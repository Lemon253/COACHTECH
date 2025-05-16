<?php
//http://localhost/php01/config/result.php


$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
$order_count = htmlspecialchars($_POST['order_count'], ENT_QUOTES);

print "私の名前は、" . $name . "<br />";
print "ご希望の商品は、" . $order . "<br />";
print "注文数は、" . $order_count;
