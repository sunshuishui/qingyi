<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="<?=base_url()?>images/skin.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url()?>js/jquery-1.8.2.min.js"></script>
<script src="<?=base_url()?>kindeditor/kindeditor.js"></script>
<script src="<?=base_url()?>kindeditor/lang/zh_CN.js"></script>
<script>

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
        <td height="31"><div class="titlebt">在线申请</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <table cellpadding="0" cellspacing="1" bgcolor="#cccccc" style="margin:15px 0 0 20px">
        <tr bgcolor="#FFFFFF">
            <td align="center" height="40" width="60">ID</td>
            <td align="center" width="80">姓名</td>
            <td align="center" width="120">身份证号</td>
            <td align="center" width="120">毕业院校</td>
            <td align="center" width="100">毕业时间</td>
            <td align="center" width="60">性别</td>
            <td align="center" width="100">应聘类型</td>
            <td align="center" width="120">应聘部门</td>
            <td align="center" width="120">应聘职位</td>
            <td align="center" width="100">学历</td>
            <td align="center" width="120">所学专业</td>
            <td align="center" width="120">英语等级</td>
            <td align="center" width="100">手机号码</td>
            <td align="center" width="120">电子邮箱</td>
            <td align="center" width="100">删除</td>
        </tr>
        <?php foreach($datalist as $item):?>
        <tr bgcolor="#FFFFFF">
            <td align="center"><?=$item['id']?></td>
            <td align="center"><?=$item['name']?></td>
            <td align="center"><?=$item['pid']?></td>
            <td align="center"><?=$item['school']?></td>
            <td align="center"><?=$item['leavetime']?></td>
            <td align="center"><?php if($item['sex']==1){echo '男';}else{echo '女';}?></td>
            <td align="center"><?=$item['applyfor']?></td>
            <td align="center"><?=$item['bumenfor']?></td>
            <td align="center"><?=$item['zhiweifor']?></td>
            <td align="center"><?=$item['record']?></td>
            <td align="center"><?=$item['professional']?></td>
            <td align="center"><?=$item['elevel']?></td>
            <td align="center"><?=$item['mobile']?></td>
            <td align="center"><?=$item['email']?></td>
           <td align="center" height="50"><a href="<?=site_url('apply/del/'.$item['id'])?>" onclick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <?php endforeach;?>
        <tr bgcolor="#FFFFFF"><td colspan="15" align="right" style="padding-right:30px" height="40"><?=$link?></td></tr>
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