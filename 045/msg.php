<?php
require './http.class.php';

$http = new Http('http://home.verycd.com/cp.php?ac=pm&op=send&touid=0&pmid=0');


$http->post();
?>