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
<title>�������ܽ�ͨ���޹�˾-������Դ</title>
<meta name="keywords" content="�������ܽ�ͨ���޹�˾" />
<meta name="description" content="�������ܽ�ͨ���޹�˾" />
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
        ���ٵ���</h1>
    <div class="nyMainLeftmenu submenu">
        <dl class="flNavDl1">
            <div>
                <dt class="flNavDt1">��������</dt>
                <dd id="about" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../about.aspx?type=5">
                                    ��˾���</a></li>
                            
                                <li><a href="../about.aspx?type=18">
                                    ��˾�ظ�</a></li>
                            
                                <li><a href="../about.aspx?type=19">
                                    ��ҵ�Ļ�</a></li>
                            
                                <li><a href="../about.aspx?type=30">
                                    ����֤��</a></li>
                            
                                <li><a href="../about.aspx?type=20">
                                    ������֤</a></li>
                            
                                <li><a href="../about.aspx?type=8">
                                    ��ϵ����</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">��������</dt>
                <dd id="news" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../newslist.aspx?type=4">
                                    ��˾Ҫ��</a></li>
                            
                                <li><a href="../newslist.aspx?type=5">
                                    ��ҵ��̬</a></li>
                            
                                <li><a href="../newslist.aspx?type=6">
                                    ����ǰ��</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">��Ʒ����</dt>
                <dd id="pro" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../productslist.aspx?type=13">
                                    ���н�ͨ</a> </li>
                            
                                <li><a href="../productslist.aspx?type=14">
                                    ������ͨ</a> </li>
                            
                                <li><a href="../productslist.aspx?type=25">
                                    �ǻ�ͣ��</a> </li>
                            
                                <li><a href="../productslist.aspx?type=15">
                                    �Ǽʽ�ͨ</a> </li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">�������</dt>
                <dd id="solutions" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../solutionlist.aspx?type=7">
                                    �ǻ۳�������������</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=8">
                                    ���н�ͨ����������</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=9">
                                    �ǻ�ͣ������������</a></li>
                            
                                <li><a href="../solutionlist.aspx?type=10">
                                    �Ǽʽ�ͨ����������</a></li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">���䰸��</dt>
                <dd id="case" class="flNavDd1">
                    <ul class="flNavUl1">
                        
                                <li><a href="../caselist.aspx?type=9">
                                    �ǻ۳���</a> </li>
                            
                                <li><a href="../caselist.aspx?type=1">
                                    ���ٹ�·</a> </li>
                            
                                <li><a href="../caselist.aspx?type=6">
                                    ��·��ͨ</a> </li>
                            
                                <li><a href="../caselist.aspx?type=4">
                                    ���н�ͨ</a> </li>
                            
                                <li><a href="../caselist.aspx?type=7">
                                    ������ͨ</a> </li>
                            
                                <li><a href="../caselist.aspx?type=8">
                                    ͣ������</a> </li>
                            
                                <li><a href="../caselist.aspx?type=10">
                                    ������Ŀ</a> </li>
                            
                    </ul>
                </dd>
            </div>
            <div>
                <dt class="flNavDt1">��������</dt>
                <dd id="contact" class="flNavDd1">
                    <ul class="flNavUl1">
                        <li><a href="../resource.aspx">������Դ</a></li>
                        <li><a href="../recruitment.aspx">��Ƹ��Ϣ</a></li>
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
</div>

            <div class="nyMainRight">
                <h1 class="nyMainRightH1">
                    <span>
                        <img alt="" src="images/nyIco.jpg" />
                        ��ҳ &gt; ������Դ &gt;
                        ������Դ</span>������Դ</h1>
                <div class="nyMainNewsC">
                    <div class="n_cont">
                        <span id="ContentPlaceHolder1_lblContent"><p><span style="font-size:20px">������ҵ�˲Ź�</span></p>

<p>�� &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:18px">��&mdash;&mdash; ��ҵ��������չ</span></p>

<p>&nbsp;</p>

<p><span style="font-size:18px">���� &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&mdash;&mdash; �������� ��ҵ���� �Ļ����� ��������</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">����1)�����ɱ�����</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">����&middot; ͨ���о�������н����������������ͼ����Ǹ��˲�</span></p>

<p><span style="font-size:14px">����&middot; ��Բ�ͬ���͵�Ա�����ۺ����ó����С��������ϵġ����컯�ļ����ֶ�</span></p>

<p><span style="font-size:14px">����&middot; ��������������ԴЧ��</span></p>

<p><span style="font-size:14px">����&middot; �����о����������ɱ�����</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">����2)����Ʒ�����˲ž�������&nbsp;</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">����&middot; Ӫ������Ϊ����ƽ�Ⱦ����ķ�Χ</span></p>

<p><span style="font-size:14px">����&middot; ǿ���ŶӾ�����ƽ�ȹ�ͨ</span></p>

<p><span style="font-size:14px">����&middot; ���ѧ������˲��ݶӺ�ְҵ��չͨ��</span></p>

<p><span style="font-size:14px">����&middot; ��Ա��ʵ�ָ��˼�ֵ��������ҵ�ĳɹ�</span></p>

<p><span style="font-size:14px">����&middot; ͨ���Ƚ�������Ĺ���Ʒ�Ʊ�����ҵ���˲ž�������</span></p>

<p><span style="font-size:14px">����&middot; ����ǣ���˲ţ��˲�ǣ������������ǣ����Ʒ����Ʒǣ��������õĻ���</span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>��<span style="font-size:20px">��ְҵ��չ�滮</span></p>

<p>���� &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:18px">&mdash;&mdash; ��������������ʵ������ʵ����������������</span></p>

<p>&nbsp;</p>

<p>����<span style="font-size:14px">�������ܽ�ͨ���ݲ�ͬԱ�����Ե�ְϵ��ְλ��������ΪԱ���ƶ��ʺ�����չ�� &ldquo;ְҵ��չͨ��&rdquo;</span></p>

<p style="text-align:center"><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif"><img alt="" src="/ckfinder/userfiles/images/230.jpg" /></span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">����&middot; Ա���������˽��Լ���ְҵ��չ����</span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">����&middot; Ա�������������Լ�������ְҵ��չ�׶�</span></span></p>

<p><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">����&middot; Ա����������ȷ�Լ�����������֪ʶ������</span><span style="font-family:verdana,geneva,sans-serif">����</span></span></p>

<p>&nbsp;</p>

<p><span style="font-family:verdana,geneva,sans-serif; font-size:20px; line-height:1.6">&nbsp; &nbsp; �������ܽ�ͨ��ӭ��λ��־֮ʿ�������ǣ���ͬ��չ!</span></p>

<p>&nbsp;</p>

<p><span style="font-size:20px"><span style="font-family:verdana,geneva,sans-serif">&nbsp; &nbsp; ӦƸ����Ϊ��</span></span></p>

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
