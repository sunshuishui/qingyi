<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 11:02:07
         compiled from ".\templates\index2.html" */ ?>
<?php /*%%SmartyHeaderCode:8720563725f37859a3-80718654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af6649c6fd06269da2e41340f101ca924d02798' => 
    array (
      0 => '.\\templates\\index2.html',
      1 => 1446462126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8720563725f37859a3-80718654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_563725f3cb6439_98808114',
  'variables' => 
  array (
    'juti' => 0,
    'xingqi' => 0,
    'tianshu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563725f3cb6439_98808114')) {function content_563725f3cb6439_98808114($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>擎翌(上海)智能科技有限公司-官网</title>
<meta name="keywords" content="智能交通，擎翌，智慧停车，智慧公交，擎翌智能科技有限公司" />
<meta name="description" content="擎翌智能科技有限公司提供智能交通、智慧停车、智慧公交等高科技智能交通解决方案" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.db_tabmotionbanner.min.js"></script>
<link href="css/common.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" />
<link href="css/mycss.css" rel="stylesheet" />
<style>
.wwe{ font-weight:bold;}
.wwe2{ font-weight:bold; color:#F00}
</style>

</head>
<body>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['juti']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <table cellpadding="0" cellspacing="1" width="350" bgcolor="#CCCCCC" style=" margin-left:5px">
  	<tr bgcolor="#f1f1f1">
    	<td colspan="7" align="center" height="40" class="wwe"><?php echo $_smarty_tpl->tpl_vars['juti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['shijian'];?>
</td>
    </tr>
    <tr bgcolor="#f1f1f1">
    
    	<td align="center" height="40" width="50" class="wwe">一</td>
        <td align="center" height="40" width="50" class="wwe">二</td>
        <td align="center" height="40" width="50" class="wwe">三</td>
        <td align="center" height="40" width="50" class="wwe">四</td>
        <td align="center" height="40" width="50" class="wwe">五</td>
        <td align="center" height="40" width="50" class="wwe">六</td>
        <td align="center" height="40" width="50" class="wwe">日</td>
    </tr>
     <tr bgcolor="#f1f1f1">
        <?php $_smarty_tpl->tpl_vars['xingqi'] = new Smarty_variable($_smarty_tpl->tpl_vars['juti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['xingqi'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tianshu'] = new Smarty_variable($_smarty_tpl->tpl_vars['juti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['tianshu']+$_smarty_tpl->tpl_vars['xingqi']->value-1, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['tianshu']->value%7%7) {?>
        <?php $_smarty_tpl->tpl_vars['tianshu'] = new Smarty_variable($_smarty_tpl->tpl_vars['tianshu']->value+7-($_smarty_tpl->tpl_vars['tianshu']->value%7), null, 0);?>
        <?php }?>
    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tianshu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
     
    	<td align="center" height="40" width="50" class="wwe2">
        <?php if (($_smarty_tpl->getVariable('smarty')->value['section']['j']['index']+1)>=$_smarty_tpl->tpl_vars['xingqi']->value&&($_smarty_tpl->getVariable('smarty')->value['section']['j']['index']+1-$_smarty_tpl->tpl_vars['xingqi']->value+1)<=$_smarty_tpl->tpl_vars['juti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['tianshu']) {?>
        <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index']+1-$_smarty_tpl->tpl_vars['xingqi']->value+1;?>

        <?php }?>
        </td>
        <?php if (($_smarty_tpl->getVariable('smarty')->value['section']['j']['index']+1)%7==0) {?>
        </tr>
        <tr bgcolor="#f1f1f1">
        <?php }?>
        <?php endfor; endif; ?>
    </tr>
    
  </table>
  <br />
    <?php endfor; endif; ?>
</body>
</html>
<?php }} ?>
