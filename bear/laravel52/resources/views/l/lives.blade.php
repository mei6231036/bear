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
<!--[if lt IE 7]>      <html class="ie6" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 7]>         <html class="ie7" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 8]>         <html class="ie8" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 9]>         <html class="ie9" lang="zh-cmn-Hans"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="zh-cmn-Hans"><!--<![endif]-->
<head>
    <meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="虎牙16岁的少年只会玩游戏自由之战2直播，16岁的少年只会玩游戏与您分享自由之战2游戏乐趣。"/>
    <meta name="Keywords" content="16岁的少年只会玩游戏,自由之战2直播"/>
    <title>16岁的少年只会玩游戏自由之战2直播_16岁的少年只会玩游戏视频直播 - 虎牙直播</title>
    <link rel='canonical' href='http://www.huya.com/2086295479'>
    <link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/pages_modules_796de8d.css">
<link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/auto_combine_7dcee_c9f25b0.css">
<!--HEAD_END-->
    <script data-fixed="true">
        var TT_ROOM_DATA = {"type":"NORMAL","state":"ON","isOn":true,"isOff":false,"isReplay":false,"id":"37443540","sid":"37443540","channel":"37443540","liveChannel":"37443540","shortChannel":"37443540","isBluRay":"0","gameFullName":"\u81ea\u7531\u4e4b\u62182","gameHostName":"2830","screenType":"1","startTime":"1508151610","totalCount":"296","cameraOpen":"0","liveCompatibleFlag":"0","bussType":"3","isPlatinum":"0","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/171045e8515891a1bb46d67b14a93424d7193335509d","previewUrl":"null","gameId":"0","liveSourceType":"6","privateHost":"2086295479","recommendStatus":"0","popular":"0","gid":"2830","introduction":"\u4eca\u5929\u514d\u8d39\u53d1\u8d44\u683c\uff0c\u6ca1\u8d76\u7d27\u5b98\u65b9\u8981\u8d44\u683c"};var TT_PROFILE_INFO = {"sex":"1","lv":"7","lp":"1833665033","aid":42628332,"yyid":"2086295479","nick":"16\u5c81\u7684\u5c11\u5e74\u53ea\u4f1a\u73a9\u6e38\u620f","avatar":"http:\/\/huyaimg.msstatic.com\/avatar\/1055\/ce\/ba1578db4061bc8bc9971c2a384a62_180_135.jpg","fans":14,"host":"2086295479"};var TT_PLAYER_CFG = {"h5outstationDomain":"\/\/a.msstatic.com\/huya\/h5player\/outstation","flashVersion":"v3.2_17101602","useflash":"00","deleteOriginalPainting":"-1","homePageH5Ver":"1703151108","h5homeSdk":"1703061730","h5Advance":"68109060","homePagePlayerIncludeSDK":"1709011019","h5gopChannel":"78941969_2558924260,78941969_2592787562,90341987_2604539114,72858027,67547117_2579323162","h5outstationVer":"1709281040","h5PlayerP2PChannel":"90883382_2475865192,91689021_2551023555,99425467_2398843726,49104985_2482509468,16790087_2599307000,90883382_2573198696,45074242_2558167301,95431869_2376594057,99425467_2419243719,49077963_2467572720,77259038_2583762288,94525224,30765679","h5sdk":"\/\/a.msstatic.com\/huya\/h5player\/sdk\/","defaultFlashPlayer":"false","h5domain":"\/\/a.msstatic.com\/huya\/h5player\/room\/","flashAdvance":"30765679,10559898_2226043697,13510649_2507512826","h5PlayerP2PVersion":"1710161606","h5ver":"1710161007","h5hlssdkver":"hlssdk1709271819","h5PlayerIncludeSDK":"1710161007","flashDomain":"\/\/hyplayer.msstatic.com\/","h5PlayerAndHuyaSDKChannel":"15485075,30765679,94525224,49077963,20820993,1428945,58544517,48998726,52835508,73721406,66333161,1416268,12560616,68165505,61409448,77690206,22808102,73712507,34018787,27899470,16790087,77226790,50471404,88217434,82519582,92208917,69361899,95431869,99173389,90883382,65196990,95431869,81632069,36568194,78941969,57895512_2635055804,84165905,81475638,98157552,53699733","flashAdvanceVersion":"v3.2_17101602","h5ShareEntry":"\/\/a.msstatic.com\/huya\/h5player\/outstation\/guide.js","homepage":"hp_58","replayUseH5":"true","homePageH5":"true","advanceChannel":"10559898_2226043697,13510649_2507512826,40898516_2636492130","h5AdvanceVersion":"1704281623","homePageH5Domain":"\/\/a.msstatic.com\/huya\/h5player\/home\/","h5PlayerAndHuyaSDKVersion":"1710161023","h5sdkver":"1706131454"};
        var indexUrl = "http://www.huya.com/";
        var APP_URL = "http://www.huya.com/";
        var flashTime = new Date().getTime();
        var reportPageView = 'room';

        var hyPlayerConfig = {

                    "html5" : 1,
        
            "WEBYYHOST" : "http://weblbs.yystatic.com/",
            "WEBYYSWF" : "jsscene",
            "WEBYYFROM" : "",
            "vappid" : 10057
        };        var l_u = (function(){
            var arr = document.cookie.match(new RegExp("(^| )yyuid=([^;]*)(;|$)"));
            if (arr != null) return unescape(arr[2]);
            return '';
        })();
    </script>
</head>
<body class="on-normal">
        
    <!-- S 通用头部 -->
@include('layouts.common.header')
<script data-fixed="true">
var UDB_SDK_SWTICH = true;
</script>
    <!-- E 通用头部 -->
    
    <!-- S 正文主体内容 -->
<div class="main-wrap" id="J_mainWrap">
<div id="main_col">
    <div class="main-room" id="J_mainRoom">
        <div class="room-hd" id="J_roomHeader">
    <div class="room-hd-main">
        <div class="room-hd-main-r">
            <div class="host-control">
                <div class="btn-subscribe subscribe-entrance">
    <div class="subscribe-control clickstat" id="yyliveRk_game_newsBut" eid="click/zhibo/book" eid_desc="点击/直播间/订阅"><em></em>订阅</div>
    <em class="sub-arrow"></em>
    <div id="activityCount">14</div>
    <div class="entrance-expand subscribe-expand" style="display:none">
        <div class="entrance-expand-bor"></div>
        <em class="arrow"></em>
        <span class="entrance-expand-close" title="关闭"></span>
        <div class="subscribe-layer-wrap">
            
        </div>
    </div>
</div>

                <div class="host-control-other J_roomHdCtrlOther">
                                        <div class="illegal-report clickstat" eid="click/zhibo/jubao" eid_desc="点击/直播间/举报">
                        <em class="illegal-icon"></em>
                        <p class="host-control-text">举报</p>
                    </div>
                    
                    <div class="share-entrance" id="share-entrance">
                        <em class="share-entrance-icon"></em>
                        <p class="host-control-text">分享</p>
                        <div class="entrance-expand" id="pop-box-share">
                            
                        </div>
                    </div>

                    <div class="jump-to-phone">
                        <div class="jump-to-phone-hd">
                            <i></i>
                            <a class="clickstat" target="_blank" eid="click/zhibo/shouji" eid_desc="点击/直播间/手机看" href="//www.huya.com/download/">手机看</a>
                        </div>
                        <div class="jump-to-phone-bd">
                            <i class="arrow"></i>
                            <p class="jump-to-phone-bar"></p>
                            <div class="qrcode" id="jump-to-phone-qrcode"></div>
                            <div class="links">
                                <a class="links-1 clickstat" target="_blank" eid="click/zhibo/shouji/mobiledownload" eid_desc="点击/直播间/手机看/移动下载" href="//www.huya.com/download/">虎牙移动客户端</a>
                                <a class="links-2 clickstat" target="_blank" eid="click/zhibo/shouji/ipaddownload" eid_desc="点击/直播间/手机看/ipad下载" href="//www.huya.com/download/#ipad">虎牙iPad客户端</a>
                                <a class="links-3 clickstat" target="_blank" eid="click/zhibo/shouji/paddownload" eid_desc="点击/直播间/手机看/pad下载" href="//www.huya.com/download/#pad">虎牙Pad客户端</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /host-control-other -->
            </div>
        </div>
        <div class="room-hd-main-l">
            
<div class="host-pic">
    <img id="avatar-img" src="//huyaimg.msstatic.com/avatar/1055/ce/ba1578db4061bc8bc9971c2a384a62_180_135.jpg?418932" alt="16岁的少年只会玩游戏">
</div>
<div class="host-info">
   <h1 class="host-title">{{$arr['anchor_name']}}</h1>
    <div class="host-detail J_roomHdDetail">
            <span class="host-level" style="background-position:0 -551px"></span>
            <h3 class="host-name" title="{{$arr['name']}}">{{$arr['name']}}</h3>
        <span class="open-souhu clickstat" eid="click/zhibo/shouhu" eid_desc="点击/直播间/守护">守护主播</span>
            <span class="host-channel">
                <i class="host-busstype-icon"></i>
        <a class="host-spl clickstat" eid="click/zhibo/zbxx/pldj" eid_desc="点击/直播间/主播信息/品类" href="<?=url('/liit')?>?id={{ $data['id']}}" target="_blank"> {{$data['typename']}}</a> <span class="host-arrow"></span> <a target="_blank" href="http://www.huya.com/g/lol" class="host-spl clickstat" eid="click/zhibo/zbxx/yxdj" eid_desc="点击/直播间/主播信息/游戏"><h3 style="display: inline;">{{$arr['typename']}}</h3></a>
        </span>
                <span class="host-spectator"><i class="g-icon icon-host"></i><em class="host-spl" id="live-count">1,188,079</em></span>
        </div>
</div>        </div>
    </div>
    <div class="room-hd-aside">
        <div class="host-notice">
    <div class="notice-tit" title="主播公告"></div>
    <div class="notice-cont">{{$arr['content']}}</div>
</div>
    </div>
</div><div class="room-player-wrap">
    <div class="room-player-main" id="J_playerMain">
        <div class="room-player" id="liveRoomObj">
        </div>
    </div>
    <div class="room-sidebar">
        <!-- 周贡献榜s -->
    <div class="week-rank" id="J-weekRank">
        <div class="week-rank__hd clearfix" >
            <span class="week-rank__btn active">周贡榜</span>
            <span class="week-rank__btn">粉丝榜</span>
            <span class="week-rank__btn">带盐团</span>
        </div>
        <div class="week-rank__bd">
            <div class="week-rank__unit" style="display:block;">
                <ul id="week-rank-list">
                    <div class="week-rank-loading"></div>      
                </ul>
            </div>
            <div class="week-rank__unit">
                <ul id="fans-list">
                    <div class="week-rank-loading"></div>      
                </ul>
            </div>
            <div class="week-rank__unit">
                <div class="salt-rank loading" id="J_saltRank"></div>
            </div>
        </div>
    </div>
<!-- 周贡献榜e --> 

        <div class="chat-room" id="chatRoom">
    <div class="chat-room__hd tab_size_2">
        <span class="chat-room__tab current" tab_index="3">互动聊天</span>
                <span class="chat-room__tab clickstat" tab_index="4" eid="点击/直播间/贵宾席" eid_desc="click/zhibo/vip">现场贵宾(...)</span>
                                 
            </div>
    <div class="chat-room__bd chat-room__panel chat-room__bd3" style="display: block;">
        
                <div class="hd-wrap" id="hd-wrap"></div><!-- / 活动 -->
        
        <!-- S 聊天栏 -->
        <div id="watchChat_pub" class="chat-room__scroll">
            <div class="scroll_bar">
                <span class="scroll_move"></span>
            </div>
            <div class="chat-room__wrap" id="chat-room__wrap">
                <ul class="chat-room__list" id="chat-room__list">
                    
                </ul>
            </div>
        </div>

                <div class="hd-wrap_gift" id="hd-wrap_gift"></div><!-- / 活动礼物 -->
                
        <!-- E 聊天栏 -->
        <a id="more-msg" href="#" class="load-more-msg" >
            <i class="arrow"></i>
            <span>有更多新的消息</span>
        </a>
        <!-- 中奖信息 -->
        <div id="system-msg" style="display:none"><p>请勿轻信任何主播或个人提供的兼职信息，谨防受骗 <span class="close-system-btn" title="关闭">x</span></p></div>

    </div>
            <div class="chat-room__bd chat-room__bd4">
    <div class="current-peo-tit"><span class="current-peo-tip" id="js-current-peo-tip">开通贵族或守护成为贵宾</span><span class="open-guizu clickstat" eid="click/zhibo/guizu" eid_desc="点击/直播间/贵族">成为贵族</span></div>
    <div class="chat-roomOther__scroll">
        <ul id="chat-current-peo">
            <div style="text-align: center; padding-top: 50px; color:#999999">贵宾正在路上</div>
        </ul>
        <div class="current-peo-foot"></div>
    </div>
</div>
        </div>
        <div id="tipsOrchat">
            <div class="chat-room__ft">
    <div class="chat-emot" id="J_chatEmot"></div>
    <div class="chat-emotLnk" id="J_chatEmotLnk"></div>
    <div class="room-panel color-box" id="J-room-color-box">
        <i class="room-panel-arrow"></i>
        <div class="room-panel-hd">
            <h2 class="room-panel-title">粉丝弹幕</h2>
        </div>
        <div class="room-panel-bd">
            <ul class="color-list clearfix" id="J-color-list-fans"></ul>
        </div>
        <p class="color-des">成为主播粉丝，独享彩色弹幕</p>
    </div>

    <div class="room-panel room-speaking-box" id="J-room-speaking-box">
        <i class="room-panel-arrow"></i>
        <div class="room-panel-hd">
            <h2 class="room-panel-title">模式选择</h2>
        </div>
        <div class="room-panel-bd">
            <div class="room-speaking-unit clearfix">
                <div class="room-speaking-hd">位置：</div>
                <div class="room-speaking-bd">
                    <div class="room-speaking-position">
                        <ul class="room-select-list clearfix"></ul>
                    </div>
                </div>
            </div>
            <div class="room-speaking-unit clearfix">
                <div class="room-speaking-hd">大小：</div>
                <div class="room-speaking-bd">
                    <div class="room-speaking-font">
                        <ul class="room-font-list"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chat-room__ft__pannel">
        <div class="room-chat-tools">
            <i class="room-chat-tool room-chat-tool-smile" id="J_inputEmot"></i>
            <i class="room-chat-tool room-chat-tool-color" id="J-room-chat-color"></i>
            <i class="room-chat-tool room-chat-tool-font" id="J-room-chat-font" style="display: none;"></i>
        </div>
        <span class="msg-input-num">0/30</span>  
    </div>
    <div class="chat-room__ft__chat">
        <div class="chatNotice" id="pubNoticMe">
            <p></p>
            <a href="#" class="closeBtn">&times;</a>
        </div>
        <div class="chat-host-pic" href="javascript:void(0)" id="chatHostPic">
            <div class="chat-fansbadge chat-fansbadge-loading" id="J_chatFansBadge"></div>
            <div class="fansBadge-detail" id="J_fansBadgeDetail"></div>
            <div class="fansBadge-list" id="J_fansBadgeList"></div>
            <div class="fansBadge-tip" id="J_fansBadgeTip"></div>
        </div>
        <input type="hidden" id='hidden' name="" value="{{$user->nickname}}">
        <div class="chat-room__input">
            <div class="msg-input">
                <textarea rows="2" id="pub_msg_input"></textarea>
            </div>
            <span class="btn-sendMsg hiido_stat" id="msg_send_bt" hiido_code="10004279">发送</span>
        </div>
    </div>
</div>        </div>
    </div>
</div>
        <div class="youlike">
    <h2 class="youlike-title">
    	<i class="youlike-title-icon"></i>看官推荐
        <div class="youlike-ques">
            <div class="youlike-ques-cnt">看官推荐是参考了用户分享量的综合排序，在移动端的分享越多，排名越高哦！<span></span></div>
            <em></em>
        </div>
    	<div class="youlike-page">
    		<span class="youlike-prev disable new-clickstat" report='{"eid":"click/position","position":"room/cnxh/prevbtn"}'></span>
    		<span class="youlike-next new-clickstat" report='{"eid":"click/position","position":"room/cnxh/nextbtn"}'></span>
    	</div>
    </h2>
    <ul id="youlike-list" class="clearfix recom-list">
        <li style="text-align: center; margin-top: 120px;"><img src="//a.msstatic.com/huya/main/assets/img/loading.gif" alt=""></li> 
    </ul>
</div>
<div class="huya-video">
    <h2 class="huya-video-title"><i class="video-title-icon"></i>主播视频 <a href="http://v.huya.com/rank/all.html" class="more-video" target="_blank" title="热门视频榜" alt="热门视频榜"></a></h2>
    <ul id="huya-video" class="clearfix recom-list">
    	<li style="text-align: center; margin-top: 120px;"><img src="//a.msstatic.com/huya/main/assets/img/loading.gif" alt=""></li>
    </ul>
</div>        
            </div>
</div>
</div>
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

            <div class="sidebar-recom">
                     @foreach($cate as $val)
                    <div class="m sidebar-show-line ">
                    <a class="m-title clickstat" href="<?=url('/liit')?>?id={{ $val['val']['id'] }}" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1">
                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>
                        <span class="m-title-span">{{$val['val']['typename']}}</span>
                    </a>
                    <div class="m-bd">
                        <div class="recomend-list clearfix">
                        @foreach($val['child'] as $v)
                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="<?=url('/chliit')?>?id={{ $v['id'] }}" title="{{$v['typename']}}">{{$v['typename']}}</a>            
                        @endforeach
                        
                        </div>
                    </div>
                </div>
                @endforeach
                                            </div>
            <div class="sidebar-banner" style="display:none">
                <a target="_blank" class="sidebar-banner-link clickstat third-clickstat" id="sidebarBanner" eid="click/push/leftnaviad" eid_desc="点击/推荐/左侧导航推荐图">
                </a>
            </div>
        </div>
        <div class="sidebar-tool">
            <a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>
            <a target="_blank" class="toAnchor clickstat" eid="click/navi/zuoce/zhubo" eid_desc="点击/导航/左侧导航/我要做主播" href="http://www.huya.com//e/zhubo" title="我要直播"></a>
        </div>
        <a target="_blank" class="gov-jb clickstat" eid="click/navi/zuoce/jubao" eid_desc="点击/导航/左侧导航/举报" href="http://jb.ccm.gov.cn/" style="position: absolute;left: 14px;bottom: 80px; left: 80px; bottom: 55px; color: #666;">12318举报</a>
        <span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>
    </div>


</div>
    
    <script src="//a.msstatic.com/huya/main/lib/jq_ud_mod_4de7709.js" data-fixed="true"></script>
    <script src="//a.msstatic.com/huya/main/js/headerFunction_27495c9.js" data-fixed="true"></script>
    <script src="//a.msstatic.com/huya/main/lib/scrollpane_51f7a10.js" data-fixed="true"></script>
    <script src="//a.msstatic.com/huya/main/lib/jquery.lazyload_769f44a.js" data-fixed="true"></script>
    <script type="text/javascript" charset="utf-8" src="//a.msstatic.com/huya/main/pkg/room_common_ffb884f.js"></script>
<script type="text/javascript" charset="utf-8" src="//a.msstatic.com/huya/main/pkg/auto_combine_fc0d0_d980d71.js"></script>
<script type="text/javascript" >
require.resourceMap({"res":{"qrcode":{"url":"//a.msstatic.com/huya/main/modules/qrcode/qrcode_957981e.js"},"widget/salt_rank":{"url":"//a.msstatic.com/huya/main/widget/salt_rank/salt_rank_be249e8.js"},"widget/illegalReport":{"url":"//a.msstatic.com/huya/main/widget/illegalReport/illegalReport_823f04b.js"},"jumpToPhone":{"url":"//a.msstatic.com/huya/main/modules/jumpToPhone/jumpToPhone_3bc2064.js"},"processor":{"url":"//a.msstatic.com/huya/main/modules/processor/processor_074b4df.js"},"animation":{"url":"//a.msstatic.com/huya/main/modules/animation/animation_80f6f2d.js"},"gift":{"deps":["processor","animation"],"url":"//a.msstatic.com/huya/main/modules/gift/gift_ca76765.js"},"TextAreaHelper":{"url":"//a.msstatic.com/huya/main/modules/TextAreaHelper/TextAreaHelper_bedc489.js"},"chatEmot":{"deps":["TextAreaHelper"],"url":"//a.msstatic.com/huya/main/modules/chatEmot/chatEmot_329cb98.js"},"activity":{"url":"//a.msstatic.com/huya/main/modules/activity/activity_4657300.js"},"widget/userUpgradeTips":{"url":"//a.msstatic.com/huya/main/widget/userUpgradeTips/userUpgradeTips_5132f9b.js"},"widget/weekStar":{"url":"//a.msstatic.com/huya/main/widget/weekStar/weekStar_6998420.js"},"guessReport":{"url":"//a.msstatic.com/huya/main/modules/guessReport/guessReport_f1bd987.js"},"getPrize":{"url":"//a.msstatic.com/huya/main/modules/getPrize/getPrize_47539cd.js"},"postMessageEvent":{"url":"//a.msstatic.com/huya/main/modules/postMessageEvent/postMessageEvent_9983224.js"},"widget/recharge/payUtil.js":{"url":"//a.msstatic.com/huya/main/widget/recharge/payUtil_3bf10d0.js"},"widget/recharge":{"deps":["postMessageEvent","widget/recharge/payUtil.js"],"url":"//a.msstatic.com/huya/main/widget/recharge/recharge_705ccaa.js"},"topUpPayment":{"deps":["postMessageEvent"],"url":"//a.msstatic.com/huya/main/modules/topUpPayment/topUpPayment_28a01ff.js"},"firstRecharge":{"deps":["postMessageEvent"],"url":"//a.msstatic.com/huya/main/modules/firstRecharge/firstRecharge_bea6870.js"},"crossStorage":{"url":"//a.msstatic.com/huya/main/modules/crossStorage/crossStorage_cee61ff.js"},"watchHistory":{"deps":["crossStorage"],"url":"//a.msstatic.com/huya/main/modules/watchHistory/watchHistory_5dbfbbe.js"},"roomMakeMoney":{"url":"//a.msstatic.com/huya/main/modules/roomMakeMoney/roomMakeMoney_d0f527e.js"}},"pkg":{}});
</script>
<!--BODY_END-->
    <script data-fixed="true">
                var reportDescObj = {
            eid: "pageview/zhibo",
            eid_desc:"pageview/直播间"
        }
                require("app/room_normal");
    </script>
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
    <!-- S 直播间异步加载模块 -->
    <script type="text/javascript" data-fixed="true"> 
    var _hmt = _hmt || [];
    /*播放器ready完后才去加载*/
    window.TTP && TTP.ready(function () {
        function getScriptCache(url,callback,prop){

            var head = document.getElementsByTagName("head")[0] || document.documentElement;
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.async = true;
            script.charset = "utf-8";
            if(prop){
                for(var p in prop){
                    script.setAttribute(p,prop[p]);
                }
            }

            script.src = url;
            script.onload = script.onreadystatechange = function () {
                if (!script.readyState || /loaded|complete/.test(script.readyState)) {
                    callback && callback();
                    script.onload = script.onreadystatechange = null;
                    if (script.parentNode && !prop) {
                        script.parentNode.removeChild(script);
                    }
                }
            };
            head.insertBefore(script, null);
        }

        getScriptCache('//szhuodong.duowan.com/s/rp/ya-huya.min.js',function(){
            zhReport({
                rso: parseQueryString(location.href)['rso'] || parseQueryString(location.href)['from'] || "",
                rso_desc: parseQueryString(location.href)['rso_desc'] || "",
                eid: reportDescObj.eid,
                eid_desc: reportDescObj.eid_desc
            });

        },{
            pro : 'huya_web',
            id : 'yaScript'
        })

        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
    });






    window.onload = function () {  
        var ws = new WebSocket("ws://127.0.0.1:1234");  
  
        document.getElementById("msg_send_bt").onclick = function () {  

            var msg = document.getElementById("pub_msg_input").value;  
            var name = document.getElementById("hidden").value;  
            var data='{"name":"'+name+'","msg":"'+msg+'"}';
            ws.send(data);  
        };  
  
        ws.onopen = function () {  
            console.log("连接成功");  
            //  ws.send('raid');  
        };  
        ws.onmessage = function (e) {  
            document.getElementById("chat-room__list").innerHTML += "<h2>" + e.data + "</h2>";  
        };  
  
  
    };  
</script>    <!-- E 直播间异步加载模块 -->
</body>
</html>
