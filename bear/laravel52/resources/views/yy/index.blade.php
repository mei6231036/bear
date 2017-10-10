<!DOCTYPE html>
<!-- saved from url=(0043)https://aq.yy.com/realname/index.do?&m=null -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>YY安全中心 - 实名认证</title>
<meta name="keywords" content="yy安全中心、yy修改密码、yy帐号申诉、yy号登录、yy密保手机、yy手机安全中心、yy安全中心手机版">
<meta name="description" content="yy安全中心、yy修改密码、yy帐号申诉、yy号登录、yy密保手机、yy手机安全中心、yy安全中心手机版">
<link href="css/base.css" rel="stylesheet" type="text/css">
<link href="css/common_edu.css" rel="stylesheet" type="text/css">
<link href="css/bind.css" rel="stylesheet" type="text/css">
<link href="css/secure.dialog.css" rel="stylesheet" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="https://res.udb.duowan.com/aq/js/DD_belatedPNG_0.0.8a-min.js"></script>
<![endif]-->
</head>

<body>
<center>
            <h2 class="m_verifyTitle">提交认证资料</h2>
	    	<form action="<?=url('/yy/ins')?>" method="POST" enctype="multipart/form-data">
				<table>
                    <tbody>
		    		<tr>
                            <td>
		    		真实姓名：<input  type="text" placeholder="请填写你的真实姓名" class="grayinput textCon" name='name'>
                            </td>
		    		</tr>
		    		<tr>
                        <td>
		    		证件号码：<input  type="text" placeholder="请填写身份证号码" class="grayinput textCon" name='number'>
                        </td>
		    		</tr>
		    		<tr>
                         <td>
		    		<h3 class="uploadTitle">上传正面照片：</h3>
		    		<input type="file" name="b_img" id="b_img">

		    				<img class="uploadWrap-b"  style="height:300px;width:500px"/>

                        	<img id="frontUploadImg" class="example" src="images/verify03.jpg"  style="height:300px;width:500px">
                         </td>
		    		</tr>
		    		<tr>
                        <td>
		    		<h3 class="uploadTitle" id="backUploadTit">上传背面照片：</h3>
		    		<input type="file" name="l_img" id="l_img">

		    				<img class="uploadWrap-l" style="height:300px;width:500px"/>
		    				<img id="backUploadImg" class="example" src="images/verify04.jpg"  style="height:300px;width:500px"/>
                        </td>
		    		</tr>
		    		<tr>
                        <td>
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
			               <input type="submit" value="提交认证申请">
                        </td>
			    	</tr>
                    </tbody>
		    	</table>
		    </form>
</center>
</body>
<script id="_hiido_internal_script_id_" src="js/hiido_internal.js.下载"></script><script type="text/javascript" src="js/jquery-1.8.3.min.js.下载"></script>
<script type="text/javascript" src="js/udb.sdk.rsa.js.下载"></script>
<script type="text/javascript" src="js/lib.js.下载"></script>
<script type="text/javascript" src="js/picMove.js.下载"></script>
<script type="text/javascript" src="js/secure.dialog.js.下载"></script>
<script type="text/javascript" src="js/pages.js.下载"></script>
<script type="text/javascript" src="js/encodeBase64WithChinese.js.下载"></script>
<!--[if IE 6]> 
<script type="text/javascript">
    DD_belatedPNG.fix('.png24');
</script>
<![endif]--> 
<script type="text/javascript" src="js/duowan.js.下载" ansync="ansync"></script>

<script src="js/jquery.js">   </script>
<script>
    $(function  () {
        $("#b_img").change(function (){
            var $file = $(this);  
            var fileObj = $file[0];  
            var windowURL = window.URL || window.webkitURL;  
            var dataURL;  
            var $img = $(".uploadWrap-b");  
            if (fileObj && fileObj.files && fileObj.files[0]) {  
                dataURL = windowURL.createObjectURL(fileObj.files[0]);  
                $img.attr('src', dataURL);  
            }else {  
                dataURL = $file.val();  
            }  
        });
        $("#l_img").change(function (){
            var $file = $(this);  
            var fileObj = $file[0];  
            var windowURL = window.URL || window.webkitURL;  
            var dataURL;  
            var $img = $(".uploadWrap-l");  
            if (fileObj && fileObj.files && fileObj.files[0]) {  
                dataURL = windowURL.createObjectURL(fileObj.files[0]);  
                $img.attr('src', dataURL);  
            }else {  
                dataURL = $file.val();  
            }  
        });
    });
</script>
