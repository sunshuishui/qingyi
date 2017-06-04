<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';


$id=intval(rep($_GET['id']));
$type=intval(rep($_GET['type']));

$sql="select * from zhaopin where id=$id limit 1";
$rs=$db->query($sql);
$pinfor=$db->fetch_array($rs);


$smarty->assign('pinfor',$pinfor);;
$smarty->display('zhaopin_infor.html');