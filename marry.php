<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>倒计时</title>
<style>
body{ padding:0; margin:0;}
font{ font-size:70px; margin:0 10px;}
span{ font-size:50px;}
</style>
<script>
function datel(){
var date1=new Date();  //开始时间
var date2=new Date('2016-02-13 00:00:01');    //结束时间
var date3=date2.getTime()-date1.getTime();  //时间差的毫秒数
 

//计算出相差天数
var days=Math.floor(date3/(24*3600*1000));
 
//计算出小时数

var leave1=date3%(24*3600*1000);    //计算天数后剩余的毫秒数
var hours=Math.floor(leave1/(3600*1000));
//计算相差分钟数
var leave2=leave1%(3600*1000)   ;     //计算小时数后剩余的毫秒数
var minutes=Math.floor(leave2/(60*1000));
 

//计算相差秒数
var leave3=leave2%(60*1000)  ;    //计算分钟数后剩余的毫秒数
var seconds=Math.round(leave3/1000);

document.getElementById('days').innerHTML=days;
document.getElementById('hours').innerHTML=hours;
document.getElementById('minutes').innerHTML=minutes;
document.getElementById('seconds').innerHTML=seconds;

}
</script>
</head>

<body bgcolor="#770409" onload="setInterval('datel()',1000);">
<div style="width:1200px; height:545px; background-image:url(temp/chunjie.jpg); margin:0 auto; text-align:center; line-height:100px; font-size:40px; font-family:'微软雅黑'; font-weight:bold; color:#EEF21F; padding-top:330px">
	<span>距离2016年02月13号</span><br />还有<font id="days">0</font>天<font id="hours">0</font>小时<font id="minutes">0</font>分<font id="seconds">0</font>秒
</div>
</body>
</html>