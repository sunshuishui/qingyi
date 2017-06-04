<?php
if($act=='list'){
	$listText='产品列表';
}elseif($act=='add'){
	$listText='添加产品';
}else{
	$listText='编辑产品';
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
		window.editor = K.create('#canshu');
		window.editor = K.create('#gongneng');
		window.editor = K.create('#youshi');
		window.editor = K.create('#xiazai');
});
function checkInput(){
	if($("#title").val()==''){
		alert('请填写产品名称！');
		return false;	
	}

	return true;
}
function showdiv($class){
	$('.pcontent1').hide();
	$('.'+$class).show();
	$('.pcontent p').css({'border':'solid 1px #CCCCCC'});
	$('.'+$class+'1').css({'border':'solid 1px #355977'});
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
.pcontent{ height:25px; line-height:25px;}
.pcontent p{ float:left; width:70px; height:25px; text-align:center; margin-right:20px; cursor:pointer} 
.canshu1{ border:solid 1px #355977;}
.gongneng1,.youshi1,.xiazai1{ border:solid 1px #CCCCCC;}
.canshu{display:block;}
.gongneng,.youshi,.xiazai{display:none;}
-->
</style>
<title>产品管理</title>
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
        	<option value="<?=site_url('product/plist/0')?>">全部</option>
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=site_url('product/plist/'.$key)?>" <?php if($key==$type){echo 'selected="selected"';}?>><?=$suballtype?></option>
            <?php endforeach;?>
        </select>
        </td></tr>
        <tr bgcolor="#FFFFFF">
            <td width="100" align="center" height="40">ID</td>
            <td width="250" align="center">产品标题</td>
            <td width="350" align="center">产品简述</td>
            <td width="150" align="center">产品分类</td>
            <td width="150" align="center">操作</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=substr($item['title'],0,38)?></td>
            <td align="center"><?=substr($item['smallcontent'],0,52)?></td>
            <td align="center"><?=$alltype[$item['type']]?></td>
           <td align="center" height="50"><a href="<?=site_url('product/edit/'.$item['id'])?>">编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=site_url('product/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="6" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
    </table>
     <?php }elseif($act=='add'){?>
     <form action="<?=site_url('product/addsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="80" height="50">产品名称：</td>
            <td><input type="text" style="width:580px" id="title" name="title" /></td>
        </tr>
        <tr>
        	<td width="80" height="50">产品简述：</td>
            <td><textarea style="width:580px; height:210px;" name="smallcontent"></textarea></td>
        </tr>
        <tr>
        	<td width="80" height="50">产品分类：</td>
            <td>
            <select name="type" id="type" style="width:173px">
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=$key?>"><?=$suballtype?></option>
            <?php endforeach;?>
       		</select>
            </td>
        </tr>
        <tr>
        	<td height="70">产品图片：</td>
            <td><input type="file" name="logo" /></td>
        </tr>
        <tr>
        	<td valign="top">产品内容：</td>
            <td valign="top">
			<div class="pcontent"><p onclick="showdiv('canshu');" class="canshu1">产品参数</p><p onclick="showdiv('gongneng');" class="gongneng1">产品功能</p><p onclick="showdiv('youshi');" class="youshi1">产品优势</p><p onclick="showdiv('xiazai');" class="xiazai1">资源下载</p></div>
			<div class="pcontent1 canshu"><textarea id="canshu" name="canshu" style="width:900px; height:440px;"></textarea></div>
			<div class="pcontent1 gongneng"><textarea id="gongneng" name="gongneng" style="width:900px; height:440px;"></textarea></div>
			<div class="pcontent1 youshi"><textarea id="youshi" name="youshi" style="width:900px; height:440px;"></textarea></div>
			<div class="pcontent1 xiazai">
				<select multiple="multiple" rows="10" style="width:350px; height:350px;" name="downlist[]">
				<option value="">请选择资源</option>
				<?php
				$i=0;
				foreach($downlist as $listitem):
				$i++;
				?>
					<option value="<?=$listitem['id']?>"><?=$i.'、'.$listitem['title']?></option>
				<?php endforeach;?>
				</select>
			</div>
			</td>
        </tr>
        
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="添加产品"/> </td>
        </tr>
    </table>
    </form>
    <?php }elseif($act=='edit'){?>
   <form action="<?=site_url('product/editsave')?>" method="post" enctype="multipart/form-data" onsubmit="return checkInput();">
   <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">
    	<tr>
        	<td width="80" height="50">产品名称：</td>
            <td><input type="text" style="width:580px" value="<?=$datainfo['title']?>" id="title" name="title" /><input type="hidden" value="<?=$datainfo['id']?>" id="id" name="id" /></td>
        </tr>
        <tr>
        	<td width="80" height="50">产品简述：</td>
            <td><textarea style="width:580px; height:210px;" name="smallcontent"><?=$datainfo['smallcontent']?></textarea></td>
        </tr>
        <tr>
        	<td width="80" height="50">产品分类：</td>
            <td>
            <select name="type" id="type" style="width:173px">
            <?php foreach($alltype as $key=>$suballtype):?>
            <option value="<?=$key?>" <?php if($key==$datainfo['type']){echo 'selected="selected"';}?>><?=$suballtype?></option>
            <?php endforeach;?>
       		</select>
            </td>
        </tr>
        <tr>
        	<td height="70">产品图片：</td>
            <td><input type="file" name="logo" /></td>
        </tr>
        <tr>
        	<td valign="top">产品内容：</td>
            <td valign="top">
			<div class="pcontent"><p onclick="showdiv('canshu');" class="canshu1">产品参数</p><p onclick="showdiv('gongneng');" class="gongneng1">产品功能</p><p onclick="showdiv('youshi');" class="youshi1">产品优势</p><p onclick="showdiv('xiazai');" class="xiazai1">资源下载</p></div>
			<div class="pcontent1 canshu"><textarea id="canshu" name="canshu" style="width:900px; height:440px;"><?=$datainfo['canshu']?></textarea></div>
			<div class="pcontent1 gongneng"><textarea id="gongneng" name="gongneng" style="width:900px; height:440px;"><?=$datainfo['gongneng']?></textarea></div>
			<div class="pcontent1 youshi"><textarea id="youshi" name="youshi" style="width:900px; height:440px;"><?=$datainfo['youshi']?></textarea></div>
			<div class="pcontent1 xiazai">
				<select multiple="multiple" rows="10" style="width:350px; height:350px;" name="downlist[]">
				<option value="">请选择资源</option>
				<?php
				$i=0;
				$temparray=explode(',',$datainfo['downlist']);
				foreach($downlist as $listitem):
				$i++;
				?>
					<option value="<?=$listitem['id']?>" <?php if(in_array($listitem['id'],$temparray)){echo ' selected="selected"';}?>><?=$i.'、'.$listitem['title']?></option>
				<?php endforeach;?>
				</select>
			</div>
			</td>
        </tr>
        
        <tr>
        	<td valign="top"></td>
        	<td height="80"><input type="submit" value="编辑产品"/> </td>
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