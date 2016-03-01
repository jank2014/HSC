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
     
    <style type="text/css" media="screen">
body{
        background:  #f3f3f4;
}.profile-content{
    border-top: none!important;
}.ibox
{
    clear: both;

    margin-top: 0;
    margin-bottom: 25px;
    padding: 0;
}.ibox.collapsed .ibox-content
{
    display: none;
}.ibox.collapsed .fa.fa-chevron-up:before
{
    content: '\f078';
}.ibox.collapsed .fa.fa-chevron-down:before
{
    content: '\f077';
}.ibox:after,
.ibox:before
{
    display: table;
}.ibox-title
{
    min-height: 48px;
    margin-bottom: 0;
    padding: 14px 15px 7px;

    color: inherit;
    border-width: 4px 0 0;
    border-style: solid solid none;
    border-color: #e7eaec;
    -webkit-border-image: none;
         -o-border-image: none;
            border-image: none;
    background-color: #fff;

    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
}.ibox-content
{
    padding: 15px 20px 20px;

    color: inherit;
    border-width: 1px 0;
    border-style: solid solid none;
    border-color: #e7eaec;
    -webkit-border-image: none;
         -o-border-image: none;
            border-image: none;
    background-color: #fff;
}.no-padding
{
    padding: 0!important;
}.ibox-content.text-box
{
    padding-top: 15px;
    padding-bottom: 0;
}.border-left-right
{
    border-top: none;
    border-right: 1px solid #e7eaec;
    border-bottom: none;
    border-left: 1px solid #e7eaec;
}.m-t-lg
{
    margin-top: 30px;
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
                <!-- <li><a href="<?php echo U('Course/index');?>">课程</a></li> -->
                <!-- <li><a href="<?php echo U('Recomend/index');?>">推荐</a></li> -->
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
        <div class="row animated fadeInRight">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="/HSC/Public/Common/hplus/img/profile_big.jpg">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>Beaut-zihan</strong></h4>
                            <p><i class="fa fa-map-marker"></i> 上海市闵行区绿地科技岛广场A座2606室</p>
                            <h5>
                                    关于我
                                </h5>
                            <p>
                                会点前端技术，div+css啊，jQuery之类的，不是很精；热爱生活，热爱互联网，热爱新技术；有一个小的团队，在不断的寻求新的突破。
                            </p>
                            <div class="row m-t-lg">
                                <div class="col-sm-4">
                                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>169</strong> 文章</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>28</strong> 关注</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    <h5><strong>240</strong> 关注者</h5>
                                </div>
                            </div>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> 发送消息</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> 赞助</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="/HSC/Public/Common/hplus/img/profile_big.jpg">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>Beaut-zihan</strong></h4>
                            <p><i class="fa fa-map-marker"></i> 上海市闵行区绿地科技岛广场A座2606室</p>
                            <h5>
                                    关于我
                                </h5>
                            <p>
                                会点前端技术，div+css啊，jQuery之类的，不是很精；热爱生活，热爱互联网，热爱新技术；有一个小的团队，在不断的寻求新的突破。
                            </p>
                            <div class="row m-t-lg">
                                <div class="col-sm-4">
                                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>169</strong> 文章</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>28</strong> 关注</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    <h5><strong>240</strong> 关注者</h5>
                                </div>
                            </div>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> 发送消息</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> 赞助</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="/HSC/Public/Common/hplus/img/profile_big.jpg">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>Beaut-zihan</strong></h4>
                            <p><i class="fa fa-map-marker"></i> 上海市闵行区绿地科技岛广场A座2606室</p>
                            <h5>
                                    关于我
                                </h5>
                            <p>
                                会点前端技术，div+css啊，jQuery之类的，不是很精；热爱生活，热爱互联网，热爱新技术；有一个小的团队，在不断的寻求新的突破。
                            </p>
                            <div class="row m-t-lg">
                                <div class="col-sm-4">
                                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>169</strong> 文章</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>28</strong> 关注</h5>
                                </div>
                                <div class="col-sm-4">
                                    <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    <h5><strong>240</strong> 关注者</h5>
                                </div>
                            </div>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> 发送消息</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> 赞助</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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