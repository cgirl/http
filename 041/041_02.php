<?php
/*
 * 这个程序是把收到的POST数据，写入文本，
 * 要求用telnet来请求他
 * 
 * 分析：要用POST方法，
 * $方法-    $路径-    $版本-
 * 请求行...
 * 主体内容...
 * 
 * 据上：
 * POST /0606/02.php HTTP/1.1
 * Host:localhost
 * Content-type:application/x-www-form-urlencode
 * Content-length:23
 * 
 * username=zhangsan&age=28
 */
$str = implode($POST, '\n');
file_put_contents('./post.txt', $str);
echo 'write ok';
?>