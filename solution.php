<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$type=rep($_GET['type']);
if(!$type){$type='1';}
$arrtext=array(1=>'�ǻ۽�ͨ',2=>'�ǻ�ͣ��',3=>'�ǻ۹���');

$pagesize='5';
$sql='select count(*)as c from solution where type='.$type.' order by id desc';
$rs=$db->query($sql);
$row=$db->fetch_array($rs);
$datasize=$row['c'];	//�ܼ�¼��
$countpage=ceil($datasize/$pagesize);  //��ҳ��
$page=intval($_GET['page']);
if($page<1){$page=1;}		//��ǰҳ

$pagestart=($page-1)*$pagesize;  //��ǰҳ��ʼ����

$sql="select * from solution where type=".$type." order by id desc limit $pagestart,$pagesize";
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
$smarty->display('solution.html');

