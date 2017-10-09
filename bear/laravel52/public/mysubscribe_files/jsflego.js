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
return{open:popupOpen,close:popupClose,title:this.title,content:this.content}};var LEGO=LEGO?LEGO:{};jQuery.extend(jQuery.easing,{easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;}});(function($,k,w){function Switchable(elem,opts){if(arguments.length!==0){this.opts={event:"click",effect:"none",autoPlay:false,speed:"normal",timer:4000,nav:"J_nav",content:"J_content",btnPrev:"J_btnPrev",btnNext:"J_btnNext",steps:1,hoverInterval:100,mousewheel:false,figureNav:false}
jQuery.extend(this.opts,this.opts,opts);this.$elem=elem;this.$nav=elem.find("."+this.opts.nav).eq(0);this.$cont=elem.find("."+this.opts.content).eq(0);this.$btnPrev=elem.find("."+this.opts.btnPrev).eq(0);this.$btnNext=elem.find("."+this.opts.btnNext).eq(0);this._eventTimer=null;this._autoPlayTimer=null;this._activeIndex=0;}}
Switchable.prototype={_struct:function(){var self=this;if(this.constructor===Tab&&this.opts.event==="click"){this.$nav.children().hover(function(){$(this).addClass("hover");},function(){$(this).removeClass("hover");});}
if(this.constructor===Carousel){var max=Math.ceil(this.$cont.children().size()/this.opts.steps)-1;if(this.$nav.length&&($.trim(this.$nav[0].innerHTML)=='')){for(var i=0;i<=max;i++){var a="<a href='#"+i+"'></a>";if(i==0){a="<a href='#"+i+"' class='selected'></a>";}
this.$nav.append(a);}}
if(this.opts.mousewheel){this.$elem.bind('mousewheel',function(event,delta){event.preventDefault();if(!self.$cont.is(":animated")){if(delta===1){self.prev();}else{self.next();}}});}
if(this.opts.figureNav&&this.$elem.find(".steps").length){var figure=max+1;var figureHtml='<span class="curr-step">1</span><span class="total-step">/'+figure+'</span>';this.$elem.find(".steps").html(figureHtml)}}
this.$nav.children().each(function(index,elem){if(self.opts.event==="hover"){$(elem).hover(function(){clearTimeout(self._eventTimer);self._eventTimer=setTimeout(function(){self._switch(index);},self.opts.hoverInterval);},function(){clearTimeout(self._eventTimer);});}else{$(elem).click(function(){self._switch(index);});}
$(elem)[self.opts.event](function(){if(self.opts.event==="click"){self._switch(index);}else{}});});if(this.$btnPrev.size()){this.$btnPrev.unbind("click");this.$btnPrev.bind("click",function(){self.prev();});}
if(this.$btnNext.size()){this.$btnNext.unbind("click");this.$btnNext.bind("click",function(){self.next();});}
switch(this.opts.effect){case"scrollX":var contElems=this.$cont.children(),contWidth=contElems.outerWidth(true)*contElems.length;contElems.css({"float":"left"});this.$cont.css({"width":contWidth});break;case"scrollY":break;case"fade":this.$cont.css({"position":"relative"});this.$cont.children().css({"position":"absolute","left":"0","top":"0","z-index":"0","opacity":"0"}).eq(0).css({"opacity":1,"z-index":1});break;}
(this.opts.autoPlay===true)&&this._autoPlay();},_switch:function(index){var indexOjb=this._checkIndex(index);switch(this.opts.effect){case"scrollX":this._switchScrollx(indexOjb);break;case"scrollY":this._switchScrolly(indexOjb);break;case"fade":this._switchFade(indexOjb);break;default:this._switchNormal(indexOjb);}
if(this.opts.figureNav&&this.$elem.find(".steps").length){this._figureNav(indexOjb.index);}
this._setNavCls(indexOjb.index);this._activeIndex=indexOjb.index;},_figureNav:function(index){this.$elem.find(".curr-step").text(index+1);},_switchNormal:function(indexOjb){var contElems=this.$cont.children();contElems.hide();contElems.eq(indexOjb.index).show();},_switchFade:function(indexOjb){var contElems=this.$cont.children();contElems.eq(this._activeIndex).stop().animate({opacity:0},600).css("z-index",0);contElems.eq(indexOjb.index).stop().animate({opacity:1},600).css("z-index",1);},_switchScrollx:function(indexOjb){var contElems=this.$cont.children(),panelWidth=contElems.outerWidth(true),moveWidth=-indexOjb.index*this.opts.steps*panelWidth,moveWidth2=-(indexOjb.index-1)*this.opts.steps*panelWidth,relaWidth=panelWidth*(indexOjb.maxIndex+1)*this.opts.steps;contElems.each(function(index,element){this.style.cssText="float:left";});switch(indexOjb.type){case"max":for(var i=0;i<this.opts.steps;i++){contElems.eq(i).css({"position":"relative","left":relaWidth});}
this.$cont.animate({"left":-relaWidth},400,"easeOutExpo",function(){contElems.each(function(index,element){this.style.cssText="float:left";});$(this).css("left",moveWidth);});break;case"min":for(var i=this.opts.steps;i>0;i--){contElems.eq(contElems.length-i).css({"position":"relative","left":-relaWidth});}
this.$cont.animate({"left":panelWidth*this.opts.steps},400,"easeOutExpo",function(){contElems.each(function(index,element){this.style.cssText="float:left";});$(this).css("left",moveWidth);});break;default:this.$cont.stop().animate({"left":moveWidth},400,"easeOutExpo");}},_switchScrolly:function(indexOjb){var contElems=this.$cont.children(),panelWidth=contElems.outerHeight(true),moveWidth=-indexOjb.index*this.opts.steps*panelWidth;switch(indexOjb.type){case"max":for(var i=0;i<this.opts.steps;i++){contElems.eq(i).css({"position":"relative","top":panelWidth*(indexOjb.maxIndex+1)*this.opts.steps});}
this.$cont.stop().animate({"top":-panelWidth*this.opts.steps*(indexOjb.maxIndex+1)},400,"easeOutExpo",function(){contElems.each(function(){this.style.cssText="";});$(this).css("top",moveWidth);});break;case"min":for(var i=this.opts.steps;i>0;i--){contElems.eq(contElems.length-i).css({"position":"relative","top":-panelWidth*(indexOjb.maxIndex+1)*this.opts.steps});}
this.$cont.stop().animate({"top":panelWidth*this.opts.steps},400,"easeOutExpo",function(){contElems.each(function(){this.style.cssText="";});$(this).css("top",moveWidth);});break;default:this.$cont.stop().animate({"top":moveWidth},400,"easeOutExpo");}},_setNavCls:function(index){var index=index||0,navElems=this.$nav.children();navElems.removeClass("selected");navElems.eq(index).addClass("selected");},_autoPlay:function(){var self=this
clearInterval(this._autoPlayTimer);this._autoPlayTimer=setInterval(function(){self._doPlay();},self.opts.timer);this.$elem.mouseenter(function(){clearInterval(self._autoPlayTimer);});this.$elem.mouseleave(function(){clearInterval(self._autoPlayTimer);self._autoPlayTimer=setInterval(function(){self._doPlay();},self.opts.timer);});},_doPlay:function(){this._switch(this._activeIndex+1);},_checkIndex:function(index){var maxIndex=Math.ceil(this.$cont.children().size()/this.opts.steps)-1;var obj={index:index,type:"normal",maxIndex:maxIndex}
if(index<0){obj.type="min";obj.index=maxIndex;}else if(index>maxIndex){obj.type="max";obj.index=0;}
return obj;},stop:function(){alert("stop")},start:function(){},switchTo:function(index){this._switch(index);},prev:function(){this._switch(this._activeIndex-1);},next:function(){this._switch(this._activeIndex+1);},_init:function(){this._struct();}};function kExtend(selector,opts,subClass){var elems=$(selector),reFun=[];if(elems.length==1){reFun=new subClass(elems,opts);}else{for(var i=0;i<elems.length;i++){reFun.push(new subClass(elems.eq(i),opts));}}
return reFun;}
function Slide(selector,opts){var slideOpts={event:"hover",effect:"fade",autoPlay:true}
$.extend(slideOpts,slideOpts,opts);Switchable.call(this,selector,slideOpts);this._init();}
Slide.prototype=new Switchable();Slide.prototype.constructor=Slide;k.slide=function(selector,opts){return kExtend(selector,opts,Slide);};function wideSlide(selector,opts){var slideOpts={event:"hover",effect:"fade",autoPlay:true}
$.extend(slideOpts,slideOpts,opts);Switchable.call(this,selector,slideOpts);var windowWidth=$(window).width(),slideWrap=$(selector),selectorWidth=$(selector).width();if(selectorWidth>windowWidth)
{slideWrap.css('left',-(selectorWidth-windowWidth)/2+"px");}
$(window).resize(function(event){if(selectorWidth>$(window).width())
{slideWrap.css('left',-(selectorWidth-$(window).width())/2+"px");}});this._init();}
wideSlide.prototype=new Switchable();wideSlide.prototype.constructor=wideSlide;k.wideSlide=function(selector,opts){return kExtend(selector,opts,wideSlide);};function Tab(selector,opts){Switchable.call(this,selector,opts);this._init();}
Tab.prototype=new Switchable();Tab.prototype.constructor=Tab;k.tab=function(selector,opts){return kExtend(selector,opts,Tab);};k.calendar=function(selector,opts){var calendarOpts={event:"click",fromSunday:false},day=new Date().getDay(),dayNum=day,Calendar=[];$.extend(calendarOpts,calendarOpts,opts);if(!calendarOpts.fromSunday){dayNum=day==0?6:day-1;}
Calendar=kExtend(selector,opts,Tab);if($(selector).length==1){Calendar.switchTo(dayNum);}else{for(var i=0;i<elems.length;i++){Calendar[i].switchTo(dayNum);}}};function Carousel(selector,opts){Switchable.call(this,selector,opts);this._init();}
Carousel.prototype=new Switchable();Carousel.prototype.constructor=Carousel;k.imageScroll=function(selector,opts){var caroOpts={effect:"scrollX",autoPlay:true,mousewheel:true,figureNav:true}
$.extend(caroOpts,caroOpts,opts);return kExtend(selector,caroOpts,Carousel);};k.textScroll=function(selector,opts){var listLength=$(selector).find('li').length;if(listLength<=1)
{return;}
var caroOpts={effect:"scrollY",autoPlay:true}
$.extend(caroOpts,caroOpts,opts);return kExtend(selector,caroOpts,Carousel);};})(jQuery,LEGO,window);