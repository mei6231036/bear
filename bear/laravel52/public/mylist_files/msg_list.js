!function($){function showTab(s,e){function a(s){g.fire(s)}function t(s){g.add(s)}var n,i=$(s),g=new $.Callbacks;return i.on("click",e,function(){n=$(this).index(),a(n)}),{go:a,change:t}}function once(s,e){var a;return function(){return s&&(a=s.apply(e||this,arguments),s=null),a}}function getMessageList(type,syncKey,strClass,isClick){var ajaxMessageList={url:"index.php?m=Msg&do=getMessageList",data:{type:type,syncKey:syncKey},callBack:function(res){var messageList=function(obj){{var __t,__p="";Array.prototype.join}with(obj||{}){if(__p+="\r\n",!msg.messageList||0===msg.messageList.length&&!isClick)__p+='\r\n<!-- 无消息 -->\r\n<span class="no-msg-tit">当前暂无消息！</span>\r\n';else{__p+="\r\n  ";for(var length=msg.messageList&&msg.messageList.length,i=0;length>i;i++){var msg_list=msg.messageList[i];__p+='\r\n  <!-- 消息列表 -->\r\n  <div class="msg">\r\n    <div class="m-tit">\r\n      <h3>'+(null==(__t=msg_list.title)?"":__t)+'</h3>\r\n    </div>\r\n    <div class="m-foot">\r\n      <span class="tit">\r\n        '+(null==(__t=msg_list.content)?"":__t)+"\r\n        ",msg_list.messageUrl&&-1==msg_list.messageUrl.indexOf("hd.huya.com/icenterWebH5")?__p+='\r\n          <a href="'+(null==(__t=msg_list.messageUrl)?"":__t)+'" target="_blank">查看详情</a>\r\n        ':msg_list.messageUrl&&(__p+='\r\n          <a href="javascript:;" data-url="'+(null==(__t=msg_list.messageUrl)?"":__t)+'" class="mseeage-detail">查看详情</a>\r\n        '),__p+="\r\n        ",msg_list.image&&(__p+='\r\n          <img class="msg_img" src="'+(null==(__t=msg_list.image)?"":__t)+'">\r\n        '),__p+='\r\n      </span>\r\n      <span class="datetime">'+(null==(__t=msg_list.date)?"":__t)+"</span>\r\n    </div>\r\n  </div>\r\n  <!-- 消息列表end -->\r\n  "}__p+="\r\n  ",__p+=msg.isOver?'\r\n    <span class="no-msg-tit">没有更多消息了！</span>\r\n  ':'\r\n    <a href="javascript:;" class="show-more">查看更多</a>\r\n  ',__p+="\r\n"}__p+=""}return __p};if(res.status===!0){var messageData=res.data;1===type?(offical_msgId=messageData.messageList&&messageData.messageList.length>0?messageData.messageList[0].msgId:"",offical_syncKey=messageData.syncKey,offical_isOver=messageData.messageList&&messageData.messageList.length>0,messageData.messageList&&messageData.messageList.length>0&&messageData.unreadCount&&$("#offical-msg-num").text("("+nineAdd(messageData.unreadCount)+")"),$(".offical-message").append(messageList({msg:res.data,isClick:isClick}))):(system_msgId=messageData.messageList&&messageData.messageList.length>0?messageData.messageList[0].msgId:"",system_syncKey=messageData.syncKey,system_isOver=messageData.messageList&&messageData.messageList.length>0,system_isOver&&(onceSystemMessageRead(type,system_msgId),messageData.unreadCount&&$("#system-msg-num").text("("+nineAdd(messageData.unreadCount)+")")),$(".system-message").append(messageList({msg:messageData,isClick:isClick}))),setTimeout(function(){$(".mod-message").getNiceScroll().resize()},300)}}};getAjax(ajaxMessageList)}function setMessageRead(s,e){window.console&&console.log("设置消息已读"+s);var a={url:"index.php?m=Msg&do=setMessageRead",data:{type:s,msgId:e},callBack:function(s){window.console&&console.log(s)}};getAjax(a)}var getAjax=function(s){$.ajax({url:window.indexUrl+s.url,data:s.data,dataType:"jsonp",success:function(e){s.callBack&&s.callBack(e)},error:function(){window.console&&console.log("获取数据失败！")}})},enlargeImgEvents=function(){var s=$(".mask_bg"),e=$("#enlarge-img");$(".mod-message").on("click",".msg_img",function(){var a=$(this).attr("src");e.find("img").attr("src",a),e.show(),s.show()}),s.on("click",function(){$("#general-box").hide(),e.hide(),s.hide()}),e.on("click",function(a){"enlarge-img-src"!==a.target.id&&(e.hide(),s.hide())})},nineAdd=function(s){return 99>s?s:"99+"},offical_syncKey="",offical_msgId="",offical_isOver=!1,system_syncKey="",system_msgId="",system_isOver=!1,msg={init:function(){this.getPrivateMsg(),systemMsg.init(),systemMsg.bindEvents(),officialAnnounce.init(),this.bindEvets()},bindEvets:function(){var s=new showTab(".mod-tab-trigger","li"),e=once(officialAnnounce.bindEvents),a=once(setMessageRead),t=$(".offical-message"),n=$(".system-message"),i=!1;s.change(function(s){$(".mod-tab-trigger li").removeClass("selected").eq(s).addClass("selected"),1===s?(i=!0,t.show(),$(".system-message").hide(),$("#system-msg-num").hide(),offical_isOver&&a(1,offical_msgId),e()):(i&&$("#offical-msg-num").hide(),t.hide(),n.show())}),enlargeImgEvents();var g=$(".mask_bg"),m=$("#general-box");$(".mod-message").on("click",".mseeage-detail",function(){var s=$(this).attr("data-url");m.find("iframe").attr("src",s),m.show(),g.show()}),$("#general-box").on("click",".J_btnClose",function(){m.hide(),g.hide()}),$(".mod-message").niceScroll({cursorcolor:"#AAAAAA",cursoropacitymin:1,cursorwidth:"5px",cursorborder:0})},getPrivateMsg:function(){var s="",e={url:"index.php?m=Msg&do=getUnreadMessageNum",callBack:function(e){if(e.status){var a=e.data.strangerMsg,t=e.data.contactMsg;if(0==a&&0==t)return;a>0&&t>0?s='<i></i><p>您收到<span class="msg-num">'+nineAdd(t)+'</span>条好友、<span class="msg-num">'+nineAdd(a)+'</span>条陌生人私信，请在<a href="http://www.huya.com/download/" target="_blank">虎牙直播APP</a>查看。':a>0&&0==t?s='<i></i><p>您收到<span class="msg-num">'+nineAdd(a)+'</span>条陌生人私信，请在<a href="http://www.huya.com/download/" target="_blank">虎牙直播APP</a>查看。':0==a&&t>0&&(s='<i></i><p>您收到<span class="msg-num">'+nineAdd(t)+'</span>条好友私信，请在<a href="http://www.huya.com/download/" target="_blank">虎牙直播APP</a>查看。'),$(".msg-desc").html(s),$(".msg-desc").show()}}};getAjax(e)}},officialAnnounce={init:function(){getMessageList(1,offical_syncKey,".offical-message",!1)},bindEvents:function(){$(".offical-message").on("click",".show-more",function(){$(this).remove(),getMessageList(1,offical_syncKey,".offical-message",!0)})}},systemMsg={init:function(){getMessageList(2,system_syncKey,".system-message",!1)},bindEvents:function(){$(".system-message").on("click",".show-more",function(){$(this).remove(),getMessageList(2,system_syncKey,".system-message",!0)})}},onceSystemMessageRead=once(setMessageRead);msg.init()}(jQuery);