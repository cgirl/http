<?php

//默认是302重定向
//header("location:http://www.baidu.com");

//指定用301重定向，true参数指用301头信息替换原来的头信息
//header("location:http://www.baidu.com", true, 301);

//对于一篇新闻，GET请求，重定向无所谓，还能看到原来的内容就行；
//但是如果用POST数据，比如表单提交到05.php，但是05.php重定向到06.php
//会丢失数据，POST到05，重定向到06后，就变成GET方式了，可使用307重定向，
//保持原有的请求数据
print_r($_POST);
?>