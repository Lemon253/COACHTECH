<?php
//http://localhost/php01/config/course.php

//データの受け取り
//POST
/*
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
*/

//GET
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);

print "私の名前は" . $company . "ですね";
