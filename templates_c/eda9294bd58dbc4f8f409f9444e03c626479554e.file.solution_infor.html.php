<?php /* Smarty version Smarty-3.1.18, created on 2015-05-07 09:54:20
         compiled from ".\templates\solution_infor.html" */ ?>
<?php /*%%SmartyHeaderCode:9273554b353125b558-65946668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda9294bd58dbc4f8f409f9444e03c626479554e' => 
    array (
      0 => '.\\templates\\solution_infor.html',
      1 => 1430992447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9273554b353125b558-65946668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554b3531308086_23459720',
  'variables' => 
  array (
    'pinfor' => 0,
    'type' => 0,
    'arrtext' => 0,
    'nextpinfor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b3531308086_23459720')) {function content_554b3531308086_23459720($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><title>
	解决方案-<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>

</title><meta name="keywords" content="中兴智能交通有限公司" /><meta name="description" content="中兴智能交通有限公司" />
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
            $("#m4").addClass("mainNavActive");

            $("#about").addClass("aa");
            $("#news").addClass("aa");
            //$("#solutions").addClass("aa");
            $("#case").addClass("aa");
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
    <form method="post" action="newsshow.aspx?id=139&amp;type=4" id="form1">
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
                        首页 &gt; 解决方案 &gt;
                        <?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</span><?php echo $_smarty_tpl->tpl_vars['arrtext']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</h1>
                <div class="nyMainNewsC">
                    <div class="n_title">
                        <span id="ContentPlaceHolder1_lblnewstitle"><?php echo $_smarty_tpl->tpl_vars['pinfor']->value['title'];?>
</span></div>
                    <div class="n_laiy">
                        发布时间：<span id="ContentPlaceHolder1_lbl_newstime"><?php echo $_smarty_tpl->tpl_vars['pinfor']->value['addtime'];?>
</span></div>
                    <div class="n_cont">
                        <span id="ContentPlaceHolder1_lblContent">
						<?php echo $_smarty_tpl->tpl_vars['pinfor']->value['content'];?>

</span>
                    </div>
                    <div class="nyMainNewsC2">
                        <span class="nyMainNewsShare">分享到：</span>
                        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                        <div class="clear">
                        </div>
                        <div class="nyMainNewsTitle">
                            <div id="showfirst">上一篇：<a href="newsshow.aspx?id=0&type=4"></a><br /></div>
                            <div id="shownext">下一篇：<a href="solution_infor.php?id=<?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextpinfor']->value['title'];?>
</a></div>
                        </div>
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
</form>
</body>
</html>
<?php }} ?>
