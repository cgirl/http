<?php
/*
 * 伪防盗链
 * 突破其防盗链，采集设有防盗链的图片
 */
header("Content-type:text/html;charset=utf-8");

require '../045/http.class.php';

$http = new Http('http://192.168.1.106/http/046/chezhan.jpg');

//通过该步骤，突破其防盗链设置
$http->setHeader("Referer:http://localhost");

//采集图片信息
$res = $http->get();
file_put_contents('aa.jpg', substr(strstr($res, "\r\n\r\n"), 4));

//此程序有不完善的地方，应该判断路径或者reponse的mime头信息，确定图片的类型
echo 'ok';
?>