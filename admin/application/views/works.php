<?php
if($act=='list'){
	$listText='��Ʒ�б�';
}elseif($act=='add'){
	$listText='��Ʒ���';
}else{
	$listText='��Ʒ�༭';
}
$typearr=array(1=>'���ͳ����ۺ���',2=>'��ҵ�ۺ���',3=>'��ҵ�㳡&��ҵ��',4=>'�칫�Ƶ�',5=>'�ܲ�����ҵ԰',6=>'�Ļ����β�ҵ',7=>'���;�ס����',8=>'�߲㼰���߲�',9=>'������',10=>'��ɫסլ');
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
function append(){
	if($('.appendfile p').length>=8){
		alert('���ֻ����Ӱ���ͼƬ');	
	}else{
		$num=$('.appendfile p').length+1;
		$file='<p><input type="file" name="pic'+$num+'" /></p>';
		$('.appendfile').append($file);
		$('#num').val($num);
	}
	
}
function checkInput(){
	if($("#title").val()==''){
		alert('����д��Ʒ���⣡');
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
   		<tr bgcolor="#FFFFFF"><td height="40" align="right" style="padding-right:30px;" colspan="7"><a href="<?=site_url('works/add')?>">�����Ʒ</a></td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">��Ʒ����</td>
            <td width="150" align="center">��������</td>
            <td width="150" align="center">�����ģ</td>
            <td width="150" align="center">����ص�</td>
            <td width="150" align="center">���赥λ</td>
             <td width="150" align="center">����</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['title']?></td>
            <td align="center"><?=$item['type']?></td>
            <td align="center"><?=$item['area']?>�O</td>
            <td align="center"><?=$item['site']?></td>
            <td align="center"><?=$item['unit']?></td>
           <td align="center" height="50"><a href="<?=site_url('works/edit/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('works/del/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="7" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('works/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ʒ���ƣ�</td>
            <td><input type="text" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">�������ͣ�</td>
            <td>
            <select name="type" id="type" style="width:150px">
            <?php foreach($typearr as $key=>$types){?>
            <option value="<?=$key?>"><?=$types?></option>
            <?php }?>
            </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">�����ģ��</td>
            <td><input type="text" value="" name="area" id="area" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">����ص㣺</td>
            <td><input type="text" value="" name="site" id="site" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">���赥λ��</td>
            <td><input type="text" value="" name="unit" id="unit" /></td>
        </tr>
        <tr>
        	<td height="50" valign="top"><p>��ƷͼƬ��<br /><a href="javascript:append()"><font color="#FF0000">(����ͼƬ)</font></a></p></td>
            <td valign="top">
            <div class="appendfile">
            	<input type="hidden" value="1" name="num" id="num" />
            	<p><input type="file" name="pic1" /></p>
            </div>
            </td>
        </tr>
        <tr>
        	<td colspan="2"><p>�������ݣ�</p><textarea id="content" name="content" style="width:685px; height:440px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="�����Ʒ"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('works/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ʒ���ƣ�</td>
            <td><input type="text" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" name="sid" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">�������ͣ�</td>
            <td>
            <select name="type" id="type" style="width:150px">
            <?php foreach($typearr as $key=>$types){?>
            <option value="<?=$key?>" <?php if($key==$datainfo['type']){echo ' selected="selected"';}?>><?=$types?></option>
            <?php }?>
            </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">�����ģ��</td>
            <td><input type="text" value="<?=$datainfo['area']?>" name="area" id="area" />�O</td>
        </tr>
        <tr>
        	<td width="100" height="50">����ص㣺</td>
            <td><input type="text" value="<?=$datainfo['site']?>" name="site" id="site" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">���赥λ��</td>
            <td><input type="text" value="<?=$datainfo['unit']?>" name="unit" id="unit" /></td>
        </tr>
        <tr>
        	<td height="50" valign="top"><p>��ƷͼƬ��<br /><a href="javascript:append()"><font color="#FF0000">(����ͼƬ)</font></a></p></td>
            <td valign="top">
            <div class="appendfile">
            	<input type="hidden" value="1" name="num" id="num"/>
            	<p><input type="file" name="pic1" /></p>
            </div>
            <?php 
				$arrpic=array();
				if(!empty($datainfo['pic'])){
				$arrpic=explode('$',$datainfo['pic']);
				foreach($arrpic as $img){
			?>
			<p style="width:60px; float:left; margin-right:5px; text-align:center"><a href="<?=base_url('../uploads').'/'.$img?>" target="_blank" title="���Ԥ��"><img src="<?=base_url('../uploads').'/'.$img?>" width="60" height="60" /></a><br /><input  value="<?=$img?>" type="checkbox" name="oldimg[]"/>ɾ��</p>
			<?php	}}?>
            <input type="hidden" value="<?=count($arrpic)?>" name="tolpic" id="tolpic" />
            </td>
        </tr>
        <tr>
        	<td colspan="2"><p>���ݣ�</p><textarea id="content" name="content" style="width:685px; height:640px;"><?=$datainfo['content']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="������Ʒ"/> </td>
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