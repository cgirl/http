<?php
/*
 * comet反向ajax
 */
header("content-type:text/html;charset=utf-8");

set_time_limit(0); //设置超时时间为0，即永不超时
ob_start(); //开启缓冲区

$pad = str_repeat(' ', 4000);
echo $pad,'<br />';
ob_flush(); //释放缓冲区内容
flush(); //把缓冲区释放的内容，立即送给浏览器，而不要等脚本结束再一起送

$i = 1;
while ($i++){
	echo $pad,'<br />';
	echo $i,'<br />';
	ob_flush(); //释放缓冲区内容
	flush(); //把缓冲区释放的内容，立即送给浏览器，而不要等脚本结束再一起送
	sleep(1);
}

/*
 * 思考：如果while循环中，不是1,2,3....
 * 而是数据库中的内容呢？
 * 或者是2人的聊天记录内容呢？
 * 这样就成达到即时通信
 * 
 * 服务器端--不间断--推送信息-->到客户端
 */
?>