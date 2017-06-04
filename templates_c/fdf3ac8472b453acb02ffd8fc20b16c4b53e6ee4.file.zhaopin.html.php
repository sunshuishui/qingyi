<?php /* Smarty version Smarty-3.1.18, created on 2015-05-07 10:18:05
         compiled from ".\templates\zhaopin.html" */ ?>
<?php /*%%SmartyHeaderCode:14822554a0faa9ca390-55809144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf3ac8472b453acb02ffd8fc20b16c4b53e6ee4' => 
    array (
      0 => '.\\templates\\zhaopin.html',
      1 => 1430993879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14822554a0faa9ca390-55809144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554a0faaa5a433_12380722',
  'variables' => 
  array (
    'article' => 0,
    'page' => 0,
    'countpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a0faaa5a433_12380722')) {function content_554a0faaa5a433_12380722($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>中兴智能交通有限公司-公司简介</title>
<meta name="keywords" content="中兴智能交通有限公司" />
<meta name="description" content="中兴智能交通有限公司" />
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
		$("#m8").addClass("mainNavActive");

		 $("#about").addClass("aa");
		$("#news").addClass("aa");
		$("#solutions").addClass("aa");
		$("#case").addClass("aa");
		//           $("#contact").addClass("aa");
		$("#pro").addClass("aa");
		$("#service").addClass("aa");
            $("#cooperation").addClass("aa");
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
    <form method="post" action="about.aspx" id="form1">

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
                        首页 &gt; 关于我们 &gt;
                        招聘信息</span>招聘信息</h1>
                 <div id="ContentPlaceHolder1_u1">
	
                        <ul class="nyMainMidMidUl">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total']);
?>
                                    <li><span class="nyMainMidCont"><a href="zhaopin_infor.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
">
                                        【招聘职位】<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></span>
                                        <span class="nyMainMidTime">
                                            <?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['addtime'];?>
</span>
                                        <div class="clear">
                                        </div>
                                    </li>
                              <?php endfor; endif; ?>  
                        </ul>
                        <div>
                            <div style="width:100%;height:25px; line-height:25px;color:black;">
							<div style="float:right; padding-right:5px; white-space:nowrap;">
							<a style="color:black;" href="zhaopin.php" class="pager">首页</a>&nbsp;
							<?php if ($_smarty_tpl->tpl_vars['page']->value>1) {?>
							<a style="color:black;" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="pager">上页</a>
							<?php } else { ?>
							上页
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countpage']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total']);
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1==$_smarty_tpl->tpl_vars['page']->value) {?>
								&nbsp;<span style="color:#ff0000"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</span>
								<?php } else { ?>
								&nbsp;<a style="color:black;" href="?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" class="pager"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</a>
								<?php }?>
							<?php endfor; endif; ?>
							&nbsp;<?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['countpage']->value) {?><a style="color:black;" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="pager">下页</a><?php } else { ?>下页<?php }?>
							&nbsp;<a style="color:black;" href="?page=<?php echo $_smarty_tpl->tpl_vars['countpage']->value;?>
" class="pager">尾页</a>&nbsp;</div></div>
                            <div class="clear">
                            </div>
                        </div>
                    
</div>
            </div>
            <div class="clear">

            </div>
        </div>
    </div>
   <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </form>
</body>
</html>
<?php }} ?>
