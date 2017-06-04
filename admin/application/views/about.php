<?php

if($act=='gsjj'){

	$listText='公司简介';	

}elseif($act=='gsyg'){

	$listText='公司沿革';

}elseif($act=='qywh'){

	$listText='企业文化';

}elseif($act=='ryzs'){

	$listText='荣誉证书';

}elseif($act=='zzrz'){

	$listText='资质认证';

}elseif($act=='lxwm'){

	$listText='联系我们';
}elseif($act=='rlzy'){

	$listText='人力资源';
}elseif($act=='cpwh'){

	$listText='产品文化';
}elseif($act=='oem'){

	$listText='OEM';
}elseif($act=='sqdl'){

	$listText='授权代理';
}elseif($act=='cppt'){

	$listText='产品配套';
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

<?php if($act!='shiping' and $act!='keyword'){?>

KindEditor.ready(function(K) {

	window.editor = K.create('#infor');

});

<?php }?>

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

<title><?=$listText?></title>

</head>



<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="17" valign="top" background="<?=base_url()?>images/mail_leftbg.gif"><img src="<?=base_url()?>images/left-top-right.gif" width="17" height="29" /></td>

    <td valign="top" background="<?=base_url()?>images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">

      <tr>

        <td height="31"><div class="titlebt"><?=$listText?></div></td>

      </tr>

    </table></td>

    <td width="16" valign="top" background="<?=base_url()?>images/mail_rightbg.gif"><img src="<?=base_url()?>images/nav-right-bg.gif" width="16" height="29" /></td>

  </tr>

  <tr>

    <td valign="middle" background="<?=base_url()?>images/mail_leftbg.gif">&nbsp;</td>

    <td valign="top" bgcolor="#F7F8F9">
    <?php if($act=='gsjj' or $act=='gsyg' or $act=='qywh' or $act=='ryzs' or $act=='zzrz' or $act=='lxwm' or $act=='rlzy' or $act=='cpwh' or $act=='oem' or $act=='sqdl' or $act=='cppt'){?>

    <form action="<?=site_url('about/editsave')?>" method="post" onsubmit="return checkInput();">

    <table cellpadding="0" cellspacing="0" style="margin:15px 0 0 20px">

            <tr>

                <td align="left" style="padding-top:25px;"><textarea id="infor" name="infor" style="width:<?php if($act=='cclx'){echo '1120px';}else{echo '900px';}?>; height:<?php if($act=='keyword'){echo '60px';}else{echo '540px';}?>;"><?=$datainfo['infor']?></textarea><br /></td>

            </tr>

                <td align="left" style="padding-top:25px"><input type="submit" value="保存编辑" /><input type="hidden" name="val" value="<?=$act?>" /></td>

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