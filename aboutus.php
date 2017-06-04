<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if(!$type){$type='gsjj';}
$arrtext=array('gsjj'=>'公司简介','gsyg'=>'公司沿革','qywh'=>'企业文化','ryzs'=>'荣誉证书','zzrz'=>'资质认证','lxwm'=>'联系我们');
$sql='select * from customer where id="'.$type.'" limit 1';
$rs=$db->query($sql);
$customer=$db->fetch_array($rs);
$smarty->assign('customer',$customer);
$smarty->assign('arrtext',$arrtext);
$smarty->assign('type',$type);
$smarty->assign('ddd',5);
$smarty->display('aboutus.html');

