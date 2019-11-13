<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"../template/default/index\index.html";i:1573362076;s:57:"D:\phpstudy_pro\WWW\t\template\default\common\header.html";i:1573362076;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow, archive">
    <meta name="author" content="<?php echo get_sys('site_author'); ?>">
    <title><?php echo $title; ?> - <?php echo get_sys('site_title'); ?></title>
    <meta name="description" content="<?php echo get_sys('site_description'); ?>">
    <meta name="keywords" content="<?php echo get_sys('site_keywords'); ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="/static/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/home/css/creative.css" rel="stylesheet">
    <link href="/static/home/css/main.css" rel="stylesheet">
    <link href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet">
    <meta property="og:title" content="<?php echo get_sys('site_name'); ?>">
    <meta property="og:description" content="<?php echo get_sys('site_desc'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_sys('site_url'); ?>">
    <meta property="og:image" content="<?php echo get_sys('site_logo'); ?>">
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo get_sys('site_url'); ?>/#page-top"><?php echo get_sys('site_name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo get_sys('site_url'); ?>/#about">开始收款</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo get_sys('site_url'); ?>/#price">价格</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo get_sys('site_url'); ?>/#contact">联系</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_sys('site_url'); ?>/page.html#install">下载</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_sys('site_url'); ?>/page.html">文档</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $uid==null?url('/login') : url('/user'); ?>"><?php echo $uid==null?"注册/登陆" : "商户中心"; ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>独立开发者个人即时到账收款平台</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-9 mx-auto">
                <p class="text-faded mb-5">无需公司资质免签约，即时到账，个人微信支付宝账号即可收款，即开即用，高并发，超稳定不漏单</p>
                <a class="btn btn-primary btn-xl" href="<?php echo url('/user'); ?>">立即开户</a>
                <span class="sp">或</span>
                <a class="btn btn-light btn-xl" href="<?php echo url('/help'); ?>">查看文档</a>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">简单几步，即可开始收款</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">「<?php echo get_sys('site_name'); ?>」 的原理是监控手机微信、支付宝的二维码扫码支付到账通知并回调开发者应用，通知开发者应用订单支付结果。</p>
                <a class="btn btn-light btn-xl" href="<?php echo get_sys('site_url'); ?>/page.html#install">第一步: 安装App</a>
                <a class="btn btn-light btn-xl" href="<?php echo get_sys('site_url'); ?>/page.html#conf">第二步: 配置收款码</a>
                <a class="btn btn-light btn-xl" href="<?php echo get_sys('site_url'); ?>/page.html#api">第三步: API接入</a>
            </div>
        </div>
    </div>
</section>

<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">价格</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card pricing">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">免费版</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">￥0 <small class="text-mute">/月</small></h4>
                        <p class="card-text">每天限10笔订单<br><br></p>
                        <a href="<?php echo url('/user'); ?>" class="btn btn-block btn-info" style="color: black;letter-spacing: 2px;background-color: rgba(0,0,0,.03);">立即开户</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card pricing">
                    <div class="card-header" style="background-color: #007bff;color:white;">
                        <h4 class="my-0 font-weight-normal">标准版</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">￥<?php echo get_sys('user_level2_price'); ?> <small class="text-mute">/月</small></h4>
                        <p class="card-text"><?php echo get_sys('user_level2_mout'); ?>% 手续费<br>支持多账号收款<br>客服协助对接<br>一对一客服<br>7x24 小时技术支持</p>
                        <a href="<?php echo url('/user'); ?>" class="btn btn-block btn-primary">立即开户</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card pricing" style="overflow: hidden;">
                    <div class="card-header" style="background-color: #28a745;color:white;">
                        <div class="hot">最多人选择</div>
                        <h4 class="my-0 font-weight-normal">高级版</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">￥<?php echo get_sys('user_level3_price'); ?> <small class="text-mute">/月</small></h4>
                        <p class="card-text"><?php echo get_sys('user_level3_mout'); ?>% 手续费<br>支持多账号收款<br>技术协助对接<br>一对一客服<br>7x24 小时技术支持</p>
                        <a href="<?php echo url('/user'); ?>" class="btn btn-block btn-success">立即开户</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card pricing">
                    <div class="card-header" style="background-color: #17a2b8;color:white;">
                        <h4 class="my-0 font-weight-normal">基础版</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">￥<?php echo get_sys('user_level1_price'); ?> <small class="text-mute">/月</small></h4>
                        <p class="card-text"><?php echo get_sys('user_level1_mout'); ?>% 手续费<br>在线客服<br>7x24 小时技术支持</p>
                        <a href="<?php echo url('/user'); ?>" class="btn btn-block btn-info" style="letter-spacing: 2px;">立即开户</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="bg-primary" id="multi">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">支持多微信、多支付宝、多手机，高并发收款<br>支持店员通知，支持微信买单二维码</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">「<?php echo get_sys('site_name'); ?>」独家首创支持多微信、多支付宝、多手机同时收款，轻松应付产品高并发烦恼。</p>
            </div>
        </div>
    </div>
</section>

<!--section id="admin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">支持一带多，主账号子账号管理功能</h2>
                <hr class="my-4">
                <p class="mb-4" style="color: gray;">可以在主账号查看和操作子账号订单，子账户的手续费优先在主账号扣除。用于统一管理多个 bufpay 账号。</p>
            </div>
        </div>
    </div>
</section-->

<section class="bg-dark text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <blockquote>
                    <p>感谢「<?php echo get_sys('site_name'); ?>」帮我节省了大量时间精力，之前用户付费后都需要我手动充值到用户账户，现在通过「<?php echo get_sys('site_name'); ?>」收款可以完全自动化了。</p>
                    <small>独立开发者 <cite title="Source Title">李志宏</cite></small>
                </blockquote>
            </div>
            <div class="col-lg-4 col-md-12">
                <blockquote>
                    <p>我的博客和 App 需要收款功能，签约支付宝微信支付需要注册公司，维护一个公司所花费的时间、精力成本太高了。用过市面上各种同类型支付接口，最后还是换到「<?php echo get_sys('site_name'); ?>」只有 <?php echo get_sys('site_engname'); ?> 稳定靠谱不漏单。</p>
                    <small>知名 Android 游戏开发者 <cite title="Source Title">Shary</cite></small>
                </blockquote>
            </div>
            <div class="col-lg-4 col-md-12">
                <blockquote>
                    <p>早前我的粉丝都是用微信支付宝扫码转账开通会员，需要我一个个确认，粉丝们经常抱怨开通不及时。在 <?php echo get_sys('site_engname'); ?> 工作人员耐心的帮助下（真的超级耐心 #^.^#），接入「<?php echo get_sys('site_name'); ?>」现在终于可以专心画画啦。</p>
                    <small>Pixiv 网红插画师 <cite title="Source Title">Yuki</cite></small>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">联系 / 反馈</h2>
                <hr class="my-4">
                <p style="color: gray;">我们知道作为独立开发者产品需要收款是多么麻烦，注册公司维护成本太高，市面上各种收款工具要么手续费太高，要么到账很慢，体验很不好。于是我们开发了「<?php echo get_sys('site_name'); ?>」用来解决这个问题，希望可以帮助到每个默默前行的独立开发者。</p>
                <div class="row">
                    <div class="col-lg-4 text-center text-success">
                        <p class="wechat_qr">客服微信: <?php echo get_sys('site_wechat'); ?></p>
                    </div>
                    <div class="col-lg-4 text-center text-info">
                        <p>客服QQ: <?php echo get_sys('site_qq'); ?></p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <p>客服邮箱: <?php echo get_sys('site_mail'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <p style="line-height: 50px;color:gray;text-align:center;font-size:14px;">
        Copyright © <?php echo date('Y'); ?> <?php echo get_sys('site_url'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href="http://www.beian.miit.gov.cn/" rel="nofollow" target="_blank" style="color:gray;"><?php echo get_sys('site_icp'); ?></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;友情链接:&nbsp;
        <a href="https://www.ichuchuang.cn/" target="_blank" style="color:gray;">初创网络</a>

    </p>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/static/home/js/jquery.min.js"></script>
<script src="/static/home/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".js-scroll-trigger").click(function (){
            var id = $(this).attr("href");
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, 500);
        });

        $('.js-scroll-trigger').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

        var navbarCollapse = function() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        };
        navbarCollapse();
        $(window).scroll(navbarCollapse);
    });

</script>
</body>
</html>