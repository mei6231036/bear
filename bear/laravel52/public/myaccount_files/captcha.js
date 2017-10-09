$(document).ready(function(){
    if(showCaptcha == 1){
        ajaxLoadLiveCaptcha();
    }
    function ajaxLoadLiveCaptcha() {
            var ajaxURL = indexUrl + 'index.php?m=Captcha&do=ajaxLoadLiveCaptcha';
            $.getJSON(
                ajaxURL, 
                {
                }, 
                function(response){
                    if (response.status) {
                        var captchaId = response.data.captchaId;
                        $("#captcha_id").val(captchaId);
                        $("#captcha_pic").attr("src",indexUrl+'index.php?m=Captcha&do=getPicByCaptchaId&captchaId='+captchaId);
                    }
                    return;
                });
        };
       
    $('#change_one').click(function(){
       ajaxLoadLiveCaptcha();
    });

});