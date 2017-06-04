<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';


$pagesize='15';
$sql='select count(*)as c from downloadfiles order by id desc';
$rs=$db->query($sql);
$row=$db->fetch_array($rs);
$datasize=$row['c'];	//总记录数
$countpage=ceil($datasize/$pagesize);  //总页数
$page=intval($_GET['page']);
if($page<1){$page=1;}		//当前页

$pagestart=($page-1)*$pagesize;  //当前页起始数据


$sql="select * from downloadfiles order by id desc limit $pagestart,$pagesize";
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['content']=strip_tags($row['content']);
	$article[]=$row;
}


$smarty->assign('article',$article);
$smarty->assign('arrtext',$arrtext);
$smarty->assign('type',$type);
$smarty->assign('datasize',$datasize);
$smarty->assign('page',$page);
$smarty->assign('countpage',$countpage);
$smarty->display('downlist.html');

