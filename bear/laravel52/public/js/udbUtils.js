    //udb登陆
    udb = {
        login:function(authorizeURL, callback, denyCallback){
//            UDB.sdk.QLogin.ajaxOpen(authorizeURL, callback, denyCallback);
//            UDBSDK.LayerClose.ajaxOpen(authorizeURL, callback, denyCallback);
              $('#nav-login').trigger('click');
              try{
                UDB.sdk.PCWeb.popupOpenLgn(authorizeURL, callback, denyCallback);
              }catch(ex){

              }
        },
        logout:function(link){
            var thisUrl = location.href;
            $.get(link,{},function(data,textStatus){
                if (textStatus=='success') {
                    if (data != '') {
                        UDB.sdk.PCWeb.deleteCrossmainCookieWithCallBack(data, function() {
//                        UDBSDK.LayerClose.deleteCrossmainCookieWithCallBack(data, function() {
                            window.location.reload();
//                            window.location = thisUrl;
                        });
                    }
                    
                }
            });
        },
        reg:function(){
            location.href = "http://udb.yy.com/register.do?appid=21&url="+encodeURIComponent(location.href);
        }
    };

    /**
 * jQuery cookie 插件
 */
    jQuery.cookie = function(key, value, options) {
        // key and at least value given, set cookie...
        if(arguments.length > 1 && String(value) !== "[object Object]") {
            options = jQuery.extend({}, options);

            if(value === null || value === undefined) {
                options.expires = -1;
            }

            if( typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }
            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=',
                options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path ? '; path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ? '; secure' : ''
                ].join(''));
        }
        options = value || {};
        var result, decode = options.raw ? function(s) {
            return s;
        } : decodeURIComponent;
        return ( result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
    };


