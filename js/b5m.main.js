!function(a){var b,c,d="20150505214126",e="http://plugin.bang5mai.com/assets/main",f="http://b5tplugin.bang5mai.com/assets/main",g="http://b5tcdn.bang5mai.com",h="http://un.114dianxin.com",j="http://p.b5m.com",k="http://ucenter.b5m.com",l="http://clicks2.b5m.com",m="http://cache.b5m.com/cache/service.do",n="http://cart.b5m.com",o="http://s.b5m.com",p={module_url:e+"/js/b5m.{module}.js?v="+d,getModuleUrl:function(a){return this.module_url.replace(/\{module\}/g,a)},paths:{jquery:{path:e+"/js/jquery-1.7.2.min.js",_export:function(){return a.$5m?a.$5m:(a.$5m=a.jQuery.noConflict(!0),a.$5m)}},"jquery-highcharts":{path:e+"/js/jquery-highcharts.js",_export:function(){return a.$5m=a.jQuery.noConflict(!0),a.$5m}}}};if(function(d,e){function f(a,b){return u.call(a,b)}function g(a){return"[object Array]"===w.call(a)}function h(a,b){var c=document.getElementsByTagName("head")[0],d=document.createElement("script");d.type="text/javascript",d.async=!0,0!==a.indexOf("http://")&&(a=j+a),d.src=a,d.onload=d.onreadystatechange=function(){d.readyState&&"loaded"!==d.readyState&&"complete"!==d.readyState||(d.onload=d.onreadystatechange=null,b&&b(),d.parentNode.removeChild(d))},c.appendChild(d)}function i(a){for(var b=0,c=a.length;c>b;b++)if(!f(x,a[b]))return!1;return!0}function k(a){if(a){"string"==typeof a&&(a=[a]);for(var b=0,c=a.length;c>b;b++)f(z,a[b])||f(x,a[b])||f(B,a[b])||(z[a[b]]=!0,y.push(a[b]),setTimeout(function(){o()},1))}}function l(b){for(var c=b.dependencies||[],d=[],e=0,f=c.length;f>e;e++)d.push(x[c[e]]);return m(b.name,b.fn.apply(a,d)),setTimeout(function(){s()},1),!0}function m(a,b){x[a]=b,q(),s()}function n(a){if(a){var b=a.name;f(B,b)||(B[b]=!0,A.push(a))}}function o(a){if(!D){D=!0,"undefined"!=typeof a&&a||(a=y);var b=a.shift();if(!b)return void(D=!1);var c,d=p.paths[b]||p.getModuleUrl(b);"object"==typeof d&&(c=d._export,d=d.path),d?h(d,function(){"function"==typeof c&&m(b,c())}):e("module["+b+"] wait to export"),D=!1,o(a)}}function q(a){"undefined"!=typeof a&&a||(a=A);for(var b,c=-1;++c<a.length;)b=a[c],b&&(f(x,b.name)?a[c]=null:i(b.dependencies)&&(l(b),a[c]=null))}function r(b){for(var c=b.dependencies||[],d=[],e=0,f=c.length;f>e;e++)d.push(x[c[e]]);return b.fn.apply(a,d),!0}function s(a){if("undefined"!=typeof a&&a||(a=C),0!==a.length)for(var b,c=-1;++c<a.length;)b=a[c],b&&i(b.dependencies)&&(r(b),a[c]=null)}function t(a){C.push(a)}var u=Object.prototype.hasOwnProperty,v=Object.prototype,w=v.toString,x={},y=[],z={},A=[],B={},C=[],D=!1;!function(){"undefined"!=typeof jQuery&&jQuery().jquery>"1.4.3"&&"undefined"!=typeof jQuery.ajax&&(x.jquery=d.jQuery||d.$,d.$5m=x.jquery)}(),b=function(a,b,c,d){if(!f(x,a)||d&&d.force){if("function"==typeof b||g(b)&&0===b.length)return void m(a,b());var e={name:a,dependencies:b,fn:c},h=e.dependencies;return i(h)?void l(e):(k(h),void n(e))}},c=function(a,b){if(0!==arguments.length){if("function"==typeof a&&1===arguments.length)return void b();var c={dependencies:a,fn:b},d=c.dependencies;return i(d)?void r(c):(k(d),void t(c))}}}(a,function(a){window.console&&console.log(a)}),!a.b5mshoppingassist){var q=a.b5mshoppingassist={};!function(f){f.define=b,f.require=c,f.build_no=d,f.LOCATION=window.location||document.location,f.assets_base_url=e,f._=f.browser={checkBoxModel:function(){if("undefined"!=typeof f.boxModel)return f.boxModel;{var a=document.createElement("div");document.body}return a.style.cssText="visibility:hidden;border:0;width:1px;height:0;position:static;padding:0px;margin:0px;padding-left:1px;",document.body.appendChild(a),f.boxModel=this.boxModel=2===a.offsetWidth,document.body.removeChild(a),a=null,f.boxModel},isIE6:function(){var a=window.navigator.userAgent.toLowerCase(),b=/(msie) ([\w.]+)/.exec(a);return null!=b&&b[2]<7}(),isIE:function(){var a=window.navigator.userAgent.toLowerCase(),b=/(msie) ([\w.]+)/.exec(a);return null!=b}(),loadCss:function(){if(this.cssLoaded!==!0){var a=this.checkBoxModel(),b=(a?"b5m-plugin.css":"b5m-plugin.qks.css")+"?v="+f.build_no,c=document.createElement("link");c.rel="stylesheet",c.href=f.assets_base_url+"/css/"+(d?"default":"v5")+"/"+b,c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),this.cssLoaded=!0}},getDomain:function(a){var b=a||f.LOCATION.href;try{b=b.match(/([-\w]+\.\b(?:net\.cn|com\.hk|com\.cn|com|cn|net|org|cc|tv$|hk)\b)/)[1]}catch(c){b=f.LOCATION.hostname}return b},setB5MCookie:function(a,b,c){if(a){var d="";if(c)for(var e in c)d+="&"+e+"="+c[e];(new Image).src=j+"/extension.do?method=c&name="+a+"&value="+encodeURIComponent(b)+d+"&t="+(new Date).getTime()}}},f.domain=f._.getDomain(),"hao.360.cn"==f.LOCATION.hostname&&a.LogHub&&(a.LogHub.behavior=function(a,b){!function(a,b){setTimeout(function(){if(!(a+"").match(/bang5mai|b5m|ruyiso/)){var b=+new Date+Math.random(),c="slog"+b,d=window[c]=new Image;d.src=a+"&refer="+i+"&_t="+b,d.onload=d.onerror=function(){window[c]=null}}},b||0)}(a,b)})}(q),function(c,i){var q=["111.com.cn","12dian.com","136126.com","136buy.com","1626buy.com","1mall.com","20aj.com","228.com.cn","24dq.com","360buy.com","360hqb.com","360kxr.com","360mart.com","360zhai.com","365.com","3guo.cn","4006009207.com","513523.com","51buy.com","yixun.com","51fanli.com","51youpin.com","525j.com.cn","5366.com","55bbs.com","55tuan.com","5lux.com","5taoe.com","7cv.com","838buy.com","91pretty.com","99buy.com.cn","99read.com","99vk.com","afffff.com","ai356.com","aimer.com.cn","amazon.cn","aoliz.com","atopi.cn","bagtree.com","baidu.com","bairong.com","banggo.com","bearbuy.com.cn","behui.com","beifabook.com","beyond.cn","binggo.com","bookall.cn","bookschina.com","bookuu.com","burberry.com","buy007.com","buyjk.com","caomeipai.com","carinalaukl.com","cdg2006.com","chicbaza.com","chictalk.com.cn","chinadrtv.com","coo8.com","crucco.com","d1car.com","d1.com.cn","dahaodian.com","dahuozhan.com","damai.cn","dangdang.com","daoyao.com","daphne.cn","dazhongdianqi.com.cn","dhc.net.cn","dianping.com","didamall.com","diyimeili.com","do93.com","doin.cn","domoho.com","dooland.com","douban.com","duitang.com","duoduofarm.com","dwgou.com","easy361.com","efeihu.com","egu365.com","ehaier.com","eiboa.com","ej100.cn","enet.com.cn","epetbar.com","epinwei.com","epkmall.com","etam.com.cn","etao.com","fanrry.cn","faxianla.com","fc900.com","fclub.cn","fglady.cn","foryouforme.com","gaojie.com","gap.cn","ggooa.com","giftmart.com.cn","giordano.com","go2am.com","gome.com.cn","goodful.com","gotoread.com","goujiuwang.com","gqt168.com","guang.com","guangjiela.com","guopi.com","hany.cn","happigo.com","herbuy.com.cn","hitao.com","hmeili.com","hodo.cn","homecl.com","homevv.com","htjz.com","huilemai.com","huimai365.com","huolibaobao.com","huolida.com","hyj.com","iebaba.com","ihush.com","immyhome.com","imobile.com.cn","imoda.com","it168.com","itruelife.com","j1923.com","jacketman.cn","jd.com","jd.hk","jddiy.com","jianianle.com","jianke.com","jiapin.com","jiuhang.cn","jiuxian.com","jockey.cn","joyeth.com","jukangda","jumei.com","jxdyf.com","k121.com","kadang.com","keede.com","kela.cn","kimiss.com","kongfz.cn","kouclo.com","ladypk.com","lafaso.com","lamiu.com","laredoute.cn","lashou.com","learbetty.com","lebiao.net","lecake.com","ledaojia.com","leftlady.com","leho.com","letao.com","leyou.com.cn","lifevc.com","lifu520.com","lijiababy.com.cn","likeface.com","lingshi.com","lining.com","loobag.com","lookgee.com","lovo.cn","lqdjf.com","luce.com.cn","lucemall.com.cn","luckcart.com","luckigo.com","lusen.com","lvhezi.com","m18.com","m360.com.cn","m6go.com","maiakaweh.com","maichawang.com","maidq.com","maiduo.com","mailuntai.cn","maiwazi.com","maiweila.com","maoer360.com","mbaobao.com","mchepin.com","meici.com","meilishuo.com","meiribuy.com","meituan.com","meiyi.cn","menglu.com","mfplaza.com","misslele.com","miumiu365.com","mixr.cn","mmloo.com","mncake.com","mogujie.com","mojing8.com","mrzero.cn","mutnam.com","muyingzhijia.com","mycoo.cn","myrainbow.cn","myt.hk","nala.com.cn","nanjiren.com.cn","necool.com","new7.com","newegg.com.cn","newegg.cn","no5.com.cn","nop.cn","nuanka.cn","nuomi.com","ochirly.com","ogage.cn","okbuy.com","okgolf.cn","okjee.com","onlylady.com","onlyts.cn","orange3c.com","ouku.com","oyeah.com.cn","paipai.com","paixie.net","pb89.com","pcbaby.com.cn","pchome.net","pchouse.com.cn","pclady.com.cn","pconline.com.cn","pcpop.com","pett.cn","popyj.com","pufung.com","pupai.cn","qinqinbaby.com","qiwang360.com","qplmall.com","qq.com","quwan.com","qxian.com","raccfawa.com","redbaby.com.cn","reneeze.com","ruci.cn","sasa.com","s.cn","sephora.cn","shopin.net","skinstorechina.com","so.com","soso_bak.com","strawberrynet.com","suning.com","t0001.com","t3.com.cn","tangrencun.cn","tankl.com","tao3c.com","taobao.com","taofanw.com","taoxie.com","tee7.com","tiantian.com","tmall.com","tmall.hk","togj.com","tokyopretty.com","tonlion.com","topnewonline.cn","trura.com","tuan800.com","tymall.com.cn","u8518.com","uiyi.cn","ukool.com.cn","umanto.com","uniqlo.cn","urcosme.com","uya100.com","uzgood.com","v100.com.cn","vancl.com","vcotton.com","vegou.com","vico.cn","vivian.cn","vjia.com","vzi800.cn","walanwalan.com","wangpiao.com","wbiao.cn","weibo.com","weimituan.com","whendream.com","wine9.com","winekee.com","winenice.com","winxuan.com","wl.cn","womai.com","wowsai.com","woxihuan.com","wumeiwang.com","x.com.cn","xiaozhuren.com","xijie.com","xiu.com","yaahe.cn","yanyue.cn","yaofang.cn","yesky.com","yesmywine.com","yidianda.com","yihaodian.com","yhd.com","yintai.com","yizhedian.com","yohobuy.com","yoka.com","yooane.com","yougou.com","ywmei.com","zaihuni.com","zbird.com","zgcbb.com","zhimei.com","zhuangai.com","zm7.cn","zocai.com","zol.com.cn","zol.com","zuomee.com","zwzhome.com","lefeng.com","958shop.com","china-pub.com","wanggou.com","vip.com","baoyeah.com","monteamor.com","qjherb.com","moonbasa.com","ing2ing.com","womai.com","vmall.com","1688.com","etao.com","milier.com","xifuquan.com","sfbest.com","j1.com","liebo.com","esprit.cn","metromall.com.cn","pba.cn","shangpin.com","handuyishe.com","secoo.com","wangjiu.com","masamaso.com","vivian.cn","linkmasa.com","camel.com.cn","naruko.com.cn","sportica.cn","zhenpin.com","xiaomi.com","mi.com","letv.com","bosideng.cn","coolpad.com","handu.com","ebay.com","staples.cn","feiniu.com","okhqb.com","meilele.com","500.com","vdian.com","showjoy.com","ocj.com.cn","happigo.com","111.com.cn","j1.com","metao.com","miyabaobei.com"],r=["ctrip.com","ly.com","lvmama.com","tuniu.com","qunar.com","uzai.com","mangocity.com","elong.com"],s=["taobao.com","meituan.com","jumei.com","jumeiglobal.com","dianping.com","gaopeng.com","58.com","lashou.com","pztuan.com","liketuan.com","nuomi.com"],t=["ctrip.com","ly.com","lvmama.com","qunar.com","meituan.com","jumei.com","lashou.com","nuomi.com","dianping.com","gaopeng.qq.com","gaopeng.com","elong.com","mangocity.com","kuxun.cn","xiu.com","zhuna.cn","pztuan.com","liketuan.com","hao123.com","2345.com","sohu.com","sogou.com","duba.com","qq.com","rising.cn","360.cn","ymatou.com","xbresearch.com","114.112.93.100","55tuan.com","womai.com","feiniu.com","ymatou.com","lifevc.com","showjoy.com","ocj.com.cn","happigo.com","111.com.cn","j1.com","metao.com","miyabaobei.com"],u=["hao123.com","2345.com","sogou.com","duba.com","qq.com","rising.cn","360.cn","taobao.com","uc123.com","msn.com","114.112.93.100"],v=["taobao.com","jd.com","yixun.com","yhd.com","tmall.com","tmall.hk","suning.com","gome.com.cn","dangdang.com","amazon.cn","sogou.com","2345.com","hao123.com","qzone.qq","autohome","xxhh","letv","jide123","pcauto","auto.sohu","pps","bitauto","duba.com","rising.cn","qq.com","baidu.com","360.cn","youku.com","tudou.com","iqiyi.com","sohu.com"],w=document.getElementById("b5mmain");w=w.src&&w.src.substring(w.src.indexOf("?")+1);var x=w.split("&");w={};for(var y,z=0,A=x.length;A>z;z++)y=x[z].split("="),w[y[0]]=y[1]||"";!function(){if(!w.acd){var a=document.getElementById("b5tplugin");try{a&&a.getUserUuid()&&(w.acd=0)}catch(b){}}}(),c.params=w,c.trace={main:"",tonglei:"",ut:0,shortMain:0},c.flags={isLjBlack:null},b("server",function(){return{server:j,cpsServer:l,cpsCacheServer:m,searchServer:o,ucenterserver:k,cartServer:n,assets_base_url:e,assets_union_url:h,domain:c._.getDomain(),uuid:w.uuid,version:w.version,source:w.source,hostname:c.LOCATION.hostname}});for(var B=["maxthon3","firefox","liebao","360se","360jisu","chrome"],C=B.join(",").indexOf(w.source)>-1,D=c._cln_=!!w.source.match(/11000|50000|10000|11001/)||C,E=c.isMall=!!q.join(",").match(new RegExp("\\b"+c.domain+"\\b")),F=c.isTour=!!r.join(",").match(new RegExp("\\b"+c.domain+"\\b")),G=c.isSl=!(D||!t.join(",").match(new RegExp("\\b"+c.domain+"\\b"))||c.browser.isIE&&w.ie32!=i&&!(c.browser.isIE&&parseInt(w.ie32,10)>0)),H=c.isLv3=!(D||!u.join(",").match(new RegExp("\\b"+c.domain+"\\b|"+c.LOCATION.hostname))||c.browser.isIE&&w.ie32!=i&&!(c.browser.isIE&&parseInt(w.ie32,10)>0)),I=c.isTuan=!!s.join(",").match(new RegExp("\\b"+c.domain+"\\b")),J=!1,z=0;z<v.length;z++)if(c.domain.indexOf(v[z])>=0){J=!0;break}var K=c.isNav=!(D||!J||"1"===w.nonav);if(p.paths.all={path:e+"/js/b5m.plugin.all.js?v="+d,_export:function(){return c}},p.paths.tg={path:g+"/js/flag.js?v="+Math.floor((new Date).getTime()/1e4),_export:function(){return window.__5_tg_}},p.paths.sejieall={path:e+"/js/b5m.plugin.sejie.all.js?v="+d,_export:function(){return c}},p.paths["jquery-qrcode"]={path:e+"/js/jquery.qrcode.min.js?v="+d,_export:function(){return a.$5m}},p.paths.rule={path:e+"/js/plugin/rule/sites/"+c.domain+"?v="+d,_export:function(){return c.rule}},p.paths.env={path:"/extension.do?method=js&buildno="+d+"&url="+encodeURIComponent(c.LOCATION.href)+"&acd="+(w.acd||"")+"&reason="+(w.reason||"")+"&source="+w.source+"&uuid="+w.uuid+"&domain="+c.domain+"&version="+w.version+"&site="+c.domain+(c.browser.isIE?"&t="+(new Date).getTime():""),_export:function(){c.cookie=Function("return "+(c.env.cookie||"{}"))();var a=w._lv,b=c.env.lv||c.cookie.lv||a||"15";return a&&"8"!=a&&(b=a),b=parseInt(b),D&&(b=a||"15"),b&&(c._lv=b,c.env.lvA=1&b||0,c.env.lvB=2&b||0,c.env.lvC=4&b||0,c.env.lvD=8&b||0),c.cookie.lv||setTimeout(function(){c._.setB5MCookie("lv",c.env.lv,{maxAge:172800})},1),c.env}},p.paths.nav={path:e+"/js/b5m.nav.js?v="+d,_export:function(){return c.nav}},p.paths.ip={path:"http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js",_export:function(){return c.ip=a.remote_ip_info}},p.paths.lv3={path:f+"/js/b5m.lv3.js?v="+d},p.paths.order={path:f+"/js/b5m.order.js?v="+d},p.paths.ucenter={path:e+"/js/modules/ucenter/js/b5m.uc.js?v="+d},c.require(["server"],function(a){"b5m.com"==a.domain&&c.require(["env"],function(){})}),C||D||!G&&!E||("sogou"==w.source?c.require(["ip"],function(a){"\u5317\u4eac"!=a.city&&c.require(["sl"],function(a){a.run()})}):c.require(["sl"],function(a){a.run()})),H&&("sogou"==w.source?c.require(["ip"],function(a){"\u5317\u4eac"!=a.city&&c.require(["lv3"],function(a){a.run()})}):c.require(["lv3"],function(a){a.run()})),c.require(["adv","server"],function(a,b){a.server=b.server,a.run()}),K&&!C&&c.require(["jquery-highcharts","nav","server","common"],function(a,b,d,f){a.extend(b,{server:d,common:f,uuid:w.uuid,acd:w.acd,source:w.source,domain:c.domain,host:c.LOCATION.host,assets_base_url:e,href:c.LOCATION.host+c.LOCATION.pathname,reason:w.reason}),setTimeout(function(){b.init()},30)}),!E&&!F&&!I)return void setTimeout(function(){try{var a=window.location||document.location,b="http://tr.bang5mai.com/b5t/__utm.gif?uid="+(w.uuid||"guest")+"&ct="+Math.ceil((new Date).getTime()/1e3)+"&lt=2000&ad=108&il=0&sr="+window.screen.width+"x"+window.screen.height+"&cl="+encodeURIComponent(w.source)+"&ver="+w.version+"&dl="+encodeURIComponent(a.href)+"&dr="+encodeURIComponent(document.referrer)+"&isa=0&acd="+w.acd+"&ul="+w._lv;(new Image).src=b}catch(c){}},0);c._.loadCss();var L=(new Date).getTime(),M=["jquery-highcharts","all","common","env"];d||(M=E||F||I||"b5m.com"==c.domain?["jquery-highcharts","all","common","env","rule"]:["jquery-highcharts","all","common","env"],window.S=c),(E||F||I)&&c.require(M,function(a,b,c,d){b.console.debug("load time --------------"+((new Date).getTime()-L)+"ms"),b.util.extend(b.constants,w,d,{ucenterserver:k,forwardBase:j+"/",assets_base_url:e+"/"}),b.common=c,b.filterChain=function(){this.index=-1,this.chain=arguments.length>0?Array.prototype.slice.call(arguments,0):[],"slice"in arguments[0]&&(this.chain=arguments[0])},b.filterChain.prototype.register=function(a){this.chain.push(a)},b.filterChain.prototype.insert=function(a){this.chain.splice(this.index+1,0,a)},b.filterChain.prototype.run=function(){this.index++,this.index<this.chain.length&&this.chain[this.index].run(this)};var f=function(){b.console.setLevel("ERROR"),b.service.init();var a=[b.site];d.main&&a.push(b.view),d.hp||(b.view.horizontal.global_config.show_price_trend=!1);var c=new b.filterChain(a);c.run(),d.mini&&b.require(["miniB5T"],function(a){a.run()})};f()})}(q),q.LOCATION.href.match(/http:\/\/cart\.b5m\.com/)&&q.require(["order"],function(a){a.run(0)}),q.LOCATION.href.match(/http:\/\/pay\.(stage\.)?b5m\.com\/third\/order\.htm($|\?)/)&&q.require(["order"],function(a){a.run(1)})}}(this);