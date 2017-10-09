var LEGO=LEGO?LEGO:{};LEGO.popupBox=function(selector,options,data){var el=jQuery(selector),mask=document.createElement("div"),popupBox=el.get(0),self=this;$(mask).addClass("mask-flog");var _default={existMask:true};var opts=jQuery.extend({},_default,options);if(!el.length)
{alert("找不到弹窗");return};var boxWidth=el.width(),boxHeight=el.height();if(opts.width)
{var maskCss="position:fixed;left:0;top:0;z-index:32766;width:100%;height:100%;filter:alpha(opacity=70);-moz-opacity:0.7;opacity:0.7;background:#000;",boxCss="display:block;position:fixed;left:50%;top:50%;z-index:3276700;margin:-"+el.height()/2+"px 0 0 -"+opts.width/2+"px;";}
else{var maskCss="position:fixed;left:0;top:0;z-index:32766;width:100%;height:100%;filter:alpha(opacity=70);-moz-opacity:0.7;opacity:0.7;background:#000;",boxCss="display:block;position:fixed;left:50%;top:50%;z-index:3276700;margin:-"+el.height()/2+"px 0 0 -"+el.width()/2+"px;";}
if(!window.XMLHttpRequest){maskCss+="position:absolute;top:expression(documentElement.scrollTop);height:expression(document.documentElement.clientHeight);";boxCss+="position:absolute;top:expression(documentElement.scrollTop + document.documentElement.clientHeight/2);";if(document.getElementsByTagName("html")[0].style.backgroundImage==""){document.getElementsByTagName("html")[0].style.backgroundImage="url(blank)";}}
function resetPosition(){if(opts.width)
{maskCss="position:fixed;left:0;top:0;z-index:32766;width:100%;height:100%;filter:alpha(opacity=70);-moz-opacity:0.7;opacity:0.7;background:#000;",boxCss="display:block;position:fixed;left:50%;top:50%;z-index:3276700;margin:-"+el.height()/2+"px 0 0 -"+opts.width/2+"px;";}
else{maskCss="position:fixed;left:0;top:0;z-index:32766;width:100%;height:100%;filter:alpha(opacity=70);-moz-opacity:0.7;opacity:0.7;background:#000;",boxCss="display:block;position:fixed;left:50%;top:50%;z-index:3276700;margin:-"+el.height()/2+"px 0 0 -"+el.width()/2+"px;";}
if(!window.XMLHttpRequest){maskCss+="position:absolute;top:expression(documentElement.scrollTop);height:expression(document.documentElement.clientHeight);";boxCss+="position:absolute;top:expression(documentElement.scrollTop + document.documentElement.clientHeight/2);";if(document.getElementsByTagName("html")[0].style.backgroundImage==""){document.getElementsByTagName("html")[0].style.backgroundImage="url(blank)";}}}
this.title=function(str){if(str)
{jQuery(popupBox).find(".title").html(str);}
return this;}
this.content=function(str){if(str)
{jQuery(popupBox).find(".content_span").html(str);}
return this;}
var setupPopup=function(){el.find(".J_btnClose").unbind("click");el.find(".J_btnClose").on("click",function(){if(opts.cancle)
{opts.cancle(data);}
popupClose(el.get(0));})
if(opts.note)
{el.find(".cont").html(opts.note);}
if(opts.title)
{self.title(opts.title);}
el.find(".J_btnConfirm").unbind("click");el.find(".J_btnConfirm").on("click",function(){if(opts.ok)
{opts.ok(data);}})
el.find(".J_btnCancle").unbind("click");el.find(".J_btnCancle").on("click",function(){if(opts.cancle)
{opts.cancle(data);}
popupClose();})}
var popupOpen=function(){$(".mask-flog").remove();$(popupBox).addClass("pop-box-c");popupBox.style.display="block";popupBox.style.cssText=boxCss;mask.style.cssText=maskCss;scrollSwitchControl(0);if(opts.width)
{el.css({width:opts.width});}
if(opts.height)
{el.css({height:opts.height});}
if(!window.XMLHttpRequest){document.documentElement.scrollTop++;document.documentElement.scrollTop--;}
if(opts.existMask){document.body.appendChild(mask);}}
var popupClose=function(){popupBox.style.cssText="";popupBox.style.display="none";scrollSwitchControl(1);if(opts.existMask){var c=$(".pop-box-c");if(c.length==1){$(".mask-flog").remove();}}
$(popupBox).removeClass("pop-box-c");}
var scrollSwitchControl=function(sign){if(sign){$("body").unbind("mousewheel","",function(){})}
else{$("body").on("mousewheel","",function(){return false;})}}
var _init=function(){setupPopup();}
$(function(){_init();})
return{open:popupOpen,close:popupClose,title:this.title,content:this.content}}