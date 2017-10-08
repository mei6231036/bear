<!DOCTYPE HTML>
<html>
<head>
<script id="allmobilize" charset="utf-8" src="js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>虎牙直播</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="虎牙网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在虎牙网" name="description">
<meta content="虎牙,虎牙网,虎牙招聘,拉钩, 拉钩网 ,互联网招聘,虎牙互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 虎牙官网, 虎牙百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script src="js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.lib.min.js"></script>
<script type="text/javascript" src="js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="js/conv.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="h/"><img src="images/logo_white.png" width="285" height="62" alt="虎牙招聘" /></a>
            <div id="cloud_s"><img src="images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>
        
    	<input type="hidden" id="resubmitToken" value="" />		
		 <div class="login_box">
				<input type="text" id="email" name="email" value="" tabindex="1" placeholder="请输入邮箱账号" />
				<span class="error" style="display:none;" id="ar"></span>
			  	<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
				<span class="error" style="display:none;" id="br"></span>
			    <label class="fl" for="remember"><input type="checkbox" id="remember" value=""  name="autoLogin" /> 7天免登陆</label>
			    <a href="reset.html" class="fr" target="_blank">忘记密码？</a>
			    
				<!--<input type="submit" id="submitLogin" value="登 &nbsp; &nbsp; 录" />-->
				<button style="color:#fff;"  class="submitLogin" title="登 &nbsp; &nbsp; 录">登 &nbsp; &nbsp; 录</button>

			    
			    <input type="hidden" id="callback" name="callback" value=""/>
                <input type="hidden" id="authType" name="authType" value=""/>
                <input type="hidden" id="signature" name="signature" value=""/>
                <input type="hidden" id="timestamp" name="timestamp" value=""/>

			<div class="login_right">
				<div>还没有虎牙帐号？</div>
				<a  href="register"  class="registor_now">立即注册</a>
			    <div class="login_others">使用以下帐号直接登录:</div>
			    <a  href="h/ologin/auth/sina.html"  target="_blank" class="icon_wb" title="使用新浪微博帐号登录"></a>
			    <a  href="h/ologin/auth/qq.html"  class="icon_qq" target="_blank" title="使用腾讯QQ帐号登录"></a>
			</div>
        </div>
        <div class="login_box_btm"></div>
    </div>


</body>
</html>
<script type="text/javascript">
	$('.submitLogin').click(function(){
    		var email = $('#email').val();
    		var pwd = $('#password').val();
    		var remember = $('#remember').is(":checked");
    		if(remember){
    			remember = 1;
    		}else{
    			remember = 0;
    		}
    		var ret = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;//邮箱正则
			if(! ret.test(email)){
				$('#ar').html('邮箱格式错误');
				$('#ar').attr('style','display:true;')
				return false;
			}else{
				$('#ar').attr('style','display:none;')
			}
			if(pwd =='')
			{
				$('#br').html('密码不能为空');
				$('#br').attr('style','display:true;')
				return false;
			}else{
				$('#br').attr('style','display:none;')
			}

		    $.ajax({
			   type: "GET",
			   url: "login_do",
			   data: "email="+email+"&password="+pwd+"&remember="+remember,
			   success: function(msg){
			     if(msg == 1)
			     {
			     	$('#ar').html('登录失败了亲');
					$('#ar').attr('style','display:true;')
					return false;
			     }else{
			     	alert('快去看直播吧');
			     	location.href = "http://127.0.0.1/laravel521/public/";//location.href实现客户端页面的跳转 
			     }
			   }
			});
    	})
</script>