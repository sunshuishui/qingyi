<?php /* Smarty version Smarty-3.1.18, created on 2015-07-01 02:47:43
         compiled from ".\templates\project.html" */ ?>
<?php /*%%SmartyHeaderCode:8257554a0d6d702794-95301187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4a5ace1d2f4e4df936272fb4c5567b2939ec08' => 
    array (
      0 => '.\\templates\\project.html',
      1 => 1433821449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8257554a0d6d702794-95301187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554a0d6d872748_96892510',
  'variables' => 
  array (
    'type' => 0,
    'arrtext' => 0,
    'article' => 0,
    'datasize' => 0,
    'page' => 0,
    'countpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a0d6d872748_96892510')) {function content_554a0d6d872748_96892510($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\wamp\\www\\qingyi\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><title>
	擎翌智能经典案例
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
    
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            $("#m6").addClass("mainNavActive");

            $("#about").addClass("aa");
            $("#news").addClass("aa");
            $("#solutions").addClass("aa");
            //$("#case").addClass("aa");
            $("#contact").addClass("aa");
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
    </style>
</head>
<body>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


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
                        首页 &gt; 经典案例 &gt;<?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</span><?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</h1>
             

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
                                    <li><span class="nyMainMidCont2"><a href="project_infor.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['type'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></span>
                                        <div class="clear">
                                        </div>
                                        <div class="nyCaseC">
                                            <div class="nyCasePic">
                                                <a href="project_infor.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['type'];?>
">
                                                    <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['logo'];?>
" alt="" width="120px" height="75px" /></a></div>
                                            <div class="nyCaseWord">
                                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['content'],'150');?>

											</div>
                                            <div class="clear">
                                            </div>
                                        </div>
                                    </li>
									<?php endfor; endif; ?>
                        </ul>
                        <div>
                            <div style="width:100%;height:25px; line-height:25px;color:black;"><div style="float:left; padding-left:10px;color:black;"><span style="font-weight:normal; ">共有</span><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['datasize']->value;?>
</span><span style="font-weight:normal ">条记录，</span>&nbsp;<span style="font-weight:normal ">当前第</span><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span><span style="font-weight:normal ">页，共<span style="color:#ff0000;"><?php echo $_smarty_tpl->tpl_vars['countpage']->value;?>
</span><span style="font-weight:normal ">页</span>&nbsp;&nbsp;</div>
							<div style="float:right; padding-right:5px; white-space:nowrap;">
							<a style="color:black;" href="?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="pager">首页</a>&nbsp;
							<?php if ($_smarty_tpl->tpl_vars['page']->value>1) {?>
							<a style="color:black;" href="?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
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
								&nbsp;<a style="color:black;" href="?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" class="pager"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</a>
								<?php }?>
							<?php endfor; endif; ?>
							&nbsp;<?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['countpage']->value) {?><a style="color:black;" href="?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="pager">下页</a><?php } else { ?>下页<?php }?>
							&nbsp;<a style="color:black;" href="?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['countpage']->value;?>
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


</body>
</html>
<?php }} ?>
