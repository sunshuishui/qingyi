<?php /* Smarty version Smarty-3.1.18, created on 2015-05-07 11:35:44
         compiled from ".\templates\product_infor.html" */ ?>
<?php /*%%SmartyHeaderCode:5398554b29126a00f2-32829747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfd598527c589fa1f9e3ec39432a41d5e7bd68f' => 
    array (
      0 => '.\\templates\\product_infor.html',
      1 => 1430998149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5398554b29126a00f2-32829747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554b2912726901_70299258',
  'variables' => 
  array (
    'pinfor' => 0,
    'dlist' => 0,
    'nextpinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b2912726901_70299258')) {function content_554b2912726901_70299258($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><title>
	擎翌智能产品介绍-<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>

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
  
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            $("#m5").addClass("mainNavActive");

            $("#about").addClass("aa");
            $("#news").addClass("aa");
            $("#solutions").addClass("aa");
            $("#case").addClass("aa");
            $("#contact").addClass("aa");
			$("#service").addClass("aa");
            $("#cooperation").addClass("aa");
            //            $("#pro").addClass("aa");
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
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="content">
        <div class="nyMainTu">
        </div>
        <div class="nyMain">
            
<?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="nyMainRight2">
                <h1 class="nyMainRightH2">
                    <span>
                        <img src="images/nyIco.jpg" />
                        首页 &gt; 产品介绍</span>产品介绍</h1>
                <div class="nyMainProDetail">
                    <div class="nyMainProDPic">
                        <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['logo'];?>
" id="ContentPlaceHolder1_img" /></div>
                    <div class="nyMainProDWord">
                        <h1>
                            <span id="ContentPlaceHolder1_lbltitle"><?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>
</span></h1>
                        <div class="nyMainProDC1">
                            <span id="ContentPlaceHolder1_lblremark"><p><span style="font-size:14px">　　
							<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['smallcontent'];?>

							</span></p>

</span>
                        </div>
                    </div>
                </div>
                <div class="nyMainProDetailC">
                    <h1 class="nyMainProDetailCH1">
                        <a class="nyMainProDTA" id="btn_main4LBtn1">基本参数</a><a id="btn_main4LBtn2">产品功能</a><a
                            id="btn_main4LBtn3">产品优势</a><a id="btn_main4LBtn4">资源下载</a>
                        <div class="clear">
                        </div>
                    </h1>
                    <div class="nyMainProDContact" id="main4LBtn1">
                        <?php echo $_smarty_tpl->tpl_vars['pinfor']->value['canshu'];?>

                    </div>
                    <div class="nyMainProDContact" id="main4LBtn2">
                       <?php echo $_smarty_tpl->tpl_vars['pinfor']->value['gongneng'];?>

                    </div>
                    <div class="nyMainProDContact" id="main4LBtn3">
                        <?php echo $_smarty_tpl->tpl_vars['pinfor']->value['youshi'];?>

                    </div>
                    <div class="nyMainProDContact" id="main4LBtn4">
                        <ul class="nyProShowDownUl">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<li><a href="downloadfiles.php?id=<?php echo $_smarty_tpl->tpl_vars['dlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id']*3-2;?>
"><?php echo $_smarty_tpl->tpl_vars['dlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['title'];?>
</a></li>
							<?php endfor; endif; ?>
                        </ul>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="nyMainProShare">
                    <span class="nyMainNewsShare">分享到：</span>
                    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                    <div class="clear">
                    </div>
                    <div class="nyMainNewsTitle">
                        <div id="showfirst">
                            上一篇：<a href="productsshow.aspx?id=0&type=13"></a><br />
                        </div>
                        <div id="shownext">
                            下一篇：<a href="product_infor.php?id=<?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['title'];?>
</a></div>
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    

<script type="text/javascript">
//<![CDATA[
$("#showfirst").hide();//]]>
</script>
</body>
</html>
<?php }} ?>
