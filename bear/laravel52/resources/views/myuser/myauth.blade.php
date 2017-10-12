<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="css/admin.css">
        <link rel='canonical' href='http://www.huya.com/'>
        <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
        <link type="text/css" rel="stylesheet" href="css/auto_combine_a7d45_999daed.css">
        <link rel="stylesheet" type="text/css" href="css/uploadify.css">
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/WdatePicker.js"></script>
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
<script src="js/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/my_auth.css">

<!-- 上传头像 s-->
<script type="text/javascript" src="js/profile.js"></script>
<script src="js/jquery.Jcrop.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
<script type="text/javascript" src="js/jquery.uploadify-3.1.js?5"></script>
<link rel="stylesheet" href="css/uploadify.css" type="text/css" />
<link rel="stylesheet" href="css/yy-live.css" type="text/css" />
<script type="text/javascript" src="js/ubbEditor.js"></script>

<!-- 上传头像 e -->
<!-- 虎牙认证操作提示 add by shixubo -->
  <style type="text/css">
    .start_p{font-size: 15px;color: #FF8A05;background: #FCF3E8;padding: 5px 0;margin: 15px 0;}
    .point_p{color:#666666;background:#F5F5F5;padding: 10px;margin: 20px 0;font-size: 13px;font-weight: bolder;}
    .qr_code{margin: 15px 0;}
  </style>
<!-- 虎牙认证操作提示end -->
</head>
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
    var currentMenu = 'auth',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="js/main_menu.js"></script>
<script type="text/javascript" src="js/cookies.js"></script>
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
          <div class="mod">

            <div class="mod-hd">
                  <h3>虎牙认证</h3>
              </div>
        <!-- 虎牙认证操作提示 add by shixubo -->
          <p class="start_p">★ 推荐认证方式：下载虎牙助手app，3分钟快速完成虎牙认证</p>
          <div class="h5_head">
                  <span>操作指引</span>
                </div>
                <ul class="ques_wrap">
                  <li>
                    <p>1、下载并安装虎牙助手app客户端（请确认虎牙助手app是最新版本）</p>
                  </li>
                  <li>
                    <p>2、打开app并使用虎牙账号登录</p>
                  </li>
                  <li>
                    <p>3、点击“头像”进入“个人中心”，在“个人中心”完成虎牙认证</p>
                  </li>
                  <li>
                    <p>4、认证教程：<a href="http://blog.huya.com/product/70" target="_blank">http://blog.huya.com/product/70</a></p>
                  </li>
                </ul>
                <img class="qr_code" src="http://a.msstatic.com/huya/icenter/2.15/img/QR_code.png" alt="虎牙App">
                <div class="h5_head">
                  <span>示意图</span>
                </div>
                <img src="http://a.msstatic.com/huya/icenter/2.15/img/sign_page_2.jpg" alt="认证方式">
                <p class="point_p">· 备用认证方式：必须完成高级实名认证，并且完善主播资料后才算完成虎牙认证</p>
        <!-- 虎牙认证操作提示end -->
              <div class="h5_head">
                <span>高级实名认证</span>
              </div>
              <p id="warning"></p>
              @if($rz==0)
              <ul id="anth_main" class="auth_type">
                <li class="active">
                  <p class="p_1">高级认证</p>
                  <p class="p_2"></p>
                  <p class="p_3">需要提交姓名、身份证和银行卡信息，仅适用于虎牙主播用户</p>
                  <a href="<?=url('/yy')?>" target="_blank" class="go_real_auth">开始高级实名认证</a>
                </li>
              </ul>
              @else
                <p class="finish_tips"><span></span>已完成高级实名认证</p>
              @endif
                            <div class="h5_head">
                <span>完善主播资料</span>
              </div>
                             <!-- <p class="real_auth_tips">（主播头像可到主播设置中修改，其他资料一经提交不得修改，请谨慎填写）</p> -->
                @if($status==0)
        <form action="<?=url('/myauth')?>" method="POST" enctype="multipart/form-data">  
               <table cellpadding="0" cellspacing="0" border="0" class="info_set">
                <tr>
                  <td class="td_1">主播昵称：</td>
                  <td class="td_2">
                    <div>
                      <input type="text" class="phone_num" id="anchor_nick" placeholder="控制在6个汉字以内最佳" name="name"/>
                      <!-- <span>（限10个汉字或20个字符以内）</span> -->
                      <span id="checkNickWord" style="display:none;">
                        <i style="background-image:url(../main/statics/img/icon_notive.png);display: inline-block;width: 16px;height: 16px;vertical-align: middle;margin-top: -3px;"></i>
                      </span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="td_1"></td>
                  <td class="td_2">
                    <div style="color:red;">（主播昵称提交后将无法修改，请谨慎填写）</div>
                  </td>
                </tr>
                <tr>
                  <td class="td_1">直播品类：</td>
                  <td class="td_2">
                    <select class="live_type" id="liveType" name='type_id'>
                      @foreach($cate as $val)
                      <option value="{{ $val->id }}">{{ $val->typename }}</option>
                      @endforeach
                    </select>
                    <span>（根据兴趣选择，仅作运营人员参考，不影响实际开播权限）</span>
                  </td>
                </tr>
                <tr>
                  <td class="td_1" style="vertical-align: top;padding-top: 34px;">头像：</td>
                  <td class="td_2 td_img">
                    <!-- 上传头像 s -->
                    <!-- 上传头像 e -->
                    <div class="img_wrap" id="imgWrap">
                      <div id="queue"></div>
                      <input type="file" name="file_upload" id="file_upload" />
                      <img src="images/c8e7132cd73f1dd8a34d738f29a1d3_180_135.jpg" class='image'/>
                      <a href="javascript:$('#file_upload').uploadify('cancel')" id="cacelBtn">Cancel First File</a> | 
                      <a href="javascript:$('#file_upload').uploadify('cancel', '*')">Clear the Queue</a> | 
                      <a href="javascript:$('#file_upload').uploadify('upload')">Upload First Files</a> | 
                      <a href="javascript:$('#file_upload').uploadify('upload','*')">Upload the Files</a> | 
                      <a href="javascript:changeBtnText()">Change the Button Text</a> | 
                      <a href="javascript:returnBtnText();">Read the Button</a>  |
                      <a href="javascript:$('#file_upload').uploadify('stop')">Stop the Uploads!</a>
                      <div id="pregress"></div>
                    </div>
                    <!-- <a href="javascript:void(0);" class="upload_btn" title="上传图片" id="avatar_upload_file">上传图片</a> -->
                    <span class="upload_tips">支持.jpg .jpeg .bmp .gif格式照片，大小不超过2M。（请使用ie9或更高级版本浏览器上传）</span>
                    <a href="javascript:$('#file_upload').uploadify('upload')"><input type="button" value="确定"></a>
                    <input type="text" name='img' id='img'>
                  </td>
                </tr>
                <tr>
                  <td class="td_1">&nbsp;</td>
                  <td class="td_2">
                   <input type="submit" value="提交" class="sub_info">
                  </td>
                </tr>
               </table>
               </form>
                @else
                <p class="finish_tips"><span></span>已完善主播资料</p>
                @endif

              <p class="ques_head">常见问题解决<span><img src="../main/statics/img/ques_icon.png" /></span></p>
              <ul class="ques_wrap">
                <li>
                  <p class="p_1">1、什么是虎牙认证？</p>
                  <p class="p_2">为适应现阶段业务发展需要，虎牙直播已推出新版虎牙主播认证系统。必须完成高级实名认证，
并且完善主播资料后才算完成虎牙认证。通过虎牙认证的主播将获得更多曝光、礼物分成、签约公会等一系列特权。</p>
                </li>
                <li>
                  <p class="p_1">2、认证时填写的直播品类提交后，就只能直播该品类吗？</p>
                  <p class="p_2">不是，认证填写的直播品类只是方便虎牙运营团队了解主播直播情况，不影响实际直播品类，建议填写想要直播的品类即可。
                  </p>
                </li>
                <li>
                  <p class="p_1">3、虎牙认证的银行卡跟佣金提现的银行卡有冲突吗？</p>
                  <p class="p_2">不冲突，虎牙认证验证的银行卡信息只是为了核实本人信息，与佣金提现的银行卡无关。</p>
                </li>
                <li>
                  <p class="p_1">4、当udb.yy.com显示高级实名认证已经通过而虎牙认证页面显示高级实名认证未通过时，请检查是否同一个yy号登录。</p>
                  <p class="p_2">关于新版认证的任何问题可联系：YY 80176 80321</p>
                </li>
              </ul>
          </div>
        </div>
    </div>
    </div>
<script src="js/footer.js"></script>
<script src="js/js&f=main.js"></script>
<script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="js/report_info.js"></script>
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
    <script type='text/javascript' src='js/push-min.js?t=20170818'></script>
    <script type='text/javascript' src='js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->
</body>
</html>
 <script src="js/headerFunction_c0fe602.js" data-fixed="true"></script>

<script src="js/jquery.lazyload_769f44a.js" data-fixed="true"></script>

<script type="text/javascript" charset="utf-8" src="js/auto_combine_d17e3_b03328c.js"></script>
<script src="js/jquery.js">   </script>
<script>
    $(function  () {
        $("#file_upload").change(function (){
          alert();
            var $file = $(this);  
            var fileObj = $file[0];  
            var windowURL = window.URL || window.webkitURL;  
            var dataURL;  
            var $img = $(".image");  
      
            if (fileObj && fileObj.files && fileObj.files[0]) {  
                dataURL = windowURL.createObjectURL(fileObj.files[0]);  
                $img.attr('src', dataURL);  
            }else {  
                dataURL = $file.val();  
            }  
        });
    });
    <?php $timestamp = time();?>
    $(function() {
      $('#file_upload').uploadify({
        auto:false, 
        //接受true or false两个值，当为true时选择文件后会自动上传；为false时只会把选择的文件增加进队列但不会上传，这时只能使用upload的方法触发上传。不设置auto时默认为true
        buttonClass: "some-class", 
        //设置上传按钮的class
        buttonCursor: 'hand',
        //设置鼠标移到按钮上的开状，接受两个值'hand'和'arrow'(手形和箭头)
        buttonImage: 'images/browse-btn.png', 
        //设置图片按钮的路径（当你的按钮是一张图片时）。如果使用默认的样式，你还可以创建一个鼠标悬停状态，但要把两种状态的图片放在一起，并且默认的放上面，悬停状态的放在下面（原文好难表达啊：you can create a hover state for the button by stacking the off state above the hover state in the image）。这只是一个比较便利的选项，最好的方法还是把图片写在CSS里面。
        buttonText: '<div>选择文件</div>',
        //设置按钮文字。值会被当作html渲染，所以也可以包含html标签
        checkExisting: "<?=url('/myauth/check')?>",
        //接受一个文件路径。此文件检查正要上传的文件名是否已经存在目标目录中。存在时返回1，不存在时返回0(应该主要是作为后台的判断吧)，默认为false
        debug: true,
        //开启或关闭debug模式
        fileObjName:'filedata',
        //设置在后台脚本使用的文件名。举个例子，在php中，如果这个选项设置为'the_files',你可以使用$_FILES['the_files']存取这个已经上传的文件。
        fileSizeLimit: 0,
        //设置上传文件的容量最大值。这个值可以是一个数字或者字符串。如果是字符串，接受一个单位（B,KB,MB,GB）。如果是数字则默认单位为KB。设置为0时表示不限制
        fileTypeExts: '*.*',
        //设置允许上传的文件扩展名（也就是文件类型）。但手动键入文件名可以绕过这种级别的安全检查，所以你应该始终在服务端中检查文件类型。输入多个扩展名时用分号隔开('*.jpg;*.png;*.gif')
        fileTypeDesc: 'All Files',
        //可选文件的描述。这个值出现在文件浏览窗口中的文件类型下拉选项中。（但我设置了好像没效果？原文：The description of the selectable files.  This string appears in the browse files dialog box in the file type drop down.）
        formData: {
          timestamp: '<?php echo $timestamp;?>',
          token: '<?php echo md5("unique_salt" . $timestamp);?>'
        },
        //通过get或post上传文件时，此对象提供额外的数据。如果想动态设置这些值，必须在onUploadStartg事件中使用settings的方法设置。在后台脚本中使用 $_GET or $_POST arrays (PHP)存取这些值.具体看这里http://www.uploadify.com/documentation/uploadify/customizing-the-server-side-upload-script/
        height: 30,
        //设置按钮的高度(单位px)，默认为30.(不要在值里写上单位，并且要求一个整数，width也一样)
        width: 120,
        //设置按钮宽度(单位px)，默认120
        itemTemplate:false,
        //模板对象。给增加到上传队列中的每一项指定特殊的html模板。模板格式请看官网http://www.uploadify.com/documentation/uploadify/itemtemplate/
        method:'post',
        //提交上传文件的方法，接受post或get两个值，默认为post
        multi: true,
        //设置是否允许一次选择多个文件，true为允许，false不允许
        overrideEvents: [],
        //重写事件，接受事件名称的数组作为参数。所设置的事件将可以被用户重写覆盖，比如
        preventCaching:true,
        //是否缓存swf文件。默认为true，会给swf的url地址设置一个随机数，这样它就不会被缓存。(有些浏览器缓存了swf文件就会触发不了里面的事件--by rainweb)
        progressData: 'percentage',
        //设置文件上传时显示数据，有‘percentage’ or ‘speed’两个参数(百分比和速度)
        queueID: false,
        //设置上传队列DOM元素的ID，上传的项目会增加进这个ID的DOM中。设置为false时则会自动生成队列DOM和ID。默认为false
        queueSizeLimit: 999,
        //设置每一次上传队列中的文件数量。注意并不是限制总的上传文件数量（那是uploadLimit）.如果增加进队列中的文件数量超出这个值，将会触发onSelectError事件。默认值为999
        removeCompleted: true,
        //是否移除掉队列中已经完成上传的文件。false为不移除
        removeTimeout: 3,
        //设置上传完成后删除掉文件的延迟时间，默认为3秒。如果removeCompleted为false的话，就没意义了
        requeueErrors: false,
        //设置上传过程中因为出错导致上传失败的文件是否重新加入队列中上传
        successTimeout: 30,
        //设置文件上传后等待服务器响应的秒数，超出这个时间，将会被认为上传成功，默认为30秒
        swf: "swf/uploadify.swf",
        //swf的相对路径，必写项
        uploader: "<?=url('/uploadify')?>",
        //服务器端脚本文件路径，必写项
        uploadLimit: 10,
        //上传文件的数量。达到或超出这数量会触发onUploadError方法。默认999
        /***Event****/
        onCancel: function(file){
          console.log('The file'+ file.name + 'was cancelled.')
        },
        //文件被移除出队列时触发,返回file参数
        onClearQueue: function(queueItemCount){
          console.log(queueItemCount+'file(s) were removed frome the queue')
        },
        //当调用cancel方法且传入'*'这个参数的时候触发，其实就是移除掉整个队列里的文件时触发，上面有说cancel方法带*时取消整个上传队列
        onDestroy: function(){
          //调用destroy方法的时候触发
        },
        onDialogClose: function(queueData){
          console.log(queueData.filesSelected+'\n'+queueData.filesQueued+'\r\n'+queueData.filesReplaced+'\r\n'+queueData.filesCancelled+'\r\n'+ queueData.filesErrored)
        },
        //关闭掉浏览文件对话框时触发。返回queueDate参数，有以下属性：
        /*
          filesSelected 浏览文件对话框中选取的文件数量
          filesQueued 加入上传队列的文件数
          filesReplaced 被替换的文件个数
          filesCancelled 取消掉即将加入队列中的文件个数
          filesErrored 返回错误的文件个数
        */
        onDialogOpen:function(){
          //打开选择文件对话框时触发
        },
        onDisable:function(){
          //禁用uploadify时触发(通过disable方法)
        },
        onEnalbe: function(){
          //启用uploadify时触发(通过disable方法)
        },
        onFallback:function(){
          //在初始化时检测不到浏览器有兼容性的flash版本时实触发
        },
        onInit: function(instance){
          console.log('The queue ID is'+ instance.settings.queueID)
        },
        //每次初始化一个队列时触发，返回uploadify对象的实例
        onQueueComplete:function(queueData){
          console.log(queueData.uploadsSuccessful+'\n'+queueData.uploadsErrored)
        },
        //队列中的文件都上传完后触发，返回queueDate参数，有以下属性：
        /*
          uploadsSuccessful 成功上传的文件数量
          uploadsErrored 出现错误的文件数量
        */
        onSelect: function(file){
          console.log(file.name)
        },
        //选择每个文件增加进队列时触发，返回file参数
        onSelectError: function(file,errorCode,errorMsg){
          console.log(errorCode)
          console.log(this.queueData.errorMsg)
        },
        //选择文件出错时触发，返回file,erroCode,errorMsg三个参数
        /*
          errorCode是一个包含了错误码的js对象，用来查看事件中发送的错误码，以确定错误的具体类型，可能会有以下的常量：
          QUEUE_LIMIT_EXCEEDED:-100 选择的文件数量超过设定的最大值；
          FILE_EXCEEDS_SIZE_LIMIT:-110 文件的大小超出设定
          INVALID_FILETYPE:-130 选择的文件类型跟设置的不匹配

          errorMsg 完整的错误信息，如果你不重写默认的事件处理器，可以使用‘this.queueData.errorMsg’ 存取完整的错误信息
        */
        onSWFReady: function(){
          //swf动画加载完后触发，没有参数
        },
        onUploadComplete: function(file){
          //在每一个文件上传成功或失败之后触发，返回上传的文件对象或返回一个错误，如果你想知道上传是否成功，最后使用onUploadSuccess或onUploadError事件
        },
        onUploadError: function(file,errorCode,erorMsg,errorString){
        },
        //一个文件完成上传但返回错误时触发，有以下参数
        /*
          file 完成上传的文件对象
          errorCode 返回的错误代码
          erorMsg 返回的错误信息
          errorString 包含所有错误细节的可读信息
        */
        onUploadProgress: function(file,bytesUploaded,bytesTotal,totalBytesUploaded,totalBytesTotal){
          $('#pregress').html('总共需要上传'+bytesTotal+'字节，'+'已上传'+totalBytesTotal+'字节')
        },
        //每更新一个文件上传进度的时候触发,返回以下参数
        /*
          file 正上传文件对象
          bytesUploaded 文件已经上传的字节数
          bytesTotal 文件的总字节数
          totalBytesUploaded 在当前上传的操作中（所有文件）已上传的总字节数
          totalBytesTotal 所有文件的总上传字节数
        */
        onUploadStart: function(file){
          console.log('start update')
        },
        //每个文件即将上传前触发
        onUploadSuccess: function(file){
          console.log('succedssfully update')
        }
        //每个文件上传成功后触发
      })
    });
    function changeBtnText() {
      $('#file_upload').uploadify('settings', 'buttonText', 'BROWSE');
    }

    function returnBtnText() {
      alert('The button says ' + $('#file_upload').uploadify('settings', 'buttonText'));
    }
</script>

