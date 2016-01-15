<?php
require './http.class.php';

$http = new Http('http://home.verycd.com/cp.php?ac=pm&op=send&touid=0&pmid=0');

$msg = array(
'username'=>'cgirl1',
'message'=>'hello world',
'refer'=>'http://home.verycd.com/space.php?do=pm&filter=privatepm',
'pmsubmit'=>'true',
'pmsubmit_btn'=>'发送',
'formhash'=>'140956c4'
);

echo $http->post($msg);

?>