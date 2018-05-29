<?php /*a:1:{s:55:"/media/sf_www/es-admin/App/Views/admin/login/index.html";i:1526785072;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); if(!empty($title)): ?> · <?php endif; ?><?php echo sysconf('site_name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="<?php echo sysconf('browser_icon'); ?>" rel="shortcut icon">
    <link href="/plugs/awesome/css/font-awesome.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet">
    <link href="/plugs/bootstrap/css/bootstrap.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet">
    <link href="/plugs/layui/css/layui.css?v=<?php echo date('ymd'); ?>" rel="stylesheet">
    <link href="/theme/css/console.css?v=<?php echo date('ymd'); ?>" rel="stylesheet">
    <link href="/theme/css/animate.css?v=<?php echo date('ymd'); ?>" rel="stylesheet">
    <link href="/theme/css/login.css" rel="stylesheet">
    <script src="/plugs/jquery/pace.min.js"></script>
    <script src="/plugs/layui/layui.all.js"></script>
</head>
<body class="framework mini">
<div class="login-container">

    <!-- 动态云层动画 开始 -->
    <div class="clouds-container">
        <div class="clouds clouds-footer"></div>
        <div class="clouds"></div>
        <div class="clouds clouds-fast"></div>
    </div>
    <!-- 动态云层动画 结束 -->

    <!-- 顶部导航条 开始 -->
    <div class="header notselect">
        <span class="title notselect"><?php echo sysconf('app_name'); ?> <sup><?php echo sysconf('app_version'); ?></sup></span>
        <ul>
            <li><a href="javascript:void(0)" target="_blank">帮助</a></li>
            <li>
                <a href="http://sw.bos.baidu.com/sw-search-sp/software/9e6bc213b9d0b/ChromeStandalone_63.0.3239.132_Setup.exe">推荐使用谷歌浏览器</a>
            </li>
        </ul>
    </div>
    <!-- 顶部导航条 结束 -->

    <!-- 页面表单主体 开始 -->
    <div class="container">
        <form id="formLogin" onsubmit="return false;" data-time="0.001" data-auto="true" method="post" class="content layui-form animated fadeInDown">
            <div class="people">
                <div class="tou"></div>
                <div id="left-hander" class="initial_left_hand transition"></div>
                <div id="right-hander" class="initial_right_hand transition"></div>
            </div>
            <ul>
                <li class="username">
                    <i></i>
                    <input required pattern="^\S{4,}$" name="username" value="admin" type="text" autofocus="autofocus" autocomplete="off" title="请输入4位及以上的字符" placeholder="请输入用户名/手机号码">
                </li>
                <li class="password">
                    <i></i>
                    <input required pattern="^\S{4,}$" name="password" value="admin" type="password" autocomplete="off" title="请输入4位及以上的字符" placeholder="请输入密码">
                </li>
                <li class="text-center">
                    <button type="submit" class="layui-btn" data-form-loaded="立 即 登 入">立 即 登 入</button>
                </li>
            </ul>
        </form>
    </div>
    <!-- 页面表单主体 结束 -->

    <!-- 底部版权信息 开始 -->
    <?php if(sysconf('site_copy')): ?>
    <div class="footer notselect">
        <?php echo sysconf('site_copy'); if(sysconf('miitbeian')): ?> <span>|</span> <a target="_blank" href="http://www.miitbeian.gov.cn"><?php echo sysconf('miitbeian'); ?></a><?php endif; ?>
    </div>
    <?php endif; ?>
    <!-- 底部版本信息 结束 -->

</div>
<script src="/plugs/require/require.js"></script>
<script src="/app.js"></script>
<script src="/admin.js"></script>
<script>
    if (typeof layui !== 'undefined') {
        var form = layui.form,
            layer = layui.layer,
            laydate = layui.laydate;
        if (typeof jQuery === 'undefined') {
            var $ = jQuery = layui.$;
        }
    }
    if (window.location.href.indexOf('#') > -1) {
        window.location.href = window.location.href.split('#')[0];
    }
    $(function () {
        $('[name="password"]').on('focus', function () {
            $('#left-hander').removeClass('initial_left_hand').addClass('left_hand');
            $('#right-hander').removeClass('initial_right_hand').addClass('right_hand')
        }).on('blur', function () {
            $('#left-hander').addClass('initial_left_hand').removeClass('left_hand');
            $('#right-hander').addClass('initial_right_hand').removeClass('right_hand')
        });
        $('#formLogin').submit(function () {
            esAjax('/admin/login','POST',{
                username:$('[name="username"]').val(),
                password:$('[name="password"]').val()
            },function (response) {
                if(response.code==1){
                    layer.msg(response.msg,{
                        icon:1,
                        time:1000
                    },function () {
                        window.location.href = response.url;
                    });
                }else{
                    layer.msg(response.msg,{
                        icon:2,
                        time:2000
                    });
                }
            });
        });
    });
</script>
</body>
</html>