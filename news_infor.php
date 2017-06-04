<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';


$id=intval(rep($_GET['id']));
$type=intval(rep($_GET['type']));
$arrtext=array(1=>'公司要闻',2=>'行业动态',3=>'技术前沿');
$sql="select * from article where id=$id and type=$type limit 1";
$rs=$db->query($sql);
$pinfor=$db->fetch_array($rs);

$sql="select * from article where id<$id and type=$type order by id desc limit 1";
$rs=$db->query($sql);
$nextpinfor=$db->fetch_array($rs);
$smarty->assign('pinfor',$pinfor);
$smarty->assign('nextpinfor',$nextpinfor);
$smarty->assign('arrtext',$arrtext);
$smarty->assign('type',$type);
$smarty->display('news_infor.html');