<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

<center>
	<font size="5">
我们接受捐款。如果您愿意为我们捐款,可以从以下两种方式中任选一种。<br>
捐款时请备注"ISP项目捐款”，并在友链页面感谢您的捐款。<br>
如果没有特别说明（如匿名）,我们将在友链中添加您的信息。
</font>
<br>
<img src="/Wechat.png" height="350" width="300">
<img src="/zhifubao.jpg" height="350" width="300">
</center>

    </body>
    
</html>
