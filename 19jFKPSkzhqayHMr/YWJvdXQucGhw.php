<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--addby Oblivion-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
/* reset */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; }
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
body { line-height: 1; }
ol, ul { list-style: none; }
blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
table { border-collapse: collapse; border-spacing: 0; }
body, input, textarea, select, button { font: 12px/1.6em '\5FAE\8F6F\96C5\9ED1', arial, '\5b8b\4f53'; color: #232323; outline: 0; }
a { color: #232323; }
.cb10 { height: 20px; }
/* m-tb */
.m-tb { width: 100%; }
.m-tb th { background-color: #CCCCCC; border: 1px solid #AAA; padding: 8px; }
.m-tb td { background-color: #EFEFEF; border: 1px solid #AAA; padding: 8px; }
.m-tb2 { width: 100%; }
.m-tb2 th { background-color: #dedede; border: 1px solid #666; padding: 8px; }
.m-tb2 td { background-color: #ffffff; border: 1px solid #666; padding: 8px; }
.m-tb3 { width: 45%; }
.m-tb3 th { background-color: #c3dde0; border: 1px solid #a9c6c9; padding: 8px; }
.m-tb3 td { background-color: #d4e3e5; border: 1px solid #a9c6c9; padding: 8px; }
.qwe { width: 60%; margin:0 auto;}
</style>
<!--addby Oblivion-->
    <title>ISP项目</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="Content-Language" content="zh" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="vfm-admin/images/favicon.ico">
    <meta name="description" content="file manager">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vfm-admin/vfm-style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vfm-admin/skins/cs-blue.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script>
    window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
    ga('create', 'UA-116309064-4', { 'siteSpeedSampleRate': 100, 'alwaysSendReferrer': true });
    ga('set', 'forceSSL', true);
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>

<!-- Reference: https://developers.google.com/analytics/devguides/collection/analyticsjs/field-reference -->
<script>
    window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
    ga('create', 'UA-116309064-4', { 'siteSpeedSampleRate': 100, 'alwaysSendReferrer': true });
    ga('set', 'forceSSL', true);
    ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>

<script>
    window.addEventListener('error', function (err) {
        const line_and_column = err.colno ? ' line:' + err.lineno + ', column:' + err.colno : ' line:' + err.lineno;
        ga('send',
            {
                hitType: 'event',
                eventCategory: 'JavaScript Error',
                eventAction: err.message,
                eventLabel: `${navigator.userAgent} -> ${err.filename} @ ${line_and_column}`
            });
    });
</script>
    <!--[if lt IE 9]>
    <script src="vfm-admin/js/html5.js" type="text/javascript"></script>
    <script src="vfm-admin/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    </head>
    <body id="uparea" class="vfm-body inlinethumbs">
        <div class="overdrag"></div>
            <!--live2d
<head><link href='http://47.103.204.220/Pio/static/pio.css' rel='stylesheet' type='text/css'/>
<script src='http://47.103.204.220/Pio/static/l2d.js'></script>
<script src='http://47.103.204.220/Pio/static/pio.js'></script>
<div class="pio-container {left}">
    <div class="pio-action"></div>
    <canvas id="pio" width="300" height="300"></canvas>
</div>
<script>
var pio = new Paul_Pio({
    "mode": "fixed",
    "hidden": true,
    "content": {
        "welcome": ["欢迎来到ISP！", "今天天气不错，一起来玩吧！"],
        "custom": [
            {"selector": ".comment-form", "text": "欢迎参与本文评论，别发小广告噢~"},
            {"selector": ".home-social a:last-child", "text": "在这里可以了解博主的日常噢~"},
            {"selector": ".post-item a", "type": "read"},
            {"selector": ".post-content a, .page-content a", "type": "link"}
        ]
    },
    "night": "single.night()",
    "model": ["http://47.103.204.220/Pio/models/snow_miku/model.json"]
});
</script>
</head>
-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-vfm-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                        <a class="navbar-brand" href="http://47.103.204.220/">
                ISP项目            </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse-vfm-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="http://47.103.204.220">
					<i class="glyphicon glyphicon-home"></i>
                        <span class="hidden-sm">
                        	主页
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/friends.php">
					<i class="glyphicon glyphicon-link"></i>
                        <span class="hidden-sm">
                        	友链
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/donate.php">
					<i class="glyphicon glyphicon-credit-card"></i>
                        <span class="hidden-sm">
                        	捐款
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/contact.php">
					<i class="glyphicon glyphicon-flash"></i>
                        <span class="hidden-sm">
                        	联系我们
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/about.php">
					<i class="glyphicon glyphicon-heart-empty"></i>
                        <span class="hidden-sm">
                        	关于我们
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/picture.php">
					<i class="glyphicon glyphicon-picture"></i>
                        <span class="hidden-sm">
                        	随机图片
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://47.103.204.220/tools.php">
					<i class="glyphicon glyphicon-cog"></i>
                        <span class="hidden-sm">
                        	工具
                        </span>
                    </a>
                </li>
                    </ul>
        </div>
    </div>
</nav>

         <footer class="footer">
    <div class="container">
        <span class="pull-left"><a href="./">
            ISP项目 </a> 
            &copy; 2020        </span>
    </div>
</footer> 
<script type="text/javascript" src="vfm-admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vfm-admin/js/app.min.js"></script>
<script type="text/javascript">
    // confirm
    bootbox.addLocale('vfm', 
    {
        OK : '完成',
        CANCEL : '取消',
        CONFIRM : '确认'
    });
    bootbox.setLocale('vfm');
</script>

            

      <div class="qwe">      	
            
            
<h2><b>关于我们</b></h2><br>
<h3><b>序言</b></h3><br>
在建立这个平台之前，我们有很多想法，相信您也会有许多疑问。<br>
这个页面的建立，就是为了回答您的问题。<br>
<br>
当然，我们知道，这个页面并不能囊括所有问题。<br>
如果您有其它疑问，欢迎访问『<a href='contact.php'>联系我们（点击进入）</a>』来获得我们的联系方式，并联系我们。<br>
我们会尽快答复您的问题。但请注意，在一些情况下，我们无法及时回复。<br>
需要注意的是，在用户协议正式出台前，此页面有用户协议的成分。如果提及用户权利或用户义务，则均与您有关。<br>
本页面不定期更新，且不记录历史版本。这个页面的最后一次更新是在北京时间2020年2月26日23时44分，更新者为Algha_Porthos。<br>
我们感谢您的来访，同时，我们期待您的提问！<br>
<br>
ISP 项目组<br>
<br>
<h3><b>关于 ISP</b></h3><br>
ISP全称<b>ISAB记录组下属ISP项目</b>，是ISAB的下属组织。为了行文方便，本文中的“项目”，“ISP项目”等默认为ISAB记录组下属ISP项目。其中，“ISP”是影像共享平台『Image Sharing Platform』的英文缩写。<br>
<h4><b>目的</b></h4>
建立平台以共享已经公开却难以找到获取途径的照片，并且给希望公开照片的人一个平台。<br>
<h4><b>定位</b></h4>
本平台将会是一个基于互联网的影像共享平台，将实现用户不同权限、实时可访问、下载、持权上传影像（在保证安全的情况下，可能拓展到所有文件）。<br>
<h4><b>预期</b></h4>
目前计划在自 2019 年起的<b>至少 7 年</b>内保持正常运营。<br>
<h3><b>项目组</b></h3><br>
<h4><b>简介</b></h4>
我们是来自杭州学军中学西溪校区 2019 级 12 班的电竞选手。<br>
<h4><b>成员</b></h4>
<table class="m-tb3">
<th><b>Name</b></th>
<th><b>Job</b></th>
</tr>
<tr>
<td>McFun</td>
<td>Co-founder,Leader of Project,Member of Technology Group</td>
</tr>
<tr>
<td>Algha_Porthos</td>
<td>Co-founder,Leader of Management Group</td>
</tr>
<tr>
<td>Oblivion</td>
<td>Co-founder,Leader of Technology Group</td>
</tr>
<tr>
<td>jljljl</td>
<td>Member of Technology Group</td>
</tr>
</table>
<h4><b>服务器</b></h4>
服务器目前使用阿里云学生机，配置如下：<br>
<code>
系统：Ubuntu 18.04<br>
流量：1000 GB<br>
CPU：1 核<br>
内存：2 GB<br>
系统盘：40 GB<br>
带宽：5 Mbps<br>
（突发性能服务器）<br>
</code>
<br>
<h4><b>源码</b></h4>
我们的网站源码基于开源的『极简网盘』源码，经过ISP开发组的修改，以适应并且提供 ISP 相关服务。<br>
当前，我们以云盘 / 图床为基础进行权限管理。<br>
<h4><b>影像版权</b></h4>
若无特殊说明，本项目的所有公开影像的版权属于 ISABPR。<br>
在经过版权方的授权后，我们为您转载压缩后的影像资源，但是版权方仍然保留所有权利，包括但不限于影像商用的权利、对更高画质影像保密的权利。<br>
<h4><b>关于 ISAB</b></h4>
ISAB 成立于 2017 年 12 月，有 ISABPR、ISABHT 等小组、部门。ISAB技术部领导设计的OmegaStay Renju Project曾在杭州绿城育华学校第三届国际文化节棋类活动中的“五子棋人机对战”活动获得19局对战11胜2平7负的不俗成绩。<br>

<br><h3><b>有偿服务</b></h3><br>
<h4><b>前言</b></h4>
作为一个非盈利组织，我们目前的成本均由团队承担，并且在可预见的未来，我们不会商业化。<br>
<br>
但是影像设备的购买、维护与服务器开销非常巨大。为了使该项目能够更好地服务大众并且健康发展，我们提供有偿服务。<br>
<br>
如果您需要更高画质的影像，则可以向我们提出申请。如果申请符合我们的要求，我们可以有偿提供少量的影像。<br>
<br>
<h4><b>要求</b></h4>
1.版权方为 ISABPR，或者版权方完全同意 ISP 赞助商计划的所有条款。<br>
2.我们需要核实您的身份。<br>
3.您没有被ISAB或ISP项目组要求停止服务。<br>
4.您想要有偿获得的影像必须符合以下条件的至少一项：<br>
定义：人物“可以辨认”应该有如下特征的至少一项：1）任意ISP 团队成员认识的；2）面部特征清晰的。<br>
Ⅰ. 在影像中，您是唯一可以辨认的人（例：您的特写）；<br>
Ⅱ. 影像中没有出现可以辨认的人（例：风景照）；<br>
Ⅲ. 您已经获得了影像中可以辨认的所有人的书面许可（例：合影）；<br>
注解 Ⅲ：我们有审核的权利，但无审核的义务。您应当自行保证该书面许可的合规性。若因您未取得许可或伪造许可而引起任何纠纷，ISP 不负责任。<br>
Ⅳ. 您作为影像中可以辨认的所有人的公认代表，向我们提出申请（例：班主任 / 班长申请班级合照）；<br>
Ⅴ. 在极其特殊的情况下，经由 ISP 或 / 和 ISAB 的特别许可。<br>
注解 Ⅴ：我们会慎用该条款，并承担与此相关的责任。请注意，这可能意味着该条款的适用条件相当苛刻。特别地，若该许可由 ISAB 授予，则 ISP 团队不负责任。<br>
5.您可以在未通知 ISP 的情况下对影像进行非盈利性使用，但需遵守以下规则：<br>
Ⅰ. 您的使用应当符合您当地的法律和 ISP 团队所在地的法律；<br>
Ⅱ. 为保护您的创作，您应当视情况添加水印。<br>
6.如果您需要通过影像盈利，应当获得ISP的另行许可。我们有权按比例在您的获利中获得适当数额的赞助，具体比例将另行协商确定。<br>
7.您理解并同意：<br>
Ⅰ. ISP 当前是非盈利性组织，影像付费服务仅为平衡开支；<br>
Ⅱ. 您的付费被视为赞助，因此我们无需为您提供发票；<br>
Ⅲ. 在使用我们的图片时产生的任何纠纷都与我们无关，请注意遵守法律法规和道德规范；<br>
Ⅳ. 该协议最终解释权归 ISP 所有。<br>
<br>
如有需要，请<a href='contact.php'>联系我们（点击进入）</a>，并通过和版权方的协商来确定计费标准。<br>

我们的收益会有 25% 的比例用于维持 ISP 运营，其余金额归影像版权方进行分配。<br>
<br><h3><b>捐款</b></h3><br>
我们接受捐款。<br>
如果您愿意为我们捐款，可以访问『<a href='donate.php'>捐款链接（点击进入）</a>』以获得相关信息。<br>
捐款时请备注“ISP 项目捐款”。<br>
如果没有特别说明（如要求匿名），我们将在友链中添加您的信息。<br>
当然，我们也欢迎您通过『赞助计划』来支持我们！<br>
<br>
<a href='donate.php'>捐款链接（点击进入）</a><br>
<a href='contact.php'>联系我们（点击进入）</a><br>
<br>
Best Wishes<br>
ISP 项目组<br>


</div>
</center>
</html>
