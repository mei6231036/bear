$(document).ready(function(){
    var tmp=window.location.href;
    var indexUrl = tmp.substr(0,tmp.lastIndexOf("\/")+1);
    
    account_util = {
        
        
        unfreezeDepositGoldbeanWindow:function() {
           var alice = LEGO.popupBox("#popup-win2",{
               ok : function(dt){//确认后回调函数
                   account_util.ajaxUnfreezeDepositGoldbean();
               },
               existMask : true ,// 遮罩层，扩展参数existMask,默认为true
               cancle : function(dt){
//                   alice.close();
               }
           },{});
           alice.title("申请解冻");
           alice.content("你的冻结金豆为游戏直播金豆竞猜押金，解冻后将不再拥有游戏直播金豆竞猜开启权限！");
           alice.open();
        },
        
        ajaxUnfreezeDepositGoldbean:function(){
            var ajaxURL = indexUrl +  'index.php?m=MyAccount&do=ajaxUnfreezeDepositGoldbean';
            $.getJSON(
                ajaxURL, 
                {
                }, 
                function(response){
                    if (response.status) {
                        var successMsg = '提交成功';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            successMsg = response.msg;
                        }
                        account_util.displayInfo(true, successMsg);
                    } else {
                        var failMsg = '提交失败';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            failMsg = response.msg;
                        }
                        account_util.displayInfo(false, failMsg);
                    }
                    return;
                });
        },
        
        exchangeGreenbeanWindow:function(goldbean, exchange_goldbean, exchange_greenbean) {
           var div = '<p class="tips-verify">金元宝兑换金豆，兑换比率：<strong>'+exchange_goldbean+'</strong>金元宝=<strong> '+exchange_greenbean+'</strong>金豆</p>'
                    +'<form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">'
                    +'<div class="form-group"><label class="tit">请输入要兑换的金豆数量：</label>'
                    +'<input type="text" class="common-input" id="greenbean_input" value="0" onkeyup="account_util.insertvalue(\''+exchange_goldbean+'\', \''+exchange_greenbean+'\')">'
                    +'<span class="inline-text">个</span>'
                    +'<p class="tips-l">(需要<strong id="countdown">0</strong>金元宝)</p>'
                    +'<p class="tips-l">(目前账户剩余<strong>'+goldbean+'</strong>金元宝)</p>'
                    +'</div>'
                    +'<div class="form-group">'
                    +'<label class="tit">验证码：</label>'
                    +'<input type="text" class="common-input" id="captcha" onkeyup="account_util.setcaptchavalue()">'
                    +'<span id="captcha_s">'
                    +'<a id="captcha_a" href="javascript:void(0)" class="get-code" onclick="account_util.sendCaptchaGreenbean()">获取验证码</a>'
                    +'</span>'
                    +'<a class="get-phone" href="https://udb.duowan.com/security/index.do#tab=4" target="_blank">获取密保手机号</a>'
                    +'</div>'
                    +'</form>'
                    +'<div id="captcha_tip" class="form-group" style="color:green; display:none;">将收到的6位验证码在10分钟内填入以上输入框中！</div>'
                    +'<div class="btn-group">'
                    +'<a href="javascript:void(0)" class="btn btn-confirm J_btnConfirm">确定</a>'
                    +'<a href="javascript:void(0)" class="btn btn-cancel J_btnCancle">取消</a>'
                    +'</div>';
           $("#popup-win12 div.box-bd div.content_a").html(div);
           var alice = LEGO.popupBox("#popup-win12",{
               ok : function(dt){//确认后回调函数
                   account_util.ajaxExchangeGreenbean(goldbean, exchange_goldbean, exchange_greenbean);
               },
               existMask : true ,// 遮罩层，扩展参数existMask,默认为true
               cancle : function(dt){
//                   alice.close();
               }
           },{});
           alice.open();
        },
        
        sendCaptchaGreenbean:function(){
        	var ajaxURL = 'index.php?m=MyAccount&do=sendCaptcha';
        	var greenbean_value = $('#greenbean_value').val();
            if (greenbean_value == '') {
                return account_util.displayInfo(false, '请输入要兑换的金豆数量！');
            }
            $.getJSON(
           		ajaxURL,
           		{
           			"greenbean":greenbean_value
           		},
           		function(response){
           			if (response.status) {
//                                    $('#captcha_tip').parent().parent().parent().css('height',"202px");
           				$('#captcha_tip').show();
           				var second = "600";
           				$('#captcha_s').html('<span style="color:gray">重新获取验证码(<b id="captcha_time">'+second+'</b>)</span>');
           				var intervalId = setInterval(function(){
           					second -= 1;
           					if(second >= 0){
           						$('#captcha_time').html(second);
           					} else {
           						$('#captcha_s').html('<a id="captcha_a" href="javascript:void(0)" onclick="account_util.sendCaptchaGreenbean()" class="get-code">重新获取验证码</a>');
           						clearInterval(intervalId);
           					}
           				},1000);
           			} else {
           				var failMsg = '提交失败';
           				if (response.msg != '' && response.msg != null && response.msg != undefined) {
           					failMsg = response.msg;
           				}
           				account_util.displayInfo(false, failMsg);
           				return;
           			}
           		});
        },
        
        setcaptchavalue:function(){
        	$("#captcha_value").val($.trim($('#captcha').val()));
        },
        
        ajaxExchangeGreenbean:function(goldbean, exchange_goldbean, exchange_greenbean){
            var ajaxURL = indexUrl +  'index.php?m=MyAccount&do=ajaxExchangeGreenbean';
            var greenbean_value = $('#greenbean_value').val();
            if (greenbean_value == '') {
                return account_util.displayInfo(false, '请输入要兑换的金豆数量！');
            }
            var re = /^[0-9]+$/;
            if(!re.test(greenbean_value) || parseInt(greenbean_value) <0 ){
                return account_util.displayInfo(false, '格式错误，请大于0的整数！');
            }
            if(greenbean_value>max_num){
                return account_util.displayInfo(false, '对不起，一次最多只能兑换1亿金豆。');
            }
            
            var goldbeanValue = greenbean_value * (exchange_goldbean/exchange_greenbean);
            if(goldbeanValue > goldbean) {
                return account_util.displayInfo(false, '你兑换金豆所需的金元宝数量大于你拥有的金元宝数，请输入正确的数量！');
            }
            var captcha = $('#captcha_value').val();
            if (captcha == '') {
                return account_util.displayInfo(false, '请输入验证码！');
            }
            if(!re.test(captcha) || 6 != captcha.length){
                return account_util.displayInfo(false, '请输入6位验证码！');
            }
            $.getJSON(
                ajaxURL, 
                {
                    "greenbean":greenbean_value,
                    "captcha":captcha
                }, 
                function(response){
                    if (response.status) {
                        var successMsg = '提交成功';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            successMsg = response.msg;
                        }
                        account_util.displayInfo(true, successMsg);
                    } else {
                        var failMsg = '提交失败';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            failMsg = response.msg;
                        }
                        account_util.displayInfo(false, failMsg);
                    }
                    return;
                });
        },
        
        insertvalue:function(exchange_goldbean, exchange_greenbean) {
            var greenbeanValue = $.trim($("#greenbean_input").val());
            $("#greenbean_value").val(greenbeanValue);
            var goldbeanValue = greenbeanValue * (exchange_goldbean/exchange_greenbean);
            document.getElementById("countdown").innerHTML = goldbeanValue ;  
        },
        
        
        changeDisplayChannel:function(channelId) {
            $('.table > tbody').hide();
            $('#tbody_'+channelId).show();
            var totalIncome = $('#totalIncome_'+channelId).val()
            if (typeof totalIncome === "undefined") {
                totalIncome = 0;
            }
            document.getElementById("tatolgoldbean").innerHTML = totalIncome;
        },
        monthlyStatWindow : function ( goldbean, greenbean) {
           var div = '<p>您本月一共获得金元宝<strong>' + goldbean + '</strong>个，请月结：</p>'
                     +'<form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">'
                     +'<div class="form-action">'
                     +'<label class="g-radio">'
                     + '<input type="radio" name="exchangeType" checked="checked" value="1" onclick="account_util.setExchangeTypeValue()">'
                     + '<span>兑换成金豆</span>'
                     +'</label>'
                     +'<label class="g-radio">'
                     + '<input type="radio" name="exchangeType" value="2" onclick="account_util.setExchangeTypeValue()">'
                     + '<span>兑换为佣金</span>'
                     +'</label>'
                     +'</div>'
                     +'<p class="total" id="total_consult" style="display:block">兑换结果：<strong>'+greenbean+'</strong>个金豆</p>'
                     +'<p class="total" id="goldbean_consult" style="display:none">不足100部分会返还账户</p>'
                     + '<p class="tips-m"><i class="icon-mini icon-notices"></i>请在每月2号前完成结算，逾期未处理将默认转为金豆。</p>'
                     +'</form>'
                     +'<div class="btn-group">'
                     +'<span class="ui-button J_btnConfirm"> <a href="javascript:void(0)" class="btn btn-confirm">确定</a></span>'
                     +'<span class="ui-button ui-button-gray J_btnCancle"><a href="javascript:void(0)" class="btn btn-cancel">取消</a></span>'
                     +'</div>';
           $("#popup-win15 div.box-bd div.content_a").html(div);
           var alice = LEGO.popupBox("#popup-win15",{
               ok : function(dt){//确认后回调函数
                   account_util.ajaxMonthlyStat(goldbean);
               },
               existMask : true ,// 遮罩层，扩展参数existMask,默认为true
               cancle : function(dt){
//                   alice.close();
               }
           },{});
           alice.title('月结提示');
           alice.open();
        },
        
        setExchangeTypeValue:function(){
            var value = $.trim($("input[name='exchangeType']:checked").val());
            if (value == 1) {
                $("#total_consult").css("display","block");
                $("#goldbean_consult").hide();
            } else if (value == 2) {
                $("#total_consult").css("display","none");
                $("#goldbean_consult").show();
            }
            $("#exchangeType_value").val(value);
        },
        
        ajaxMonthlyStat:function(goldbean) {
            var ajaxURL = indexUrl + 'index.php?m=MyAccount&do=ajaxMonthlyStat';
            var type = $('#exchangeType_value').val();
            if (type == '') {
                account_util.displayInfo(false, '失败：请选择兑换金豆还是兑换佣金！');
                return;
            }
            $.getJSON(
                ajaxURL, 
                {
                    "goldbean":goldbean,
                    "type" : type
                }, 
                function(response){
                    if (response.status) {
                        var successMsg = '提交成功';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            successMsg = response.msg;
                        }
                        account_util.displayInfo(true, successMsg);
                    } else {
                        var failMsg = '提交失败';
                        if (response.msg != '' && response.msg != null && response.msg != undefined) {
                            failMsg = response.msg;
                        }
                        account_util.displayInfo(false, failMsg);
                    }
                    return;
                });
        },
        displayInfo:function(type,msg) {
            var str = '';
            if (type) {
                str = '<p class="msg-success"><i></i>' + msg + '</p>';
            } else {
                str = '<p class="msg-error"><i></i>' + msg + '</p>';
            }
            var url = indexUrl + 'index.php?m=MyAccount';
           var alice = LEGO.popupBox("#popup-win17",{
               ok : function(dt){//确认后回调函数
                    if (type) {
                        window.location.replace(url);
                        window.location.reload();
                    } else {
                        window.location.replace(url);
                    }
               },
               existMask : true ,// 遮罩层，扩展参数existMask,默认为true
               cancle : function(dt){
                    if (type) {
                        window.location.replace(url);
                        window.location.reload();
                    } else {
                        window.location.replace(url);
                    }
               }
           },{});
           alice.content(msg);
           alice.open();
        },
        tooltip:function() {
            var x = 10;  
            var y = 20;
            $("a.tooltip").mouseover(function(e){
                this.myTitle = this.title;
                this.title = "";	
                var tooltip = "<div id='tooltip'>"+ this.myTitle +"<\/div>"; //创建 div 元素
                $("body").append(tooltip);	//把它追加到文档中
                $("#tooltip")
                .css({
                    "top": (e.pageY+y) + "px",
                    "left": (e.pageX+x)  + "px"
                }).show("fast");	  //设置x坐标和y坐标，并且显示
            }).mouseout(function(){		
                this.title = this.myTitle;
                $("#tooltip").remove();   //移除 
            }).mousemove(function(e){
                $("#tooltip")
                .css({
                    "top": (e.pageY+y) + "px",
                    "left": (e.pageX+x)  + "px"
                });
            })
        },
        
        ajaxLoadLiveCaptcha:function() {
            var ajaxURL = indexUrl + 'index.php?m=Captcha&do=ajaxLoadLiveCaptcha';
            $.getJSON(
                ajaxURL, 
                {
                }, 
                function(response){
                    if (response.status) {
                        var captchaId = response.data.captchaId;
                        $("#captcha_id").val(captchaId);
                        $("#captcha_pic").attr("src",indexUrl+'index.php?m=Act&do=getPicByCaptchaId&captchaId='+captchaId);
                    }
                    return;
                });
        }
    };
    account_util.tooltip();
//    var channelId = $('#selectchannel').val();
//    account_util.changeDisplayChannel(channelId);
}); 