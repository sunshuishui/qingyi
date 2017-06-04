<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>
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
        <td height="31"><div class="titlebt">工作环境</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
   <form action="<?=site_url('environment/editsave')?>" method="post" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
        	<td height="50" valign="top"><p>活工作环境图片：<br /><a href="javascript:append()"><font color="#FF0000">(增加图片)</font></a></p></td>
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
			<p style="width:60px; float:left; margin-right:5px; text-align:center"><a href="<?=base_url('../uploads').'/'.$img?>" target="_blank" title="点击预览"><img src="<?=base_url('../uploads').'/'.$img?>" width="60" height="60" /></a><br /><input  value="<?=$img?>" type="checkbox" name="oldimg[]"/>删除</p>
			<?php	}}?>
            <input type="hidden" value="<?=count($arrpic)?>" name="tolpic" id="tolpic" />
            </td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="保存"/></td>
        </tr>
    </table>
    </form>
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