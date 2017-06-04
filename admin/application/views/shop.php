<?php
if($act=='list'){
	$listText='列表';
}elseif($act=='add'){
	$listText='添加';
}else{
	$listText='编辑';
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
		window.editor = K.create('#content');
});
function checkInput(){
	if($("#name").val()==''){
		alert('请填写购物中心名称！');
		return false;	
	}
	if($("#title").val()==''){
		alert('请填写项目定位！');
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
    <?php if($act=='list'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
    	<tr bgcolor="#FFFFFF"><td height="40" align="right" style="padding-right:30px;" colspan="3"><a href="<?=site_url('shop/add')?>">添加购物中心</a></td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">名称</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['name']?></td>
           <td align="center" height="50"><a href="<?=site_url('shop/edit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('shop/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('shop/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">项目名称：</td>
            <td><input type="text" id="name" name="name" value="" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">项目定位：</td>
            <td>
            <input type="text" style="width:400px" id="title" name="title" />
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">项目详情图：</td>
            <td><input type="file" value="" name="infor" id="infor" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">项目logo：</td>
            <td><input type="file" value="" name="logo" id="logo" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>项目内容：</p><textarea id="content" name="content" style="width:685px; height:440px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="添加"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
     <form action="<?=site_url('shop/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">项目名称：</td>
            <td><input type="text" id="name" name="name" value="<?=$datainfo['name']?>" /><input type="hidden" value="<?=$datainfo['id']?>" id="sid" name="sid" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">项目定位：</td>
            <td>
            <input type="text" style="width:400px" id="title" name="title" value="<?=$datainfo['title']?>" />
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">项目详情图：</td>
            <td><input type="file" value="" name="infor" id="infor" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">项目logo：</td>
            <td><input type="file" value="" name="logo" id="logo" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>项目内容：</p><textarea id="content" name="content" style="width:685px; height:440px;"><?=$datainfo['content']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="编辑"/> </td>
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