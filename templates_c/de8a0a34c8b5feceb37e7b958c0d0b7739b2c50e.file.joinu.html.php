<?php /* Smarty version Smarty-3.1.18, created on 2015-05-05 03:04:06
         compiled from ".\templates\joinu.html" */ ?>
<?php /*%%SmartyHeaderCode:26886554833261cfc00-97676031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8a0a34c8b5feceb37e7b958c0d0b7739b2c50e' => 
    array (
      0 => '.\\templates\\joinu.html',
      1 => 1430795033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26886554833261cfc00-97676031',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55483326255f64_44008600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55483326255f64_44008600')) {function content_55483326255f64_44008600($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>中兴智能交通有限公司-人力资源</title>
<meta name="keywords" content="中兴智能交通有限公司" />
<meta name="description" content="中兴智能交通有限公司" />
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/jquery.db_tabmotionbanner.min.js"></script>
    <link href="css/common.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css" /><link href="css/mycss.css" rel="stylesheet" />
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
        //            $("#contact").addClass("aa");
        $("#pro").addClass("aa");
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
    <form method="post" action="resource.aspx" id="form1">

   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<div class="content">
        <div class="nyMainTu">
        </div>
        <div class="nyMain">
            
<div class="nyMainLeft">
    <h1 class="nyMainLeftH1">
        快速导航</h1>
    <div class="nyMainLeftmenu submenu">
        <dl class="flNavDl1">
            <div>
                <dt class="flNavDt1">关于我们</dt>
                <dd id="about" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../about.aspx?type=5">
                                    公司简介</a></li>
                            
                                <li><a href="../about.aspx?type=18">
                                    公司沿革</a></li>
                            
                                <li><a href="../about.aspx?type=19">
                                    企业文化</a></li>
                            
                                <li><a href="../about.aspx?type=30">
                                    荣誉证书</a></li>
                            
                                <li><a href="../about.aspx?type=20">
                                    资质认证</a></li>
                            
                                <li><a href="../about.aspx?type=8">
                                    联系我们</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">新闻中心</dt>
                <dd id="news" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../newslist.aspx?type=4">
                                    公司要闻</a></li>
                            
                                <li><a href="../newslist.aspx?type=5">
                                    行业动态</a></li>
                            
                                <li><a href="../newslist.aspx?type=6">
                                    技术前沿</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">产品介绍</dt>
                <dd id="pro" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../productslist.aspx?type=13">
                                    城市交通</a> </li>
                            
                                <li><a href="../productslist.aspx?type=14">
                                    公共交通</a> </li>
                            
                                <li><a href="../productslist.aspx?type=25">
                                    智慧停车</a> </li>
                            
                                <li><a href="../productslist.aspx?type=15">
                                    城际交通</a> </li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">解决方案</dt>
                <dd id="solutions" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../solutionlist.aspx?type=7">
                                    智慧城市整体解决方案</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=8">
                                    城市交通整体解决方案</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=9">
                                    智慧停车整体解决方案</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=10">
                                    城际交通整体解决方案</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">经典案例</dt>
                <dd id="case" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../caselist.aspx?type=9">
                                    智慧城市</a> </li>
                            
                                <li><a href="../caselist.aspx?type=1">
                                    高速公路</a> </li>
                            
                                <li><a href="../caselist.aspx?type=6">
                                    铁路交通</a> </li>
                            
                                <li><a href="../caselist.aspx?type=4">
                                    城市交通</a> </li>
                            
                                <li><a href="../caselist.aspx?type=7">
                                    公共交通</a> </li>
                            
                                <li><a href="../caselist.aspx?type=8">
                                    停车服务</a> </li>
                            
                                <li><a href="../caselist.aspx?type=10">
                                    国际项目</a> </li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">加入我们</dt>
                <dd id="contact" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="../resource.aspx">人力资源</a></li>
                        <li><a href="../recruitment.aspx">招聘信息</a></li>
                    </ul>
                </dd>
            </div>
        </dl>
        <!--二级菜单代码开始-->
        <script type="text/javascript">
            $(".nosub").css({ display: "none" });
            $("#sub1").show();
            $("#sub2").show();
            $(".submenu > dl > div > dt:first").addClass("nyNav1");
            $(".submenu > dl > div > dt").bind("click", function () {
                if ($(this).hasClass("nyNav1")) {
                    $(this).parent().find("dd").hide("slow");
                    $(".submenu > dl > div > dd").removeClass("nosub");
                    $(this).removeClass("nyNav1");
                } else {
                    $(".submenu > dl > div > dd").hide("fast");
                    $(this).parent().find("dd").show("slow");
                    $(".submenu > dl > div > dd").addClass("nosub");
                    $(".submenu > dl > div > dt").removeClass("nyNav1");
                    $(this).addClass("nyNav1");
                }
            })
            $(".submenu > dl > div > dd").bind("click", function () {
                $(".submenu > dl > div > dd").addClass("nosub");
                $(this).removeClass("nosub");
                $(this).addClass("has");
                $(this).children().find("ul").show("slow");
            })
            $(".submenu > dl > div > dd > ul > li").bind("click", function () {
                $(".submenu > dl > div > dd > ul > li").removeClass("this");
                $(this).addClass("this");
            })
        </script>
        <!--二级菜单代码结束-->
    </div>
</div>

            <div class="nyMainRight">
                <h1 class="nyMainRightH1">
                    <span>
                        <img alt="" src="images/nyIco.jpg" />
                        首页 &gt; 人力资源 &gt;
                        人力资源</span>人力资源</h1>
                <div class="nyMainNewsC">
                    <div class="n_cont">
                        <span id="ContentPlaceHolder1_lblContent"><p><span style="font-size:20px">　　企业人才观</span></p>

<p>　 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:18px">　&mdash;&mdash; 企业与您共发展</span></p>

<p>&nbsp;</p>

<p><span style="font-size:18px">　　 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&mdash;&mdash; 待遇留人 事业留人 文化留人 感情留人</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">　　1)人力成本策略</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">　　&middot; 通过有竞争力的薪酬待遇吸引、保留和激励骨干人才</span></p>

<p><span style="font-size:14px">　　&middot; 针对不同类型的员工，综合运用长、中、短期相结合的、差异化的激励手段</span></p>

<p><span style="font-size:14px">　　&middot; 持续提升人力资源效率</span></p>

<p><span style="font-size:14px">　　&middot; 保持有竞争的人力成本优势</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">　　2)雇主品牌与人才竞争策略&nbsp;</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">　　&middot; 营造以人为本、平等竞争的氛围</span></p>

<p><span style="font-size:14px">　　&middot; 强调团队精神与平等沟通</span></p>

<p><span style="font-size:14px">　　&middot; 搭建科学合理的人才梯队和职业发展通道</span></p>

<p><span style="font-size:14px">　　&middot; 让员工实现个人价值、分享企业的成功</span></p>

<p><span style="font-size:14px">　　&middot; 通过稳健、成熟的雇主品牌保持企业的人才竞争优势</span></p>

<p><span style="font-size:14px">　　&middot; 机会牵引人才，人才牵引技术，技术牵引产品，产品牵引更多更好的机会</span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>　<span style="font-size:20px">　职业发展规划</span></p>

<p>　　 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:18px">&mdash;&mdash; 让有能力的人做实，让做实的人能力不断提升</span></p>

<p>&nbsp;</p>

<p>　　<span style="font-size:14px">中兴智能交通根据不同员工各自的职系、职位族特征，为员工制定适合自身发展的 &ldquo;职业发展通道&rdquo;</span></p>

<p style="text-align:center"><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif"><img alt="" src="/ckfinder/userfiles/images/230.jpg" /></span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">　　&middot; 员工可清晰了解自己的职业发展方向</span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">　　&middot; 员工可清晰把握自己所处的职业发展阶段</span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">　　&middot; 员工可清晰明确自己所需提升的知识、技能</span><span style="font-family:verdana,geneva,sans-serif">流程</span></span></p>

<p>&nbsp;</p>

<p><span style="font-family:verdana,geneva,sans-serif; font-size:20px; line-height:1.6">&nbsp; &nbsp; 中兴智能交通欢迎各位有志之士加入我们，共同发展!</span></p>

<p>&nbsp;</p>

<p><span style="font-size:20px"><span style="font-family:verdana,geneva,sans-serif">&nbsp; &nbsp; 应聘流程为：</span></span></p>

<p style="text-align:center"><img alt="" src="/ckfinder/userfiles/images/231.jpg" /></p>
</span>
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
