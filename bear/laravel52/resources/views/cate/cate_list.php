
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 7]>         <html class="ie7" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 8]>         <html class="ie8" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 9]>         <html class="ie9" lang="zh-cmn-Hans"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="zh-cmn-Hans"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>游戏直播_网络游戏直播_虎牙直播</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="热门游戏直播,高清游戏直播,游戏直播,网络游戏直播,手游直播,单机游戏直播,lol直播,dota2直播,虎牙直播"/>
<meta name="Description" content="虎牙为你提供高清游戏直播，包括LOL直播、dnf游戏直播、dota直播，24小时不间断直播更新，非一般游戏视觉与听觉体验尽在虎牙直播。"/>

<link rel='canonical' href='http://www.huya.com/g' />
<link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/pages_modules_33264e9.css">
<link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/auto_combine_82253_9a4c4e6.css">
<!--HEAD_END-->
<script data-fixed="true">
var APP_URL = "http://www.huya.com/";
</script>
</head>
<body>
<script data-fixed="true">var w=document.body.clientWidth;1480>w&&(document.body.className+=" w-1000");</script>
<!-- S 通用头部 -->
<div class="duya-header" id="duya-header">
<div class="duya-header-wrap clearfix">
<div class="duya-header-wrap clearfix">

<div class="duya-header-bd clearfix">

<h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">

<a href="http://www.huya.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img src="images/logo.png" alt="虎牙直播" width="120" height="36"></a>

</h1>

<div class="duya-header-nav">

<span class="hy-nav-link"><a href="<?=url('/') ?>" class="hy-nav-title clickstat" eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>

<span class="hy-nav-link"><a href="<?=url('/l')?>" class="hy-nav-title hiido_stat clickstat"  hiido_code="10004221" eid="click/navi/zhibo" eid_desc="点击/导航/直播">直播</a></span>

 <div class="hy-nav-expand">

<div class="hy-nav-title nav-main on" id="nav-main"><a href="<?=url('/cate')?>">分类</a><i class="icon-arrow"></i></div>

<div class="nav-expand-list nav-expand-game">

<i class="arrow"></i>
<!-- 111111111111 -->
<dl class="clearfix"><dt>系统推荐</dt>
<?php foreach ($res as $key => $val) { ?>
<dd>
<a class="clickstat" eid="click/navi/game/game1" eid_desc="点击/导航/游戏/游戏1" title="<?=$val['typename']?>" href="<?=url('/cate')?>?id=<?=$val['id']?>" target="_blank"><?=$val['typename']?></a>
</dd>
<?php } ?>
</dl>
<a href="<?=url('cate/index')?>" class="nav-expand-game-more" target="_blank">更多 <span>&gt;</span></a>
<!-- 111111111111 -->

</div>

</div>

<!-- <span class="hy-nav-link"><a href="http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->

</div>

  <div class="duya-header-search clearfix" id="J_duyaHdSearch" >

  <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.huya.com/search.php" target="_blank">

<input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">

<button type="submit" class="btn-search clickstat" eid="click/search/searchbutton" eid_desc="点击/搜索/搜索按钮"></button>

</form>

</div>

  <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic" eid_desc="点击/推荐/顶部导航图片"></div>

<div class="duya-header-control clearfix">

<div class="hy-nav-right hy-nav-kaibo">

<a class="hy-nav-title clickstat" href="http://www.huya.com/e/zhubo" eid="click/navi/kaibo" eid_desc="点击/导航/开播" target="_blank">

<i class="hy-nav-icon hy-nav-video-icon"></i>

<span class="title">开播</span>

</a>

<div class="nav-expand-list nav-expand-kaibo">

<i class="arrow"></i>

<div class="kaibo-nav">

<a target="_blank" href="http://www.huya.com/e/zhubo"><i class="hy-nav-video-icon"></i><span>我要开播</span></a>

<a target="_blank" href="#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>

</div>

</div>

</div>

<div class="hy-nav-right">

<a class="hy-nav-title clickstat" href="http://www.huya.com/download/" eid="click/navi/download" eid_desc="点击/导航/下载" target="_blank">

<i class="hy-nav-icon hy-nav-download-icon"></i>

<span class="title">下载</span>

</a>

<div class="nav-expand-list nav-expand-download">

<i class="arrow"></i>

<div class="download-nav">

<a target="_blank" href="http://www.huya.com/download/"><i class="hy-nav-app-icon"></i><span>移动APP</span></a>

<a target="_blank" href="http://www.huya.com/download/#players_pc"><i class="hy-nav-play-icon"></i><span>主播工具</span></a>

<!-- <a target="_blank" href="http://www.huya.com/download/#tv"><i class="hy-nav-tv-icon"></i><span>虎牙TV版</span></a> -->

</div>

</div>

</div>

<div class="hy-nav-right nav-subscribe success-login">

<a class="hy-nav-title new-clickstat" href="http://i.huya.com/index.php?m=Subscribe" target="_blank" report='{"eid":"click/position","position":"click/navi/dingyue"}'>

<i class="hy-nav-icon hy-nav-subscribe-icon"></i>

<span class="title">订阅</span>

</a>

<div class="nav-expand-list">

<i class="arrow"></i>

<div class="subscribe-hd clearfix" style="display:none;">

<h5>我订阅的有<em class="subscribe-key">0</em>个正在直播</h5>

</div>

<div class="subscribe-bd" style="display:none;">

<ul class="subscribe-list"></ul>

<a class="subscribe-all" href="http://i.huya.com/index.php?m=Subscribe" target="_blank">全部订阅</a>

</div>

<div class="mod-list-more">

<div class="more-loading">

<i class="icon-loading"></i>

<em>正在加载您的订阅...</em>

</div>

<div class="more-empty">

<i class="icon-empty"></i>

<p>暂无订阅的直播。<br/><em>你可以在主播的播放页进行订阅喔！</em></p>

</div>

</div>

</div>

</div>

<div class="hy-nav-right hy-nav-history">

<a class="hy-nav-title nav-history new-clickstat" id="nav-history" href="http://i.huya.com/index.php?m=Subscribe&watch=1" target="_blank" report='{"eid":"click/position","position":"click/navi/lishi"}'>

<i class="hy-nav-icon hy-nav-history-icon"></i>

<span class="title">历史</span>

</a>

<div class="nav-expand-list nav-expand-history">

<i class="arrow"></i>

<div class="load-history">

<div class="mod-list-more">

<div class="more-loading">

<i class="icon-loading"></i>

<em>正在加载您的历史...</em>

</div>

</div>                            

</div>

<a href="http://i.huya.com/index.php?m=Subscribe&watch=1" class="nav-expand-history-more J_gNavLogin" style="display:none" target="_blank">更多&gt;</a>

</div>

</div>

<div class="hy-nav-right un-login" style="display:block">

<div class="hy-nav-title">

<i class="hy-nav-icon hy-nav-login-icon"></i>

<div class="un-login-btn">

<a class="clickstat" id="nav-login" href="#" eid="click/navi/sign" eid_desc="点击/导航/登录">登录</a>

<i>|</i>

<a class="clickstat" id="nav-regiest" href="#" eid="click/navi/login" eid_desc="点击/导航/注册">注册</a>

</div>

</div>

</div>

<div class="hy-nav-right nav-user success-login">

<a class="nav-user-title" href="http://i.huya.com/" target="_blank">

<img id="login-userAvatar" src="images/10001.jpg" alt="头像" />

<span id="login-username"></span>

<i></i>

</a>

<div class="nav-expand-list">

<i class="arrow"></i>

<div class="tt-user-card">

<a class="btn-exit" id="nav-loggout" href="#"><i class="hy-nav-exit-icon"></i><span>退出</span></a>

<div class="u-info">

<a class="avatar" id="J_huyaNavUserCardAvatar" href="http://i.huya.com/" target="_blank">

<img src="images/10001.jpg" id="J_huyaNavUserCardAvatarImg" />

</a>

<p class="nick" id="J_huyaNavUserCardNick">...</p>

<p class="user-sign" id="J_huyaNavUserCardSign">...</p>

<div class="exp clearfix">

<div class="between">

<span class="from" id="J_huyaNavUserCardExpFrom">LV-</span>

<div class="bar-cnt">

<p id="J_huyaNavUserCardBarInfo"></p>

<p class="bar">

<i id="J_huyaNavUserCardExpBar"><b class="J_huyaNavUserCardExpText"></b></i>

<span class="J_huyaNavUserCardExpText"></span>

</p>

</div>

<span class="to" id="J_huyaNavUserCardExpTo">LV-</span>

</div>

</div>

</div>

<div class="u-assets">

<div class="bd">

<span class="type-name">资产</span>

<ul class="type">

<li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">...</em></li>

<li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk">...</em></li>

<li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb">...</em></li>

</ul>

<a class="topup new-clickstat" target="_blank" href="http://i.huya.com/?evt=recharge" report='{"eid":"click/position","position":"header/usercard/recharge"}'>充值</a>

</div>

</div>

<div class="u-task loading" id="J_huyaNavUserCardTask">

</div>

<div class="u-links">

<ul>

<li class="links-i">

<a href="http://i.huya.com/" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"header/usercard/entrance1"}'>                                        

<i></i>

<p>个人中心</p>

</a>

</li>

<li class="links-noble">

<a href="http://i.huya.com/index.php?m=NobleSys" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance2"}'>

<i></i>

<p>我的贵族</p>

</a>

</li>

<li class="links-msg" id="J_huyaNavUserMsg">

<a href="http://i.huya.com/index.php?m=Msg&do=listMsg" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance3"}'>

<i></i>

<p>我的消息</p>

</a>

<b class="dot" id="J_huyaNavUserMsgDot"></b>

</li>

<li class="links-play">

<a href="http://www.huya.com/e/zhubo" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance4"}'>

<i></i>

<p>我要直播</p>

</a>

</li>

</ul>

</div>

</div>

</div>

</div>

</div>

<div class="duya-header-tips">

<em class="close-tips">&times;</em>

<p class="tips-top">有新的直播内容，<span class="refresh-current">刷新看看</span></p>

<div id="refresh-wrap">

<h5>你订阅的主播信息</h5>

<div class="refresh-tips"></div>

<h6><input type="checkbox" id="checkTips"><label for="checkTips">今天内不提醒</label></h6>

</div>

</div>

</div>
</div>
</div>
</div>
<script data-fixed="true">
var UDB_SDK_SWTICH = true;
</script>
<!-- E 通用头部 -->

<div class="mod-sidebar">
<div class="sidebar-hide">
<ul class="sidebar-icon-list">
<li class="sidebar-icon-item">
<a class="sidebar-icon-link clickstat js-sub" href="http://i.huya.com/index.php?m=Subscribe" title="订阅" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅">
<i class="sidebar-icon-sub"></i>
<span class="sidebar-title">订阅</span>
</a>
</li>
<li class="sidebar-icon-item">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/l" title="直播" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播">
<i class="sidebar-icon-live"></i>
<span class="sidebar-title">直播</span>
</a>
</li>
<li class="sidebar-icon-item">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/g" title="分类" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏">
<i class="sidebar-icon-type"></i>
<span class="sidebar-title">分类</span>
</a>
</li>
<li class="sidebar-icon-item ">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100023" title="网游" eid="click/navi/zuoce/classify1" eid_desc="点击/导航/左侧导航/classify1">
<i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>
<span class="sidebar-title">网游</span>
</a>
</li>
<li class="sidebar-icon-item ">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100002" title="单机" eid="click/navi/zuoce/classify2" eid_desc="点击/导航/左侧导航/classify2">
<i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>
<span class="sidebar-title">单机</span>
</a>
</li>
<li class="sidebar-icon-item ">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100022" title="娱乐" eid="click/navi/zuoce/classify3" eid_desc="点击/导航/左侧导航/classify3">
<i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>
<span class="sidebar-title">娱乐</span>
</a>
</li>
<li class="sidebar-icon-item ">
<a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100004" title="手游" eid="click/navi/zuoce/classify4" eid_desc="点击/导航/左侧导航/classify4">
<i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>
<span class="sidebar-title">手游</span>
</a>
</li>
</ul>
<span id="sidebar-show-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/open"  eid_desc="点击/导航/左侧导航/展开"></span>
<a target="_blank" class="sidebar-icon-author" href="http://www.huya.com/e/zhubo">
<i></i>
<span>开直播</span>
</a>
<a href="http://jb.ccm.gov.cn/" target="_blank" style=" position: absolute;bottom: 70px;width: 100%;text-align: center;" class="gov-jb sq-gov-jb">举报</a>
</div>
<div class="sidebar-show">
<div id="sidebar-scroll">
<div class="sidebar-show-nav">
<a href="http://i.huya.com/index.php?m=Subscribe" class="clickstat sidebar-show-line js-sub" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅"><i class="sidebar-icon-sub"></i>我的订阅<span class="subscribe-text"> (请登录)</span></a>
<a href="http://www.huya.com/l" class="clickstat sidebar-show-line" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播"><i class="sidebar-icon-live"></i> 全部直播</a>
<a href="http://www.huya.com/g" class="clickstat sidebar-show-line" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏"><i class="sidebar-icon-type"></i>全部分类</a>
</div>

</div>
<div class="sidebar-tool">
<a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>
<span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>
</div>


</div>

<div class="js-responded-list narrow">
<div class="mod-list">
<div class="box">
<div class="box-hd clearfix">
<h2 class="title">
全部分类                    </h2>
<div class="filter">
<dl>
<dd bussType="0" class=" active all" ><a class="clickstat" href="http://www.huya.com/g" eid="click/list/allgame/all"   eid_desc="点击/列表页/全部游戏/全部">全部</a></dd>
<?php foreach ($cate as $key => $val) { ?>
<dd bussType="0" class=" active all" ><a class="clickstat" href="#" eid="click/list/allgame/all"   eid_desc="点击/列表页/全部游戏/全部"><?php echo $val->typename ?></a></dd>
<?php } ?>
</dl>
</div>
</div>

</div>
</div>
</div>
<!-- 
<script src="//a.msstatic.com/huya/main/lib/jq_ud_mod_4de7709.js" data-fixed="true"></script>
<script src="//hd.huya.com/huya_err_monitor/huyahiidoweb_err_monitor-min.js" id="huyahiido_err_monitor" act="webhuyaerror" pageview="gamelist" data-fixed="true"></script>
<script src="//a.msstatic.com/huya/main/js/headerFunction_c0fe602.js" data-fixed="true"></script>
<script type="text/javascript" charset="utf-8" src="//a.msstatic.com/huya/main/pkg/auto_combine_c4419_9392b35.js"></script> -->
<script>
require("app/game-list");
</script>
<!--BODY_END-->
<!-- S 页面公用功能 -->
<script type="text/javascript" src="//a.msstatic.com/huya/main/widget/sidebar/sidebarFunction_c28b9f0.js" data-fixed="true"></script>

<!-- S 后台推送消息 -->
<!--[if lte IE 7]>
<script  type='text/javascript' src='//www.huya.com/base/js/push/json3.min.js'></script>
<![endif]-->
<!--[if lte IE 9]>
<script type='text/javascript' src='//www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
<![endif]-->
<script data-fixed="true">
var PUSH_PROXY_URL="//channelproxy.huya.com/";
var WEB_PUSH_URL="webpush.huya.com";
var PUSH_ENABLE=true;//推送开关
var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS
var matchNoticeData=[];//赛事直播间预告数据
</script>
<script type='text/javascript' src='//www.huya.com/base/js/push/push-min.js?t=20170818'></script>
<script type='text/javascript' src='//www.huya.com/base/js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->
<script type="text/javascript" src="//szhuodong.duowan.com/s/rp/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" data-fixed="true">
(function(win){
var $win = $(win);
var reportTimer = null;

function report(){
var oHref = parseQueryString(location.href);
zhReport({
rso: oHref['rso'] || oHref['from'] || "",
rso_desc: oHref['rso_desc'] || "",
eid: "pageview/list",
eid_desc:"pageview/游戏列表"
});
}

$win.on('load.report',function(){
reportTimer && clearTimeout(reportTimer);
report();
});

reportTimer = setTimeout(function(){
$win.off('.report');
report();
}, 3500);

})(window); 
</script>
<!-- S 通用底部 -->
<script data-fixed="true">
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";
var s = document.getElementsByTagName("script")[0]; 
s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- E 通用底部 -->
</body>
</html>