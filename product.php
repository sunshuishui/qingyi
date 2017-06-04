<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if(!$type){$type='1';}
$arrtext=array(1=>'硬件产品',2=>'软件产品',3=>'设计服务',4=>'搜索结果');
$keyword=rep($_POST['keyword']);
if($keyword){
	$sqlc=' title like "%'.$keyword.'%" or smallcontent like "%'.$keyword.'%"';
}else{
	$sqlc=' type='.$type;
}
$pagesize='5';

$sql='select count(*)as c from product where'.$sqlc.' order by id desc';
$rs=$db->query($sql);
$row=$db->fetch_array($rs);
$datasize=$row['c'];	//总记录数
$countpage=ceil($datasize/$pagesize);  //总页数
$page=intval($_GET['page']);
if($page<1){$page=1;}		//当前页

$pagestart=($page-1)*$pagesize;  //当前页起始数据

$sql="select * from product where".$sqlc." order by id desc limit $pagestart,$pagesize";
//echo $sql;
$rs=$db->query($sql);
while($row=$db->fetch_array($rs)){
	$row['smallcontent']=strip_tags($row['smallcontent']);
	$article[]=$row;
}

$smarty->assign('article',$article);
$smarty->assign('arrtext',$arrtext);
$smarty->assign('type',$type);
$smarty->assign('datasize',$datasize);
$smarty->assign('page',$page);
$smarty->assign('countpage',$countpage);
$smarty->display('product.html');