<?php
/*
 * PHP+socket编程，发送HTTP请求
 * 
 * 要求能 模拟下载、注册、登陆，批量发帖等等
 */
//http请求类的接口
interface Proto{
    //连接url
    function conn($url);
    
    //发送get查询
    function get();
    
    //发送post查询
    function post();
    
    //关闭连接
    function close();
}

class Http implements Proto{
    const CRLF = "\r\n";
    protected $line = array();
    protected $header = array();
    protected $body = array();
    protected $urlInfo = null;
    protected $fh = null;
    protected $errno = -1;
    protected $errstr = '';
    protected $responsed = '';
    
    public function __construct($url){
        $this->conn($url);
        $this->setHeader('Host:'.$this->urlInfo['host']);
    }
    
    //此方法负责写请求行
    protected function setLine($method){
        $this->line[0] = $method.' '.$this->urlInfo['path'].' '.'HTTP/1.1';
    }
    //此方法负责写头信息
    protected function setHeader($headerLine){
        $this->header[] = $headerLine;
    }
    //此方法负责写主体信息
    protected function setBody(){
        
    }
    //连接url
    function conn($url){
        $this->urlInfo = parse_url($url);
        //判断端口
        if (!isset($this->urlInfo['port'])){
            $this->urlInfo['port'] = 80;
        }
        
        $this->fh = fsockopen($this->urlInfo['host'], $this->urlInfo['port'], $this->errno, $this->errstr, 3);
    }
    
    //构造get请求的数据
    function get(){
        $this->setLine('GET');
        $this->request();
        return $this->responsed;
    }
    
    //构造post请求的数据
    function post(){
        
    }
    
    //真正请求
    function request(){
        //把请求行，头信息，实体信息，放在一个数组里，便于拼接
        $req = array_merge($this->line, $this->header, array(''), $this->body, array(''));
        $req = implode(self::CRLF, $req);
        fwrite($this->fh, $req);
        while(!feof($this->fh)){
            $this->responsed .= fread($this->fh, 1024);
        }
        
        $this->close();
    }
    
    //关闭连接
    function close(){
        
    }
}

$url = "http://news.sina.com.cn/c/nd/2016-01-12/doc-ifxnkkuv4420854.shtml";
$http = new Http($url);
echo $http->get();
?>