<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script>
function tz(id){
	if(confirm('确定要删除吗？')){
		if(id>0){
			location.href='<?=site_url('userinfo/deleteuser')?>'+'/'+id+'/';
		}	
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
        <td height="31"><div class="titlebt">用户管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        	<tr bgcolor="#FFFFFF">
            	<td width="80" align="center" height="40">序号</td>
                <td width="300" align="center">用户名</td>
                <td width="250" align="center">密码</td>
                <td width="150" align="center">操作</td>
            </tr>
            <?php $i=0;foreach($datalist as $item):
			$i++;
			?>
           <form action="<?=site_url('userinfo/editsave')?>" method="post">
           <tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor='#EFEFEF'" onmouseout="this.style.backgroundColor='#ffffff'">
            	<td width="80" align="center" height="50"><?=$i?><input type="hidden" value="<?=$item['id']?>" name="uid" /></td>
                <td width="300" align="center"><input type="text" value="<?=$item['username']?>" name="username" id="username" /></td>
                <td width="250" align="center"><input type="password" value="1q013n" name="password" id="password" /></td>
                <td width="150" align="center"><input type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="删除" onclick="tz(<?=$item['id']?>);" /></td>
            </tr>
            </form>
            <?php endforeach;?>
            <form action="<?=site_url('userinfo/adduser')?>" method="post">
            <tr bgcolor="#FFFFFF">
            	<td width="80" align="center" height="50"></td>
                <td width="300" align="center"><input type="text" name="username" id="username" /></td>
                <td width="250" align="center"><input type="password" name="password" id="password" /></td>
                <td width="150" align="center"><input type="submit" value="添加用户" /></td>
            </tr>
            </form>
        </table>
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