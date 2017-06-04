<?php
//替换参数里的敏感字符串
function rep($string){
	$arr=array(',','.','`','select','insert','delete','script','update','=','>','<',"'",'"','‘','“','and','or','like');
	$string=str_ireplace($arr,'',$string);
	return $string;
}
?>