<?php
if($act=='list'){
	$listText='添加办事处';
}else{
	$listText='编辑办事处';
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
		window.editor = K.create('#contact_infor');
		window.editor = K.create('#contact_map');
		window.editor = K.create('#contact_traffic');
});
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
    <?php if($act=='list'){?>
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF">
            <td width="300" align="center" height="40">办事处</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td width="300" align="center"><?=$item['sitename'];?></td>
           <td width="150" align="center" height="50"><a href="<?=site_url('contactus/cedit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('contactus/cdel/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
        <form action="<?=site_url('contactus/cadd')?>" method="post" onsubmit="return checkInput();">
        <tr bgcolor="#FFFFFF">
            <td width="300" align="center"><input type="text" name="sitename" id="sitename" /></td>
           <td width="80" align="center" height="50"><input type="submit" value="添加" /></td>
        </tr>
        </form>
    </table>
    <?php }elseif($act=='edit'){?>
    <form action="<?=site_url('contactus/ceditsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    		<tr>
                <td align="left">办事处：<br /><input id="sitename" name="sitename" value="<?=$datainfo['sitename']?>"/></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px;">联系方式：<textarea id="contact_infor" name="contact_infor" style="width:685px; height:340px;"><?=$datainfo['contact_infor']?></textarea></td>
            </tr>
            
            <tr>
                <td align="left"><p style="padding-top:25px;">各地办事处：
                 <?php foreach($datalist as $item):?>
                 <a href="<?=site_url('contactus/cedit/'.$item['id'])?>" style="margin-right:15px;<?php if($id==$item['id']){echo ' font-weight:bold';}?>"><?=$item['sitename']?></a>
                 <?php endforeach;?>
                 </p>
                </td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px">交通地图：<textarea id="contact_map" name="contact_map" style="width:685px; height:340px;"><?=$datainfo['contact_map']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px">公共交通：<textarea id="contact_traffic" name="contact_traffic" style="width:685px; height:340px;"><?=$datainfo['contact_traffic']?></textarea></td>
            </tr>
            <tr>
                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" value="<?=$id?>" name="cid" /></td>
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