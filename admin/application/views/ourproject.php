<?php
if($act=='list'){
	$listText='��Ŀ�б�';
}elseif($act=='add'){
	$listText='��Ŀ���';
}else{
	$listText='��Ŀ�༭';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>WdatePicker/WdatePicker.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#content');
});

function checkInput(){
	if($("#title").val()==''){
		alert('����д��Ŀ���⣡');
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
<title>������</title>
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
    	<tr bgcolor="#FFFFFF"><td colspan="3" height="40" align="right" style="padding-right:30px"><a href="<?=site_url('ourproject/add')?>">��Ŀ���</a></td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">��Ŀ����</td>
            <td width="150" align="center">����</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['title']?></td>
           <td align="center" height="50"><a href="<?=site_url('ourproject/edit/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('ourproject/del/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a></td>
        </tr>
        <?php endforeach;?>
         <tr bgcolor="#FFFFFF"><td colspan="3" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('ourproject/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ŀ���⣺</td>
            <td><input type="text" style="width:400px" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">���������</td>
            <td><input type="text" value="" name="jarea" id="jarea" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">���������</td>
            <td><input type="text" value="" name="zarea" id="zarea" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">����/���½�����</td>
            <td><input type="text" value="" name="layer" id="layer" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">����������</td>
            <td><input type="text" value="" name="countcustomer" id="countcustomer" />��</td>
        </tr>
         <tr>
        	<td width="100" height="50">ͣ��λ��</td>
            <td><input type="text" value="" name="parking" id="parking" />��</td>
        </tr>
         <tr>
        	<td width="100" height="50">��ҵʱ�䣺</td>
            <td><input type="text" value="" name="opentime" id="opentime" onClick="WdatePicker()" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">��ĿͼƬ��</td>
            <td><input type="file" value="" name="pic" id="pic" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>��Ŀ���ݣ�</p><textarea id="content" name="content" style="width:685px; height:440px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="�����Ŀ"/></td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('ourproject/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ŀ���⣺</td>
            <td><input type="text" style="width:400px" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" name="sid" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">���������</td>
            <td><input type="text" value="<?=$datainfo['jarea']?>" name="jarea" id="jarea" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">���������</td>
            <td><input type="text" value="<?=$datainfo['zarea']?>" name="zarea" id="zarea" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">����/���½�����</td>
            <td><input type="text" value="<?=$datainfo['layer']?>" name="layer" id="layer" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">����������</td>
            <td><input type="text" value="<?=$datainfo['countcustomer']?>" name="countcustomer" id="countcustomer" />��</td>
        </tr>
         <tr>
        	<td width="100" height="50">ͣ��λ��</td>
            <td><input type="text" value="<?=$datainfo['parking']?>" name="parking" id="parking" />��</td>
        </tr>
         <tr>
        	<td width="100" height="50">��ҵʱ�䣺</td>
            <td><input type="text" value="<?=$datainfo['opentime']?>" name="opentime" id="opentime" onClick="WdatePicker()" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">��ĿͼƬ��</td>
            <td><input type="file" name="pic" id="pic" /></td>
        </tr>
        <tr>
        	<td colspan="2"><p>��Ŀ���ݣ�</p><textarea id="content" name="content" style="width:685px; height:440px;"><?=$datainfo['content']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="�༭��Ŀ"/></td>
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