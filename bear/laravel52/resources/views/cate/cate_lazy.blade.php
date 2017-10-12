
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lazyload-Leawee</title>
    </head>
    <body>

　　　　<img class="lazy" src="img/HBuilder.png" data-src="http://www.baidu.com/img/baidu_jgylogo3.gif?v=32804268.gif" />
       
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <img width="500px" height="500px" src="img/1.jpg" data-src="img/1.jpg" class="lazy" />
        
    </body>
</html>

<script type="text/javascript">

var imgs = document.getElementsByClassName("lazy"); /*懒惰加载图片*/
var imgsLen = imgs.length;
var unloaded = imgsLen; /*标记还有多少个图片没有加载*/
var clientHight = window.innerHeight || document.documentElement.clientHeight; /*浏览器用户可视窗口高度*/

/*给图片设置真正的src*/
function setImgSrc (index) {
imgs[index].src = imgs[index].getAttribute("data-src"); /*取图片真正的地址*/
--unloaded;
}

/*滚动事件处理*/
function scrollHandler(index) {
var scrollTop = document.body.scrollTop || document.documentElement.scrollTop; /*滚动离顶部距离*/
for (var i = index; i < imgsLen; i++) {
var offset = imgs[i].offsetTop; /*元素到顶部的偏移量*/
if (scrollTop + clientHight > offset) {
setImgSrc(i);
} else {
break;
}
}
}

/*监听滚动事件*/
function myScrollListener() {
var start = imgsLen-unloaded; /*查找第一个没有加载的图片的位置*/
if (unloaded > 0) {
scrollHandler(start);
}
}

/*第一次加载加载页面的时候加载出现在用户视线里的图片*/
function firstLoad() {
for (var i = 0; i < imgsLen; i++) {
var top = imgs[i].offsetTop;
if (top < clientHight) {/*图片到顶部的位置如果小于客户端可视窗口的高度，则说明图片显示出来了*/
setImgSrc(i);
}else{
break;
}
}
}

window.onscroll = myScrollListener;

window.onload = firstLoad;



</script>