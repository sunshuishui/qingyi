<?php
if($act=='qlist'){
	$listText='所获荣誉';
}else{
	$listText='奖项项目';
}
$year=date('Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script>
function checkInput(){
	if($("#sitename").val()==''){
		alert('请填写办事处名称！');
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
    <?php if($act=='qlist'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF">
            <td width="150" align="center" height="40">ID</td>
            <td width="300" align="center">名称</td>
            <td width="150" align="center">时间</td>
            <td width="200" align="center">图片</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <form action="<?=site_url('rongyu/edit')?>" method="post" enctype="multipart/form-data">
        <tr bgcolor="#FFFFFF">
        	<td align="center" height="40"><?=$item['id']?><input type="hidden" value="<?=$item['id']?>" name="pid" /></td>
            <td align="center"><input type="text" value="<?=$item['pname']?>" name="pname" style="width:280px" /></td>
            <td align="center"> 
            <select name="time">
            <?php 
			for($i=2000;$i<=$year;$i++){?>
            <option value="<?=$i?>" <?php if($i==$item['time']){echo 'selected="selected"';}?>><?=$i?></option>
            <?php }?>
            </select></td>
           <td align="center"><input type="file" name="pic" /></td>
           <td align="center"><input type="submit" value="编辑" /><input type="button" value="删除" onclick="if(confirm('确定要删除吗？'))location.href='<?=site_url('rongyu/delete/'.$item['id'])?>';" /></td>
        </tr>
        </form>
        <?php endforeach;?>
        <form action="<?=site_url('rongyu/qadd')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
        <tr bgcolor="#FFFFFF">
        	<td align="center" height="40"></td>
            <td align="center"><input type="text" name="pname" style="width:280px" value="" /></td>
            <td align="center">
            <select name="time">
            <?php 
			for($i=2000;$i<=$year;$i++){?>
            <option value="<?=$i?>"><?=$i?></option>
            <?php }?>
            </select>
            </td>
           <td align="center"><input type="file" name="pic" /></td>
           <td align="center"><input type="submit" value="添加" /></td>
        </tr>
        </form>
    </table>
    <?php }elseif($act=='jlist'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF">
            <td width="150" align="center" height="40">ID</td>
            <td width="300" align="center">项目名称</td>
            <td width="150" align="center">时间</td>
            <td width="150" align="center">荣誉</td>
            <td width="150" align="center">授予单位</td>
            <td width="200" align="center">图片</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <form action="<?=site_url('rongyu/jedit')?>" method="post" enctype="multipart/form-data">
        <tr bgcolor="#FFFFFF">
        	<td align="center" height="40"><?=$item['id']?><input type="hidden" value="<?=$item['id']?>" name="pid" /></td>
            <td align="center"><input type="text" value="<?=$item['pname']?>" name="pname" style="width:280px" /></td>
            <td align="center"> 
            <select name="time">
            <?php 
			for($i=2000;$i<=$year;$i++){?>
            <option value="<?=$i?>" <?php if($i==$item['time']){echo 'selected="selected"';}?>><?=$i?></option>
            <?php }?>
            </select></td>
            <td width="150" align="center"><input type="text" value="<?=$item['jiangxiang']?>" name="jiangxiang" style="width:280px" /></td>
            <td width="150" align="center"><input type="text" value="<?=$item['unit']?>" name="unit" style="width:280px" /></td>
           <td align="center"><input type="file" name="pic" /></td>
           <td align="center"><input type="submit" value="编辑" /><input type="button" value="删除" onclick="if(confirm('确定要删除吗？'))location.href='<?=site_url('rongyu/jdelete/'.$item['id'])?>';" /></td>
        </tr>
        </form>
        <?php endforeach;?>
        <form action="<?=site_url('rongyu/jadd')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
        <tr bgcolor="#FFFFFF">
        	<td align="center" height="40"></td>
            <td align="center"><input type="text" name="pname" style="width:280px" value="" /></td>
            <td align="center">
            <select name="time">
            <?php 
			for($i=2000;$i<=$year;$i++){?>
            <option value="<?=$i?>"><?=$i?></option>
            <?php }?>
            </select>
            </td>
            <td width="150" align="center"><input type="text" value="" name="jiangxiang" style="width:280px" /></td>
            <td width="150" align="center"><input type="text" value="" name="unit" style="width:280px" /></td>
           <td align="center"><input type="file" name="pic" /></td>
           <td align="center"><input type="submit" value="添加" /></td>
        </tr>
        </form>
    </table>
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