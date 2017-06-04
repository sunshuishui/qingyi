<?php /* Smarty version Smarty-3.1.18, created on 2015-12-30 03:46:47
         compiled from ".\templates\aboutus.html" */ ?>
<?php /*%%SmartyHeaderCode:1169055482d17035c26-98678821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '297e61e88b366dfaa6a42486070642692a47c699' => 
    array (
      0 => '.\\templates\\aboutus.html',
      1 => 1451447202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169055482d17035c26-98678821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55482d170d6bc0_63481866',
  'variables' => 
  array (
    'type' => 0,
    'arrtext' => 0,
    'ddd' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55482d170d6bc0_63481866')) {function content_55482d170d6bc0_63481866($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>擎翌智能-<?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</title>
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
<?php if ($_smarty_tpl->tpl_vars['type']->value=='lxwm') {?>
<script type="text/javascript" language="javascript">
	$(document).ready(function () {
		$("#m9").addClass("mainNavActive");
		            $("#about").addClass("aa");
		$("#news").addClass("aa");
		$("#solutions").addClass("aa");
		$("#case").addClass("aa");
		$("#contact").addClass("aa");
		$("#pro").addClass("aa");
		//$("#service").addClass("aa");
        $("#cooperation").addClass("aa");
	}); 
</script>
<?php } else { ?>
<script type="text/javascript" language="javascript">
	$(document).ready(function () {
		$("#m2").addClass("mainNavActive");
		//            $("#about").addClass("aa");
		$("#news").addClass("aa");
		$("#solutions").addClass("aa");
		$("#case").addClass("aa");
		$("#contact").addClass("aa");
		$("#pro").addClass("aa");
		$("#service").addClass("aa");
        $("#cooperation").addClass("aa");
	}); 
</script>
<?php }?>
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

    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ddd']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
   		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['last']) {?>
        	最后一次循环了
        <?php } else { ?>
        	<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>

        <?php }?>
    <?php endfor; endif; ?>
    
    <div class="content">
        <div class="nyMainTu">
        </div>
        <div class="nyMain">
            
			<?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="nyMainRight">
                <h1 class="nyMainRightH1">
                    <span>
                        <img alt="" src="images/nyIco.jpg" />
                        首页 &gt; 关于我们 &gt;
                        <?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</span><?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</h1>
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
