<?php
if($act=='list'){
	$listText='公开课列表';
}elseif($act=='add'){
	$listText='公开课添加';
}elseif($act=='iedit'){
	$listText='公开课介绍';
}else{
	$listText='公开课编辑';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
	window.editor = K.create('#public_classinfor');
		window.editor = K.create('#content');
		
});
function append(){
	if($('.appendfile p').length>=8){
		alert('最多只能添加八张图片');	
	}else{
		$num=$('.appendfile p').length+1;
		$file='<p><input type="file" name="pic'+$num+'" /></p>';
		$('.appendfile').append($file);
		$('#num').val($num);
	}
	
}
function checkInput(){
	if($("#title").val()==''){
		alert('请填写培训标题！');
		return false;	
	}	
	return true;
}
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
	font-size:12px;
}
-->
</style>
<title>广告管理</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?=base_url()?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?php echo $listText;?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
     <?php if($act=='iedit'){?>
     <form action="<?=site_url('publicclass/ieditsave')?>" method="post">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
   		 <tr>
        	<td colspan="2"><textarea id="public_classinfor" name="public_classinfor" style="width:685px; height:440px;"><?=$datainfo['public_class']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="编辑保存"/> </td>
        </tr>
        
    </table></form>
    <?php }elseif($act=='list'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
   		<tr bgcolor="#FFFFFF"><td height="40" align="right" style="padding-right:30px;" colspan="4"><a href="<?=site_url('publicclass/add')?>">添加公开课</a></td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="250" align="center">标题</td>
             <td width="350" align="center">描述</td>
             <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['name']?></td>
            <td align="center"><?=$item['title']?></td>
           <td align="center" height="50"><a href="<?=site_url('publicclass/edit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('publicclass/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('publicclass/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
     <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">公开课标题：</td>
            <td><input type="text" id="name" name="name" /></td>
        </tr>
       <tr>
        	<td width="100" height="50">公开课描述：</td>
            <td><input type="text" id="title" name="title" /></td>
        </tr>
       <tr>
        	<td width="100" height="50">公开课logo：</td>
            <td><input type="file" id="logo" name="logo" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>培训内容：</p><textarea id="content" name="content" style="width:685px; height:440px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="添加公开课"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
  <form action="<?=site_url('publicclass/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
     <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">公开课标题：</td>
            <td><input type="text" id="name" name="name" value="<?=$datainfo['name']?>" /><input type="hidden" id="sid" name="sid" value="<?=$datainfo['id']?>"/></td>
        </tr>
       <tr>
        	<td width="100" height="50">公开课描述：</td>
            <td><input type="text" id="title" name="title"  value="<?=$datainfo['title']?>"/></td>
        </tr>
       <tr>
        	<td width="100" height="50">公开课logo：</td>
            <td><input type="file" id="logo" name="logo" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>培训内容：</p><textarea id="content" name="content" style="width:685px; height:440px;"><?=$datainfo['infor']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="编辑保存"/> </td>
        </tr>
    </table>
    </form>
    <?php }?>
    </td>
    <td background="<?=base_url()?>images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?=base_url()?>images/buttom_bgs.gif"><img src="<?=base_url()?>images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>