<?php
var_dump($_SERVER);
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
var_dump(time());
var_dump(microtime());
//var_dump(file_get_contents('https://www.baidu.com'));
var_dump(date('Y-m-d');
var_dump(array_values([1 => 'hello', 2 => 'world']));
var_dump(array_keys([1 => 'hello', 2 => 'world']));
var_dump(substr('hello world', 0, 5));
var_dump(strstr('111@qq.com', '@'));
//php8 match 构造函数 jit