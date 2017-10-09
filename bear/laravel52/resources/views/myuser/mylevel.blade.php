<!DOCTYPE html>
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="mylevel_files/admin.css">
        <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
        <link type="text/css" rel="stylesheet" href="css/auto_combine_a7d45_999daed.css">
        <link rel="stylesheet" type="text/css" href="css/my_auth.css">
        <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script src="mylevel_files/hm.js"></script><script type="text/javascript" src="mylevel_files/jquery-1.js"></script>
<link rel="stylesheet" href="mylevel_files/user_level_06514fd.css"><script charset="utf-8" type="text/javascript" async="" src="mylevel_files/underscore_3d00f9f.js"></script><script charset="utf-8" type="text/javascript" async="" src="mylevel_files/header_search_tip_10ae642.js"></script></head>
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
    var currentMenu = 'userlevel',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="mylevel_files/main_menu.js"></script>
<script type="text/javascript" src="mylevel_files/cookies.js"></script>
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
            <div class="mod">
                <div class="mod-hd">
                    <h3>等级成长</h3>
                </div>
                <div class="user-level-header">
                    <img class="header-img" src="mylevel_files/9c01cc867d44d2ec227888356019c2_180_135.jpg" width="95" height="95">
                    <div class="personal-information">
                        <p class="nick">
                            <span>葛家小阿淼</span>
                            <i class="user-level-icon user-level-icon-1"></i>
                        </p>
                        <div class="grow-level">
                            <span>LV1</span>
                            <p class="grow-level-contact">
                                <span class="grow-level-number">55/200</span>
                                <span class="grow-level-part" style="width:27.5%;"></span>
                            </p>
                            <span>LV2</span>
                        </div>
                                                    <p class="grow-level-gain">今日还可获得<span>200</span>&nbsp;点经验值</p>
                                            </div>
                </div>
                   
                <!-- 新手任务 -->
                    <div class="novice-task">
                        <div class="task-head">
                            <h4>新手任务</h4>
                            <p class="line"></p>
                        </div>
                        <ul class="task-content" id="task-content">
                                                            <li class="task-list task-id141">
                                    <img src="mylevel_files/xinshou_dingyue.png" alt="订阅主播" width="40" height="40">
                                    <div class="task-desc">
                                        <p>订阅主播</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">1/5</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id142">
                                    <img src="mylevel_files/xinshou_touxiang.png" alt="设置头像" width="40" height="40">
                                    <div class="task-desc">
                                        <p>设置头像</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                                                                        <!--  已完成 -->
                                            <div class="task-status ststus-received">
                                                <a href="javascript:;">已完成</a>
                                            </div>
                                                                                                            </li>
                                                            <li class="task-list task-id171">
                                    <img src="mylevel_files/xinshou_songli.png" alt="送出玉兔" width="40" height="40">
                                    <div class="task-desc">
                                        <p>送出玉兔</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">0/1</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id170">
                                    <img src="mylevel_files/xinshou_ewai.png" alt="额外奖励" width="40" height="40">
                                    <div class="task-desc">
                                        <p>额外奖励</p>
                                        <p class="task-desc-experience">(+30EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">1/3</a>
                                        </div>
                                                                    </li>
                                                    </ul>
                        <div class="novice-task-copyright">
                            <p>提示：领取新手任务全部奖励，即可开启每日推荐任务，获得更多经验值</p>
                        </div>
                    </div>
                                <!-- 快速升级 -->
                <div class="rapid-version">
                    <div class="task-head">
                        <h4>快速升级</h4>
                        <p class="line"></p>
                    </div>
                    <ul class="rapid-version-content">
                        <li>
                            <i class="rapid-version-list-1"></i>
                            <p class="rapid-version-list-title">做任务</p>
                            <p>完成每日任务推荐</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-2"></i>
                            <p class="rapid-version-list-title">领宝箱</p>
                            <p>每个宝箱都有经验值</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-3"></i>
                            <p class="rapid-version-list-title">送礼物</p>
                            <p>送给主播任意礼物</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-4"></i>
                            <p class="rapid-version-list-title">充金豆</p>
                            <p>金豆充值礼包经验多多</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-5"></i>
                            <p class="rapid-version-list-title">拥有特权</p>
                            <p>开通续费贵族/守护</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- 领取任务按钮弹窗 -->
<div class="box getTask" id="getTask">
    <div class="box-hd">
        <h3 class="title">任务-领取</h3>
        <a href="javascript:;" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont cont-tips">
            
        </div>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn">确定</a>
        </div>
    </div>
</div>
<div class="mask_bg"></div>
<script type="text/javascript" src="mylevel_files/user_level_13751e2.js"></script>
<script src="mylevel_files/footer.js"></script>
@include('layouts.common.footer')
<script src="mylevel_files/jsfmain.js"></script>
<script type="text/javascript" src="mylevel_files/ya-huya.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="mylevel_files/report_info.js"></script>
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
    <script type="text/javascript" src="mylevel_files/push-min.js"></script>
    <script type="text/javascript" src="mylevel_files/push.js"></script><!-- E 后台推送消息 -->

</body></html>
 <script src="js/headerFunction_c0fe602.js" data-fixed="true"></script>

<script src="js/jquery.lazyload_769f44a.js" data-fixed="true"></script>

<script type="text/javascript" charset="utf-8" src="js/auto_combine_d17e3_b03328c.js"></script>
<script src="js/jquery.js">   </script>