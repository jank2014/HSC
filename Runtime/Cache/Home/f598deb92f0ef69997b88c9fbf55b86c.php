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
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <ul class="notes">
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>HTML5 文档类型</h4>
                            <p>Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>移动设备优先</h4>
                            <p>在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 Bootstrap 3 中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增……</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>排版与链接</h4>
                            <p>Bootstrap 排版、链接样式设置了基本的全局样式。分别是： 为 body 元素设置 background-color: #fff; 使用 @font-family-base、@font-size-base 和……。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>Normalize.css</h4>
                            <p>为了增强跨浏览器表现的一致性，我们使用了 Normalize.css，这是由 Nicolas Gallagher 和 Jonathan Neal 维护的一个CSS 重置样式库。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>布局容器</h4>
                            <p>Bootstrap 需要为页面内容和栅格系统包裹一个 .container 容器。我们提供了两个作此用处的类。注意，由于 padding 等属性的原因，这两种 容器类不能互相嵌套。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>栅格系统</h4>
                            <p>Bootstrap 提供了一套响应式、移动设备优先的流式栅格系统，随着屏幕或视口（viewport）尺寸的增加，系统会自动分为最多12列。它包含了易于使用的预定义类，还有强大的mixin 用于生成更具语义的布局。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                </ul>
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