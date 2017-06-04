<?php
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';


$sql='select * from customer where id="cpwh" limit 1';
$rs=$db->query($sql);
$customer=$db->fetch_array($rs);
$smarty->assign('customer',$customer);

$smarty->display('productwh.html');

