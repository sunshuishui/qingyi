<?php
if($act=='list'){
	$listText='��Ա�б�';
}elseif($act=='add'){
	$listText='��Ա���';
}else{
	$listText='��Ա�༭';
}
$teamarr=array(1=>'�ʱ�',2=>'�ʲ�',3=>'����');
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
		window.editor = K.create('#infor');
});
function checkInput(){
	if($("#name").val()==''){
		alert('����д��Ա���ƣ�');
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
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="150" align="center">��Ա����</td>
            <td width="350" align="center">�����Ŷ�</td>
            <td width="150" align="center">����</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center">
			<?=$item['name']?>
            </td>
            <td align="center">
            <?php
            foreach($teamarr as $key=>$sing){
				if(strpos('s'.$item['owner'],"$key")!==false){
					echo $sing.'&nbsp;&nbsp;&nbsp;&nbsp;';
				}
			}
			?>
            </td>
           <td align="center" height="50"><a href="<?=site_url('team/edit/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('team/del/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a></td>
        </tr>
        <?php endforeach;?>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('team/addsave')?>" method="post" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ա������</td>
            <td><input type="text" style="width:200px" id="name" name="name" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">�����Ŷӣ�</td>
            <td>
            <?php foreach($teamarr as $key=>$sing){?>
                <input type="checkbox" value="<?=$key?>" name="owner[]" /><?=$sing?>&nbsp;&nbsp;&nbsp;&nbsp;
             <?php }?>
            </td>
        </tr>
      
        <tr>
        	<td colspan="2"><p>��Ա���ܣ�</p><textarea id="infor" name="infor" style="width:760px; height:550px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="��ӳ�Ա"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('team/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��Ա������</td>
            <td><input type="text" style="width:400px" id="name" name="name" value="<?=$datainfo['name']?>"/><input type="hidden" value="<?=$datainfo['id']?>" name="id" /></td>
        </tr>
         <tr>
        	<td width="100" height="50">�����Ŷӣ�</td>
            <td>
             <?php foreach($teamarr as $key=>$sing){?>
                <input type="checkbox" value="<?=$key?>" name="owner[]"<?php if(strpos('s'.$datainfo['owner'],"$key")!==false){echo ' checked="checked"';}?> /><?=$sing?>&nbsp;&nbsp;&nbsp;&nbsp;
             <?php }?>
            </td>
        </tr>
        <tr>
        	<td colspan="2"><p>��Ա���ܣ�</p><textarea id="infor" name="infor" style="width:760px; height:550px;"><?=$datainfo['infor']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="����"/> </td>
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