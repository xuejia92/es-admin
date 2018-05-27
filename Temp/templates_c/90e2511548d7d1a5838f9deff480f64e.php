<?php /*a:7:{s:54:"/media/sf_www/es-admin/App/Views/admin/admin/user.html";i:1526826786;s:49:"/media/sf_www/es-admin/App/Views/public/base.html";i:1526806933;s:51:"/media/sf_www/es-admin/App/Views/public/header.html";i:1526807008;s:48:"/media/sf_www/es-admin/App/Views/public/top.html";i:1526808943;s:49:"/media/sf_www/es-admin/App/Views/public/left.html";i:1526824136;s:53:"/media/sf_www/es-admin/App/Views/public/main_nav.html";i:1526804802;s:51:"/media/sf_www/es-admin/App/Views/public/bottom.html";i:1526826704;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo htmlentities($title); ?> - es后台管理系统</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->
    <!-- fonts -->
    <!-- ace styles -->
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

    <link href="/plugs/layui/css/layui.css" rel="stylesheet">
    <link href="/theme/css/console.css" rel="stylesheet">
    <link href="/theme/css/animate.css" rel="stylesheet">
    <link href="/theme/css/login.css" rel="stylesheet">
    <script src="/plugs/jquery/pace.min.js"></script>
    <script src="/plugs/layui/layui.all.js"></script>
    <script src="/admin.js"></script>
</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    <?php echo sysconf('site_name'); ?>
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            还有4个任务完成
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">软件更新</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">硬件更新</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">单元测试</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">错误修复</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看任务详情
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8条通知
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                切换为编辑登录..
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看所有通知
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5条消息
                        </li>

                        <li>
                            <a href="#">
                                <img src="/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                查看所有消息
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li>
                    <a href="/admin/index/index">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 管理控制中心 </span>
                    </a>
                </li>

                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 系统管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li class="active">
                            <a href="/admin/system/config">
                                <i class="icon-text-width"></i>
                                <span class="menu-text"> 系统参数 </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 系统用户相关 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li class="active">
                            <a href="/admin/admin/user">
                                <i class="icon-text-width"></i>
                                <span class="menu-text"> 用户管理 </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="typography.html">
                        <i class="icon-text-width"></i>
                        <span class="menu-text"> 文字排版 </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> UI 组件 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <i class="icon-double-angle-right"></i>
                                组件
                            </a>
                        </li>

                        <li>
                            <a href="buttons.html">
                                <i class="icon-double-angle-right"></i>
                                按钮 &amp; 图表
                            </a>
                        </li>

                        <li>
                            <a href="treeview.html">
                                <i class="icon-double-angle-right"></i>
                                树菜单
                            </a>
                        </li>

                        <li>
                            <a href="jquery-ui.html">
                                <i class="icon-double-angle-right"></i>
                                jQuery UI
                            </a>
                        </li>

                        <li>
                            <a href="nestable-list.html">
                                <i class="icon-double-angle-right"></i>
                                可拖拽列表
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-double-angle-right"></i>

                                三级菜单
                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="icon-leaf"></i>
                                        第一级
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="icon-pencil"></i>

                                        第四级
                                        <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-plus"></i>
                                                添加产品
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="icon-eye-open"></i>
                                                查看商品
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-list"></i>
                        <span class="menu-text"> 表格 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="tables.html">
                                <i class="icon-double-angle-right"></i>
                                简单 &amp; 动态
                            </a>
                        </li>

                        <li>
                            <a href="jqgrid.html">
                                <i class="icon-double-angle-right"></i>
                                jqGrid plugin
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-edit"></i>
                        <span class="menu-text"> 表单 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="form-elements.html">
                                <i class="icon-double-angle-right"></i>
                                表单组件
                            </a>
                        </li>

                        <li>
                            <a href="form-wizard.html">
                                <i class="icon-double-angle-right"></i>
                                向导提示 &amp; 验证
                            </a>
                        </li>

                        <li>
                            <a href="wysiwyg.html">
                                <i class="icon-double-angle-right"></i>
                                编辑器
                            </a>
                        </li>

                        <li>
                            <a href="dropzone.html">
                                <i class="icon-double-angle-right"></i>
                                文件上传
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets.html">
                        <i class="icon-list-alt"></i>
                        <span class="menu-text"> 插件 </span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="icon-calendar"></i>

                        <span class="menu-text">
									日历
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
                    </a>
                </li>

                <li>
                    <a href="gallery.html">
                        <i class="icon-picture"></i>
                        <span class="menu-text"> 相册 </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-tag"></i>
                        <span class="menu-text"> 更多页面 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="profile.html">
                                <i class="icon-double-angle-right"></i>
                                用户信息
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                <i class="icon-double-angle-right"></i>
                                收件箱
                            </a>
                        </li>

                        <li>
                            <a href="pricing.html">
                                <i class="icon-double-angle-right"></i>
                                售价单
                            </a>
                        </li>

                        <li>
                            <a href="invoice.html">
                                <i class="icon-double-angle-right"></i>
                                购物车
                            </a>
                        </li>

                        <li>
                            <a href="timeline.html">
                                <i class="icon-double-angle-right"></i>
                                时间轴
                            </a>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="icon-double-angle-right"></i>
                                登录 &amp; 注册
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-file-alt"></i>

                        <span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="faq.html">
                                <i class="icon-double-angle-right"></i>
                                帮助
                            </a>
                        </li>

                        <li>
                            <a href="error-404.html">
                                <i class="icon-double-angle-right"></i>
                                404错误页面
                            </a>
                        </li>

                        <li>
                            <a href="error-500.html">
                                <i class="icon-double-angle-right"></i>
                                500错误页面
                            </a>
                        </li>

                        <li>
                            <a href="grid.html">
                                <i class="icon-double-angle-right"></i>
                                网格
                            </a>
                        </li>

                        <li>
                            <a href="blank.html">
                                <i class="icon-double-angle-right"></i>
                                空白页面
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

<div class="main-content">
<script>
    if (typeof layui !== 'undefined') {
        var form = layui.form,
            layer = layui.layer,
            laydate = layui.laydate;
        if (typeof jQuery === 'undefined') {
            var $ = jQuery = layui.$;
        }
    }
</script>
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="/amdin/index/index">首页</a>
        </li>
        <?php if(isset($second_menu)): ?>
        <li><?php echo htmlentities($second_menu); ?></li>
        <?php endif; if(isset($third_menu)): ?>
        <li><?php echo htmlentities($third_menu); ?></li>
        <?php endif; ?>
    </ul><!-- .breadcrumb -->

    <!--<div class="nav-search" id="nav-search">-->
        <!--<form class="form-search">-->
				<!--<span class="input-icon">-->
					<!--<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />-->
					<!--<i class="icon-search nav-search-icon"></i>-->
				<!--</span>-->
        <!--</form>-->
    <!--</div> -->
</div>
<div class="page-content">
    <!--<div class="page-header">-->
        <!--<h1>-->
            <!--控制台-->
            <!--<small>-->
                <!--<i class="icon-double-angle-right"></i>-->
                <!--查看-->
            <!--</small>-->
        <!--</h1>-->
    <!--</div>-->

	<form class="layui-form layui-form-pane form-search" action="" onsubmit="return false" method="get">

		<div class="layui-form-item layui-inline">
			<label class="layui-form-label">用户账号</label>
			<div class="layui-input-inline">
				<input name="username" value="<?php echo htmlentities((isset($_GET['username']) && ($_GET['username'] !== '')?$_GET['username']:'')); ?>" placeholder="请输入用户名" class="layui-input">
			</div>
		</div>

		<div class="layui-form-item layui-inline">
			<label class="layui-form-label">联系手机</label>
			<div class="layui-input-inline">
				<input name="phone" value="<?php echo htmlentities((isset($_GET['phone']) && ($_GET['phone'] !== '')?$_GET['phone']:'')); ?>" placeholder="请输入联系手机" class="layui-input">
			</div>
		</div>

		<div class="layui-form-item layui-inline">
			<label class="layui-form-label">电子邮箱</label>
			<div class="layui-input-inline">
				<input name="mail" value="<?php echo htmlentities((isset($_GET['mail']) && ($_GET['mail'] !== '')?$_GET['mail']:'')); ?>" placeholder="请输入电子邮箱" class="layui-input">
			</div>
		</div>

		<div class="layui-form-item layui-inline">
			<label class="layui-form-label">登录时间</label>
			<div class="layui-input-inline">
				<input name="date" id='range-date' value="<?php echo htmlentities((isset($_GET['date']) && ($_GET['date'] !== '')?$_GET['date']:'')); ?>" placeholder="请选择登录时间" class="layui-input">
			</div>
		</div>

		<div class="layui-form-item layui-inline">
			<button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button>
		</div>

	</form>
	<script>
		window.laydate.render({range: true, elem: '#range-date'});
	</script>
	<form onsubmit="return false;" data-auto="true" method="post">
		<!--<?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>-->
		<p class="help-block text-center well">没 有 记 录 哦！</p>
		<!--<?php else: ?>-->
		<input type="hidden" value="resort" name="action">
		<table class="layui-table" lay-skin="line">
			<thead>
			<tr>
				<th class='list-table-check-td'>
					<input data-auto-none="" data-check-target='.list-check-box' type='checkbox'>
				</th>
				<th class='text-left nowrap'>用户名</th>
				<th class='text-left nowrap'>手机号</th>
				<th class='text-left nowrap'>电子邮箱</th>
				<th class='text-left nowrap'>登录次数</th>
				<th class='text-left nowrap'>最后登录</th>
				<th class='text-left nowrap'>状态</th>
				<th class='text-left nowrap'></th>
			</tr>
			</thead>
			<tbody>
			<!--<?php foreach($list as $key=>$vo): ?>-->
			<tr>
				<td class='list-table-check-td'>
					<input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'>
				</td>
				<td class='text-left nowrap'>
					<?php echo htmlentities($vo['username']); ?>
				</td>
				<td class='text-left nowrap'>
					<?php echo (isset($vo['phone']) && ($vo['phone'] !== '')?$vo['phone']:"<span class='color-desc'>还没有设置手机号</span>"); ?>
				</td>
				<td class='text-left nowrap'>
					<?php echo (isset($vo['mail']) && ($vo['mail'] !== '')?$vo['mail']:"<span class='color-desc'>还没有设置邮箱</span>"); ?>
				</td>
				<td class='text-left nowrap'>
					<?php echo (isset($vo['login_num']) && ($vo['login_num'] !== '')?$vo['login_num']:"<span class='color-desc'>从未登录</span>"); ?>
				</td>
				<td class='text-left nowrap'>
					<?php echo (format_datetime($vo['login_at']) ?: "<span class='color-desc'>从未登录</span>"); ?>
				</td>
				<td class='text-left nowrap'>
					<?php if($vo['status'] == 0): ?><span class="color-red">已禁用</span><?php elseif($vo['status'] == 1): ?><span class="color-green">使用中</span><?php endif; ?>
				</td>
				<td class='text-left nowrap'>

					<?php if(auth("$classuri/edit")): ?>
					<span class="text-explode">|</span>
					<a data-title="编辑用户" data-modal='<?php echo url("$classuri/edit"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>编辑</a>
					<?php endif; if(auth("$classuri/auth")): ?>
					<span class="text-explode">|</span>
					<a data-title="用户授权" data-modal='<?php echo url("$classuri/auth"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>授权</a>
					<?php endif; if(auth("$classuri/pass")): ?>
					<span class="text-explode">|</span>
					<a data-title="设置密码" data-modal='<?php echo url("$classuri/pass"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>密码</a>
					<?php endif; if($vo['status'] == 1 and auth("$classuri/forbid")): ?>
					<span class="text-explode">|</span>
					<a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='status' data-value='0' data-action='<?php echo url("$classuri/forbid"); ?>'>禁用</a>
					<?php elseif(auth("$classuri/resume")): ?>
					<span class="text-explode">|</span>
					<a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='status' data-value='1' data-action='<?php echo url("$classuri/resume"); ?>'>启用</a>
					<?php endif; if(auth("$classuri/del")): ?>
					<span class="text-explode">|</span>
					<a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='delete' data-action='<?php echo url("$classuri/del"); ?>'>删除</a>
					<?php endif; ?>

				</td>
			</tr>
			<!--<?php endforeach; ?>-->
			</tbody>
		</table>
		<?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; ?>
		<!--<?php endif; ?>-->
	</form>
<script src="/admin_bak.js"></script>
	<script>
		$(function () {
			$('#saveCon').submit(function () {
				esAjax('/admin/system/config','POST', formToJson($('#saveCon')),function (response) {
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

			var upload = layui.upload;
			upload.render({
				elem: '#uploadPic' //绑定元素
				,url: '/admin/common/upload' ,//上传接口
				data: {
					field:'browser_icon',
					dir:'',
					name:'favico.ico'
				}
				,done: function(res){
					if(res.code==1){
						layer.msg(res.msg,{icon:1});
						$('input[name=browser_icon]').val(res.data);
						$('img[name=srcIcon]').attr('src',res.data);
					}else{
						layer.msg(res.msg,{icon:2});
					}
				}
				,error: function(){
					//请求异常回调
				}
			});
		});
	</script>

</div>
</div>
<div class="ace-settings-container" id="ace-settings-container">
    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
        <i class="icon-cog bigger-150"></i>
    </div>

    <div class="ace-settings-box" id="ace-settings-box">
        <div>
            <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                    <option data-skin="default" value="#438EB9">#438EB9</option>
                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
            </div>
            <span>&nbsp; 选择皮肤</span>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
            <label class="lbl" for="ace-settings-add-container">
                切换窄屏
                <b></b>
            </label>
        </div>
    </div>
</div><!-- /#ace-settings-container -->
</div><!-- /.main-container-inner -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- <![endif]-->


<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/js/jquery.slimscroll.min.js"></script>
<script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/flot/jquery.flot.min.js"></script>
<script src="/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="/assets/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->

<script src="/assets/js/ace-elements.min.js"></script>
<script src="/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
        });




        var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
        var data = [
            { label: "social networks",  data: 38.7, color: "#68BC31"},
            { label: "search engines",  data: 24.5, color: "#2091CF"},
            { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
            { label: "direct traffic",  data: 18.6, color: "#DA5430"},
            { label: "other",  data: 10, color: "#FEE074"}
        ]
        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt:0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin:[-30,15]
                }
                ,
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }
        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);



        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if(item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent']+'%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });






        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }


        $('.dialogs,.comments').slimScroll({
            height: '300px'
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
            $('#tasks').on('touchstart', function(e){
                var li = $(e.target).closest('#tasks li');
                if(li.length == 0)return;
                var label = li.find('label.inline').get(0);
                if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
            });

        $('#tasks').sortable({
                opacity:0.8,
                revert:true,
                forceHelperSize:true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize:true,
                tolerance:'pointer',
                stop: function( event, ui ) 
            }
        );
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
            if(this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });


    })
</script>
</body>
</html>

