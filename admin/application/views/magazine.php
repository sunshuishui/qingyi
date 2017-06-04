<?php
if($act=='list'){
	$listText='杂志列表';
}elseif($act=='add'){
	$listText='杂志添加';
}else{
	$listText='杂志编辑';
}
$magazinearr=array('1'=>'VIEW杂志','2'=>'研究范畴','3'=>'行业资讯');
$year=date('Y');
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
		alert('最多只能添加八张图片');	
	}else{
		$num=$('.appendfile p').length+1;
		$file='<p><input type="file" name="pic'+$num+'" /></p>';
		$('.appendfile').append($file);
		$('#num').val($num);
	}
	
}
function checkInput(){
	if($("#title").val()==''){
		alert('请填写杂志标题！');
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
   		<tr bgcolor="#FFFFFF"><td height="40" align="right" style="padding-right:30px;" colspan="5"><a href="<?=site_url('magazine/add')?>">添加杂志</a></td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="350" align="center">标题</td>
            <td width="350" align="center">描述</td>
            <td width="350" align="center">所属</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['title']?></td>
            <td width="350" align="center"><?=$item['description']?></td>
            <td width="350" align="center"><?=$magazinearr[$item['type']]?></td>
           <td align="center" height="50"><a href="<?=site_url('magazine/edit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('magazine/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="5" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('magazine/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
     <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">杂志标题：</td>
            <td><input type="text" id="title" name="title" /></td>
        </tr>
       <tr>
        	<td width="100" height="50">杂志简述：</td>
            <td><input type="text" id="description" name="description" style="width:300px" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志所属：</td>
            <td>
            <select name="type" style="width:150px">
            <?php foreach($magazinearr as $key=>$types){?>
            	<option value="<?=$key?>"><?=$types?></option>
            <?php }?>
            </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志时间：</td>
            <td>
            	<select name="time">
                <?php 
				for($i=2000;$i<=$year;$i++){?>
				<option value="<?=$i?>"><?=$i?></option>
				<?php }?>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志封面：</td>
            <td><input type="file" id="logo" name="logo" /></td>
        </tr>
        <tr>
        	<td height="50" valign="top"><p>图片内容：<br /><a href="javascript:append()"><font color="#FF0000">(增加图片)</font></a></p></td>
            <td valign="top">
            <div class="appendfile">
            	<input type="hidden" value="1" name="num" id="num" />
            	<p><input type="file" name="pic1" /></p>
            </div>
            </td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="添加杂志"/></td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('magazine/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="100" height="50">杂志标题：</td>
            <td><input type="text" id="title" name="title" value="<?=$datainfo['title']?>" /><input type="hidden" id="sid" name="sid" value="<?=$datainfo['id']?>"/></td>
        </tr>
       <tr>
        	<td width="100" height="50">杂志简述：</td>
            <td><input type="text" id="description" name="description" style="width:300px" value="<?=$datainfo['description']?>" /></td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志所属：</td>
            <td>
            <select name="type" style="width:150px">
            <?php foreach($magazinearr as $key=>$types){?>
            	<option value="<?=$key?>" <?php if($key==$datainfo['type']){echo ' selected="selected"';}?>><?=$types?></option>
            <?php }?>
            </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志时间：</td>
            <td>
            	<select name="time">
                <?php 
				for($i=2000;$i<=$year;$i++){?>
				<option value="<?=$i?>" <?php if($i==$datainfo['time']){echo ' selected="selected"';}?>><?=$i?></option>
				<?php }?>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="100" height="50">杂志封面：</td>
            <td><input type="file" id="logo" name="logo" /></td>
        </tr>
        <tr>
       
        	<td height="50" valign="top"><p>图片内容：<br /><a href="javascript:append()"><font color="#FF0000">(增加图片)</font></a></p></td>
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
			<p style="width:60px; float:left; margin-right:5px; text-align:center"><a href="<?=base_url('../uploads').'/'.$img?>" target="_blank" title="点击预览"><img src="<?=base_url('../uploads').'/'.$img?>" width="60" height="60" /></a><br /><input  value="<?=$img?>" type="checkbox" name="oldimg[]"/>删除</p>
			<?php	}}?>
            <input type="hidden" value="<?=count($arrpic)?>" name="tolpic" id="tolpic" />
            </td>
        </tr>
        <tr>
        	<td colspan="2" height="80"><input type="submit" value="保存杂志"/></td>
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