<?php
require './http.class.php';

$http = new Http('http://home.verycd.com/cp.php?ac=pm&op=send&touid=0&pmid=0');

$http->setHeader('cookie: Hm_lvt_c7849bb40e146a37d411700cb7696e46=1452734140,1452821655,1452848659; CNZZDATA1479=cnzz_eid%3D88179358-1452731547-http%253A%252F%252Fwww.verycd.com%252F%26ntime%3D1452848496; __utma=248211998.1865160052.1452734306.1452821670.1452848676.4; __utmz=248211998.1452848676.4.3.utmcsr=verycd.com|utmccn=(referral)|utmcmd=referral|utmcct=/; BAIDU_SSP_lcr=http://www.baidu.com/link?url=90bOX6ACjts3zaIVHF7xVaeG75_ZEw6ZogwxTJw-B1q&wd=&eqid=b72866e50000423b000000025698b559; Hm_lpvt_c7849bb40e146a37d411700cb7696e46=1452848659; sid=fbd6b30dd64e60bc9177e948722b80610184726b; member_id=15001248; member_name=qingqijinhaidu1; mgroupId=93; pass_hash=3764266badbf5ea8939ceb11fca832b1; rememberme=false; uchome_auth=d917UhLt%2BaNLMmFAxbpuqw6zv9xJYD4JJuRocqxZalQkY7zJnKBB5S70Ze%2FptyN0Uo7KedeycqQQMsmFQvGS4oviErlunw; uchome_loginuser=qingqijinhaidu1; uchome_sendmail=1; __utmb=248211998.2.10.1452848676; __utmc=248211998; __utmt=1; uchome_checkpm=1; dcm=1');

$msg = array(
'username'=>'cgirl1',
'message'=>'hello world',
'refer'=>'http://home.verycd.com/space.php?do=pm&filter=privatepm',
'pmsubmit'=>'true',
'pmsubmit_btn'=>'发送',
'formhash'=>'140956c4'
);

file_put_contents('./res.html', $http->post($msg));
//echo $http->post($msg);
//37分钟
?>