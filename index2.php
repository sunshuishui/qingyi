<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

function  wk($date1) {
$datearr = explode("-",$date1);     //将传来的时间使用"-"分割成数组
$year = $datearr[0];       //获取年份
$month = sprintf('%02d',$datearr[1]);  //获取月份 
$day = sprintf('%02d',$datearr[2]);      //获取日期
$hour = $minute = $second = 0;   //默认时分秒均为0
$dayofweek = mktime($hour,$minute,$second,$month,$day,$year);    //将时间转换成时间戳
$shuchu = date("w",$dayofweek);      //获取星期值
if($shuchu==0){$shuchu='7';}
return $shuchu; 
}
$days = date('t', strtotime("2016-1-1"));



$riqi=array('2015-10','2015-11','2015-12','2016-1','2016-2','2016-3','2016-4','2016-5','2016-6','2016-7','2016-8','2016-9','2016-10');
foreach($riqi as $key=>$riqi2){
	$juti[$key]['shijian']=	$riqi2;
	$juti[$key]['xingqi']=wk($riqi2.'-1');
	$juti[$key]['tianshu']=date('t', strtotime($riqi2.'-1'));
}
//var_dump($juti);
$smarty->assign('juti',$juti);
$smarty->display('index2.html');

