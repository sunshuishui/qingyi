<?php
if($act=='list'){
	$listText='�����б�';
}elseif($act=='add'){
	$listText='�������';
}else{
	$listText='�༭����';
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
<script src="<?=base_url()?>WdatePicker/WdatePicker.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#content');
});
function checkInput(){
	if($("#title").val()==''){
		alert('����д���ű��⣡');
		return false;	
	}
	if($("#time").val()==''){
		alert('����д���ŷ���ʱ�䣡');
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
<title>���Ź���</title>
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
    	<tr bgcolor="#FFFFFF"><td colspan="6" align="right" style="padding-right:30px" height="40">
        <select onchange="window.location.href=this.options[selectedIndex].value">
        	<option value="<?=site_url('article/alist/0')?>">ȫ��</option>
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=site_url('article/alist/'.$key)?>" <?php if($key==$type){echo 'selected="selected"';}?>><?=$suballtype?></option>
            <?php endforeach;?>
        </select>
        </td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">����</td>
            <td width="150" align="center">����ʱ��</td>
            <td width="150" align="center">����</td>
            <td width="150" align="center">����</td>
            <td width="150" align="center">����</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['title']?></td>
            <td align="center"><?=$item['addtime']?></td>
            <td align="center"><?=$item['author']?></td>
            <td align="center"><?=$alltype[$item['type']]?></td>
           <td align="center" height="50"><a href="<?=site_url('article/edit/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('article/del/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="6" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('article/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="80" height="50">���ű��⣺</td>
            <td><input type="text" style="width:740px" id="title" name="title" /></td>
        </tr>
        
        <tr>
        	<td width="80" height="50">���ŷ��ࣺ</td>
            <td>
            <select name="type" id="type" style="width:173px">
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=$key?>"><?=$suballtype?></option>
            <?php endforeach;?>
       		</select>
            </td>
        </tr>
        <tr>
        	<td width="50" height="50">����ʱ�䣺</td>
            <td><input type="text" value="<?=date('Y-m-d')?>" name="addtime" id="addtime" onClick="WdatePicker()"/></td>
        </tr>
        <tr>
        	<td width="50" height="50">�������ߣ�</td>
            <td><input type="text" value="" name="author" id="author"/></td>
        </tr>
        <tr>
        	<td height="70">����ͼƬ��</td>
            <td><input type="file" name="logo" /></td>
        </tr>
        <tr>
        	<td valign="top">�������ݣ�</td>
            <td><textarea id="content" name="content" style="width:900px; height:440px;"></textarea></td>
        </tr>
        
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="�������"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('article/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
   <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="80" height="50">���ű��⣺</td>
            <td><input type="text" style="width:740px" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" id="id" name="id" /></td>
        </tr>
        <tr>
        	<td width="80" height="50">���ŷ��ࣺ</td>
            <td>
            <select name="type" id="type" style="width:173px">
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=$key?>"<?php if($datainfo['type']==$key){echo ' selected="selected"';}?>><?=$suballtype?></option>
            <?php endforeach;?>
       		</select>
            </td>
        </tr>
        <tr>
        	<td width="50" height="50">����ʱ�䣺</td>
            <td><input type="text"  value="<?=$datainfo['addtime']?>" name="addtime" id="addtime" onClick="WdatePicker()"/></td>
        </tr>
        <tr>
        	<td width="50" height="50">�������ߣ�</td>
            <td><input type="text"  value="<?=$datainfo['author']?>" name="author" id="author"/></td>
        </tr>
        <tr>
        	<td height="70">����ͼƬ��</td>
            <td><input type="file" name="logo" /></td>
        </tr>
        <tr>
        	<td valign="top">�������ݣ�</td>
            <td><textarea id="content" name="content" style="width:900px; height:440px;"><?=$datainfo['content']?></textarea></td>
        </tr>
        
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="�༭����"/> </td>
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