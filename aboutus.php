<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if(!$type){$type='gsjj';}
$arrtext=array('gsjj'=>'��˾���','gsyg'=>'��˾�ظ�','qywh'=>'��ҵ�Ļ�','ryzs'=>'����֤��','zzrz'=>'������֤','lxwm'=>'��ϵ����');
$sql='select * from customer where id="'.$type.'" limit 1';
$rs=$db->query($sql);
$customer=$db->fetch_array($rs);
$smarty->assign('customer',$customer);
$smarty->assign('arrtext',$arrtext);
$smarty->assign('type',$type);
$smarty->assign('ddd',5);
$smarty->display('aboutus.html');

