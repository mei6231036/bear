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
<!-- saved from url=(0029)http://i.huya.com/?m=UserInfo -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="./ren_files/admin.css">
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script src="./ren_files/hm.js.下载"></script><script type="text/javascript" src="./ren_files/jquery-1.7.2.min.js.下载"></script>
<script type="text/javascript">
	var p_nick = '不二臣';
    var p_sign = '';

    var eu = '';
    var user = 1;
    var indexUrl = 'http://i.huya.com/';
    var liveUrl = 'http://www.huya.com/';
    var loginType = 'qq';
</script>


<link href="./ren_files/userinfo_set.css" rel="stylesheet">

<style>.huya-footer{background-color:#202020;color:#7e7e7e;line-height:20px;text-align:center;font-family:"Microsoft YaHei"}.huya-footer a{outline:0}.huya-footer a:hover{color:#f80;text-decoration:none}.huya-footer a:focus{color:#999}.huya-footer__hd{width:1200px;margin:0 auto;font-size:12px;overflow:hidden;padding:40px 0;text-align:left}.huya-footer__hd a{color:gray}.huya-footer__hd *{-moz-box-sizing:border-box;box-sizing:border-box}.huya-footer_friend,.huya-footer_help{border-right:1px solid #303030}.huya-footer_friend dt,.huya-footer_help dt{font-size:14px;overflow-x:hidden;margin-bottom:10px;font-weight:800}.huya-footer_friend dd,.huya-footer_help dd{width:115px;float:left;margin-bottom:8px}.huya-footer_friend{float:left;width:231px}.huya-footer_help{float:left;width:170px;padding-left:40px}.huya-footer_prod{float:left;width:460px;padding-left:40px;border-right:1px solid #303030;overflow:hidden}.huya-footer_prod h2{font-size:14px;font-weight:800;margin-bottom:13px}.huya-footer_prod .huya-app_qrcode{width:110px;float:left;margin-right:20px;text-align:center}.huya-footer_prod .huya-app_qrcode .app_qrcode_img{width:106px;height:106px;margin-bottom:3px;background:url(//a.msstatic.com/huya/main/img/footer/app_qrcode_7d6b81a.png?__sprite) no-repeat}.huya-footer_prod_list{float:left;width:240px}.huya-footer_prod_list li{float:left;width:120px;height:24px;line-height:24px;margin-bottom:10px}.huya-footer_prod_list li i{width:24px;height:24px;float:left;margin-right:5px}.huya-footer_iphone{background:url(//a.msstatic.com/huya/main/img/footer/iphone_3c20efa.png?__sprite) no-repeat}.huya-footer_andriod{background:url(//a.msstatic.com/huya/main/img/footer/andriod_c22b467.png?__sprite) no-repeat}.huya-footer_tv{background:url(//a.msstatic.com/huya/main/img/footer/tv_bf81d47.png?__sprite) no-repeat}.huya-footer_pc{background:url(//a.msstatic.com/huya/main/img/footer/pc_599928e.png?__sprite) no-repeat}.huya-footer_ipad{background:url(//a.msstatic.com/huya/main/img/footer/ipad_afb1c24.png?__sprite) no-repeat}.huya-footer_pad{background:url(//a.msstatic.com/huya/main/img/footer/pad_cbfa8c1.png?__sprite) no-repeat}.huya-footer_wp{background:url(//a.msstatic.com/huya/main/img/footer/wp_853bb77.png?__sprite) no-repeat}.huya-footer_other{float:left;padding-left:40px;overflow:hidden}.huya-footer_other h2{font-size:14px;font-weight:800;margin-bottom:13px}.huya-footer_other .huya-pub_number{width:110px;float:left;margin-right:20px;text-align:center}.huya-footer_other .huya-pub_number .pub_number_img{width:106px;height:106px;margin-bottom:3px;background:url(//a.msstatic.com/huya/main/img/footer/pub_number_6c0cadb.png?__sprite) no-repeat}.footer_other_list{float:left;width:150px}.footer_other_list li{float:left;height:24px;line-height:24px;margin-bottom:10px}.footer_other_list li i{width:24px;height:24px;float:left;margin-right:5px}.huya-footer_sina{background:url(//a.msstatic.com/huya/main/img/footer/sina_e43972f.png?__sprite) no-repeat}.huya-footer_qieba{background:url(//a.msstatic.com/huya/main/img/footer/qieba_f54c249.png?__sprite) no-repeat}.huya-footer_qq{background:url(//a.msstatic.com/huya/main/img/footer/qq_70039f7.png?__sprite) no-repeat}.huya-footer__bd{padding:40px 0;font-size:12px;background:#0d0d0d}.huya-footer__bd p{margin-bottom:10px;color:#4f4f4f}.huya-footer__bd a{color:gray;padding:0 4px}.huya-footer__bd span{color:#7e7e7e}.huya-footer_friend,.huya-footer_help,.huya-footer_prod,.huya-footer_other{height:165px}.w-1000 .huya-footer_friend,.w-1000 .huya-footer_help,.w-1000 .huya-footer_prod,.w-1000 .huya-footer_other{height:290px}.w-1000 .huya-footer__hd{width:1000px}.w-1000 .huya-footer_friend{width:120px}.w-1000 .huya-footer_help{width:140px;padding-left:30px}.w-1000 .huya-footer_prod{width:430px;padding-left:30px}.w-1000 .huya-footer_other{padding-left:30px}</style><style>@charset "UTF-8"; .admin-icon{display:inline-block;width:16px;height:16px;background:url(//a.msstatic.com/huya/main/img/fangguan-icon_55e2395.png) no-repeat}.admin-icon-0{background-position:0 0}.admin-icon-1{background-position:0 -16px}.noble-icon{width:19px;height:20px;float:left;_display:inline;margin:3px 5px 0 10px;background:url(//a.msstatic.com/huya/main/img/guizu-icon_2bce6ff.png) no-repeat}.noble-level-6{background-position:0 0}.noble-level-5{background-position:0 -23px}.noble-level-4{background-position:0 -50px}.noble-level-3{background-position:0 -76px}.noble-level-2{background-position:0 -101px}.noble-level-1{background-position:0 -126px}.level-icon{display:inline-block;width:22px;height:11px;background:url(//a.msstatic.com/huya/main/img/level_sprite_d76323b.png) no-repeat}.level-icon0{background-position:0 0}.level-icon1{background-position:0 -11px}.level-icon2{background-position:0 -22px}.level-icon3{background-position:0 -33px}.level-icon4{background-position:0 -44px}.level-icon5{background-position:0 -55px}.level-icon6{background-position:0 -66px}.level-icon7{background-position:0 -77px}.level-icon8{background-position:0 -88px}.level-icon9{background-position:0 -99px}.level-icon10{background-position:0 -110px}.level-icon11{background-position:0 -121px}.level-icon12{background-position:0 -132px}.level-icon13{background-position:0 -143px}.level-icon14{background-position:0 -154px}.level-icon15{background-position:0 -165px}.level-icon16{background-position:0 -176px}.level-icon17{background-position:0 -187px}.level-icon18{background-position:0 -198px}.level-icon19{background-position:0 -209px}.level-icon20{background-position:0 -220px}.level-icon21{background-position:0 -231px}.level-icon22{background-position:0 -242px}.level-icon23{background-position:0 -253px}.level-icon24{background-position:0 -264px}.level-icon25{background-position:0 -275px}.level-icon26{background-position:0 -286px}.level-icon27{background-position:0 -297px}.level-icon28{background-position:0 -308px}.level-icon29{background-position:0 -319px}.level-icon30{background-position:0 -330px}.level-icon31{background-position:0 -341px}.level-icon32{background-position:0 -352px}.level-icon33{background-position:0 -363px}.level-icon34{background-position:0 -374px}.level-icon35{background-position:0 -385px}.level-icon36{background-position:0 -396px}.level-icon37{background-position:0 -407px}.level-icon38{background-position:0 -418px}.level-icon39{background-position:0 -429px}.level-icon40{background-position:0 -440px}@-webkit-keyframes scale-in-ease{0%{opacity:0;-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}100%{opacity:1;-webkit-transform:scale(1) perspective(1200px);transform:scale(1) perspective(1200px)}}@keyframes scale-in-ease{0%{opacity:0;-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}100%{opacity:1;-webkit-transform:scale(1) perspective(1200px);transform:scale(1) perspective(1200px)}}@-webkit-keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,.61,.355,1);animation-timing-function:cubic-bezier(0.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,.61,.355,1);animation-timing-function:cubic-bezier(0.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.duya-header .m-reddot{display:inline-block;width:8px;height:8px;overflow:hidden;border-radius:50%;background:#FC4040}.duya-header .nav-user .nav-expand-list{-webkit-transform-origin:80% 0;transform-origin:80% 0;-webkit-animation:scale-in-ease cubic-bezier(.22,.58,.12,.98) .5s;animation:scale-in-ease cubic-bezier(.22,.58,.12,.98) .5s}.tt-user-card{position:relative;width:320px;padding:10px 10px 0;word-wrap:normal}.tt-user-card a{color:#666}.tt-user-card a:hover{color:#ff630e;text-decoration:none}.tt-user-card .loading{background:url(//a.msstatic.com/huya/main/img/header/user_card/loading_00ef871.gif) no-repeat 50%}.tt-user-card .btn-exit{position:absolute;top:10px;right:15px;vertical-align:top}.tt-user-card .btn-exit i{vertical-align:top;margin:2px 5px 0 0}.tt-user-card .btn-exit span{display:inline-block;vertical-align:top}.tt-user-card .u-info .avatar{display:block;position:relative;width:60px;height:60px;margin:0 auto}.tt-user-card .u-info .avatar img{width:100%;height:100%;border-radius:50%}.tt-user-card .u-info .avatar i{position:absolute;right:0;bottom:0}.tt-user-card .u-info .user-sign{text-align:center;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis}.tt-user-card .u-info .user-sign .edit_sign{background:url(//a.msstatic.com/huya/main/img/header/user_card/edit_sign_0f9e283.png) no-repeat 2px 2px;padding-left:20px}.tt-user-card .u-info .nick{text-align:center;margin-top:5px;font-size:14px;color:#555}.tt-user-card .u-info .nick span{display:inline-block}.tt-user-card .u-info .nick .level-icon{margin-left:3px}.tt-user-card .u-info .nick .gender{display:inline-block;width:12px;height:12px;background:url(//a.msstatic.com/huya/main/img/header/user_card/female_5476ac0.png) no-repeat center center;margin-left:3px}.tt-user-card .u-info .nick .gender1{background:url(//a.msstatic.com/huya/main/img/header/user_card/male_5a4944a.png) no-repeat center center}.tt-user-card .u-info .exp{margin-top:15px}.tt-user-card .u-info .exp .between{line-height:15px;text-align:center}.tt-user-card .u-info .exp .between .from,.tt-user-card .u-info .exp .between .to,.tt-user-card .u-info .exp .between .bar-cnt{display:inline-block;vertical-align:middle}.tt-user-card .u-info .exp .between .bar-cnt{position:relative}.tt-user-card .u-info .exp .between .bar-cnt:hover #J_huyaNavUserCardBarInfo{display:block}#J_huyaNavUserCardBarInfo{position:absolute;top:-42px;left:-25px;width:262px;height:44px;background:url(//a.msstatic.com/huya/main/img/header/user_card/bar-info_f0a6b36.png) no-repeat;color:#333;text-align:center;line-height:38px;display:none}#J_huyaNavUserCardBarInfo em{color:#f80}.tt-user-card .u-info .exp .between .bar{float:left;position:relative;z-index:1;width:220px;height:15px;overflow:hidden;margin:0 5px;border-radius:8px;background:#ECECEC;color:#666;text-align:center}.tt-user-card .u-info .exp .between .bar i{position:absolute;z-index:22;left:0;top:0;display:block;width:0;height:100%;overflow:hidden;background:#FE8800;-webkit-transition:all .5s ease-out;transition:all .5s ease-out}.tt-user-card .u-info .exp .between .bar i b{display:block;width:220px;height:100%;color:#fff;font-weight:400}.tt-user-card .u-info .exp .between .bar span{position:relative;z-index:11}.tt-user-card .u-assets{margin-top:20px;color:#555}.tt-user-card .u-assets .bd:before,.tt-user-card .u-assets .bd:after{display:table;content:''}.tt-user-card .u-assets .bd:after{clear:both}.tt-user-card .u-assets .type-name{float:left;font-size:14px;margin-right:15px;line-height:18px}.tt-user-card .u-assets .type{float:left;width:215px;overflow:hidden;white-space:nowrap}.tt-user-card .u-assets .type li{float:left;margin-right:10px}.tt-user-card .u-assets .type li i{display:inline-block;vertical-align:top}.tt-user-card .u-assets .type li i.gold-bean{width:15px;height:16px;background:url(//a.msstatic.com/huya/main/img/header/user_card/b_0fb99b5.png)}.tt-user-card .u-assets .type li i.gold-ticket{width:22px;height:14px;background:url(//a.msstatic.com/huya/main/img/header/user_card/a_5ed73db.png)}.tt-user-card .u-assets .type li i.silver-bean{width:15px;height:16px;background:url(//a.msstatic.com/huya/main/img/header/user_card/c_01c53b1.png)}.tt-user-card .u-assets .type li em{display:inline-block;line-height:18px;margin-left:3px;vertical-align:top}.tt-user-card .u-assets .type li.type-ticket{margin-top:2px}.tt-user-card .u-assets .type li.type-ticket em{line-height:14px}.tt-user-card .u-assets .topup{float:right;line-height:18px;padding:1px 8px;border-radius:9px;background:#f80;color:#fff}.tt-user-card .u-assets .topup:hover{color:#fff;background:#FF9821}.tt-user-card .u-task{margin-top:15px;min-height:100px}.tt-user-card .u-task .task-mod{border-top:1px solid #ECECEC}.tt-user-card .u-task .task-mod .mod-hd{height:40px;zoom:1}.tt-user-card .u-task .task-mod .mod-hd:before,.tt-user-card .u-task .task-mod .mod-hd:after{display:table;content:''}.tt-user-card .u-task .task-mod .mod-hd:after{clear:both}.tt-user-card .u-task .task-mod .mod-bd{}.tt-user-card .u-task .task-mod .mod-hd .mod-more{float:right;margin-top:10px}.tt-user-card .u-task .task-mod .mod-hd .mod-more i{font-family:\5b8b\4f53;padding-left:3px}.tt-user-card .u-task .task-mod .mod-tit{float:left;line-height:40px;font-size:14px;color:#555}.tt-user-card .u-task .task-mod .mod-tit i{width:16px;height:17px;background:url(//a.msstatic.com/huya/main/img/header/user_card/task-icon_4cb58a1.png);float:left;margin:11px 5px 0 0}.tt-user-card .u-task .task-mod .mod-tit .new{color:#fff;background:#fc4040;padding:0 3px;border-radius:10px;font-size:12px;height:15px;line-height:13px;display:inline-block;margin-left:5px}.tt-user-card .u-task .task-mod .task-icon{display:inline-block;width:50px;height:50px}.tt-user-card .u-task .task-mod .task-icon img{width:100%;height:100%;border-radius:50%}.tt-user-card .u-task .task-mod .task-icon i{display:table-cell;width:50px;height:50px;background:#FE8800;border-radius:50%;vertical-align:middle;text-align:center}.tt-user-card .u-task .task-mod .task-icon i:after{display:inline-block;vertical-align:middle;content:""}.tt-user-card .u-task .task-mod .task-icon i.icon-avatar:after{width:21px;height:24px;background:url(//a.msstatic.com/huya/main/img/header/user_card/e_fdd07d2.png)}.tt-user-card .u-task .task-mod .task-icon i.icon-follow:after{width:24px;height:22px;background:url(//a.msstatic.com/huya/main/img/header/user_card/f_2e598f1.png)}.tt-user-card .u-task .task-mod .task-icon i.icon-phone:after{width:17px;height:24px;background:url(//a.msstatic.com/huya/main/img/header/user_card/g_7c1eeea.png)}.tt-user-card .u-task .task-mod .task-icon i.icon-award:after{width:21px;height:23px;background:url(//a.msstatic.com/huya/main/img/header/user_card/d_6b069fc.png)}.tt-user-card .u-task .task-novice{color:#555}.tt-user-card .u-task .task-novice .tasks{zoom:1}.tt-user-card .u-task .task-novice .tasks:before,.tt-user-card .u-task .task-novice .tasks:after{content:'';display:table}.tt-user-card .u-task .task-novice .tasks:after{clear:both}.tt-user-card .u-task .task-novice .tasks li{float:left;width:24.9%;text-align:center;position:relative}.tt-user-card .u-task .task-novice .tasks li .m-reddot{position:absolute;top:0;left:53px}.tt-user-card .u-task .task-novice .tasks .task-name{margin-top:3px}.tt-user-card .u-task .task-novice .tasks .task-btn{display:inline-block;margin-top:8px;line-height:20px;padding:0 10px;border-radius:10px;min-width:3em;color:#fff;white-space:nowrap}.tt-user-card .u-task .task-novice .tasks .task-btn:hover{color:#fff}.tt-user-card .u-task .task-novice .tasks .task-btn.get{color:#f80;border:1px solid;cursor:pointer}.tt-user-card .u-task .task-novice .tasks .task-btn.get.disable{background:#bbb!important}.tt-user-card .u-task .task-novice .tasks .task-btn.get:hover{background:#f80;color:#fff}.tt-user-card .u-task .task-novice .tasks .task-btn.done{background:url(//a.msstatic.com/huya/main/img/header/user_card/done_7c57877.png) no-repeat 14px 2px;cursor:default;color:#87c138;padding-left:30px}.tt-user-card .u-task .task-novice .tasks .task-btn.ing{background:url(//a.msstatic.com/huya/main/img/header/user_card/ing_0b05446.png) no-repeat 14px 2px;cursor:default;color:#999;padding-left:30px}.tt-user-card .u-task .task-novice .tasks .task-btn.active{background:#8BE1D2;color:#fff;-webkit-animation-name:bounceIn;animation-name:bounceIn;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.tt-user-card .u-task .task-alldone{height:100px;background:url(//a.msstatic.com/huya/main/img/header/user_card/all-done_36a3b1d.png) no-repeat center 10px}.tt-user-card .u-task .open-task-days{width:218px;height:28px;color:#f80;line-height:28px;text-align:center;border:1px solid;margin:0 auto 15px;border-radius:25px;cursor:pointer}.tt-user-card .u-task .open-task-days:hover{background:#fff9f3}.tt-user-card .u-task .task-days{}.tt-user-card .u-task .task-days .tasks{height:90px;margin-bottom:-12px;overflow:hidden}.tt-user-card .u-task .task-days .tasks li{color:#777;margin-bottom:12px;overflow:hidden;line-height:18px;position:relative}.tt-user-card .u-task .task-days .tasks .m-reddot{position:absolute;top:0;left:14px}.tt-user-card .u-task .task-days .tasks .icon{float:left;width:18px;height:18px;overflow:hidden;margin-right:5px}.tt-user-card .u-task .task-days .tasks .icon-a{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/a_ca03e92.png)}.tt-user-card .u-task .task-days .tasks .icon-b{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/b_e3810de.png)}.tt-user-card .u-task .task-days .tasks .icon-c{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/c_dcab508.png)}.tt-user-card .u-task .task-days .tasks .icon-d{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/d_50c5d92.png)}.tt-user-card .u-task .task-days .tasks .icon-e{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/e_a8b2105.png)}.tt-user-card .u-task .task-days .tasks .icon-f{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/f_bc936bc.png)}.tt-user-card .u-task .task-days .tasks .icon-g{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/g_afa9671.png)}.tt-user-card .u-task .task-days .tasks .icon-h{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/h_4e2388d.png)}.tt-user-card .u-task .task-days .tasks .icon-i{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/i_a4a1d45.png)}.tt-user-card .u-task .task-days .tasks .icon-j{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/j_d478059.png)}.tt-user-card .u-task .task-days .tasks .icon-k{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/k_65fe18d.png)}.tt-user-card .u-task .task-days .tasks .icon-l{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/l_2a34c9a.png)}.tt-user-card .u-task .task-days .tasks .icon-m{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/m_8177ccc.png)}.tt-user-card .u-task .task-days .tasks .icon-n{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/n_a2b9ea3.png)}.tt-user-card .u-task .task-days .tasks .icon-o{background:url(//a.msstatic.com/huya/main/img/header/user_card/icon/o_5732644.png)}.tt-user-card .u-task .task-days .tasks .tit{float:left;font-size:14px;max-width:12em;white-space:nowrap;word-wrap:normal;overflow:hidden;text-overflow:ellipsis}.tt-user-card .u-task .task-days .tasks .exp-num{float:left;margin-left:3px;font-size:14px;color:#87C138}.tt-user-card .u-task .task-days .tasks .status{float:right}.tt-user-card .u-task .task-days .tasks .status .status-ing{display:inline-block;position:relative;line-height:18px;min-width:30px;text-align:center;padding-left:22px}.tt-user-card .u-task .task-days .tasks .status .status-ing:before{position:absolute;content:"";left:0;top:0;width:18px;height:18px;overflow:hidden;background:url(//a.msstatic.com/huya/main/img/header/user_card/ing_0b05446.png)}.tt-user-card .u-task .task-days .tasks .status .status-done{display:inline-block;position:relative;line-height:18px;min-width:30px;text-align:center;padding-left:22px}.tt-user-card .u-task .task-days .tasks .status .status-done:before{position:absolute;content:"";left:0;top:0;width:18px;height:18px;overflow:hidden;background:url(//a.msstatic.com/huya/main/img/header/user_card/done_7c57877.png)}.tt-user-card .u-task .task-days .tasks .status .status-get{display:inline-block;line-height:18px;min-width:50px;border-radius:10px;text-align:center;color:#f80;border:1px solid;cursor:pointer}.tt-user-card .u-task .task-days .tasks .status .status-get:hover{background:#f80;color:#fff}.tt-user-card .u-task .task-days .tasks .status .status-get.disable{background:#bbb}.tt-user-card .u-task .task-days .tasks .status .status-get.active{background:#8BE1D2;color:#fff;-webkit-animation-name:bounceIn;animation-name:bounceIn;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.tt-user-card .u-links{padding-top:20px;margin-top:15px;background:#fbfbfb;position:relative;height:65px;margin-left:-10px;border-radius:0 0 5px 5px;width:340px}.tt-user-card .u-links ul{zoom:1}.tt-user-card .u-links ul:before,.tt-user-card .u-links ul:after{content:'';display:table}.tt-user-card .u-links ul:after{clear:both}.tt-user-card .u-links li{float:left;width:24.9%}.tt-user-card .u-links li a{display:block;text-align:center}.tt-user-card .u-links li a:hover i{background-position:0 bottom}.tt-user-card .u-links li i{display:inline-block}.tt-user-card .u-links li.links-i i{width:24px;height:24px;background:url(//a.msstatic.com/huya/main/img/header/user_card/i_66969a9.png)}.tt-user-card .u-links li.links-noble i{width:22px;height:23px;margin-top:1px;background:url(//a.msstatic.com/huya/main/img/header/user_card/l_649fc85.png)}.tt-user-card .u-links li.links-msg i{width:24px;height:20px;margin-top:4px;background:url(//a.msstatic.com/huya/main/img/header/user_card/m_cc70756.png)}.tt-user-card .u-links li.links-play i{width:24px;height:20px;margin-top:4px;background:url(//a.msstatic.com/huya/main/img/header/user_card/h_c5a5492.png)}.tt-user-card .u-links li.links-msg{position:relative}.tt-user-card .u-links li.links-msg .dot{display:none;position:absolute;right:25px;top:3px;width:8px;height:8px;overflow:hidden;background:red;border-radius:50%}@-webkit-keyframes flipX{from{z-index:444;-webkit-transform:perspective(800px) rotate3d(1,0,0,-180deg);transform:perspective(800px) rotate3d(1,0,0,-180deg)}to{-webkit-transform:perspective(800px) rotate3d(1,0,0,0deg);transform:perspective(800px) rotate3d(1,0,0,0deg);z-index:111}}@keyframes flipX{from{z-index:444;-webkit-transform:perspective(800px) rotate3d(1,0,0,-180deg);transform:perspective(800px) rotate3d(1,0,0,-180deg);-ms-transform:perspective(800px) rotate3d(1,0,0,180deg)}to{-webkit-transform:perspective(800px) rotate3d(1,0,0,0deg);transform:perspective(800px) rotate3d(1,0,0,0deg);z-index:111}}@-webkit-keyframes slideDown{from{height:170px}to{height:770px}}@keyframes slideDown{from{height:170px}to{height:770px}}.huya-login-box{display:none}.account-login-mask{z-index:20000;position:fixed;top:0;left:0;-moz-opacity:.5;opacity:.5;filter:alpha(opacity=50);background-color:#000;width:100%;height:100%;zoom:1}.login-box a{color:#333}.login-box a:hover{text-decoration:none}.login-box{position:fixed;left:50%;top:50%;margin:-174px 0 0 -260px;z-index:20001;width:520px;background:#fff;box-shadow:3px 3px 10px rgba(0,0,0,.3);border-radius:3px;font-family:"Microsoft Yahei"}.login-box .login{position:relative;padding:10px 20px;background:url(//a.msstatic.com/huya/main/img/header/login/login_bg_b2df113.jpg) bottom right no-repeat}.login-box #login-tab{position:relative}.login-box .login-title{position:absolute;top:12px;left:5px;width:100px;color:#333;font-size:16px;line-height:28px;font-weight:400}.login-box .login-hd{position:relative;font-size:18px;line-height:38px;height:38px;border-bottom:2px solid #d8d8d8}.login-hd .tab-btn{display:inline-block;width:80px;text-align:center;cursor:pointer;font-size:18px;color:#333}.login-hd .tab-btn.active,.login-hd .tab-btn:hover{color:#ff630e}.login-hd .line{position:absolute;left:0;top:38px;height:2px;width:80px;background:#ff630e;-webkit-transition:left .5s cubic-bezier(0.175,.885,.32,1.175);transition:left .5s cubic-bezier(0.175,.885,.32,1.175)}.login-box .login-bd{min-height:268px}.login-bd .tab-unit{display:none}.login-view{height:180px}.login-box .register-tab{display:none;padding-bottom:20px}.login-box .login-sidebar{position:absolute;top:64px;right:40px;padding-left:32px;height:255px;border-left:1px solid #f0f0f0}.login-sidebar .title{color:#909090;font-size:14px;line-height:32px;font-weight:400}.login-box .login-close{position:absolute;right:20px;top:20px;width:13px;height:13px;background:url(//a.msstatic.com/huya/main/img/header/login/close_1e00d96.png?__sprite);cursor:pointer}.login-box .login-wran-tip{position:absolute;right:10px;bottom:10px;color:#777;font-size:12px}.login-box .warn-link{color:#777}.login-box .warn-link:hover{text-decoration:none}.other-login{font-size:12px}.other-login .login-btn{display:block;padding-left:14px;width:111px;height:36px;line-height:36px;color:#fff;border-radius:2px;margin-bottom:15px;text-align:left;cursor:pointer}.other-login .login-btn .icon{float:left;width:22px;height:18px;margin:9px 4px 0 0}.other-login .login-btn.login-btn-wechat{background:#46c33d}.other-login .login-btn.login-btn-wechat .icon{background:url(//a.msstatic.com/huya/main/img/header/login/login_wechat_02b4b91.png?__sprite)}.other-login .login-btn.login-btn-wechat:hover{background:#4fcd46}.other-login .login-btn.login-btn-wechat:active{background:#43be3a}.other-login .login-btn.login-btn-qq{background:#3fa6ee}.other-login .login-btn.login-btn-qq .icon{background:url(//a.msstatic.com/huya/main/img/header/login/login_qq_9c61a69.png?__sprite)}.other-login .login-btn.login-btn-qq:hover{background:#46b0fa}.other-login .login-btn.login-btn-qq:active{background:#46a4e6}.other-login .login-btn.login-btn-weibo{background:#f75b66}.other-login .login-btn.login-btn-weibo .icon{background:url(//a.msstatic.com/huya/main/img/header/login/login_weibo_2db8e7b.png?__sprite)}.other-login .login-btn.login-btn-weibo:hover{background:#ff646f}.other-login .login-btn.login-btn-weibo:active{background:#f25661}#use-mail,#use-phone{color:#666;cursor:pointer}.udbsdk_frm{position:relative;z-index:333}.login-loading{display:none;position:absolute;top:45%;left:155px;width:16px;height:16px;background:url(//a.msstatic.com/huya/main/assets/img/loading.gif) no-repeat}.duya-header{width:100%;left:0;top:0;z-index:999;position:relative;font-size:12px;line-height:1.5;font-family:"Microsoft YaHei";-webkit-backface-visibility:hidden;backface-visibility:hidden}.duya-header-wrap{background:#fff;border-bottom:1px solid #e2e2e2;box-shadow:0 0 6px rgba(0,0,0,.06)}.duya-header .mod-list-more{margin:15px 0}#duya-header-logo{position:absolute;left:0;top:7px}#duya-header-logo img{vertical-align:top;max-width:none}.duya-header-nav{margin-left:150px;float:left;height:100%}.hy-nav-link{float:left;color:#999;font-size:14px;position:relative;margin:10px 5px 0}.hy-nav-link a{color:#555;height:30px;line-height:29px;padding:0 12px;font-size:18px;display:block}.duya-header-on{background:#f80;border-radius:20px}.hy-nav-link:hover a,.duya-header-on a,.duya-header-on:hover a{text-decoration:none;background:#f80;border-radius:20px;color:#fff}.duya-header-wrap .un-login .hy-nav-title:hover{color:#666}.duya-header-wrap .un-login .un-login-btn{float:left;padding-right:10px;white-space:nowrap}.duya-header-wrap .un-login a{color:#666}.duya-header-wrap .un-login a:hover{color:#ff630e;text-decoration:none}.duya-header-wrap .hy-nav-expand{float:left;font-size:14px;color:#999;position:relative;margin:10px 0 0 5px}.hy-nav-expand .hy-nav-title{cursor:pointer;display:block;line-height:30px;*line-height:38px;max-width:118px;height:50px;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis;z-index:100;font-size:16px;position:relative}.hy-nav-expand .hy-nav-title span{white-space:nowrap;line-height:28px}.hy-nav-expand .hy-nav-title a{height:30px;line-height:29px;color:#555;display:block;padding:0 12px;font-size:18px}.hy-nav-expand .hy-nav-title a:hover{text-decoration:none}.hy-nav-expand .icon-arrow{position:absolute;top:14px;*top:18px;right:6px;width:9px;height:5px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAMAgMAAADNMn8wAAAABGdBTUEAALGPC/xhBQAAAAlQTFRFAAAAmZmZ/4gA6JZjqgAAAAF0Uk5TAEDm2GYAAAAwSURBVAjXYwgNdWAQDWVgYA1hYGAMYGBgcGCAg1WrGhi0VjEwcK1gYGBaABRoYAAAk+gGuxuRTswAAAAASUVORK5CYII=) no-repeat;*background:url(//a.msstatic.com/huya/main/img/header/header_arrow_1c31771.png) no-repeat}.duya-header-wrap .hy-nav-expand:hover .icon-arrow{background-position:0 bottom}.duya-header-wrap .hy-nav-expand:hover .icon-msg{display:none}.duya-header-wrap .nav-main .icon-arrow{right:12px;-webkit-transition:.5s -webkit-transform;transition:.5s transform}.duya-header-wrap .hy-nav-expand:hover .nav-main .icon-arrow{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.duya-header-wrap .hy-nav-expand .nav-main.hy-nav-title{height:36px;padding-right:22px}.duya-header-wrap .hy-nav-expand .nav-main.on a,.duya-header-wrap .hy-nav-expand a:hover{color:#fff;background:#f80;border-radius:20px}.duya-header-wrap .nav-expand-link{white-space:nowrap;word-break:keep-all}.duya-header-wrap .nav-expand-link a{display:inline-block;line-height:32px;padding:0 5px;color:#616161;font-size:14px;text-align:left}.duya-header-wrap .nav-expand-link a.pre-title{color:#323232}.duya-header-wrap .nav-expand-link a:hover{color:#f80;text-decoration:none}.duya-header-wrap .nav-host-link a{display:block;height:32px;padding:0 15px;color:#616161;white-space:nowrap}.duya-header-wrap .nav-host-link a:hover{color:#ff6d00;text-decoration:none}.duya-header-wrap .nav-host-link span{display:inline-block;zoom:1;vertical-align:top;margin-top:7px}#head-my-message{position:relative}#head-my-message b{width:6px;height:6px;border-radius:50%;background:#ff2b08;right:20px;top:13px;*top:11px;position:absolute;display:none}.duya-header-wrap .nav-host-link .hy-nav-i-icon{margin:8px 6px 0 0}.duya-header-wrap .nav-host-link .hy-nav-msg-icon{margin:9px 7px 0 0}.duya-header-wrap .nav-host-link .hy-nav-exit-icon{margin:8px 6px 0 0}.duya-header-wrap .duya-header-control{position:absolute;right:0;top:0}.duya-header-control .hy-nav-link a,.duya-header-control .hy-nav-title{font-size:12px;color:#ddd}.duya-header-control .nav-expand-link{padding:3px 10px 0}.nav-expand-list{position:absolute;display:none;top:35px;left:0;z-index:99;padding:0 8px 10px;background-color:#fff;border-top:2px solid #f80;box-shadow:0 3px 8px 2px rgba(1,1,1,.25);border-radius:0 0 5px 5px}.hy-nav-expand:hover .nav-expand-list{display:block}.duya-header-control .nav-expand-list{padding:0;min-width:120px;top:40px}.duya-header-wrap .nav-expand-game{width:250px;padding:15px;left:-100px}.w-1000 .hy-nav-kaibo{display:none}.duya-header-wrap .nav-expand-kaibo{display:none!important;left:-30px;padding:10px 0}.nav-expand-kaibo .kaibo-nav a{display:block;height:32px;padding:0 15px;color:#616161;white-space:nowrap}.nav-expand-kaibo .kaibo-nav .hy-nav-home-icon{margin:8px 5px 0 0}.nav-expand-kaibo .kaibo-nav .hy-nav-video-icon{margin:10px 5px 0 0}.nav-expand-kaibo .kaibo-nav span{display:inline-block;zoom:1;vertical-align:top;margin-top:7px}.nav-expand-kaibo .kaibo-nav a:hover{color:#ff6d00;text-decoration:none}.duya-header-wrap .nav-expand-download{left:-30px;padding:10px 0}.nav-expand-download .download-nav a{display:block;height:32px;padding:0 15px;color:#616161;white-space:nowrap}.nav-expand-download .download-nav .hy-nav-app-icon{margin:9px 8px 0 0}.nav-expand-download .download-nav .hy-nav-play-icon{margin:10px 5px 0 0}.nav-expand-download .download-nav .hy-nav-tv-icon{margin:10px 5px 0 0}.nav-expand-download .download-nav span{display:inline-block;zoom:1;vertical-align:top;margin-top:7px}.nav-expand-download .download-nav a:hover{color:#ff6d00;text-decoration:none}.duya-header-wrap .nav-expand-history{width:260px;left:-140px;padding:13px 0}.duya-header-wrap .nav-expand-history .arrow{left:170px}.load-history{padding-left:13px}.history-bd{padding:10px 0;border-left:1px solid #ececec}.history-hd em{float:left;width:7px;height:16px;margin:2px 0 0 -1px;background:url(//a.msstatic.com/huya/main/img/history-icon_b602d50.png) no-repeat 0 -87px}.history-bd li{padding-left:5px;height:30px;overflow:hidden;zoom:1;line-height:30px}.history-bd li:hover{background:#f5f5f5}.history-bd li:hover .close-history-li{display:none}.history-bd li em{background-image:url(//a.msstatic.com/huya/main/img/history-icon_b602d50.png);float:left;margin:8px 5px 0}.history-bd li em.pc{width:16px;height:16px}.history-bd li em.phone{width:17px;height:16px;margin-top:7px;background-position:0 -18px}.history-bd li em.web{width:16px;height:16px;background-position:0 -105px;margin-top:6px}.history-bd li em.live{width:16px;height:16px;background-position:0 -38px}.history-bd li em.notlive{width:16px;height:16px;background-position:0 -124px}.history-bd li a{display:block;color:#666;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis;-webkit-transition:color .2s ease-out;transition:color .2s ease-out}.history-bd li .history-nick{float:left;width:130px;color:gray;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis}.history-bd li a:hover{color:#f80;text-decoration:none}.history-type{float:right;padding-right:5px;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis;color:#ff9000;width:65px}.nav-expand-history-null{text-align:center}.nav-expand-history-null i{display:inline-block;zoom:1;width:50px;height:61px;background:url(//a.msstatic.com/huya/main/img/header/sprite/cry_2066174.png?__sprite)}.nav-expand-history-null span{display:inline-block;zoom:1;vertical-align:top;padding:22px 0 0 .8em}.nav-expand-history-more{display:none;height:24px;line-height:24px;color:#555;text-align:center;background:#e6e6e6;font-size:12px;border-radius:3px;width:240px;margin:10px auto 0}.nav-expand-history-more:hover{text-decoration:none;background:#ff7e00;color:#fff}.nav-expand-game dl{margin:0 -5px 5px 0}.nav-expand-game dt{margin-bottom:5px;color:#f80}.nav-expand-game dd{float:left;margin:0 5px 5px 0}.nav-expand-game dd a{display:block;width:78px;height:22px;border:1px solid #e3e7e8;text-align:center;line-height:22px;border-radius:3px;text-decoration:none;color:#666;font-size:12px;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis}.nav-expand-game dd a:hover{color:#fff;background:#f80;border:1px solid #f80;border-radius:3px!important}.nav-expand-game-more{height:24px;line-height:24px;display:block;color:#fff;text-align:center;background:#ff7e00;font-size:12px;border-radius:3px;margin-bottom:10px}.nav-expand-game-more span{font-family:simsun}.nav-expand-game-more:hover{text-decoration:none;color:#fff;border-radius:3px!important}.nav-expand-game img{width:250px;height:60px;border-radius:3px}.nav-subscribe{margin-right:4px}.nav-subscribe .nav-expand-list{width:252px;left:-70px;padding:0 0 13px}.nav-subscribe .nav-expand-list .arrow{left:100px}.nav-subscribe .subscribe-hd h5{padding:0 0 0 15px;color:#323232;line-height:45px;font-size:14px}.nav-subscribe .subscribe-hd em{color:#ff6d00}.nav-subscribe .subscribe-hd a{float:right;padding:0;color:#323232;line-height:16px}.nav-subscribe .subscribe-hd a:hover{color:#ff6d00;text-decoration:none}.nav-subscribe .subscribe-bd{width:252px}.subscribe-bd .video-link{display:block;height:50px;padding:5px 15px;color:#666}.subscribe-bd .video-link:hover{background:#eee;text-decoration:none;color:#ff630e}.subscribe-bd .video-link .avatar{float:left;width:50px;height:50px;overflow:hidden;position:relative}.subscribe-bd .video-link .avatar span{position:absolute;width:40px;height:18px;line-height:18px;text-align:center;color:#fff;bottom:2px;left:5px;border-radius:10px;background:#f80}.subscribe-bd .video-link .avatar img{width:100%;height:100%}.subscribe-bd .video-link .info{overflow:hidden;zoom:1;padding-left:10px}.subscribe-bd .video-link .name{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;word-wrap:normal;line-height:2}.subscribe-bd .video-link .other{color:#999}.subscribe-bd .video-link .game{float:left;max-width:95px;height:20px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;word-wrap:normal}.subscribe-bd .video-link .count{float:right}.subscribe-bd .video-link .count i{float:left;margin:2px 6px 0 0;width:14px;height:12px;background:url(//a.msstatic.com/huya/main/img/header/sprite/people_icon_47727dc.png?__sprite)}.subscribe-bd .subscribe-all{display:block;margin:16px auto 0;width:220px;height:24px;text-align:center;line-height:24px;color:#666;background:#f5f5f5;text-decoration:none}.subscribe-bd .subscribe-all:hover{background:#ff9000;color:#fff}.duya-header-search{float:left;margin:10px 0 0 20px;position:relative}.duya-header-search input{border-radius:20px;border:1px solid #e0e0e0;padding:4px 26px 4px 12px;width:140px;height:20px;line-height:20px;color:#999;outline:0;font-size:12px}.duya-header-search input:focus{color:#444;border-color:#FF8A00}.duya-header-search .btn-search{position:absolute;right:3px;top:1px;height:30px;width:26px;cursor:pointer;border:0;outline:0;background-image:url(//a.msstatic.com/huya/main/img/header/sprite/search_btn_2cb16c3.png?__sprite);background-color:transparent}.duya-header-search .btn-search:hover{background-image:url(//a.msstatic.com/huya/main/img/header/sprite/search_btn_hover_ba7250f.png?__sprite);background-color:transparent}.duya-header .duya-header-tips{top:50px}.header-search-tips{position:absolute;width:180px;background-color:#fff;border:1px solid #e0e0e0;font-size:12px;box-shadow:0 3px 8px 2px rgba(1,1,1,.1);border-radius:5px}.header-search-tips li{line-height:30px;height:30px;color:#666;overflow:hidden;cursor:pointer;padding:0 15px}.header-search-tips li:hover{color:#666;background-color:#ececec}.header-search-tips .his-items em{width:14px;height:14px;text-align:center;line-height:14px;display:inline-block;background:url(//a.msstatic.com/huya/main/img/header/sprite/search_icon_8e4e036.png?__sprite);margin-right:8px;vertical-align:middle;*display:inline;*zoom:1}.header-search-tips .his-items .del-item-link{float:right;padding:0 5px;height:30px;margin-right:-5px}.header-search-tips .his-items .del-item-link span{display:inline-block;*display:block;*margin-top:12px;vertical-align:middle;width:8px;height:7px;background:url(//a.msstatic.com/huya/main/img/header/sprite/search_clear_69b8269.png?__sprite);text-indent:-9999em}.header-search-tips .clear-his-btn{display:block;width:150px;height:25px;background-color:#e6e6e6;text-align:center;line-height:25px;margin:6px auto 8px;border-radius:2px;color:#555}.header-search-tips .clear-his-btn:hover{color:#fff;background:#ff6d00;text-decoration:none}.header-search-tips .his-items-line{height:0;border-bottom:1px solid #e6e6e6;margin-bottom:6px}.header-search-tips .search-items em{width:16px;height:16px;text-align:center;line-height:16px;font-size:12px;display:inline-block;*display:inline;*zoom:1;background:#d8d8d8;color:#666;border-radius:8px;margin-right:8px}.header-search-tips .search-items em.top-item{background:#ff6d00;color:#fff}.header-search-tips .search-item-hover{color:#666;background-color:#ececec}.header-search-tips .search-tips-icon{position:absolute;top:-14px;left:10px;width:0;height:0;border:7px solid #e0e0e0;border-color:transparent transparent #e0e0e0}.duya-header-bd{width:1440px;margin:0 auto;height:49px;position:relative}.duya-header-bd .success-login,.duya-header-bd .un-login{display:none}.duya-header-tips{position:absolute;display:none;right:0;width:230px;border:1px solid #feb;padding:0 20px 0 10px;box-shadow:0 4px 9px 0 rgba(1,1,1,.08);background-color:#fffee1;zoom:1;font-size:14px;font-family:"Microsoft YaHei"}.duya-header-tips:after,.duya-header-tips:before{content:"";display:table;line-height:0}.duya-header-tips:after{clear:both}.duya-header-tips.appear-tips{display:block}.duya-header-tips p{line-height:26px}.duya-header-tips p.tips-top{display:none;line-height:36px}.duya-header-tips h5{line-height:30px;border-top:1px solid #feb;margin-top:-1px;padding-top:5px;color:#666;font-size:14px;font-weight:400}.duya-header-tips h6{color:#666;font-size:14px;line-height:24px;margin-bottom:5px;font-weight:400}.duya-header-tips h6 label{display:inline-block;vertical-align:middle;cursor:pointer}.duya-header-tips h6 input{margin-right:5px;display:inline-block;vertical-align:middle}.duya-header-tips .refresh-tips{display:none}.duya-header-tips .refresh-tips a,.duya-header-tips .refresh-tips em{vertical-align:middle}.duya-header-tips .refresh-tips span{max-width:110px;margin-right:5px;display:inline-block;vertical-align:middle;white-space:nowrap;word-wrap:normal;overflow:hidden;-ms-text-overflow:ellipsis;text-overflow:ellipsis}.duya-header-tips #refresh-wrap{display:none}.duya-header-tips .refresh-current{cursor:pointer;color:#00a384}.duya-header-tips .refresh-current:hover{color:#00b08c}.duya-header-tips .close-tips{position:absolute;display:block;font-size:18px;width:24px;height:36px;line-height:36px;text-align:center;right:0;top:0;color:#6f6f6f;cursor:pointer}.subscribe-list{position:relative;overflow:hidden;*zoom:1}.subscribe-list:after,.subscribe-list:before{content:"";display:table;line-height:0}.subscribe-list:after{clear:both}.clearfix{*zoom:1}.clearfix:after,.clearfix:before{content:"";display:table;line-height:0}.clearfix:after{clear:both}.mod-list-more{font-size:14px;color:#3a3a3a;text-align:center}.mod-list-more .icon-loading{vertical-align:middle;display:inline-block;background:url(//a.msstatic.com/huya/main/assets/img/loading.gif) no-repeat;width:16px;height:16px;margin-right:4px}.mod-list-more .more-empty,.mod-list-more .more-end{display:none}.mod-list-more .more-end{line-height:44px;background:#ebebeb}.mod-list-more .more-empty p{color:#323232;font-size:14px;display:inline-block;*display:inline;*zoom:1;vertical-align:middle;text-align:left}.mod-list-more .more-empty em{font-size:12px;color:#aeaeae}.mod-list-more .icon-empty{display:inline-block;*display:inline;*zoom:1;vertical-align:middle;width:40px;height:40px;background:url(//a.msstatic.com/huya/main/assets/img/pic-global.png) -155px -117px no-repeat;margin-right:0}.duya-header-wrap .arrow{position:absolute;top:-7px;left:50%;width:14px;height:7px;margin-left:-7px;background:url(//a.msstatic.com/huya/main/img/header/sprite/extand_arrow_d4b1e44.png?__sprite)}.hy-nav-right .arrow{*top:-30px}.hy-nav-right{float:left;margin-top:5px;color:#999;position:relative;height:45px}.hy-nav-right .title{padding-right:10px}.hy-nav-right .hy-nav-title:hover{color:#ff630e;text-decoration:none}.hy-nav-right .hy-nav-title{display:block;padding-top:6px;line-height:28px;text-align:center;color:#666}.duya-header .nav-user .nav-expand-list{right:0;left:auto}.duya-header .nav-user .nav-expand-list .arrow{left:auto;right:50px}.duya-header .nav-user{margin-left:15px;max-width:122px}.duya-header .nav-user .nav-user-title{display:block;position:relative;padding:5px 12px 0 0;color:#666;white-space:nowrap;word-wrap:normal}.duya-header .nav-user .nav-user-title:hover{color:#ff630e;text-decoration:none}.duya-header .nav-user .nav-user-title img{width:30px;height:30px;border-radius:50%}.duya-header .nav-user .nav-user-title span{display:inline-block;zoom:1;max-width:6em;overflow:hidden;vertical-align:top;padding-top:6px;white-space:nowrap;text-overflow:ellipsis;word-wrap:normal}.duya-header .nav-user .nav-user-title .m-reddot{display:none;position:absolute;top:4px;left:20px}.duya-header .nav-user .nav-user-title i{position:absolute;top:17.5px;right:0;width:9px;height:5px;overflow:hidden;background:url(//a.msstatic.com/huya/main/img/header/sprite/arrow_96ff8fa.png?__sprite);-webkit-transition:.5s -webkit-transform;transition:.5s transform}.duya-header .nav-user:hover .nav-user-title{color:#ff630e}.duya-header .nav-user:hover .nav-user-title i{background:url(//a.msstatic.com/huya/main/img/header/sprite/arrow_on_93c9208.png?__sprite);-webkit-transform:rotate(180deg);transform:rotate(180deg)}.nav-history a{cursor:pointer}.hy-nav-right:hover .nav-expand-list{display:block}.hy-nav-icon{float:left;margin:7px 5px 0 10px;width:16px;height:16px;cursor:pointer}.hy-nav-login-icon{width:15px;background:url(//a.msstatic.com/huya/main/img/header/sprite/login_icon_6f62803.png?__sprite);cursor:default}.hy-nav-subscribe-icon{background:url(//a.msstatic.com/huya/main/img/header/sprite/sub_icon_64c78f3.png?__sprite)}.hy-nav-history-icon{background:url(//a.msstatic.com/huya/main/img/header/sprite/history_icon_0c54ba8.png?__sprite)}.hy-nav-download-icon{width:16px;height:15px;margin-top:6px;background:url(//a.msstatic.com/huya/main/img/header/sprite/download_icon_1694aff.png?__sprite)}.hy-nav-app-icon{width:12px;height:16px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/app_icon_dbc1cde.png?__sprite)}.hy-nav-video-icon{height:14px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/video_icon_b88efdf.png?__sprite)}.hy-nav-home-icon{display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/home_icon_3df1c05.png?__sprite)}.hy-nav-play-icon{width:16px;height:13px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/play_icon_ac54361.png?__sprite)}.hy-nav-tv-icon{width:16px;height:14px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/tv_icon_c88b931.png?__sprite)}.hy-nav-i-icon{width:16px;height:16px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/i_icon_cd39286.png?__sprite)}.hy-nav-exit-icon{width:17px;height:15px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/exit_icon_4e89f84.png?__sprite)}.hy-nav-msg-icon{width:16px;height:15px;display:inline-block;zoom:1;background:url(//a.msstatic.com/huya/main/img/header/sprite/msg_icon_f2278a9.png?__sprite)}.duya-header-wrap .icon-msg{width:5px;height:5px;display:inline-block;position:absolute;top:16px;right:19px;background:url(//a.msstatic.com/huya/main/assets/img/pic-global.png) -77px -8px no-repeat}.w-1000 .duya-header-bd{width:1000px}.huya-header-box{display:none;position:fixed;border:1px solid #e1e1e1;border-top:2px solid #ff630e;border-radius:4px;font-family:"Microsoft YaHei";background:#fff;z-index:1111}.huya-header-box .hd{position:relative;height:39px;line-height:39px;color:#333;padding-left:16px;border-bottom:1px solid #eee}.huya-header-box .tip{font-size:14px}.huya-header-box .close{position:absolute;width:11px;height:11px;top:14px;right:19px;background-image:url(//a.msstatic.com/huya/main/img/header/tip/close_e22dbb9.png?__sprite);cursor:pointer}.browser-box{width:498px;padding-bottom:48px}.browser-box .title-pic{margin:28px auto 0;width:365px;height:29px;background:url(//a.msstatic.com/huya/main/img/header/tip/title_8fc8736.png?__sprite)}.browser-box .desc{margin-top:13px;text-align:center;color:#666;font-size:12px;line-height:18px}.browser-box .browser-list{padding:22px 0 0 12px}.browser-box .browser-item{float:left;padding-top:12px;width:232px;text-align:center}.browser-box .name{margin-top:6px;font-size:14px;line-height:18px}.browser-box .link{display:block;margin:0 auto;width:80px;height:80px}.browser-box .browser-sougou{border-right:1px solid #eee}.browser-box .browser-sougou .link{background-image:url(//a.msstatic.com/huya/main/img/header/tip/sougou_f2cf7a6.png?__sprite)}.browser-box .browser-chrome .link{background-image:url(//a.msstatic.com/huya/main/img/header/tip/chrome_5870eca.png?__sprite)}.browser-box .download{display:block;margin:15px auto 0;width:100px;height:34px;color:#fff;text-align:center;line-height:34px;border-radius:2px;background:#ff8a00;text-decoration:none}.browser-box .download:hover{background:#ff630e}.duya-header-gg{float:left;padding-left:20px;height:100%;max-width:200px;overflow:hidden}.huya-head-notice{position:fixed;right:15px;bottom:-200px;width:328px;height:198px;border-radius:2px;background:#fff;color:#777;border:1px solid #e8e8e8;box-shadow:2px 2px 12px rgba(0,0,0,.12),-2px -2px 12px rgba(0,0,0,.12);font-size:14px;z-index:10001}.huya-head-notice .notice-hd{position:relative;height:32px;line-height:32px;margin:0 10px;border-bottom:1px solid #efefef}.huya-head-notice .notice-tip{position:absolute;right:30px;top:0;font-size:12px;color:#9f9f9f}.huya-head-notice .notice-icon{float:left;margin:8px 5px 0 0;width:18px;height:17px;background:url(//a.msstatic.com/huya/main/img/header/live_notice_icon_14e77c8.png?__sprite)}.huya-head-notice .notice-title{color:#f80}.huya-head-notice .notice-close{position:absolute;right:2px;top:12px;width:10px;height:9px;background:url(//a.msstatic.com/huya/main/img/header/live_notice_close_e9f8100.png?__sprite);cursor:pointer}.huya-head-notice .notice-bd{padding:17px;line-height:20px}.huya-head-notice .anchor-name{font-size:12px;color:#555;margin-bottom:2px;word-wrap:normal;-ms-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-weight:400}.huya-head-notice .anchor-nick{font-size:14px;color:#f80;word-wrap:normal;-ms-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.huya-head-notice .notice-pic{float:left;width:90px;height:90px;margin-right:16px;position:relative}.huya-head-notice .notice-pic img{width:100%;height:100%}.huya-head-notice .notice-pic .notice-gameFullName{position:absolute;top:0;left:0;padding:0 5px;font-size:12px;color:#fff;background:#000;background:rgba(0,0,0,.5);word-wrap:normal;-ms-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;max-width:70px}.huya-head-notice .notice-content{font-size:12px;line-height:20px;height:60px;overflow:hidden;display:-webkit-box;text-overflow:ellipsis;-webkit-line-clamp:3;-webkit-box-orient:vertical}.huya-head-notice .notice-btn{position:absolute;right:15px;bottom:15px;width:100px;height:30px;line-height:30px;background:#f80;color:#fff;text-align:center;border-radius:14px;cursor:pointer}.huya-head-notice .notice-btn:hover{background:#f70;text-decoration:none}.huya-head-notice.normal-notice{width:268px;height:180px}.huya-head-notice.normal-notice .notice-content,.huya-head-notice.subscribe-notice .notice-content{height:40px;-webkit-line-clamp:2}.w-1000 .duya-header-gg{display:none}#login-closure,#offline-notice{position:fixed;left:50%;top:50%;width:440px;height:210px;margin:-105px 0 0 -220px;background:#fff;z-index:999999;border-radius:3px;font-size:14px}.login-closure-tit{position:relative;height:38px;line-height:38px;border-top:2px solid #f80;border-bottom:1px solid #eee;border-radius:3px 3px 0 0;padding-left:15px;color:#333}#login-closure-close,#offline-notice-close{position:absolute;top:13px;right:18px;width:13px;height:12px;background:url(//a.msstatic.com/huya/main/img/close_01ce46f.png) no-repeat;cursor:pointer}.login-closure-cnt{color:#777;padding:22px 27px 0}.login-closure-cnt a{color:#46a1fe}#login-closure-sure,#offline-notice-sure{position:absolute;left:50%;bottom:25px;margin-left:-50px;width:100px;height:34px;line-height:34px;text-align:center;background:#f80;color:#fff;border-radius:5px;cursor:pointer}#login-closure-sure:hover,#offline-notice-sure:hover{background:#f99523}#login-closure-mask,#offline-notice-mask{z-index:99999;position:fixed;top:0;left:0;opacity:.5;filter:alpha(opacity=50);background-color:#000;width:100%;height:100%;zoom:1}.duya-header{position:fixed;}</style><script charset="utf-8" type="text/javascript" async="" src="./ren_files/underscore_3d00f9f.js.下载"></script><script charset="utf-8" type="text/javascript" async="" src="./ren_files/header_search_tip_10ae642.js.下载"></script></head>
<body class="">
      @include('layouts.common.header')
    </div>
</div>
	<script src="./ren_files/header.js.下载"></script>
	<div style="height:50px;"></div>
    <div class="tipsBox">
    	<div class="t-bg"></div>
    	<div class="t-box">
    		<span class="btn-close"></span>
    		<p class="b-msg">保存成功</p>
    		<p class="b-tips"><span class="b-min">3</span> 秒后自动关闭</p>
    	</div>
    </div>
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
    var currentMenu = 'userinfo',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="./ren_files/main_menu.js.下载"></script>
<script type="text/javascript" src="./ren_files/cookies.js.下载"></script>
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
            	<div class="mod userInfo-edit">
        			<div class="mod-hd">
                        <a href="myuser" ><---</a>
                        <h3 style="border-left: none;">编辑资料</h3>
                    </div>

                	<form action="myren_do" method="POST" enctype="multipart/form-data" class="form-edit">
                		<ul>
                            <li>
                                <span class="edit-item">头像</span>
                                <input type="file" name="heading" id="" >
                            </li>
							<li>
	                			<span class="edit-item">昵称</span>
	                			<!-- <input id="edit-nick" class="edit-name" type="text" name="user_name" maxlength="20"  style="border: 0px;"> -->
                                <input type="text" class="edit-name" name="nickname" id="" value="{{$user->nickname}}">
	                			<span class="edit-warning edit-warning_nick"></span>
	                		</li>
	                		<li>
	                			<span class="edit-item">个性签名</span>
	                			<textarea  name="signature" maxlength="20" class="edit-ps">{{$user->signature}}</textarea>
	                			<span class="edit-warning">字段包含敏感字符，请重新输入！</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">性别</span>
	                			<input class="edit-sex" type="radio" name="sex" value="0">男 
	                			<input class="edit-sex edit-sex_female" type="radio" value="1" name="sex" checked="">女
	                		</li>
	                		<li>
	                				                			<span class="edit-item">生日</span>
	                			<div class="select-box sb-year">
	                				<input id="edit-year" class="sb-selected J_sb-selected" type="text" name="sr_year" value="1999" readonly="readonly">
	                				<ul class="sb-list">
	                				<li class="sb-value" data-value="2017">2017</li><li class="sb-value" data-value="2016">2016</li><li class="sb-value" data-value="2015">2015</li><li class="sb-value" data-value="2014">2014</li><li class="sb-value" data-value="2013">2013</li><li class="sb-value" data-value="2012">2012</li><li class="sb-value" data-value="2011">2011</li><li class="sb-value" data-value="2010">2010</li><li class="sb-value" data-value="2009">2009</li><li class="sb-value" data-value="2008">2008</li><li class="sb-value" data-value="2007">2007</li><li class="sb-value" data-value="2006">2006</li><li class="sb-value" data-value="2005">2005</li><li class="sb-value" data-value="2004">2004</li><li class="sb-value" data-value="2003">2003</li><li class="sb-value" data-value="2002">2002</li><li class="sb-value" data-value="2001">2001</li><li class="sb-value" data-value="2000">2000</li><li class="sb-value" data-value="1999">1999</li><li class="sb-value" data-value="1998">1998</li><li class="sb-value" data-value="1997">1997</li><li class="sb-value" data-value="1996">1996</li><li class="sb-value" data-value="1995">1995</li><li class="sb-value" data-value="1994">1994</li><li class="sb-value" data-value="1993">1993</li><li class="sb-value" data-value="1992">1992</li><li class="sb-value" data-value="1991">1991</li><li class="sb-value" data-value="1990">1990</li><li class="sb-value" data-value="1989">1989</li><li class="sb-value" data-value="1988">1988</li><li class="sb-value" data-value="1987">1987</li><li class="sb-value" data-value="1986">1986</li><li class="sb-value" data-value="1985">1985</li><li class="sb-value" data-value="1984">1984</li><li class="sb-value" data-value="1983">1983</li><li class="sb-value" data-value="1982">1982</li><li class="sb-value" data-value="1981">1981</li><li class="sb-value" data-value="1980">1980</li><li class="sb-value" data-value="1979">1979</li><li class="sb-value" data-value="1978">1978</li><li class="sb-value" data-value="1977">1977</li><li class="sb-value" data-value="1976">1976</li><li class="sb-value" data-value="1975">1975</li><li class="sb-value" data-value="1974">1974</li><li class="sb-value" data-value="1973">1973</li><li class="sb-value" data-value="1972">1972</li><li class="sb-value" data-value="1971">1971</li><li class="sb-value" data-value="1970">1970</li><li class="sb-value" data-value="1969">1969</li><li class="sb-value" data-value="1968">1968</li><li class="sb-value" data-value="1967">1967</li><li class="sb-value" data-value="1966">1966</li><li class="sb-value" data-value="1965">1965</li><li class="sb-value" data-value="1964">1964</li><li class="sb-value" data-value="1963">1963</li><li class="sb-value" data-value="1962">1962</li><li class="sb-value" data-value="1961">1961</li><li class="sb-value" data-value="1960">1960</li><li class="sb-value" data-value="1959">1959</li><li class="sb-value" data-value="1958">1958</li><li class="sb-value" data-value="1957">1957</li><li class="sb-value" data-value="1956">1956</li><li class="sb-value" data-value="1955">1955</li><li class="sb-value" data-value="1954">1954</li><li class="sb-value" data-value="1953">1953</li><li class="sb-value" data-value="1952">1952</li><li class="sb-value" data-value="1951">1951</li><li class="sb-value" data-value="1950">1950</li><li class="sb-value" data-value="1949">1949</li><li class="sb-value" data-value="1948">1948</li><li class="sb-value" data-value="1947">1947</li><li class="sb-value" data-value="1946">1946</li><li class="sb-value" data-value="1945">1945</li><li class="sb-value" data-value="1944">1944</li><li class="sb-value" data-value="1943">1943</li><li class="sb-value" data-value="1942">1942</li><li class="sb-value" data-value="1941">1941</li><li class="sb-value" data-value="1940">1940</li><li class="sb-value" data-value="1939">1939</li><li class="sb-value" data-value="1938">1938</li><li class="sb-value" data-value="1937">1937</li><li class="sb-value" data-value="1936">1936</li><li class="sb-value" data-value="1935">1935</li><li class="sb-value" data-value="1934">1934</li><li class="sb-value" data-value="1933">1933</li><li class="sb-value" data-value="1932">1932</li><li class="sb-value" data-value="1931">1931</li><li class="sb-value" data-value="1930">1930</li><li class="sb-value" data-value="1929">1929</li><li class="sb-value" data-value="1928">1928</li><li class="sb-value" data-value="1927">1927</li><li class="sb-value" data-value="1926">1926</li><li class="sb-value" data-value="1925">1925</li><li class="sb-value" data-value="1924">1924</li><li class="sb-value" data-value="1923">1923</li><li class="sb-value" data-value="1922">1922</li><li class="sb-value" data-value="1921">1921</li><li class="sb-value" data-value="1920">1920</li><li class="sb-value" data-value="1919">1919</li><li class="sb-value" data-value="1918">1918</li><li class="sb-value" data-value="1917">1917</li><li class="sb-value" data-value="1916">1916</li><li class="sb-value" data-value="1915">1915</li><li class="sb-value" data-value="1914">1914</li><li class="sb-value" data-value="1913">1913</li><li class="sb-value" data-value="1912">1912</li><li class="sb-value" data-value="1911">1911</li><li class="sb-value" data-value="1910">1910</li><li class="sb-value" data-value="1909">1909</li><li class="sb-value" data-value="1908">1908</li><li class="sb-value" data-value="1907">1907</li><li class="sb-value" data-value="1906">1906</li><li class="sb-value" data-value="1905">1905</li><li class="sb-value" data-value="1904">1904</li><li class="sb-value" data-value="1903">1903</li><li class="sb-value" data-value="1902">1902</li><li class="sb-value" data-value="1901">1901</li>	                				</ul>
	                			</div>
	                			<span>年</span>
	                			<div class="select-box sb-month sb-number">
	                				<input id="edit-month" class="sb-selected J_sb-selected" type="text" name="sr_month" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li><li class="sb-value" data-value="2">2</li><li class="sb-value" data-value="3">3</li><li class="sb-value" data-value="4">4</li><li class="sb-value" data-value="5">5</li><li class="sb-value" data-value="6">6</li><li class="sb-value" data-value="7">7</li><li class="sb-value" data-value="8">8</li><li class="sb-value" data-value="9">9</li><li class="sb-value" data-value="10">10</li><li class="sb-value" data-value="11">11</li><li class="sb-value" data-value="12">12</li>	                				</ul>
	                			</div>
	                			<span>月</span>
	                			<div class="select-box sb-date sb-number">
	                				<input id="edit-date" class="sb-selected J_sb-selected" type="text" name="sr_day" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li><li class="sb-value" data-value="2">2</li><li class="sb-value" data-value="3">3</li><li class="sb-value" data-value="4">4</li><li class="sb-value" data-value="5">5</li><li class="sb-value" data-value="6">6</li><li class="sb-value" data-value="7">7</li><li class="sb-value" data-value="8">8</li><li class="sb-value" data-value="9">9</li><li class="sb-value" data-value="10">10</li><li class="sb-value" data-value="11">11</li><li class="sb-value" data-value="12">12</li><li class="sb-value" data-value="13">13</li><li class="sb-value" data-value="14">14</li><li class="sb-value" data-value="15">15</li><li class="sb-value" data-value="16">16</li><li class="sb-value" data-value="17">17</li><li class="sb-value" data-value="18">18</li><li class="sb-value" data-value="19">19</li><li class="sb-value" data-value="20">20</li><li class="sb-value" data-value="21">21</li><li class="sb-value" data-value="22">22</li><li class="sb-value" data-value="23">23</li><li class="sb-value" data-value="24">24</li><li class="sb-value" data-value="25">25</li><li class="sb-value" data-value="26">26</li><li class="sb-value" data-value="27">27</li><li class="sb-value" data-value="28">28</li><li class="sb-value" data-value="29">29</li><li class="sb-value" data-value="30">30</li><li class="sb-value" data-value="31">31</li>	                				</ul>
	                			</div>
	                			<span>日</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">所在地</span>
	                			<div class="select-box sb-prov">
	                				<input id="edit-area" class="sb-selected J_sb-selected" type="text" name="sheng" value="北京" readonly="readonly">
	                				<ul class="sb-list">
	                				<li class="sb-value" data-value="北京" data-index="0">北京</li><li class="sb-value" data-value="上海" data-index="1">上海</li><li class="sb-value" data-value="天津" data-index="2">天津</li><li class="sb-value" data-value="重庆" data-index="3">重庆</li><li class="sb-value" data-value="广东" data-index="4">广东</li><li class="sb-value" data-value="广西" data-index="5">广西</li><li class="sb-value" data-value="河北" data-index="6">河北</li><li class="sb-value" data-value="河南" data-index="7">河南</li><li class="sb-value" data-value="湖北" data-index="8">湖北</li><li class="sb-value" data-value="湖南" data-index="9">湖南</li><li class="sb-value" data-value="福建" data-index="10">福建</li><li class="sb-value" data-value="山东" data-index="11">山东</li><li class="sb-value" data-value="安徽" data-index="12">安徽</li><li class="sb-value" data-value="浙江" data-index="13">浙江</li><li class="sb-value" data-value="四川" data-index="14">四川</li><li class="sb-value" data-value="贵州" data-index="15">贵州</li><li class="sb-value" data-value="云南" data-index="16">云南</li><li class="sb-value" data-value="江苏" data-index="17">江苏</li><li class="sb-value" data-value="山西" data-index="18">山西</li><li class="sb-value" data-value="辽宁" data-index="19">辽宁</li><li class="sb-value" data-value="吉林" data-index="20">吉林</li><li class="sb-value" data-value="内蒙古" data-index="21">内蒙古</li><li class="sb-value" data-value="黑龙江" data-index="22">黑龙江</li><li class="sb-value" data-value="西藏" data-index="23">西藏</li><li class="sb-value" data-value="陕西" data-index="24">陕西</li><li class="sb-value" data-value="甘肃" data-index="25">甘肃</li><li class="sb-value" data-value="青海" data-index="26">青海</li><li class="sb-value" data-value="宁夏" data-index="27">宁夏</li><li class="sb-value" data-value="新疆" data-index="28">新疆</li><li class="sb-value" data-value="江西" data-index="29">江西</li><li class="sb-value" data-value="海南" data-index="30">海南</li><li class="sb-value" data-value="香港" data-index="31">香港</li><li class="sb-value" data-value="澳门" data-index="32">澳门</li><li class="sb-value" data-value="台湾" data-index="33">台湾</li><li class="sb-value" data-value="海外" data-index="34">海外</li>	                				</ul>
	                			</div>
	                			<div class="select-box sb-city">
	                				<input id="edit-location" class="sb-selected J_sb-selected" type="text" name="shi" value="北京" readonly="readonly">
	                				<ul class="sb-list">
	                								                				<li data-index="0" data-p="北京" style="display: list-item;">
			                					<ul>
			                									                							<li class="sb-value" data-value="北京">北京</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="1" data-p="上海" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="上海">上海</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="2" data-p="天津" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="天津">天津</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="3" data-p="重庆" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="重庆">重庆</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="4" data-p="广东" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="广州">广州</li>
			                									                							<li class="sb-value" data-value="潮州">潮州</li>
			                									                							<li class="sb-value" data-value="肇庆">肇庆</li>
			                									                							<li class="sb-value" data-value="汕尾">汕尾</li>
			                									                							<li class="sb-value" data-value="河源">河源</li>
			                									                							<li class="sb-value" data-value="韶关">韶关</li>
			                									                							<li class="sb-value" data-value="揭阳">揭阳</li>
			                									                							<li class="sb-value" data-value="梅州">梅州</li>
			                									                							<li class="sb-value" data-value="中山">中山</li>
			                									                							<li class="sb-value" data-value="惠州">惠州</li>
			                									                							<li class="sb-value" data-value="东莞">东莞</li>
			                									                							<li class="sb-value" data-value="清远">清远</li>
			                									                							<li class="sb-value" data-value="江门">江门</li>
			                									                							<li class="sb-value" data-value="茂名">茂名</li>
			                									                							<li class="sb-value" data-value="阳江">阳江</li>
			                									                							<li class="sb-value" data-value="汕头">汕头</li>
			                									                							<li class="sb-value" data-value="深圳">深圳</li>
			                									                							<li class="sb-value" data-value="珠海">珠海</li>
			                									                							<li class="sb-value" data-value="湛江">湛江</li>
			                									                							<li class="sb-value" data-value="惠阳">惠阳</li>
			                									                							<li class="sb-value" data-value="佛山">佛山</li>
			                									                							<li class="sb-value" data-value="云浮">云浮</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="5" data-p="广西" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="南宁">南宁</li>
			                									                							<li class="sb-value" data-value="百色">百色</li>
			                									                							<li class="sb-value" data-value="柳州">柳州</li>
			                									                							<li class="sb-value" data-value="梧州">梧州</li>
			                									                							<li class="sb-value" data-value="玉林">玉林</li>
			                									                							<li class="sb-value" data-value="贺州">贺州</li>
			                									                							<li class="sb-value" data-value="钦州">钦州</li>
			                									                							<li class="sb-value" data-value="贵港">贵港</li>
			                									                							<li class="sb-value" data-value="防城港">防城港</li>
			                									                							<li class="sb-value" data-value="桂林">桂林</li>
			                									                							<li class="sb-value" data-value="北海">北海</li>
			                									                							<li class="sb-value" data-value="崇左">崇左</li>
			                									                							<li class="sb-value" data-value="河池">河池</li>
			                									                							<li class="sb-value" data-value="来宾">来宾</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="6" data-p="河北" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="石家庄">石家庄</li>
			                									                							<li class="sb-value" data-value="唐山">唐山</li>
			                									                							<li class="sb-value" data-value="张家口">张家口</li>
			                									                							<li class="sb-value" data-value="廊坊">廊坊</li>
			                									                							<li class="sb-value" data-value="邯郸">邯郸</li>
			                									                							<li class="sb-value" data-value="邢台">邢台</li>
			                									                							<li class="sb-value" data-value="沧州">沧州</li>
			                									                							<li class="sb-value" data-value="衡水">衡水</li>
			                									                							<li class="sb-value" data-value="承德">承德</li>
			                									                							<li class="sb-value" data-value="保定">保定</li>
			                									                							<li class="sb-value" data-value="秦皇岛">秦皇岛</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="7" data-p="河南" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="郑州">郑州</li>
			                									                							<li class="sb-value" data-value="济源">济源</li>
			                									                							<li class="sb-value" data-value="开封">开封</li>
			                									                							<li class="sb-value" data-value="安阳">安阳</li>
			                									                							<li class="sb-value" data-value="焦作">焦作</li>
			                									                							<li class="sb-value" data-value="鹤壁">鹤壁</li>
			                									                							<li class="sb-value" data-value="平顶山">平顶山</li>
			                									                							<li class="sb-value" data-value="商丘">商丘</li>
			                									                							<li class="sb-value" data-value="濮阳">濮阳</li>
			                									                							<li class="sb-value" data-value="南阳">南阳</li>
			                									                							<li class="sb-value" data-value="许昌">许昌</li>
			                									                							<li class="sb-value" data-value="信阳">信阳</li>
			                									                							<li class="sb-value" data-value="三门峡">三门峡</li>
			                									                							<li class="sb-value" data-value="驻马店">驻马店</li>
			                									                							<li class="sb-value" data-value="周口">周口</li>
			                									                							<li class="sb-value" data-value="新乡">新乡</li>
			                									                							<li class="sb-value" data-value="洛阳">洛阳</li>
			                									                							<li class="sb-value" data-value="漯河">漯河</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="8" data-p="湖北" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="武汉">武汉</li>
			                									                							<li class="sb-value" data-value="黄冈">黄冈</li>
			                									                							<li class="sb-value" data-value="恩施">恩施</li>
			                									                							<li class="sb-value" data-value="荆州">荆州</li>
			                									                							<li class="sb-value" data-value="神农架">神农架</li>
			                									                							<li class="sb-value" data-value="十堰">十堰</li>
			                									                							<li class="sb-value" data-value="咸宁">咸宁</li>
			                									                							<li class="sb-value" data-value="襄阳">襄阳</li>
			                									                							<li class="sb-value" data-value="孝感">孝感</li>
			                									                							<li class="sb-value" data-value="随州">随州</li>
			                									                							<li class="sb-value" data-value="黄石">黄石</li>
			                									                							<li class="sb-value" data-value="荆门">荆门</li>
			                									                							<li class="sb-value" data-value="鄂州">鄂州</li>
			                									                							<li class="sb-value" data-value="宜昌">宜昌</li>
			                									                							<li class="sb-value" data-value="仙桃">仙桃</li>
			                									                							<li class="sb-value" data-value="天门">天门</li>
			                									                							<li class="sb-value" data-value="潜江">潜江</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="9" data-p="湖南" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="长沙">长沙</li>
			                									                							<li class="sb-value" data-value="邵阳">邵阳</li>
			                									                							<li class="sb-value" data-value="常德">常德</li>
			                									                							<li class="sb-value" data-value="郴州">郴州</li>
			                									                							<li class="sb-value" data-value="吉首">吉首</li>
			                									                							<li class="sb-value" data-value="株洲">株洲</li>
			                									                							<li class="sb-value" data-value="娄底">娄底</li>
			                									                							<li class="sb-value" data-value="湘潭">湘潭</li>
			                									                							<li class="sb-value" data-value="益阳">益阳</li>
			                									                							<li class="sb-value" data-value="永州">永州</li>
			                									                							<li class="sb-value" data-value="岳阳">岳阳</li>
			                									                							<li class="sb-value" data-value="衡阳">衡阳</li>
			                									                							<li class="sb-value" data-value="怀化">怀化</li>
			                									                							<li class="sb-value" data-value="张家界">张家界</li>
			                									                							<li class="sb-value" data-value="湘西">湘西</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="10" data-p="福建" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="福州">福州</li>
			                									                							<li class="sb-value" data-value="龙岩">龙岩</li>
			                									                							<li class="sb-value" data-value="南平">南平</li>
			                									                							<li class="sb-value" data-value="宁德">宁德</li>
			                									                							<li class="sb-value" data-value="莆田">莆田</li>
			                									                							<li class="sb-value" data-value="泉州">泉州</li>
			                									                							<li class="sb-value" data-value="三明">三明</li>
			                									                							<li class="sb-value" data-value="漳州">漳州</li>
			                									                							<li class="sb-value" data-value="厦门">厦门</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="11" data-p="山东" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="济南">济南</li>
			                									                							<li class="sb-value" data-value="枣庄">枣庄</li>
			                									                							<li class="sb-value" data-value="聊城">聊城</li>
			                									                							<li class="sb-value" data-value="济宁">济宁</li>
			                									                							<li class="sb-value" data-value="临沂">临沂</li>
			                									                							<li class="sb-value" data-value="菏泽">菏泽</li>
			                									                							<li class="sb-value" data-value="泰安">泰安</li>
			                									                							<li class="sb-value" data-value="日照">日照</li>
			                									                							<li class="sb-value" data-value="东营">东营</li>
			                									                							<li class="sb-value" data-value="青岛">青岛</li>
			                									                							<li class="sb-value" data-value="威海">威海</li>
			                									                							<li class="sb-value" data-value="烟台">烟台</li>
			                									                							<li class="sb-value" data-value="潍坊">潍坊</li>
			                									                							<li class="sb-value" data-value="淄博">淄博</li>
			                									                							<li class="sb-value" data-value="莱芜">莱芜</li>
			                									                							<li class="sb-value" data-value="滨州">滨州</li>
			                									                							<li class="sb-value" data-value="德州">德州</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="12" data-p="安徽" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="合肥">合肥</li>
			                									                							<li class="sb-value" data-value="巢湖">巢湖</li>
			                									                							<li class="sb-value" data-value="蚌埠">蚌埠</li>
			                									                							<li class="sb-value" data-value="安庆">安庆</li>
			                									                							<li class="sb-value" data-value="六安">六安</li>
			                									                							<li class="sb-value" data-value="滁州">滁州</li>
			                									                							<li class="sb-value" data-value="马鞍山">马鞍山</li>
			                									                							<li class="sb-value" data-value="阜阳">阜阳</li>
			                									                							<li class="sb-value" data-value="宣城">宣城</li>
			                									                							<li class="sb-value" data-value="铜陵">铜陵</li>
			                									                							<li class="sb-value" data-value="淮北">淮北</li>
			                									                							<li class="sb-value" data-value="芜湖">芜湖</li>
			                									                							<li class="sb-value" data-value="亳州">亳州</li>
			                									                							<li class="sb-value" data-value="宿州">宿州</li>
			                									                							<li class="sb-value" data-value="淮南">淮南</li>
			                									                							<li class="sb-value" data-value="黄山">黄山</li>
			                									                							<li class="sb-value" data-value="池州">池州</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="13" data-p="浙江" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="杭州">杭州</li>
			                									                							<li class="sb-value" data-value="湖州">湖州</li>
			                									                							<li class="sb-value" data-value="金华">金华</li>
			                									                							<li class="sb-value" data-value="宁波">宁波</li>
			                									                							<li class="sb-value" data-value="丽水">丽水</li>
			                									                							<li class="sb-value" data-value="绍兴">绍兴</li>
			                									                							<li class="sb-value" data-value="衢州">衢州</li>
			                									                							<li class="sb-value" data-value="嘉兴">嘉兴</li>
			                									                							<li class="sb-value" data-value="台州">台州</li>
			                									                							<li class="sb-value" data-value="舟山">舟山</li>
			                									                							<li class="sb-value" data-value="温州">温州</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="14" data-p="四川" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="成都">成都</li>
			                									                							<li class="sb-value" data-value="泸州">泸州</li>
			                									                							<li class="sb-value" data-value="内江">内江</li>
			                									                							<li class="sb-value" data-value="凉山">凉山</li>
			                									                							<li class="sb-value" data-value="阿坝">阿坝</li>
			                									                							<li class="sb-value" data-value="巴中">巴中</li>
			                									                							<li class="sb-value" data-value="广元">广元</li>
			                									                							<li class="sb-value" data-value="乐山">乐山</li>
			                									                							<li class="sb-value" data-value="绵阳">绵阳</li>
			                									                							<li class="sb-value" data-value="德阳">德阳</li>
			                									                							<li class="sb-value" data-value="攀枝花">攀枝花</li>
			                									                							<li class="sb-value" data-value="雅安">雅安</li>
			                									                							<li class="sb-value" data-value="宜宾">宜宾</li>
			                									                							<li class="sb-value" data-value="自贡">自贡</li>
			                									                							<li class="sb-value" data-value="甘孜">甘孜</li>
			                									                							<li class="sb-value" data-value="达州">达州</li>
			                									                							<li class="sb-value" data-value="南充">南充</li>
			                									                							<li class="sb-value" data-value="广安">广安</li>
			                									                							<li class="sb-value" data-value="遂宁">遂宁</li>
			                									                							<li class="sb-value" data-value="资阳">资阳</li>
			                									                							<li class="sb-value" data-value="眉山">眉山</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="15" data-p="贵州" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="贵阳">贵阳</li>
			                									                							<li class="sb-value" data-value="安顺">安顺</li>
			                									                							<li class="sb-value" data-value="遵义">遵义</li>
			                									                							<li class="sb-value" data-value="铜仁">铜仁</li>
			                									                							<li class="sb-value" data-value="六盘水">六盘水</li>
			                									                							<li class="sb-value" data-value="毕节">毕节</li>
			                									                							<li class="sb-value" data-value="黔东南">黔东南</li>
			                									                							<li class="sb-value" data-value="黔南">黔南</li>
			                									                							<li class="sb-value" data-value="黔西南">黔西南</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="16" data-p="云南" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="昆明">昆明</li>
			                									                							<li class="sb-value" data-value="保山">保山</li>
			                									                							<li class="sb-value" data-value="楚雄">楚雄</li>
			                									                							<li class="sb-value" data-value="德宏">德宏</li>
			                									                							<li class="sb-value" data-value="红河">红河</li>
			                									                							<li class="sb-value" data-value="临沧">临沧</li>
			                									                							<li class="sb-value" data-value="怒江">怒江</li>
			                									                							<li class="sb-value" data-value="曲靖">曲靖</li>
			                									                							<li class="sb-value" data-value="普洱">普洱</li>
			                									                							<li class="sb-value" data-value="文山">文山</li>
			                									                							<li class="sb-value" data-value="玉溪">玉溪</li>
			                									                							<li class="sb-value" data-value="昭通">昭通</li>
			                									                							<li class="sb-value" data-value="大理">大理</li>
			                									                							<li class="sb-value" data-value="迪庆">迪庆</li>
			                									                							<li class="sb-value" data-value="丽江">丽江</li>
			                									                							<li class="sb-value" data-value="西双版纳">西双版纳</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="17" data-p="江苏" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="南京">南京</li>
			                									                							<li class="sb-value" data-value="南通">南通</li>
			                									                							<li class="sb-value" data-value="苏州">苏州</li>
			                									                							<li class="sb-value" data-value="徐州">徐州</li>
			                									                							<li class="sb-value" data-value="镇江">镇江</li>
			                									                							<li class="sb-value" data-value="淮安">淮安</li>
			                									                							<li class="sb-value" data-value="常熟">常熟</li>
			                									                							<li class="sb-value" data-value="盐城">盐城</li>
			                									                							<li class="sb-value" data-value="泰州">泰州</li>
			                									                							<li class="sb-value" data-value="无锡">无锡</li>
			                									                							<li class="sb-value" data-value="连云港">连云港</li>
			                									                							<li class="sb-value" data-value="扬州">扬州</li>
			                									                							<li class="sb-value" data-value="常州">常州</li>
			                									                							<li class="sb-value" data-value="宿迁">宿迁</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="18" data-p="山西" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="太原">太原</li>
			                									                							<li class="sb-value" data-value="阳泉">阳泉</li>
			                									                							<li class="sb-value" data-value="晋城">晋城</li>
			                									                							<li class="sb-value" data-value="晋中">晋中</li>
			                									                							<li class="sb-value" data-value="临汾">临汾</li>
			                									                							<li class="sb-value" data-value="运城">运城</li>
			                									                							<li class="sb-value" data-value="长治">长治</li>
			                									                							<li class="sb-value" data-value="朔州">朔州</li>
			                									                							<li class="sb-value" data-value="忻州">忻州</li>
			                									                							<li class="sb-value" data-value="大同">大同</li>
			                									                							<li class="sb-value" data-value="吕梁">吕梁</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="19" data-p="辽宁" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="沈阳">沈阳</li>
			                									                							<li class="sb-value" data-value="葫芦岛">葫芦岛</li>
			                									                							<li class="sb-value" data-value="本溪">本溪</li>
			                									                							<li class="sb-value" data-value="朝阳">朝阳</li>
			                									                							<li class="sb-value" data-value="抚顺">抚顺</li>
			                									                							<li class="sb-value" data-value="铁岭">铁岭</li>
			                									                							<li class="sb-value" data-value="辽阳">辽阳</li>
			                									                							<li class="sb-value" data-value="营口">营口</li>
			                									                							<li class="sb-value" data-value="阜新">阜新</li>
			                									                							<li class="sb-value" data-value="大连">大连</li>
			                									                							<li class="sb-value" data-value="丹东">丹东</li>
			                									                							<li class="sb-value" data-value="鞍山">鞍山</li>
			                									                							<li class="sb-value" data-value="锦州">锦州</li>
			                									                							<li class="sb-value" data-value="盘锦">盘锦</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="20" data-p="吉林" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="长春">长春</li>
			                									                							<li class="sb-value" data-value="延边">延边</li>
			                									                							<li class="sb-value" data-value="吉林">吉林</li>
			                									                							<li class="sb-value" data-value="白山">白山</li>
			                									                							<li class="sb-value" data-value="白城">白城</li>
			                									                							<li class="sb-value" data-value="四平">四平</li>
			                									                							<li class="sb-value" data-value="松原">松原</li>
			                									                							<li class="sb-value" data-value="辽源">辽源</li>
			                									                							<li class="sb-value" data-value="通化">通化</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="21" data-p="内蒙古" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="呼和浩特">呼和浩特</li>
			                									                							<li class="sb-value" data-value="包头">包头</li>
			                									                							<li class="sb-value" data-value="赤峰">赤峰</li>
			                									                							<li class="sb-value" data-value="乌海">乌海</li>
			                									                							<li class="sb-value" data-value="鄂尔多斯">鄂尔多斯</li>
			                									                							<li class="sb-value" data-value="通辽">通辽</li>
			                									                							<li class="sb-value" data-value="呼伦贝尔">呼伦贝尔</li>
			                									                							<li class="sb-value" data-value="乌兰察布">乌兰察布</li>
			                									                							<li class="sb-value" data-value="巴彦淖尔">巴彦淖尔</li>
			                									                							<li class="sb-value" data-value="兴安盟">兴安盟</li>
			                									                							<li class="sb-value" data-value="锡林郭勒盟">锡林郭勒盟</li>
			                									                							<li class="sb-value" data-value="阿拉善盟">阿拉善盟</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="22" data-p="黑龙江" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="哈尔滨">哈尔滨</li>
			                									                							<li class="sb-value" data-value="牡丹江">牡丹江</li>
			                									                							<li class="sb-value" data-value="齐齐哈尔">齐齐哈尔</li>
			                									                							<li class="sb-value" data-value="大庆">大庆</li>
			                									                							<li class="sb-value" data-value="伊春">伊春</li>
			                									                							<li class="sb-value" data-value="双鸭山">双鸭山</li>
			                									                							<li class="sb-value" data-value="鹤岗">鹤岗</li>
			                									                							<li class="sb-value" data-value="鸡西">鸡西</li>
			                									                							<li class="sb-value" data-value="佳木斯">佳木斯</li>
			                									                							<li class="sb-value" data-value="七台河">七台河</li>
			                									                							<li class="sb-value" data-value="绥化">绥化</li>
			                									                							<li class="sb-value" data-value="黑河">黑河</li>
			                									                							<li class="sb-value" data-value="大兴安岭">大兴安岭</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="23" data-p="西藏" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="拉萨">拉萨</li>
			                									                							<li class="sb-value" data-value="昌都">昌都</li>
			                									                							<li class="sb-value" data-value="阿里">阿里</li>
			                									                							<li class="sb-value" data-value="那曲">那曲</li>
			                									                							<li class="sb-value" data-value="日喀则">日喀则</li>
			                									                							<li class="sb-value" data-value="山南">山南</li>
			                									                							<li class="sb-value" data-value="林芝">林芝</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="24" data-p="陕西" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="西安">西安</li>
			                									                							<li class="sb-value" data-value="韩城">韩城</li>
			                									                							<li class="sb-value" data-value="安康">安康</li>
			                									                							<li class="sb-value" data-value="汉中">汉中</li>
			                									                							<li class="sb-value" data-value="宝鸡">宝鸡</li>
			                									                							<li class="sb-value" data-value="咸阳">咸阳</li>
			                									                							<li class="sb-value" data-value="榆林">榆林</li>
			                									                							<li class="sb-value" data-value="渭南">渭南</li>
			                									                							<li class="sb-value" data-value="商洛">商洛</li>
			                									                							<li class="sb-value" data-value="铜川">铜川</li>
			                									                							<li class="sb-value" data-value="延安">延安</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="25" data-p="甘肃" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="兰州">兰州</li>
			                									                							<li class="sb-value" data-value="白银">白银</li>
			                									                							<li class="sb-value" data-value="庆阳">庆阳</li>
			                									                							<li class="sb-value" data-value="酒泉">酒泉</li>
			                									                							<li class="sb-value" data-value="天水">天水</li>
			                									                							<li class="sb-value" data-value="武威">武威</li>
			                									                							<li class="sb-value" data-value="张掖">张掖</li>
			                									                							<li class="sb-value" data-value="甘南">甘南</li>
			                									                							<li class="sb-value" data-value="临夏">临夏</li>
			                									                							<li class="sb-value" data-value="平凉">平凉</li>
			                									                							<li class="sb-value" data-value="定西">定西</li>
			                									                							<li class="sb-value" data-value="金昌">金昌</li>
			                									                							<li class="sb-value" data-value="敦煌">敦煌</li>
			                									                							<li class="sb-value" data-value="嘉峪关">嘉峪关</li>
			                									                							<li class="sb-value" data-value="陇南">陇南</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="26" data-p="青海" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="西宁">西宁</li>
			                									                							<li class="sb-value" data-value="海北">海北</li>
			                									                							<li class="sb-value" data-value="海南">海南</li>
			                									                							<li class="sb-value" data-value="海西">海西</li>
			                									                							<li class="sb-value" data-value="黄南">黄南</li>
			                									                							<li class="sb-value" data-value="果洛">果洛</li>
			                									                							<li class="sb-value" data-value="玉树">玉树</li>
			                									                							<li class="sb-value" data-value="海东">海东</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="27" data-p="宁夏" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="银川">银川</li>
			                									                							<li class="sb-value" data-value="固原">固原</li>
			                									                							<li class="sb-value" data-value="中卫">中卫</li>
			                									                							<li class="sb-value" data-value="吴忠">吴忠</li>
			                									                							<li class="sb-value" data-value="石嘴山">石嘴山</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="28" data-p="新疆" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="乌鲁木齐">乌鲁木齐</li>
			                									                							<li class="sb-value" data-value="阿勒泰">阿勒泰</li>
			                									                							<li class="sb-value" data-value="阿克苏">阿克苏</li>
			                									                							<li class="sb-value" data-value="昌吉">昌吉</li>
			                									                							<li class="sb-value" data-value="哈密">哈密</li>
			                									                							<li class="sb-value" data-value="和田">和田</li>
			                									                							<li class="sb-value" data-value="喀什">喀什</li>
			                									                							<li class="sb-value" data-value="克拉玛依">克拉玛依</li>
			                									                							<li class="sb-value" data-value="石河子">石河子</li>
			                									                							<li class="sb-value" data-value="塔城">塔城</li>
			                									                							<li class="sb-value" data-value="库尔勒">库尔勒</li>
			                									                							<li class="sb-value" data-value="伊犁">伊犁</li>
			                									                							<li class="sb-value" data-value="吐鲁番">吐鲁番</li>
			                									                							<li class="sb-value" data-value="克孜勒苏">克孜勒苏</li>
			                									                							<li class="sb-value" data-value="博尔塔拉">博尔塔拉</li>
			                									                							<li class="sb-value" data-value="阿拉尔">阿拉尔</li>
			                									                							<li class="sb-value" data-value="图木舒克">图木舒克</li>
			                									                							<li class="sb-value" data-value="五家渠">五家渠</li>
			                									                							<li class="sb-value" data-value="巴音郭楞">巴音郭楞</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="29" data-p="江西" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="南昌">南昌</li>
			                									                							<li class="sb-value" data-value="萍乡">萍乡</li>
			                									                							<li class="sb-value" data-value="九江">九江</li>
			                									                							<li class="sb-value" data-value="上饶">上饶</li>
			                									                							<li class="sb-value" data-value="抚州">抚州</li>
			                									                							<li class="sb-value" data-value="吉安">吉安</li>
			                									                							<li class="sb-value" data-value="鹰潭">鹰潭</li>
			                									                							<li class="sb-value" data-value="宜春">宜春</li>
			                									                							<li class="sb-value" data-value="赣州">赣州</li>
			                									                							<li class="sb-value" data-value="景德镇">景德镇</li>
			                									                							<li class="sb-value" data-value="新余">新余</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="30" data-p="海南" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="海口">海口</li>
			                									                							<li class="sb-value" data-value="儋州">儋州</li>
			                									                							<li class="sb-value" data-value="琼山">琼山</li>
			                									                							<li class="sb-value" data-value="五指山市">五指山市</li>
			                									                							<li class="sb-value" data-value="文昌">文昌</li>
			                									                							<li class="sb-value" data-value="三亚">三亚</li>
			                									                							<li class="sb-value" data-value="琼海">琼海</li>
			                									                							<li class="sb-value" data-value="万宁">万宁</li>
			                									                							<li class="sb-value" data-value="东方">东方</li>
			                									                							<li class="sb-value" data-value="定安">定安</li>
			                									                							<li class="sb-value" data-value="屯昌">屯昌</li>
			                									                							<li class="sb-value" data-value="澄迈">澄迈</li>
			                									                							<li class="sb-value" data-value="临高">临高</li>
			                									                							<li class="sb-value" data-value="白沙">白沙</li>
			                									                							<li class="sb-value" data-value="昌江">昌江</li>
			                									                							<li class="sb-value" data-value="乐东">乐东</li>
			                									                							<li class="sb-value" data-value="陵水">陵水</li>
			                									                							<li class="sb-value" data-value="保亭">保亭</li>
			                									                							<li class="sb-value" data-value="琼中">琼中</li>
			                									                							<li class="sb-value" data-value="三沙">三沙</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="31" data-p="香港" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="香港">香港</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="32" data-p="澳门" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="澳门">澳门</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="33" data-p="台湾" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="台湾">台湾</li>
			                									                					</ul>
			                				</li>
		                							                				<li data-index="34" data-p="海外" style="display: none;">
			                					<ul>
			                									                							<li class="sb-value" data-value="美国">美国</li>
			                									                							<li class="sb-value" data-value="加拿大">加拿大</li>
			                									                							<li class="sb-value" data-value="澳大利亚">澳大利亚</li>
			                									                							<li class="sb-value" data-value="英国">英国</li>
			                									                							<li class="sb-value" data-value="法国">法国</li>
			                									                							<li class="sb-value" data-value="德国">德国</li>
			                									                							<li class="sb-value" data-value="俄罗斯">俄罗斯</li>
			                									                							<li class="sb-value" data-value="意大利">意大利</li>
			                									                							<li class="sb-value" data-value="西班牙">西班牙</li>
			                									                							<li class="sb-value" data-value="瑞士">瑞士</li>
			                									                							<li class="sb-value" data-value="荷兰">荷兰</li>
			                									                							<li class="sb-value" data-value="北欧">北欧</li>
			                									                							<li class="sb-value" data-value="韩国">韩国</li>
			                									                							<li class="sb-value" data-value="日本">日本</li>
			                									                							<li class="sb-value" data-value="马来西亚">马来西亚</li>
			                									                							<li class="sb-value" data-value="印度">印度</li>
			                									                							<li class="sb-value" data-value="新加坡">新加坡</li>
			                									                							<li class="sb-value" data-value="朝鲜">朝鲜</li>
			                									                							<li class="sb-value" data-value="泰国">泰国</li>
			                									                							<li class="sb-value" data-value="东南亚">东南亚</li>
			                									                							<li class="sb-value" data-value="南非">南非</li>
			                									                							<li class="sb-value" data-value="埃及">埃及</li>
			                									                							<li class="sb-value" data-value="新西兰">新西兰</li>
			                									                							<li class="sb-value" data-value="墨西哥">墨西哥</li>
			                									                							<li class="sb-value" data-value="巴西">巴西</li>
			                									                							<li class="sb-value" data-value="阿根廷">阿根廷</li>
			                									                							<li class="sb-value" data-value="尼日利亚">尼日利亚</li>
			                									                							<li class="sb-value" data-value="亚洲地区">亚洲地区</li>
			                									                							<li class="sb-value" data-value="非洲地区">非洲地区</li>
			                									                							<li class="sb-value" data-value="大洋洲地区">大洋洲地区</li>
			                									                							<li class="sb-value" data-value="北美地区">北美地区</li>
			                									                							<li class="sb-value" data-value="南美地区">南美地区</li>
			                									                					</ul>
			                				</li>
		                					                				</ul>
	                			</div>
	                		</li>
	                		<li class="edit-submit">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{$user->user_id}}">
                            <input type="submit" class="btn-submit clickstat" eid_desc="点击/个人中心/信息编辑/保存" value="保存">
                            <!-- <a  class="btn-submit clickstat" href="myren_do" e eid_desc="点击/个人中心/信息编辑/保存">保存</a> --></li>
                		</ul>
                		
                	</form>
            	</div>
            </div>
        </div>

    </div>

	<script src="./ren_files/footer.js.下载"></script><div class="huya-footer">
    <div class="huya-footer__hd">
        <dl class="huya-footer_friend">
            <dt>友情链接</dt>
            <dd><a href="http://www.duowan.com/" target="_blank">多玩游戏</a></dd>
            <dd><a href="http://wan.yy.com/" target="_blank">YY游戏</a></dd>
            <dd><a href="http://games.qq.com/" target="_blank">腾讯游戏频道</a></dd>
            <dd><a href="http://www.kuaikanmanhua.com/" target="_blank">快看漫画</a></dd>
            <dd><a href="http://www.ooqiu.com/" target="_blank">全球电竞网</a></dd>
            <dd><a href="http://games.ifeng.com/esports/" target="_blank">凤凰游戏电竞</a></dd>
            <dd><a href="http://www.aipai.com/" target="_blank">爱拍</a></dd>
            <dd><a href="http://www.56.com/game" target="_blank">搜狐56视频</a></dd>
            <dd><a href="http://games.iqiyi.com/" target="_blank">爱奇艺游戏</a></dd>
            <dd><a href="http://video.duowan.com/" target="_blank">多玩视频</a></dd>
            <dd><a href="http://www.hiyd.com/" target="_blank">Hi运动健身</a></dd>
            <dd><a href="http://www.yy.com/" target="_blank">视频直播</a></dd>
        </dl>
        <dl class="huya-footer_help">
            <dt>主播帮助</dt>
            <dd><a href="http://www.huya.com/e/zhubo" target="_blank">新人主播指引</a></dd>
            <dd><a href="http://www.huya.com/download/#players_pc" target="_blank">开播工具下载</a></dd>
            <dd><a href="http://help.huya.com/276" target="_blank">开播教程引导</a></dd>
        </dl>
        <div class="huya-footer_prod">
            <h2>虎牙产品下载</h2>
            <div class="huya-app_qrcode">
                <div class="app_qrcode_img"></div>  
                <p>扫描下载虎牙APP</p>
            </div>
            <ul class="huya-footer_prod_list">
                <li><i class="huya-footer_iphone"></i><a href="http://www.huya.com/download/#iphone" target="_blank">iPhone版</a></li>
                <li><i class="huya-footer_ipad"></i><a href="http://www.huya.com/download/#ipad" target="_blank">iPad版</a></li>
                <li><i class="huya-footer_andriod"></i><a href="http://www.huya.com/download/#android" target="_blank">Andriod版</a></li>
                <li><i class="huya-footer_pad"></i><a href="http://www.huya.com/download/#pad" target="_blank">Andriod Pad</a></li>
                <!-- <li><i class="huya-footer_tv"></i><a href="http://www.huya.com/download/#tv" target="_blank">TV版</a></li> -->
                <li><i class="huya-footer_pc"></i><a href="http://www.huya.com/download/#pc" target="_blank">PC版</a></li>
                <li><i class="huya-footer_wp"></i><a href="http://www.huya.com/download/#wp" target="_blank">Win10版/WP版</a></li>
            </ul>
        </div>
        <div class="huya-footer_other">
            <h2>关注我们</h2>
            <div class="huya-pub_number">
                <div class="pub_number_img"></div>  
                <p>扫描关注微信公众号</p>
            </div>
            <ul class="footer_other_list">
                <li><i class="huya-footer_sina"></i><a href="http://weibo.com/90dwyy" target="_blank">虎牙官方微博</a></li>
                <li><i class="huya-footer_qieba"></i><a href="http://tieba.baidu.com/f?ie=utf-8&amp;kw=%E8%99%8E%E7%89%99%E7%9B%B4%E6%92%AD&amp;fr=search" target="_blank">贴吧交流</a></li>
                <li><a target="_blank" href="http://blog.huya.com/index.php?m=Announcement&amp;do=show&amp;type=notice&amp;id=67">不良信息投诉与举报</a></li>
            </ul>
        </div>
    </div>
    <div class="huya-footer__bd">
        <div class="huya-footer__nav">
            <p>
                <a target="_blank" href="http://www.huya.com/zt/usc/#about" class="clickstat" eid="click/home/yejiao/guanyu" eid_desc="点击/首页/页脚/关于虎牙">关于虎牙</a>|
                <a target="_blank" href="http://hr.huya.com/" class="clickstat" eid="click/home/yejiao/joinus" eid_desc="点击/首页/页脚/加入我们">加入我们</a>|   
                <a target="_blank" href="http://www.huya.com/zt/usc/#contact" class="clickstat" eid="click/home/yejiao/lianxi" eid_desc="点击/首页/页脚/合作联系">合作联系</a>|
                <a target="_blank" href="http://www.huya.com/zt/usc/#sites" class="clickstat" eid="click/home/yejiao/youlian" eid_desc="点击/首页/页脚/友链">友情链接</a>|
                <a target="_blank" href="http://www.huanju.cn/s/contact.html">广告热线：020-82120508</a>|
                <a target="_blank" href="http://gm.duowan.com/user/center/centerOpen.do?product=HUYA&amp;source=YY" class="clickstat" eid="click/home/yejiao/kefu" eid_desc="点击/首页/页脚/客服">在线客服</a>|
                <a target="_blank" href="http://blog.huya.com/regulation/index.html">平台规则</a>|
                <a target="_blank" href="http://www.huanju.cn/1207/m_205349693256.html">隐私权保护政策</a>|
                <a target="_blank" href="http://www.huanju.cn/1207/m_205353486825.html">版权保护投诉指引</a>
            </p>
            <p>
                <a target="_blank" href="http://a.msstatic.com/huya/main/assets/img/icp.jpg">增值电信业务经营许可证 粤B2-20170312</a>
                <a target="_blank" href="http://a.msstatic.com/huya/main/img/huya_wlwh_xkz.png">粤网文[2015]1712-302号</a>
            </p>
            <p>
                <a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备16120983号-1</a>|
                <span><img src="./ren_files/j.gif" alt="">粤公网安备44011302000242号 </span>|
                <a target="_blank" href="http://assets.dwstatic.com/common/docs/4401060100548.jpg">穗公网监备案证第4401060100548号</a>|
                <a target="_blank" href="http://www.gdca.gov.cn/">广东省通信管理局</a>|
                <a target="_blank" href="http://a.msstatic.com/huya/main/img/huya_wl_xkz.png">网络出版服务许可证</a>|
                <a target="_blank" href="http://a.msstatic.com/huya/main/assets/img/tv_license.jpg">节目制作经营许可证</a>
            </p>
        </div>
        <div class="huya-footer__copyright">
            <p>
                <span>广州虎牙信息科技有限公司</span>
                <span>&nbsp;版权所有&nbsp;©&nbsp;2016-2017&nbsp;</span>
                <a target="_blank" href="http://www.huya.com/">huya.com</a>
                <a target="_blank" href="http://jb.ccm.gov.cn/" class="clickstat" eid="click/home/yejiao/jubao" eid_desc="点击/首页/页脚/举报">12318全国文化市场举报网站</a>
                <a target="_blank" href="http://www.12377.cn/" class="clickstat" eid="click/home/yejiao/jubao2" eid_desc="点击/首页/页脚/举报2">中国互联网不良信息举报中心</a>
                <span>客服&amp;举报电话：020-82120010</span>
            </p>
        </div>
        <div class="huya-footer__hy-logo">
            <img src="./ren_files/hy-logo.png" width="322" height="46">
            <a target="_blank" id="_pingansec_bottomimagesmall_brand" href="http://si.trustutn.org/info?sn=950170109026610628628&amp;certType=1"><img src="./ren_files/brand_bottom_small.jpg"></a>
            <a href="https://credit.szfw.org/CX20170721035218030329.html" target="_blank"><img src="./ren_files/sf.png"></a>
            <a href="https://credit.szfw.org/CX20170721035218020978.html" target="_blank"><img src="./ren_files/silver.jpg"></a>
        </div>
    </div>
</div>

<script src="./ren_files/js&amp;f=main.js.下载"></script>
<script type="text/javascript" src="./ren_files/ya-huya.min.js.下载" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="./ren_files/report_info.js.下载"></script>
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
    <script type="text/javascript" src="./ren_files/push-min.js.下载"></script>
    <script type="text/javascript" src="./ren_files/push.func-min.js.下载"></script><!-- E 后台推送消息 -->

<script type="text/javascript" src="./ren_files/user_info.js.下载"></script>
<script type="text/javascript">
	$('body').on('click','.clickstat',function(){
        var that = $(this);
        report({
          eid:that.attr('eid'),
          eid_desc:that.attr('eid_desc')
        });
    });
</script></body></html>