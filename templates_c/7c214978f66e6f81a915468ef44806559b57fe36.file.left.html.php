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
        ���ٵ���</h1>
    <div class="nyMainLeftmenu submenu">
        <dl class="flNavDl1">
		<div>
                <dt class="flNavDt1">��Ʒ����</dt>
                <dd id="pro" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="product.php?type=1">
                                    Ӳ����Ʒ</a> </li>
                            
                                <li><a href="product.php?type=2">
                                    �����Ʒ</a> </li>
                            
                                <li><a href="product.php?type=3">
                                    ��Ʒ���</a> </li>
                            
                    </ul>
                </dd>
            </div>
			 <div>
                <dt class="flNavDt1">�������</dt>
                <dd id="solutions" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="solution.php?type=1">
                                    �ǻ۽�ͨ</a></li>
                            
                                <li><a href="solution.php?type=2">
                                    �ǻ�ͣ��</a></li>
                            
                                <li><a href="solution.php?type=3">
                                    �ǻ۹���</a></li>
                            
                    </ul>
                </dd>
            </div>
			<div>
                <dt class="flNavDt1">���䰸��</dt>
                <dd id="case" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                               <!-- <li><a href="project.php?type=1">
                                    �ǻ۳���</a> </li>-->
								<li><a href="project.php?type=2">
                                    ���н�ͨ</a> </li>
                            <li><a href="project.php?type=3">
                                    ������ͨ</a> </li>
							 <li><a href="project.php?type=4">
                                    ͣ������</a> </li>
                            <li><a href="project.php?type=5">
                                    ������Ŀ</a> </li>
                            
                    </ul>
                </dd>
            </div>
			<!-- <div>
                <dt class="flNavDt1">��������</dt>
                <dd id="news" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="newslist.php?type=1">
                                    ��˾Ҫ��</a></li>
                            
                                <li><a href="newslist.php?type=2">
                                    ��ҵ��̬</a></li>
                            
                                <li><a href="newslist.php?type=3">
                                    ����ǰ��</a></li>
                            
                    </ul>
                </dd>
            </div>-->
			<div>
                <dt class="flNavDt1">��������</dt>
                <dd id="contact" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="resouce.php">������Դ</a></li>
                        <li><a href="zhaopin.php">��Ƹ��Ϣ</a></li>
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">��������</dt>
                <dd id="about" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="aboutus.php?type=gsjj">
                                    ��˾���</a></li>
                            
                                <li><a href="aboutus.php?type=qywh">
                                    ��ҵ�Ļ�</a></li>
                            
                                <li><a href="aboutus.php?type=ryzs">
                                    ����֤��</a></li>
                            
                                <li><a href="aboutus.php?type=zzrz">
                                    ������֤</a></li>
                            
                                
                            
                    </ul>
                </dd>
            </div>
           
            <div>
                <dt class="flNavDt1">����֧��</dt>
                <dd id="service" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="downlist.php">��������</a></li>
                        <li><a href="productwh.php">��Ʒ�ĵ�</a></li>
						<li><a href="aboutus.php?type=lxwm">
                                    ��ϵ����</a></li>
                    </ul>
                </dd>
            </div>
           
            <div>
                <dt class="flNavDt1">ҵ�����</dt>
                <dd id="cooperation" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="oem.php">OEM</a></li>
                        <li><a href="shouquan.php">��Ȩ����</a></li>
						<li><a href="productpt.php">��Ʒ����</a></li>
                    </ul>
                </dd>
            </div>
            
        </dl>
        <!--�����˵����뿪ʼ-->
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
        <!--�����˵��������-->
    </div>
</div><?php }} ?>
