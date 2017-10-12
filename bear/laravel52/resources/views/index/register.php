<!DOCTYPE HTML>
<html>
<head>
<!-- <script id="allmobilize" charset="utf-8" src="js/allmobilize.min.js"></script> -->
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册-虎牙网</title>
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
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/core.min.js"></script>
<script type="text/javascript" src="dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="dist/messages_zh.js"></script>

<script type="text/javascript">
var youdao_conv_id = 271546;
</script>
<!-- <script type="text/javascript" src="js/conv.js"></script> -->
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="h/"><img src="images/logo_white.png" width="285" height="62" alt="虎牙招聘" /></a>
            <div id="cloud_s"><img src="images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>

    	<input type="hidden" id="resubmitToken" value="9b207beb1e014a93bc852b7ba450db27" />
		<div class="login_box">
        	<form id="loginForm"  class="cmxform" action="">

            	<input type="text" id="email" name="email" tabindex="1" placeholder="请输入常用邮箱地址" />
                <span class="error"  for="email"></span>
                <input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
                <span class="error"  for="password"></span>
                <input type="password" id="confirm_password" class="t_password" name="confirm_password"  placeholder="再次输入密码" />
                <span class="error"  for="confirm_password"></span>
            	
            	<input type="checkbox" id="agree" name="agree"  class="checkbox valid" />我已阅读并同意<a href="h/privacy.html" target="_blank">《熊直播用户协议》</a>
           		<span class="error"  for="agree"></span>
                <input type="submit" class="submit" id="submitLogin" value="注 &nbsp; &nbsp; 册" />
				
                <input type="hidden" id="callback" name="callback" value=""/>
                <input type="hidden" id="authType" name="authType" value=""/>
                <input type="hidden" id="signature" name="signature" value=""/>
                <input type="hidden" id="timestamp" name="timestamp" value=""/>
            </form>
            <div class="login_right">
            	<div>已有虎牙帐号</div>
            	<a  href="login"  class="registor_now">直接登录</a>
                <div class="login_others">使用以下帐号直接登录:</div>
                <a  href="h/ologin/auth/sina.html"  target="_blank" class="icon_wb" title="使用新浪微博帐号登录"></a>
               	<a  href="h/ologin/auth/qq.html"  class="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a>
            </div>
        </div>
        <div class="login_box_btm"></div>
    </div>

    <script type="text/javascript">
    	$.validator.setDefaults({
		    submitHandler: function() {
		    	var email = $('#email').val();
		    	var pwd = $('#password').val();
		      	$.ajax({
				   type: "GET",
				   url: "regin",
				   data: "email="+email+"&password="+pwd,
				   success: function(msg){
				     if(msg == 1)
				     {
				     	$('#ar').html('邮箱已被注册过');
						$('#ar').attr('style','display:true;')
						return false;
				     }else{
				     	alert('注册成功,快去登陆吧');
				     	 location.href = "login";//location.href实现客户端页面的跳转 
				     }
				   }
				});
		    }
		});
		$().ready(function() {
		// 在键盘按下并释放及提交后验证提交表单
			 $("#loginForm").validate({
			  errorPlacement: function(error, element) {
				// Append error within linked label
					$( element )
						.closest( "form" )
							.find( "span[for='" + element.attr( "id" ) + "']" )
								.append( error );
					},

			    rules: {
			      password: {
			        required: true,
			        minlength: 5
			      },
			      confirm_password: {
			        required: true,
			        minlength: 5,
			        equalTo: "#password"
			      },
			      email: {
			        required: true,
			        email: true
			      },
			      agree: "required"
			    },
			    messages: {
			      password: {
			        required: "请输入密码",
			        minlength: "密码长度不能小于 5 个字母"
			      },
			      confirm_password: {
			        required: "请输入密码",
			        minlength: "密码长度不能小于 5 个字母",
			        equalTo: "两次密码输入不一致"
			      },
			      email: "请输入一个正确的邮箱",
			      agree: "请接受我们的声明",
			    }
			});
		});



















   //  	$('#submitLogin').click(function(){
   //  		var email = $('#email').val();
   //  		var pwd = $('#password').val();
   //  		var t_pwd = $('.t_password').val();
   //  		var ret = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;//邮箱正则
			// if(! ret.test(email)){
			// 	$('#ar').html('邮箱格式错误');
			// 	$('#ar').attr('style','display:true;')
			// 	return false;
			// }else{
			// 	$('#ar').attr('style','display:none;')
			// }
			// if(pwd =='')
			// {
			// 	$('#br').html('密码不能为空');
			// 	$('#br').attr('style','display:true;')
			// 	return false;
			// }else{
			// 	$('#br').attr('style','display:none;')
			// }
			// if(pwd != t_pwd){
			// 	$('#cr').html('两次输入密码不一致');
			// 	$('#cr').attr('style','display:true;')
			// 	return false;
			// }else{
			// 	$('#cr').attr('style','display:none;')
			// }
		 //    $.ajax({
			//    type: "GET",
			//    url: "regin",
			//    data: "email="+email+"&password="+pwd,
			//    success: function(msg){
			//      if(msg == 1)
			//      {
			//      	$('#ar').html('邮箱已被注册过');
			// 		$('#ar').attr('style','display:true;')
			// 		return false;
			//      }else{
			//      	alert('注册成功,快去登陆吧');
			//      	 location.href = "login";//location.href实现客户端页面的跳转 
			//      }
			//    }
			// });
   //  	})
    
    </script>
</body>
</html>
