<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 注册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

     <link href="/HSC/Public/Common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/HSC/Public/Common/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="/HSC/Public/Common/hplus/css/animate.min.css" rel="stylesheet">

    <link href="/HSC/Public/Common/hplus/css/plugins/iCheck/custom.css" rel="stylesheet">
    <style type="text/css" media="screen">
            body{
        background:  #f3f3f4;
    }
        .middle-box
{
    z-index: 100;

    max-width: 400px;
    margin: 0 auto;
    padding-top: 40px;
}.lockscreen.middle-box
{
    width: 200px;
    padding-top: 110px;
}.loginscreen.middle-box
{
    width: 300px;
}.loginColumns
{
    max-width: 800px;
    margin: 0 auto;
    padding: 100px 20px 20px;
}.passwordBox
{
    max-width: 460px;
    margin: 0 auto;
    padding: 100px 20px 20px;
}.logo-name
{
    font-size: 180px;
    font-weight: 800;

    margin-bottom: 0;

    letter-spacing: -10px;

    color: #e6e6e6;
}.middle-box h1
{
    font-size: 150px;
}.wrapper .middle-box
{
    margin-top: 140px;
}.lock-word
{
    position: absolute;
    z-index: 10;
    top: 110px;
    left: 50%;

    margin-left: -470px;
}.lock-word span
{
    font-size: 100px;
    font-weight: 600;

    display: inline-block;

    color: #e9e9e9;
}
h3, h4, h5 {
    font-weight: 600;
    margin-top: 5px;
}
h3 {
    font-size: 16px;
    color:inherit;
}.full-width {
    width: 100% !important;
}
.block {
    display: block;
}
.btn-primary {
    background-color: #1ab394;
    border-color: #1ab394;
    color: #fff;
}
    </style>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">HSC</h1>

            </div>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="请输入密码" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="请再次输入密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>

                <p class="text-muted text-center"><small>已经有账户了？</small><a href="<?php echo U('Index');?>">点此登录</a>
                </p>

            </form>
        </div>
    </div>
    <script src="/HSC/Public/Common/jquery/jquery-2.1.4.min.js"></script>
    <script src="/HSC/Public/Common/bootstrap/js/bootstrap.min.js"></script>
    <script src="/HSC/Public/Common/hplus/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
</body>

</html>