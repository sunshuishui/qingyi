<?php /* Smarty version Smarty-3.1.18, created on 2015-05-20 02:43:54
         compiled from ".\templates\left.html" */ ?>
<?php /*%%SmartyHeaderCode:18735554a15144789c9-82681098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c214978f66e6f81a915468ef44806559b57fe36' => 
    array (
      0 => '.\\templates\\left.html',
      1 => 1432029140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18735554a15144789c9-82681098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554a151448b168_64456653',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a151448b168_64456653')) {function content_554a151448b168_64456653($_smarty_tpl) {?><div class="nyMainLeft">
    <h1 class="nyMainLeftH1">
        快速导航</h1>
    <div class="nyMainLeftmenu submenu">
        <dl class="flNavDl1">
		<div>
                <dt class="flNavDt1">产品介绍</dt>
                <dd id="pro" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="product.php?type=1">
                                    硬件产品</a> </li>
                            
                                <li><a href="product.php?type=2">
                                    软件产品</a> </li>
                            
                                <li><a href="product.php?type=3">
                                    设计服务</a> </li>
                            
                    </ul>
                </dd>
            </div>
			 <div>
                <dt class="flNavDt1">解决方案</dt>
                <dd id="solutions" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="solution.php?type=1">
                                    智慧交通</a></li>
                            
                                <li><a href="solution.php?type=2">
                                    智慧停车</a></li>
                            
                                <li><a href="solution.php?type=3">
                                    智慧公交</a></li>
                            
                    </ul>
                </dd>
            </div>
			<div>
                <dt class="flNavDt1">经典案例</dt>
                <dd id="case" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                               <!-- <li><a href="project.php?type=1">
                                    智慧城市</a> </li>-->
								<li><a href="project.php?type=2">
                                    城市交通</a> </li>
                            <li><a href="project.php?type=3">
                                    公共交通</a> </li>
							 <li><a href="project.php?type=4">
                                    停车服务</a> </li>
                            <li><a href="project.php?type=5">
                                    国际项目</a> </li>
                            
                    </ul>
                </dd>
            </div>
			<!-- <div>
                <dt class="flNavDt1">新闻中心</dt>
                <dd id="news" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="newslist.php?type=1">
                                    公司要闻</a></li>
                            
                                <li><a href="newslist.php?type=2">
                                    行业动态</a></li>
                            
                                <li><a href="newslist.php?type=3">
                                    技术前沿</a></li>
                            
                    </ul>
                </dd>
            </div>-->
			<div>
                <dt class="flNavDt1">加入我们</dt>
                <dd id="contact" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="resouce.php">人力资源</a></li>
                        <li><a href="zhaopin.php">招聘信息</a></li>
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">关于我们</dt>
                <dd id="about" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="aboutus.php?type=gsjj">
                                    公司简介</a></li>
                            
                                <li><a href="aboutus.php?type=qywh">
                                    企业文化</a></li>
                            
                                <li><a href="aboutus.php?type=ryzs">
                                    荣誉证书</a></li>
                            
                                <li><a href="aboutus.php?type=zzrz">
                                    资质认证</a></li>
                            
                                
                            
                    </ul>
                </dd>
            </div>
           
            <div>
                <dt class="flNavDt1">服务支持</dt>
                <dd id="service" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="downlist.php">工具下载</a></li>
                        <li><a href="productwh.php">产品文档</a></li>
						<li><a href="aboutus.php?type=lxwm">
                                    联系我们</a></li>
                    </ul>
                </dd>
            </div>
           
            <div>
                <dt class="flNavDt1">业务合作</dt>
                <dd id="cooperation" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="oem.php">OEM</a></li>
                        <li><a href="shouquan.php">授权代理</a></li>
						<li><a href="productpt.php">产品配套</a></li>
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
</div><?php }} ?>
