<?php /* Smarty version Smarty-3.1.18, created on 2015-05-07 12:05:52
         compiled from ".\templates\shouquan.html" */ ?>
<?php /*%%SmartyHeaderCode:10801554b268f0b50a0-90995619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cbf598581fb2498d6810b273ab4fdeca8b68a3c' => 
    array (
      0 => '.\\templates\\shouquan.html',
      1 => 1430998003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10801554b268f0b50a0-90995619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554b268f134323_89186368',
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b268f134323_89186368')) {function content_554b268f134323_89186368($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>擎翌智能-业务合作-授权代理</title>
<meta name="keywords" content="智能交通，擎翌，智慧停车，智慧公交，擎翌智能科技有限公司" />
<meta name="description" content="擎翌智能科技有限公司提供智能交通、智慧停车、智慧公交等高科技智能交通解决方案" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.db_tabmotionbanner.min.js"></script>
<link href="css/common.css" rel="stylesheet" /><link rel="stylesheet" href="css/style.css" /><link href="css/mycss.css" rel="stylesheet" />
<script type="text/javascript">
	$(function () {
		$(".top1SS").mouseover(function () {
			$(".top1RSS").show();
		}).mouseout(function () {
			$(".top1RSS").hide();
		});
		$(".top1RSS").mouseover(function () {
			$(".top1RSS").show();
			$(".top1SS").addClass("top1SSSel");
		}).mouseout(function () {
			$(".top1RSS").hide();
			$(".top1SS").removeClass("top1SSSel");
		});
	})
</script>
<script type="text/javascript">
	$(function () {
		$(".top1Nav").mouseover(function () {
			$(".topRightNav").show();
		}).mouseout(function () {
			$(".topRightNav").hide();
		});
		$(".topRightNav").mouseover(function () {
			$(".topRightNav").show();
			$(".top1Nav").addClass("top1NavSel");
		}).mouseout(function () {
			$(".topRightNav").hide();
			$(".top1Nav").removeClass("top1NavSel");
		});
	})
</script>
<script type="text/javascript">
	$(function () {
		$(window).scroll(function () {
			if ($(window).scrollTop() == 0) {
				$(".top1").fadeIn(200);
			}
			else {
				$(".top1").fadeOut(0);
			}
		});
	});
</script>
<script type="text/javascript">
	$(function () {
		$(".floatClose").click(function () { $(".leftFloat").hide(); })
	})
</script>
<!--[if IE 6]>
<script src="js/PNGfix.js"></script>
<script>
DD_belatedPNG.fix('IMG,div,input,png');
</script>
<![endif]-->
<script type="text/javascript">
	function aa() {
		var tab = document.getElementById("soso").value;
		document.location = 'productslist.aspx?name=' + tab;
	}
</script>

<script type="text/javascript" language="javascript">
	$(document).ready(function () {
		$("#m10").addClass("mainNavActive");

		 $("#about").addClass("aa");
		$("#news").addClass("aa");
		$("#solutions").addClass("aa");
		$("#case").addClass("aa");
		           $("#contact").addClass("aa");
		$("#pro").addClass("aa");
		$("#service").addClass("aa");
            //$("#cooperation").addClass("aa");
	}); 
</script>
<style type="text/css">
	.aa
	{
		display: none;
	}
body,td,th {
font-family: arial, \5B8B\4F53;
}
</style>
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="content">
        <div class="nyMainTu">
        </div>
        <div class="nyMain">
            <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="nyMainRight">
                <h1 class="nyMainRightH1">
                    <span>
                        <img alt="" src="images/nyIco.jpg" />
                        首页 &gt; 业务合作 &gt;
                        授权代理</span>授权代理</h1>
                <div class="nyMainNewsC">
                    <div class="n_cont">
                        <span id="ContentPlaceHolder1_lblContent"><p><span style="font-size:14px">&nbsp;&nbsp;&nbsp; </span></p>

							<?php echo $_smarty_tpl->tpl_vars['customer']->value['infor'];?>



						</span>
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
   <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>
<?php }} ?>
