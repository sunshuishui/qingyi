<?php
if($act=='sh'){
	$listText='�����ļ';
}elseif($act=='addsh'){
	$listText='�����ļ';
}elseif($act=='xyzm'){
	$listText='У԰��ļ';
}elseif($act=='jxj'){
	$listText='��ѧ���б�';
}elseif($act=='addjxj'){
	$listText='��ӽ�ѧ��';
}elseif($act=='editjxj'){
	$listText='�༭��ѧ��';
}elseif($act=='shlc'){
	$listText='��ļ����';
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
		window.editor = K.create('#infor');
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
function checkInput1(){
	if($('#type').val()==''){
		alert('����д��ļ��λ���ƣ�');
		return false;	
	}
	return true;	
}
function checkInput2(){
	if($('#title').val()==''){
		alert('����д��ѧ����⣡');
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
    <?php if($act=='sh'){?>
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
        <form action="<?=site_url('job/editsavesh')?>" method="post" onsubmit="return checkInput1();">
        <tr><td colspan="2" height="50">��ļ��λ��<input type="text" id="type" name="type" value="<?=$datainfo['type']?>"/></td></tr>
        <tr>
            <td width="540" align="center">
            <textarea id="infor" name="infor" style="width:540; height:640px;"><?=$datainfo['infor']?></textarea></td>
            <td width="100" align="center" height="50" valign="top">
            <?php foreach($datalist as $item):?>
            <a href="<?=site_url('job/shehui/'.$item['id'])?>"<?php if($id==$item['id']){echo ' style="font-weight:bold"';}?>><?=$item['type']?></a><br />
            <?php endforeach;?>
            <br /><br />
            <a href="<?=site_url('job/addsh')?>">�����ļ</a><br />
            <a href="<?=site_url('job/shlc')?>">��ļ����</a>
            </td>
        </tr>
         <tr><td height="70" colspan="2"><input type="submit" value="�༭�����ļ" style="margin-right:40px" /><input type="button" value="ɾ������ļ��ļ" onclick="if(confirm('ȷ��Ҫɾ����'))location.href='<?=site_url('job/delsh/'.$datainfo['id'])?>'" /><input type="hidden" name="shid" value="<?=$datainfo['id']?>"/></td></tr>
        </form>
    </table>
    <?php }elseif($act=='addsh'){?>
    <form action="<?=site_url('job/addsavesh')?>" method="post" onsubmit="return checkInput1();">
  	<table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
        <tr><td valign="top" height="40">��ļ��λ��<input type="text" id="type" name="type"/></td></tr>
        <tr bgcolor="#FFFFFF"><td width="540" align="center"><textarea id="infor" name="infor" style="width:540; height:640px;"></textarea></td></tr>
        <tr><td height="60"><input type="submit" value="��������ļ" /><input type="hidden" name="class" value="shzm"/></td></tr>
    </table>
    </form>
    <?php }elseif($act=='shlc'){?>
    <form action="<?=site_url('job/editsaveshlc')?>" method="post">
  	<table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF"><td width="540" align="center"><textarea id="infor" name="infor" style="width:685; height:640px;"><?=$datainfo['infor']?></textarea></td></tr>
        <tr><td height="60"><input type="submit" value="���������ļ����" /></td></tr>
    </table>
    </form>
    <?php }elseif($act=='xyzm'){?>
    
    <form action="<?=site_url('job/editsavexy')?>" method="post">
  	<table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr><td height="40"><a href="<?=site_url('job/xyzm/xyzm')?>" <?php if($type=='xyzm'){echo 'style="font-weight:bold"';}?>>У԰��ļ</a>&nbsp;&nbsp;<a href="<?=site_url('job/xyzm/sxszm')?>" <?php if($type=='sxszm'){echo 'style="font-weight:bold"';}?>>ʵϰ����ļ</a>&nbsp;&nbsp;<a href="<?=site_url('job/xyzm/zmlc')?>" <?php if($type=='zmlc'){echo 'style="font-weight:bold"';}?>>��ļ����</a>&nbsp;&nbsp;<a href="<?=site_url('job/xyzm/qa')?>" <?php if($type=='qa'){echo 'style="font-weight:bold"';}?>>Q&A</a></td></tr>
        <tr bgcolor="#FFFFFF"><td width="540" align="center"><textarea id="infor" name="infor" style="width:715px; height:640px;"><?=$datainfo['infor']?></textarea></td></tr>
        <tr><td height="60"><input type="submit" value="����" /><input type="hidden" name="type" value="<?=$datainfo['type']?>" /></td></tr>
    </table>
    </form>
    <?php }elseif($act=='jxj'){?>
  	<table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF"><td colspan="3" align="right" height="40" style="padding-right:30px"><a href="<?=site_url('job/addjxj')?>">��ӽ�ѧ��</a></td></tr>
        <tr bgcolor="#FFFFFF">
        	<td width="140" align="center" height="40">ID</td>
            <td width="540" align="center">����</td>
            <td width="240" align="center">����</td>
        </tr>
        <?php foreach($datalist as $item){?>
        <tr bgcolor="#FFFFFF">
        	<td width="140" align="center" height="40"><?=$item['id']?></td>
            <td width="540" align="center"><?=$item['title']?></td>
            <td width="240" align="center"><a href="<?=site_url('job/editjxj/'.$item['id'])?>">�༭</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('job/jxjdel/'.$item['id'])?>" onclick="return confirm('ȷ��Ҫɾ����')">ɾ��</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Ԥ��</a></td>
        </tr>
        <?php }?>
        <tr bgcolor="#FFFFFF"><td colspan="3" align="right" style="padding-right:30px"><?=$link?></td></tr>
    </table>
    <?php }elseif($act=='addjxj'){?>
    <form action="<?=site_url('job/addsavejxj')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput2();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��ѧ����⣺</td>
            <td><input type="text" style="width:400px" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td height="50" valign="top"><p>��ѧ��ͼƬ��<br /><a href="javascript:append()"><font color="#FF0000">(����ͼƬ)</font></a></p></td>
            <td valign="top">
            <div class="appendfile">
            	<input type="hidden" value="1" name="num" id="num" />
            	<p><input type="file" name="pic1" /></p>
            </div>
            </td>
        </tr>
        <tr>
        	<td colspan="2"><p>���ݣ�</p><textarea id="infor" name="infor" style="width:665px; height:640px;"></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="��ӽ�ѧ��"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='editjxj'){?>
    <form action="<?=site_url('job/editsavejxj')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput2();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">��ѧ����⣺</td>
            <td><input type="text" style="width:400px" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" value="<?=$datainfo['id']?>" name="id" /></td>
        </tr>
        <tr>
        	<td height="50" valign="top"><p>��ѧ��ͼƬ��<br /><a href="javascript:append()"><font color="#FF0000">(����ͼƬ)</font></a></p></td>
            <td valign="top">
            <div class="appendfile">
            	<input type="hidden" value="1" name="num" id="num" />
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
        	<td colspan="2"><p>���ݣ�</p><textarea id="infor" name="infor" style="width:665px; height:640px;"><?=$datainfo['infor']?></textarea></td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="�༭��ѧ��"/> </td>
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