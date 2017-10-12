<?php 
use Symfony\Component\HttpFoundation\Session\Session;
    //用户session
        $session=new Session;
        $user=$session->get('user');
        if($user)
        {
            $user = DB::table('user_info')->select('*')->where('user_id',$user->user_id)->first();
        }
 ?>
<!DOCTYPE html>
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="myuser_files/admin.css">
        <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
        <link type="text/css" rel="stylesheet" href="css/auto_combine_a7d45_999daed.css">
        <link rel="stylesheet" type="text/css" href="css/my_auth.css">
        <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script src="myuser_files/hm.js"></script><script type="text/javascript" src="myuser_files/jquery-1.js"></script>
<!-- 上传头像 s-->
<script type="text/javascript" src="myuser_files/profile.js"></script>
<script src="myuser_files/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="myuser_files/jquery.css" type="text/css">
<script type="text/javascript" src="myuser_files/jquery_002.js"></script>
<link rel="stylesheet" href="myuser_files/uploadify.css" type="text/css">
<link rel="stylesheet" href="myuser_files/yy-live.css" type="text/css">
<script type="text/javascript" src="myuser_files/ubbEditor.js"></script>
<style>
    #fileImg-queue{position: absolute;z-index: -1;}
</style>
<!-- 上传头像 e -->


<link href="myuser_files/new_home_index__9176602.css" rel="stylesheet">
<!-- 图片裁剪样式 -->
<link rel="stylesheet" type="text/css" href="myuser_files/imgareaselect-default.css">
<script charset="utf-8" type="text/javascript" async="" src="myuser_files/underscore_3d00f9f.js"></script><script charset="utf-8" type="text/javascript" async="" src="myuser_files/header_search_tip_10ae642.js"></script></head>
<body class="">
      @include('layouts.common.header')
    </div>
</div>

    <div style="height:50px;"></div>
    <div class="admin-wrap">
        <style type="text/css">
.nav-scroll-wrap .nav-section .icon-recommendtag{
    background-image: url(../main/statics/img/icon-recommendtag.png);
}
.nav-scroll-wrap .nav-section .icon-room{
    background-image: url(../main/statics/img/room_man_icon.png);
}
/*CDK兑换*/
.nav-scroll-wrap .nav-section .icon-CDKey_change {
    background-image: url(../main/statics/img/icon_CDKey.png);
}
/*中奖查询*/
.nav-scroll-wrap .nav-section .icon-maw {
    background-image: url(../main/statics/img/icon_my_awards.png);
}
/*虎牙认证*/
.nav-scroll-wrap .nav-section .icon-auth{background-image: url('../main/statics/img/auth_icon.png');}
/*广告推广*/
.nav-scroll-wrap .nav-section .icon-ad{
    background-image: url('../main/statics/img/icon-ad.png');
}
/*我的粉丝*/
.nav-scroll-wrap .nav-section .icon-fans{
    background-image: url('../main/statics/img/icon-fans.png');
}
/*艺人签约*/
.nav-scroll-wrap .nav-section .icon-artist-sign{
    background-image: url('../main/statics/img/icon-artist-sign.png');
}
/*我的消息*/
.nav-scroll-wrap .nav-section li .msg_new{
    right: 63px;
    top: 16px;
    width: 8px;
    height: 8px;
}
/*等级成长*/
.nav-scroll-wrap .nav-section .icon-userlevel{
    background-image: url('../main/statics/img/icon-uesr-level.png');
}
/*违规查询*/
.nav-scroll-wrap .nav-section .icon-violation{
    background-image: url('../main/statics/img/icon-violation.png');
}
</style>
<script>
    var currentMenu = 'home',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="myuser_files/main_menu.js"></script>
<script type="text/javascript" src="myuser_files/cookies.js"></script>
<div class="admin-menu">
    <div class="content">
        <div class="nav-scroll-wrap">
            <div class="scroll-content">
                <div class="nav-section" style="padding-bottom:0">
                    <h3 class="header">&nbsp;个人中心</h3>
                    <ul class="icon-filter">
                        <li>
                            <a menu="home" href="myuser">
                                <span class="icon icon-home"></span>
                                <span class="title">
                                    我的信息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="userlevel" href="mylevel">
                                <span class="icon icon-userlevel"></span>
                                <span class="title">
                                    等级成长
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="subscribe" href="mysubscribe">
                                <span class="icon icon-subscribe"></span>
                                <span class="title">
                                    订阅
                                </span>
                            </a>
                        </li>
                        <li id="msg-li">
                            <a menu="msg" href="mylist">
                                <span class="icon icon-msg"></span>
                                <span class="title">
                                    我的消息
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a menu="money" href="myaccount">
                                <span class="icon icon-money"></span>
                                <span class="title">
                                    我的财产
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="auth" href="myfile">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    上传文件
                                </span>
                            </a>
                        </li>
                       
                        <li>
                            <a menu="auth" href="myauth">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    虎牙认证
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                           
                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="zhubo" target="_blank" class="btn btn-to-anchor">成为主播</a>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="main-col">
            <div  id="drop_area" style="border:3px dashed silver;width:200px; height:200px">
                将图片拖拽到此
            </div>
            
            <progress value="0" max="10" id="prouploadfile"></progress>
            
            <span id="persent">0%</span>
            <br />
            <!--<button onclick="xhr2()">ajax上传</button>--> 
            <button onclick="stopup()" id="stop">上传</button>    
</div>


<script src="myuser_files/moment.js"></script>
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.1/js/index.js?t=20160303v1"></script> -->
<!-- add js -->
<!-- 图片裁剪 -->
<script type="text/javascript" src="myuser_files/imgPre.js"></script>
<script type="text/javascript" src="myuser_files/jquery_003.js"></script>
<script type="text/javascript" src="myuser_files/imgCut.js"></script>
<!-- 图片裁剪end -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.4/js/new_home.js"></script> -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.10/js/new_home_second.js"></script> -->
<!-- 贵族续费 -->
<!-- <script src="http://assets.dwstatic.com/b=project/yytv/center/2.4/js&f=lego.popupbox.js"></script>
<script src="http://a.msstatic.com/huya/icenter/2.5/js/guizutequan.js"></script> -->
<!-- 贵族续费end -->
<script type="text/javascript" src="myuser_files/new_home__f9590e0.js"></script>
<!-- end -->
<!-- 第三方登陆修改密码 -->
<!-- 第三方登陆修改密码 -->

    </div>
</div>
@include('layouts.common.footer')
<script src="myuser_files/jsfmain.js"></script>
<script type="text/javascript" src="myuser_files/ya-huya.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="myuser_files/report_info.js"></script>
<!--/footer-->
<!-- S 后台推送消息 -->
    <!--[if lte IE 7]>
    <script  type='text/javascript' src='http://i.huya.com/base/js/push/json3.min.js'></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script type='text/javascript' src='http://i.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
    <![endif]-->
    <script data-fixed="true">
        var PUSH_PROXY_URL="http://channelproxy.huya.com/";
        var PUSH_ENABLE=true;//推送开关
        var WEB_PUSH_URL="webpush.huya.com";
        var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS
    </script>
    <script type="text/javascript" src="myuser_files/push-min.js"></script>
    <script type="text/javascript" src="myuser_files/push.js"></script><!-- E 后台推送消息 -->

</div></body></html>
 <script src="js/headerFunction_c0fe602.js" data-fixed="true"></script>

<script src="js/jquery.lazyload_769f44a.js" data-fixed="true"></script>

<script type="text/javascript" charset="utf-8" src="js/auto_combine_d17e3_b03328c.js"></script>
<script src="js/jquery.js">   </script>
<script type="text/javascript">
        //拖拽上传开始
        //-1.禁止浏览器打开文件行为
        document.addEventListener("drop",function(e){  //拖离 
            e.preventDefault();    
        })
        document.addEventListener("dragleave",function(e){  //拖后放 
            e.preventDefault();    
        })
        document.addEventListener("dragenter",function(e){  //拖进
            e.preventDefault();    
        })
        document.addEventListener("dragover",function(e){  //拖来拖去  
            e.preventDefault();    
        })
        //上传进度
        var pro = document.getElementById('prouploadfile');
        var persent = document.getElementById('persent');
        function clearpro(){
            pro.value=0;
            persent.innerHTML="0%";
        }
        
        //2.拖拽
        var stopbutton = document.getElementById('stop');
        
        var resultfile=""
        var box = document.getElementById('drop_area'); //拖拽区域   
        box.addEventListener("drop",function(e){         
            var fileList = e.dataTransfer.files; //获取文件对象  
            console.log(fileList)
            //检测是否是拖拽文件到页面的操作          
            if(fileList.length == 0){              
                return false;          
            }           
            //拖拉图片到浏览器，可以实现预览功能  
            //规定视频格式
            //in_array
            Array.prototype.S=String.fromCharCode(2);
            Array.prototype.in_array=function(e){
                var r=new RegExp(this.S+e+this.S);
                return (r.test(this.S+this.join(this.S)+this.S));
            };
            var video_type=["video/mp4","video/ogg"];
            
            //创建一个url连接,供src属性引用
            var fileurl = window.URL.createObjectURL(fileList[0]);              
            if(fileList[0].type.indexOf('image') === 0){  //如果是图片
                var str="<img width='200px' height='200px' src='"+fileurl+"'>";
                document.getElementById('drop_area').innerHTML=str;                 
            }else if(video_type.in_array(fileList[0].type)){   //如果是规定格式内的视频                  
                var str="<video width='200px' height='200px' controls='controls' src='"+fileurl+"'></video>";
                document.getElementById('drop_area').innerHTML=str;      
            }else{ //其他格式，输出文件名
                //alert("不预览");
                var str="文件名字:"+fileList[0].name;
                document.getElementById('drop_area').innerHTML=str;    
            }       
            resultfile = fileList[0];   
            console.log(resultfile);    
            
            //切片计算
            filesize= resultfile.size;
            setsize=500*1024;
            filecount = filesize/setsize;
            //console.log(filecount)
            //定义进度条
            pro.max=parseInt(Math.ceil(filecount)); 
            
            
            
            i =getCookie(resultfile.name);
            i = (i!=null && i!="")?parseInt(i):0
            
            if(Math.floor(filecount)<i){
                alert("已经完成");
                pro.value=i+1;
                persent.innerHTML="100%";
            
            }else{
                alert(i);
                pro.value=i;
                p=parseInt(i)*100/Math.ceil(filecount)
                persent.innerHTML=parseInt(p)+"%";
            }
            
        },false);  
        
        //3.ajax上传

        var stop=1;
        function xhr2(){
            if(stop==1){
                return false;
            }
            if(resultfile==""){
                alert("请选择文件")
                return false;
            }
            i=getCookie(resultfile.name);
            console.log(i)
            i = (i!=null && i!="")?parseInt(i):0
            
            if(Math.floor(filecount)<parseInt(i)){
                alert("已经完成");
                return false;
            }else{
                //alert(i)
            }
            var xhr = new XMLHttpRequest();//第一步
            //新建一个FormData对象
            var formData = new FormData(); //++++++++++
            //追加文件数据
            
            //改变进度条
            pro.value=i+1;
            p=parseInt(i+1)*100/Math.ceil(filecount)
            persent.innerHTML=parseInt(p)+"%";
            //进度条
            
            
            if((filesize-i*setsize)>setsize){
                blobfile= resultfile.slice(i*setsize,(i+1)*setsize);
            }else{
                blobfile= resultfile.slice(i*setsize,filesize);
                formData.append('lastone', Math.floor(filecount));
            }
                formData.append('file', blobfile);
                //return false;
                formData.append('blobname', i); //++++++++++
    　　      formData.append('filename', resultfile.name); //++++++++++
                //post方式
                xhr.open('POST', "<?=url('/myfile_do')?>"); //第二步骤
                //发送请求
                xhr.send(formData);  //第三步骤
                stopbutton.innerHTML = "暂停"
                //ajax返回
                xhr.onreadystatechange = function(){ //第四步
            　　　　if ( xhr.readyState == 4 && xhr.status == 200 ) {
            　　　　　　console.log( xhr.responseText );
                        if(i<filecount){
                            xhr2();
                        }else{
                            i=0;
                        }       
            　　　　}
            　　};
                //设置超时时间
                xhr.timeout = 20000;
                xhr.ontimeout = function(event){
            　　　　alert('请求超时，网络拥堵！低于25K/s');
            　　}         
                
                i=i+1;
                setCookie(resultfile.name,i,365)
                
        }
        
        //设置cookie
        function setCookie(c_name,value,expiredays)
        {
            var exdate=new Date()
            exdate.setDate(exdate.getDate()+expiredays)
            document.cookie=c_name+ "=" +escape(value)+
            ((expiredays==null) ? "" : ";expires="+exdate.toGMTString()+";path=/")
        }
        //获取cookie
        function getCookie(c_name)
        {
        if (document.cookie.length>0)
          {
          c_start=document.cookie.indexOf(c_name + "=")
          if (c_start!=-1)
            { 
            c_start=c_start + c_name.length+1 
            c_end=document.cookie.indexOf(";",c_start)
            if (c_end==-1) c_end=document.cookie.length
            return unescape(document.cookie.substring(c_start,c_end))
            } 
          }
        return ""
        }
        
        
        function stopup(){
            if(stop==1){
                stop = 0
                
                xhr2();
            }else{
                stop = 1
                stopbutton.innerHTML = "继续"
                
            }
            
        }
</script>