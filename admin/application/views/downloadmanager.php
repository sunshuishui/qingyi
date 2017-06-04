<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?php echo base_url();?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script charset="utf-8" src="<?php echo base_url();?>kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url();?>kindeditor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#content_editor');
        });
</script>
<script>
	function checkInput(){
		if($('#title').val()==''){
			alert('请填写资料标题');	
			return false;
		}
		if($('#description').val()==''){
			alert('请填写资料描述');	
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
    <td width="17" valign="top" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo base_url();?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">资源下载</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo base_url();?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php if($act=='add'){?>
        <form action="<?=site_url('download/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    	<table style="margin:15px 0 0 15px">
        	<tr>
            	<td height="40">标题：</td><td><input type="text" name="title" id="title" /></td>
            </tr>
          
        	<tr>
           		<td height="60">上传：</td>
            	<td width="776">
                	<input type="file" name="files" id="files" />
                </td>
            </tr>
            <tr>
            	<td height="60"></td>
            	<td><input type="submit" value="提交" style="margin-right:60px" /><input type="button" value="返回列表" onclick="location.href='<?=site_url('download/downloadlist')?>'" /></td>
            </tr>
        </table>
        </form>
    <?php }elseif($act=='list'){?>
     <table style="margin:15px 0 0 15px" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
    		<tr bgcolor="#FFFFFF">
            	<td width="100" height="40" align="right"  colspan="5"><input type="button" value="添加下载文件" style=" margin-right:30px" onclick="location.href='<?=site_url('download/downloadadd')?>'" /></td>
            </tr>
        	<tr bgcolor="#FFFFFF">
            	<td width="100" height="40" align="center">ID</td>
            	<td width="240" align="center">标题</td>
                <td width="240" align="center">添加时间</td>
                <td width="200" align="center">操作</td>
            </tr>
            <?php foreach($datalist as $item):?>
        	<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor='#EFEFEF'" onmouseout="this.style.backgroundColor='#ffffff'">
            	<td align="center" height="40"><?=$item['id']?></td>
            	<td align="center"><?=$item['title']?></td>
                <td align="center"><?=date('Y-m-d H:i:s',$item['addtime'])?></td>
                <td align="center"><a href="<?=site_url('download/downloadedit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('download/downloaddelete/'.$item['id'])?>" onclick="return confirm('确定要删除吗？');">删除</a></td>
            </tr>
            <?php endforeach;?>
            <tr bgcolor="#FFFFFF"><td colspan="5" align="right" style="padding-right:30px" height="40"><?=$link?></td>  </tr> 
        </table>
    <?php }elseif($act=='edit'){?>
     <form action="<?=site_url('download/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    	<table style="margin:15px 0 0 15px">
        	<tr>
            	<td height="40">标题：</td><td><input type="text" name="title" id="title" value="<?=$datalist[0]['title']?>" /><input type="hidden" name="id" id="id" value="<?=$datalist[0]['id']?>" /></td>
            </tr>
           
        	<tr>
           		<td height="60">上传：</td>
            	<td width="776">
                	<input type="file" name="files" id="files" />
                </td>
            </tr>
            <tr>
            	<td height="60"></td>
            	<td><input type="submit" value="提交" style="margin-right:60px" /><input type="button" value="返回列表"  onclick="location.href='<?=site_url('download/downloadlist')?>'"/></td>
            </tr>
        </table>
        </form>
   <?php }?>
    </td>
    <td background="<?php echo base_url();?>images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?php echo base_url();?>images/mail_leftbg.gif"><img src="<?php echo base_url();?>images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?php echo base_url();?>images/buttom_bgs.gif"><img src="<?php echo base_url();?>images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?php echo base_url();?>images/mail_rightbg.gif"><img src="<?php echo base_url();?>images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>