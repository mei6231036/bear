/*!
 * @project : earning-h5
 * @version : 1.0.0
 * @author  : kekobin@163.com
 * @update  : 2017-08-28 4:15:20 pm
 */function report(a){var a=a||{},b={pro:"huya_web",pas:YA.cookie.get("username")||"",yyuid:YA.cookie.get("yyuid")||"",pageType:"root",rso:"",rso_desc:"",eid:"",eid_desc:""};for(var c in a)b[c]=a[c];window.ya=new YA(b.pro,b.pas,{pageType:b.pageType,yyuid:b.yyuid}),ya.reportProductStartUp({pro:b.pro,rso:b.rso,rso_desc:b.rso_desc}),ya.startProductHeartbeat({pro:b.pro,rso:b.rso,rso_desc:b.rso_desc}),ya.reportProductEvent({eid:b.eid,eid_desc:b.eid_desc})}function parseQueryString(a){var b,c={};if(-1!=(b=a.indexOf("?")))for(var d=a.substring(b+1,a.length),e=d.split("&"),f=[],g=0,h=e.length;h>g;g++)f=e[g].split("="),c[f[0]]=f[1];return c}