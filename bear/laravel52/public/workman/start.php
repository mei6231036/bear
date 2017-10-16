<?php  
/** 
 * Created by PhpStorm. 
 * User: raid 
 * Date: 2016/8/2 
 * Time: 11:03 
 */  
use Workerman\Worker;  
require_once './Autoloader.php';  
  
$global_uid = 0;  
  
// 当客户端连上来时分配uid，并保存连接，并通知所有客户端  
function handle_connection($connection,$data) {  
    global $text_worker, $global_uid;  
    // 为这个链接分配一个uid  
    $connection->uid = ++$global_uid;  
    $a='<ul class="chat-room__list" id="chat-room__list">';
        $a.='<li class="J_msg" data-id="1">';
        $a.='<div class="msg-normal"><span class="msg-hd">';
        $a.='<span class="labels"></span>';
        $a.='<span class="name-wrap">';
        $a.='<span class="name J_userMenu" title="点击查看个人信息">'.$data['name'].'</span> : </span>';
        $a.='</span>';
        $a.='<span class="text-content">'.大爷我上线了.'</span>';
        $a.='</div>';
        $a.='</li>';
        $a.='</ul>';
    foreach ($text_worker->connections as $conn) {  
        
    }  
}  
  
// 当客户端发送消息过来时，转发给所有人  
function handle_message($connection, $data) {  
    $data = json_decode($data,true);
    global $text_worker;  
     $a='<ul class="chat-room__list" id="chat-room__list">';
        $a.='<li class="J_msg" data-id="1">';
        $a.='<div class="msg-normal"><span class="msg-hd">';
        $a.='<span class="labels"></span>';
        $a.='<span class="name-wrap">';
        $a.='<span class="name J_userMenu" title="点击查看个人信息">'.$data['name'].'</span> : </span>';
        $a.='</span>';
        $a.='<span class="text-content">'.$data['msg'].'</span>';
        $a.='</div>';
        $a.='</li>';
        $a.='</ul>';
    foreach ($text_worker->connections as $conn) {  
        $conn->send("$a");  
    }  
}  
  
// 当客户端断开时，广播给所有客户端  
function handle_close($connection) {  
    global $text_worker;  
    foreach ($text_worker->connections as $conn) {  
         
    }  
}  
  

$text_worker = new Worker("websocket://0.0.0.0:1234");  
  
$text_worker->count = 1;  
  
$text_worker->onConnect = 'handle_connection';  
$text_worker->onMessage = 'handle_message';  
$text_worker->onClose = 'handle_close';  
  
Worker::runAll();  