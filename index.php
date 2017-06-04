<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$sql='select * from solution where type=1 order by id desc limit 3';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$article1[]=$row;
}
$sql='select * from solution where type=2 order by id desc limit 3';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$article2[]=$row;
}
$sql='select * from solution where type=3 order by id desc limit 3';
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$article3[]=$row;
}

$smarty->assign('article3',$article3);
$smarty->assign('article2',$article2);
$smarty->assign('article1',$article1);
$smarty->assign('index','1');

$smarty->display('index.html');

