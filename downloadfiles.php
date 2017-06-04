<?php 
include './_include/smarty.php';
include './_include/db_mysql.class.php';
include './_include/public.function.class.php';

$id=intval(rep($_GET['id']));
$id=($id+2)/3;
$sql='select * from downloadfiles where id='.$id;
$rs=$db->query($sql);
$row=$db->fetch_array($rs);




// $file_name="cookie.jpg"; 
$file_name=$row['files']; 


//用以解决中文不能显示出来的问题 

$file_sub_path=$_SERVER['DOCUMENT_ROOT']."/downloads/"; 
$file_path=$file_sub_path.$file_name; 
//echo $file_path;
//首先要判断给定的文件存在与否 
if(!file_exists($file_path)){ 
echo "<script>alert('没有该文件文件');history.back();</script>"; 
exit();
} 
$fp=fopen($file_path,"r"); 
$file_size=filesize($file_path); 
//下载文件需要用到的头 
header("Content-type: application/octet-stream"); 
header("Accept-Ranges: bytes"); 
header("Accept-Length:".$file_size); 
header("Content-Disposition: attachment; filename=".$file_name); 
$buffer=1024; 
$file_count=0; 
//向浏览器返回数据 
while(!feof($fp) && $file_count<$file_size){
$file_con=fread($fp,$buffer);
$file_count+=$buffer;
echo $file_con; 
} 
fclose($fp);
?> 

