<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';


$id=intval(rep($_GET['id']));
$type=intval(rep($_GET['type']));
$sql="select * from product where id=$id and type=$type limit 1";
$rs=$db->query($sql);
$pinfor=$db->fetch_array($rs);
$d_id=$pinfor['downlist'];
if($d_id){
	$sql='select * from downloadfiles where id in ('.$d_id.')';
	$rs=$db->query($sql);
	while($row=$db->fetch_array($rs)){
		$dlist[]=$row;
	}
	
}
$sql="select * from product where id<$id and type=$type order by id desc limit 1";
$rs=$db->query($sql);
$nextpinfor=$db->fetch_array($rs);
$smarty->assign('pinfor',$pinfor);
$smarty->assign('dlist',$dlist);
$smarty->assign('nextpinfor',$nextpinfor);
$smarty->display('product_infor.html');
