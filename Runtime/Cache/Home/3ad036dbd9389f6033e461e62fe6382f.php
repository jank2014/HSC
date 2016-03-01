<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 标签墙</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/HSC/Public/Common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/HSC/Public/Common/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="/HSC/Public/Common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="/HSC/Public/Home/css/home.css" rel="stylesheet">
     
<link rel="stylesheet" type="text/css" href="/HSC/Public/Common/hplus/css/plugins/plyr/plyr.css">
    <style type="text/css" media="screen">
        body{
        background:  #f3f3f4;
        }
    </style>

</head>

<body class="gray-bg">
<!-- 导航开始 -->
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="sr-only">响应式导航切换</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">HSC</a>
        </div>
        <div class="navbar-collapse collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Course/index');?>">课程</a></li>
                <li><a href="<?php echo U('Recomend/index');?>">推荐</a></li>
                <!-- <li><a href="<?php echo U('Share/index');?>">分享</a></li> -->
                <li><a href="<?php echo U('Activity/index');?>">活动</a></li>
                <li><a href="<?php echo U('Query/index');?>">查询</a></li>
                <li><a href="<?php echo U('Order/index');?>">预约</a></li>
                <li><a href="<?php echo U('Notice/index');?>">公告</a></li>
            </ul>
            <div class="navbar-right mylogin">
                <button type="btn" class="btn btn-success">登陆</button>
                <button type="btn" class="btn btn-info">注册</button>
            </div>
        </div>
    </div>
</nav>
    
<div class="container">
    <div class="col-sm-8">
        <div class="player">
            <video poster="https://plyr.io/poster.jpg" controls crossorigin>
                <!-- Video files -->
                <source src="/HSC/Public/Home/video/movie.mp4" type="video/mp4">
                <source src="https://cdn.selz.com/plyr/1.0/movie.webm" type="video/webm">

                <!-- Text track file -->
                <track kind="captions" label="English" srclang="en" src="https://cdn.selz.com/plyr/1.0/example_captions_en.vtt" default>

                    <!-- Fallback for browsers that don't support the <video> element -->
                    <a href="/HSC/Public/Home/video/movie.mp4">Download</a>
            </video>
        </div>
    </div>
</div>






<div class="bottom">
    <div class="container">
        <div class="bottom-list">
            <a href="#">ANNI文章</a>
            <a href="#">ANNI散文</a>
            <a href="#">ANNI诗歌</a>
            <a href="#">ANNI情感</a>
            <a href="#">ANNI励志</a>
            <a href="#">ANNI回忆</a>
            <a href="#">ANNI淡忘</a>
            <a href="#">ANNI勇敢</a>
            <a href="#">ANNI热情</a>
            <a href="#">ANNI文章</a>
            <a href="#">ANNI文章</a>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p></p>
                <p>Copyright © 2015 <a href="#">www.jankz.com</a>, All Rights Reserved. GMT+8, 2015-06-29 23:42:11</p>
            </div>
        </div>
    </div>
</div>
    <script src="/HSC/Public/Common/jquery/jquery-2.1.4.min.js"></script>
    <script src="/HSC/Public/Common/bootstrap/js/bootstrap.min.js"></script>
     





</body>

</html>