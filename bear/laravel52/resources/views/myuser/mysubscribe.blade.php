<!DOCTYPE html>
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="mysubscribe_files/admin.css">
        <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
        <link type="text/css" rel="stylesheet" href="css/auto_combine_a7d45_999daed.css">
        <link rel="stylesheet" type="text/css" href="css/my_auth.css">
        <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script src="mysubscribe_files/hm.js"></script><script type="text/javascript" src="mysubscribe_files/jquery-1.js"></script><script type="text/javascript">
    var dy;
    var liveUrl="http://www.huya.com/";
    var defaultProfile="http://www.huya.com/live2/statics/img/default_profile.jpg";
    $(window).load(function(){
        dy = new activity_util.activity("http://www.huya.com/");
    });     
</script>
<style>
    .box {margin: auto;left: auto;top: auto;float: inherit;display: block;}
    .box .box-bd{background: none;}
</style>
<link rel="stylesheet" type="text/css" href="mysubscribe_files/oldpop.css">
<link rel="stylesheet" href="mysubscribe_files/user_subscribe.css"> 
<link rel="stylesheet" type="text/css" href="mysubscribe_files/new_sub.css">
<script type="text/javascript" src="mysubscribe_files/jquery.js"></script>
<script type="text/javascript" src="mysubscribe_files/jquery_002.js"></script>
<script type="text/javascript" src="mysubscribe_files/activity.js"></script>
<script src="mysubscribe_files/jsflego.js"></script>
<script charset="utf-8" type="text/javascript" async="" src="mysubscribe_files/underscore_3d00f9f.js"></script><script charset="utf-8" type="text/javascript" async="" src="mysubscribe_files/header_search_tip_10ae642.js"></script></head>
<body>

   @include('layouts.common.header')
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
    var currentMenu = 'subscribe',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="mysubscribe_files/main_menu.js"></script>
<script type="text/javascript" src="mysubscribe_files/cookies.js"></script>
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
        <div class="scroll-content">
            <div class="mod mod-subscribe" id="subscribe_watch_wrap">
                <div class="mod-hd">
                    <h3>订阅与观看记录</h3>
                    <span style="left: 187px;">订阅了<i>2</i>个主播</span>
                </div>
                <div class="mod-bd">
                    <!-- 新修改 2014.10 {-->
                    <div class="mod-tab">
                        <div class="mod-tab-hd">
                            <ul class="mod-tab-trigger J_nav" id="subscribeWatchTab"> 
                                <li class="selected"><a href="javascript:void(0)">订阅</a></li>
                                <li class=""><a href="javascript:void(0)">观看记录</a></li>
                             </ul>
                        </div>

                        <!--订阅-->
                         <div class="mod-tab-bd J_content" style="display:block">
                            <div class="sub_tab" id="subscribeTab">
                                <!-- <a class="cur" class="" href="javascript:void(0)">游戏</a> -->
                            </div>
                            <div id="subscribeCont">
                                <div class="mod-tab-content">
                                   <ul class="sub_wrap" id="subWrap">
                                                                               <li class="item_l" data-link="http://www.huya.com/2054846654">
                                                                                        <div class="img_wrap">
                                                <img src="mysubscribe_files/2aa400e8c15c9a228d4ddd1e7fe9f0_180_135_002.jpg" onerror="this.onerror='';this.src='http://www.huya.com/live2/statics/img/default_profile.jpg'">
                                            </div>
                                            <div class="text_wrap">
                                                <p class="p_1">正恒YJ-神奇小王</p>
                                                <p class="p_2">不好意思 刚认识就喜欢你</p>
                                                                                                <p class="p_3">
                                                    13小时前&nbsp;&nbsp;直播了：                                                    <span class="game">星秀</span>
                                                                                                        <span class="sub_num">订阅：2.3万</span>
                                                    <a href="javascript:void(0);" class="cancel_sub" data-aid="1802219762" title="取消订阅">取消订阅</a>
                                                </p>
                                                                                            </div>
                                        </li>
                                                                                <li class="" data-link="http://www.huya.com/1359622510">
                                                                                        <div class="img_wrap">
                                                <img src="mysubscribe_files/default_profile.jpg" onerror="this.onerror='';this.src='http://www.huya.com/live2/statics/img/default_profile.jpg'">
                                            </div>
                                            <div class="text_wrap">
                                                <p class="p_1">秦楼月</p>
                                                <p class="p_2"></p>
                                                                                                <p class="p_3">
                                                    1个月前&nbsp;&nbsp;                                                    <span class="game"></span>
                                                                                                        <span class="sub_num">订阅：1</span>
                                                    <a href="javascript:void(0);" class="cancel_sub" data-aid="1246269532" title="取消订阅">取消订阅</a>
                                                </p>
                                                                                            </div>
                                        </li>
                                                                            </ul>
                                    
                                                                                    <script type="text/javascript">
    $(document).ready(function(){
        var indexUrl = '';
        var tmp=window.location.href;        

        page_util = {
            gotopage: function (currentPage) {
                var form = document.getElementById('pageForm');
                form.action=indexUrl;
                document.getElementById('pageForm_page').value=currentPage;
                form.submit();
            }
        }
    });
</script> 

                                                                        </div>
                            </div>
                        </div>
                        <!--end订阅-->

                        <!--观看记录-->
                         <div class="mod-tab-bd J_content" id="watch_history" style="display:none">
                            <span class="trash_bar"><em class="ico_trash"></em><a href="#" class="trash">清除观看记录</a></span>
                            
                            <div class="content_wrap">						<div class="cont_tit"><span class="txt">2017年9月29日</span></div>							<ul class="sub_wrap clearfix" style="padding-top:20px;"><li class="item_l" data-link="http://www.huya.com/2078617547" data-aid="42183157" data-uid="1825977883"><div class="img_wrap"><img src="mysubscribe_files/fb42ad96e5ae405a193353ba0f9194_180_135.jpg" onerror="this.onerror=null;this.src='http://develop.www.huya.com/live2/statics/img/default_profile.jpg'"></div><div class="text_wrap"><p class="p_1">众娱-小熙哥哥-90808</p><p class="p_2">上赛季亚服登顶 射手射频</p><p class="p_3">10天前&nbsp;&nbsp;直播了：<span class="game">绝地求生</span><a href="javascript:void(0);" class="his_sub" data-aid="1825977883">+订阅</a></p></div></li></ul>						</div><div class="content_wrap">						<div class="cont_tit"><span class="txt">2017年9月27日</span></div>							<ul class="sub_wrap clearfix" style="padding-top:20px;"><li class="item_l" data-link="http://www.huya.com/2094659816" data-aid="42620728" data-uid="1842036920"><div class="img_wrap"><img src="mysubscribe_files/9c01cc867d44d2ec227888356019c2_180_135.jpg" onerror="this.onerror=null;this.src='http://develop.www.huya.com/live2/statics/img/default_profile.jpg'"></div><div class="text_wrap"><p class="p_1">葛家小阿淼</p><p class="p_2">瞎玩～</p><p class="p_3">12天前&nbsp;&nbsp;直播了：<span class="game">颜值</span><a href="javascript:void(0);" class="his_sub" data-aid="1842036920">+订阅</a></p></div></li><li class="" data-link="http://www.huya.com/2054846654" data-aid="42379612" data-uid="1802219762"><div class="img_wrap"><img src="mysubscribe_files/2aa400e8c15c9a228d4ddd1e7fe9f0_180_135.jpg" onerror="this.onerror=null;this.src='http://develop.www.huya.com/live2/statics/img/default_profile.jpg'"></div><div class="text_wrap"><p class="p_1">正恒YJ-神奇小王</p><p class="p_2">不好意思 刚认识就喜欢你</p><p class="p_3">12天前&nbsp;&nbsp;直播了：<span class="game">星秀</span><a href="javascript:void(0);" class="his_sub" data-aid="1802219762">+订阅</a></p></div></li><li class="item_l" data-link="http://www.huya.com/1784069056" data-aid="28752192" data-uid="1579880025"><span class="live_icon">直播中</span><div class="img_wrap"><img src="mysubscribe_files/e79fdd1c2711e626b00e88a48353be_180_135.jpg" onerror="this.onerror=null;this.src='http://develop.www.huya.com/live2/statics/img/default_profile.jpg'"></div><div class="text_wrap"><p class="p_1">RD妍颜</p><p class="p_2">跳舞就得这样性感</p><p class="p_3">直播：<span class="game">星秀</span><span class="p_icon"></span><span>2298</span><a href="javascript:void(0);" class="his_sub" data-aid="1579880025">+订阅</a></p></div></li></ul>						</div><div class="content_wrap">						<div class="cont_tit"><span class="txt">2017年9月25日</span></div>							<ul class="sub_wrap clearfix" style="padding-top:20px;"><li class="item_l" data-link="http://www.huya.com/1486578378" data-aid="22788248" data-uid="1346609715"><span class="live_icon">直播中</span><div class="img_wrap"><img src="mysubscribe_files/3626ef611e990cbbcefab8e1bbc561_180_135.jpg" onerror="this.onerror=null;this.src='http://develop.www.huya.com/live2/statics/img/default_profile.jpg'"></div><div class="text_wrap"><p class="p_1">S7英雄联盟全球总决赛</p><p class="p_2">S7全球总决赛10月8日重播</p><p class="p_3">直播：<span class="game">英雄联盟</span><span class="p_icon"></span><span>48.7万</span><a href="javascript:void(0);" class="his_sub" data-aid="1346609715">+订阅</a></p></div></li></ul>						</div><div class="loading" id="watch_history_loading" style="display: none;"><em class="ico_loading"></em>下拉获取更多</div>
                            
                        </div>
                        <!--end 观看记录-->
                     </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="mysubscribe_files/mtv.js"></script>
    <script>
        //订阅主播
        var userId = "1842036920";
        document.body.scrollTop=0;

        $(function(){
            $('#subWrap').on('click','li',function(e){
                var link = $(this).data('link');
                window.open(link);
            });
            $('.cancel_sub').on('click',function(e){
                var that = $(this),
                    aid = that.data('aid');

                dy.activitySubscribe(aid,'Cancel');
                e.stopPropagation && e.stopPropagation();
                e.cancelBubble && e.cancelBubble();
            })
        });
    </script>
@include('layouts.common.footer')
<script src="mysubscribe_files/jsfmain.js"></script>
<script type="text/javascript" src="mysubscribe_files/ya-huya.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="mysubscribe_files/report_info.js"></script>
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
    <script type="text/javascript" src="mysubscribe_files/push-min.js"></script>
    <script type="text/javascript" src="mysubscribe_files/push.js"></script><!-- E 后台推送消息 -->

</body></html>
 <script src="js/headerFunction_c0fe602.js" data-fixed="true"></script>

<script src="js/jquery.lazyload_769f44a.js" data-fixed="true"></script>

<script type="text/javascript" charset="utf-8" src="js/auto_combine_d17e3_b03328c.js"></script>
<script src="js/jquery.js">   </script>