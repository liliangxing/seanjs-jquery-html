<?php /*a:2:{s:55:"D:\download\ukcms\application\admin\view\role\edit.html";i:1553153629;s:52:"D:\download\ukcms\application\admin\view\layout.html";i:1553153629;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>UKcms后台管理系统</title>
    <meta name="description" content="简洁、灵活、强大的内容管理系统">
    <meta name="author" content="YX">
    <script type="text/javascript">
        window.onload = function () {
            if (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE", "")) < 9) {
                document.body.innerHTML = "";
                alert("你的浏览器太古老,网页不支持IE9以下版本~");
            }
        };
    </script>
    <link href="/public/static/admin/assets/static/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/admin/assets/static/font-awesome.min.css" rel="stylesheet">

    <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
    <script>function _pxDemo_loadStylesheet(a, b, c) {
        var c = c || decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default"),
            d = "rtl" === document.getElementsByTagName("html")[0].getAttribute("dir");
        document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/, '<link href="$1' + (c.indexOf("dark") !== -1 && a.indexOf("/css/") !== -1 && a.indexOf("/themes/") === -1 ? "-dark" : "") + (!d || 0 !== a.indexOf("/public/static/admin/assets/css") && 0 !== a.indexOf("/public/static/admin/assets/demo") ? "" : ".rtl") + '$2" rel="stylesheet" type="text/css"' + (b ? 'class="' + b + '"' : "") + ">"))
    }</script>

    <!-- DEMO ONLY: Set RTL direction -->
    <script>"ltr" !== document.getElementsByTagName("html")[0].getAttribute("dir") && "1" === decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-rtl") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "0") && document.getElementsByTagName("html")[0].setAttribute("dir", "rtl");</script>

    <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
    <script>
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/bootstrap.min.css', 'px-demo-stylesheet-bs');
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/pixeladmin.min.css', 'px-demo-stylesheet-core');
        _pxDemo_loadStylesheet('/public/static/admin/assets/css/widgets.min.css', 'px-demo-stylesheet-widgets');
    </script>

    <!-- DEMO ONLY: Load theme -->
    <script>
        function _pxDemo_loadTheme(a) {
            var b = decodeURIComponent((new RegExp(";\\s*" + encodeURIComponent("px-demo-theme") + "\\s*=\\s*([^;]+)\\s*;", "g").exec(";" + document.cookie + ";") || [])[1] || "default");
            _pxDemo_loadStylesheet(a + b + ".min.css", "px-demo-stylesheet-theme", b)
        }

        _pxDemo_loadTheme('/public/static/admin/assets/css/themes/');
    </script>

    <!-- Demo assets -->
    <script>_pxDemo_loadStylesheet('/public/static/admin/assets/demo/demo.css');</script>
    <!-- / Demo assets -->
    <!-- holder.js -->
    <script type="text/javascript" src="/public/static/admin/assets/js/holder.js"></script>
    <!-- Pace.js -->
    <script src="/public/static/admin/assets/js/pace.min.js"></script>
    <script id="demo" src="/public/static/admin/assets/demo/demo.js" data-bind="/public/static"></script>
    <!-- jQuery -->
    <script src="/public/static/jquery.min.js"></script>

    <script src="/public/static/admin/assets/js/bootstrap.min.js"></script>
    <script src="/public/static/admin/assets/js/pixeladmin.min.js"></script>
    <script src="/public/static/admin/assets/js/summernote-zh-CN.js" charset="utf-8"></script>
    
<style>
    .tree {

    }
    .tree li {
        list-style-type:none;
        margin:0;
        padding:10px 5px 0 5px;
        position:relative
    }
    .tree i{ font-size: 16px ; color:#999; }
    .tree li::before, .tree li::after {
        content:'';
        left:-20px;
        position:absolute;
        right:auto
    }
    .tree li::before {
        border-left:1px solid #ccc;
        bottom:50px;
        height:100%;
        top:0;
        width:1px
    }
    .tree li::after {
        border-top:1px solid #ccc;
        height:20px;
        top:25px;
        width:25px
    }

</style>

</head>
<body>
<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">隐藏菜单</span>
    </button>

    <ul class="px-nav-content" id="leftmenu">

    </ul>
</nav>

<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
        <a class="navbar-brand px-demo-brand" href="<?php echo url('admin/index/index'); ?>"><span
                class="px-demo-logo bg-primary"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span
                class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span
                class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span
                class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span
                class="px-demo-logo-9"></span></span>UKcms</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse"
            aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
        <ul class="nav navbar-nav" id="topmenu">

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <?php if(app('session')->get('user_info.head_path')): ?><img src="/public/uploads/<?php echo htmlentities(app('session')->get('user_info.head_path')); ?>"
                                                                alt="" class="px-navbar-image"><?php else: ?><i
                        class="fa fa-user-circle"></i><?php endif; ?>
                    <span class="hidden-md"><?php echo htmlentities(app('session')->get('user_info.realname')); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo url('admin/index/userInfo'); ?>"><i class="dropdown-icon fa fa-user-o"></i>&nbsp;&nbsp;个人设置</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo url('admin/open/loginout'); ?>"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;退出</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fa fa-trash-o"></i>&nbsp;<span class="hidden-md">清空缓存</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="clear-data" data-bind="data" href="#"><i class="fa fa-database"></i>&nbsp;数据缓存</a>
                    </li>
                    <li><a class="clear-data" data-bind="temple" href="#"><i
                            class="fa fa-file-code-o"></i>&nbsp;模板缓存</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo htmlentities($rootUrl); ?>index.php" target="_blank"><i class="fa fa-laptop"></i>&nbsp;<span class="hidden-md">前台</span></a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="px-content">
    <ol class="breadcrumb page-breadcrumb">
        <?php if(is_array($NowMenuPath) || $NowMenuPath instanceof \think\Collection || $NowMenuPath instanceof \think\Paginator): $i = 0; $__LIST__ = $NowMenuPath;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo htmlentities($data['furl']); ?>" <?php if($data['id'] == $NowMenuId): ?>class="active" <?php endif; ?>>
            <!--i class="<?php echo htmlentities($data['icon']); ?>"></i--> <?php echo htmlentities($data['title']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#tabs-info" data-toggle="tab">
            角色信息
        </a>
    </li>
    <li>
        <a href="#tabs-menu" data-toggle="tab">
            菜单权限
        </a>
    </li>
</ul>
<form method="post" action="">
    <div class="tab-content tab-content-bordered">
        <div class="tab-pane fade in active" id="tabs-info">
            <div class="panel">
                <div class="panel-body">
                    <fieldset class="form-group">
                        <label>上级角色</label>
                        <select id="path" name="path" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option></option>
                            <option value="<?php echo htmlentities($nowRole['path']); ?><?php echo htmlentities($nowRole['id']); ?>," <?php if($info['path']==$nowRole['path'].$nowRole['id'].','): ?>selected<?php endif; ?>><?php echo htmlentities($nowRole['names']); ?></option>
                            <?php if(is_array($roles) || $roles instanceof \think\Collection || $roles instanceof \think\Paginator): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($vo['path']); ?><?php echo htmlentities($vo['id']); ?>," <?php if($info['path']==$vo['path'].$vo['id'].','): ?>selected<?php endif; ?>><?php echo str_repeat('┝┈┈', $vo['deep']-1); ?><?php echo htmlentities($vo['names']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>角色名称</label>
                        <input type="text" class="form-control" name="names" placeholder="角色中文名称" value="<?php echo htmlentities($info['names']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>角色描述</label>
                        <textarea class="form-control" rows="3" name="description"><?php echo htmlentities($info['description']); ?></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>排序</label>
                        <input type="number" class="form-control" name="orders" placeholder="只能是正整数" value="<?php echo htmlentities($info['orders']); ?>">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>状态</label>
                        <label for="switcher-primary" class="switcher switcher-primary">
                            <input type="checkbox" name="status" value="1" id="switcher-primary"  <?php if($info['status']): ?>checked=""<?php endif; ?>>
                                   <div class="switcher-indicator">
                                <div class="switcher-yes">启用</div>
                                <div class="switcher-no">禁用</div>
                            </div>
                            &nbsp;
                        </label>
                    </fieldset>
                    <div class="panel-footer text-right">
                        <input type="hidden" value="<?php echo htmlentities($info['id']); ?>" name="id">
                        <input type="submit" class="btn btn-primary" value="编辑保存">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabs-menu">
            <div class="tree">
                <ul id="menu">
                </ul>
            </div>
            <div class="panel-footer text-right">
                <input type="submit" class="btn btn-primary" value="编辑保存">
            </div>
        </div>
    </div>
</form>

</div>
<footer class="px-footer px-footer-bottom">
    <span class="text-muted"><a href="http://www.ukcms.com" target="_blank"><?php echo config('sysinfo'); ?></a> </span>
</footer>

<script type="text/javascript">
    window.menu = <?php echo $MenuJson; ?>;
    window.NowMenuId = <?php echo htmlentities($NowMenuId); ?>;
    window.RootId = <?php echo htmlentities($RootId); ?>;

    //递归输出左侧菜单
    function printLmenu(lever) {
        var leftmenu = '';
        var hideclass = '';
        for (var i in lever) {
            hideclass = 1 == lever[i].ifvisible ? '' : 'hidden';
            if (lever[i].cnode === undefined) {
                leftmenu += '<li class="px-nav-item ' + hideclass + '" id="' + lever[i].id + '"><a target="' + lever[i].url_target + '" href="' + lever[i].furl + '"><i class="px-nav-icon ' + lever[i].icon + '"></i><span class="px-nav-label">' + lever[i].title + '</span></a></li>';
            } else {
                leftmenu += '<li class="px-nav-item px-nav-dropdown ' + hideclass + '" id="' + lever[i].id + '"><a target="' + lever[i].url_target + '" href="' + lever[i].furl + '"><i class="px-nav-icon ' + lever[i].icon + '"></i><span class="px-nav-label">' + lever[i].title + '</span></a><ul class="px-nav-dropdown-menu">';
                leftmenu += printLmenu(lever[i].cnode);
                leftmenu += '</ul></li>';
            }
        }
        return leftmenu;
    }

    function activeDom(dom,startId) {
        if(dom.length>0){
            if (!dom.hasClass('hidden')){
                dom.addClass('active');
            }
            if(startId!=dom.attr('id') && dom.hasClass('px-nav-dropdown')){
                dom.addClass('px-open');
            }
            activeDom(dom.parent('ul').parent('li'));
        }else{
            return;
        }
    }

    $(function () {
        bootbox.setLocale("zh_CN");
        //顶部菜单
        var topmenu = '';
        for (var i in menu) {
            if (menu[i].ifvisible) {
                if (menu[i].id == RootId) {
                    var active = 'active';
                    var leftid = i;
                } else {
                    var active = '';
                }
                topmenu += '<li id="' + menu[i].id + '" class="' + active + '"><a href="' + menu[i].furl + '" class="font-size-14" target="' + menu[i].url_target + '"><i class="px-nav-icon ' + menu[i].icon + '"></i> ' + menu[i].title + '</a></li>';
            }
        }
        var topbox = $('#topmenu');
        topbox.html(topmenu);
        //左侧菜单
        if (leftid !== undefined) {
            var leftmenu = printLmenu(menu[leftid].cnode);
            var leftdom = $('#leftmenu');
            leftdom.html(leftmenu);
            if (NowMenuId) {
                var nowdom = $('#' + NowMenuId);
                activeDom(nowdom,NowMenuId);
            }
            leftdom.find('.px-nav-dropdown').each(function () {
                //清除下级空元素
                var targ = $(this).children('ul.px-nav-dropdown-menu');
                if (targ.find('li:not(.hidden)').length == 0) {
                    $(this).removeClass('px-nav-dropdown');
                    targ.remove();
                }
                //a跳转事件恢复
                $(this).children('a').children('span.px-nav-label').click(function (event) {
                    var jumpurl = $(this).parent().attr('href');
                    if ('#' != jumpurl) {
                        //阻止父节点点击展开事件
                        event.stopPropagation();
                        if ('_self' == $(this).parent().attr('target')) {
                            window.location.href = jumpurl;
                        } else {
                            window.open(jumpurl);
                        }
                    }
                });
            });
        }

        $('body > .px-nav').pxNav();
        $('body > .px-footer').pxFooter();
        // Initialize DEMO sidebar
        pxDemo.initializeDemoSidebar();
        $('#px-demo-sidebar').pxSidebar();
        pxDemo.initializeDemo();
    });
    //清空缓存
    $('.clear-data').click(function () {
        var classify = $(this).data('bind');
        bootbox.confirm({
            message: '确认需要清空缓存么？',
            className: 'bootbox-sm',
            callback: function (result) {
                if (result) {
                    $.ajax({
                        url: "<?php echo url('admin/index/clear'); ?>",
                        type: "GET",
                        data: {classify: classify},
                        dataType: 'text',
                        success: function (data) {
                            if (data === 'true') {
                                toastr['success']('清空缓存成功~', '', {
                                    closeButton: true
                                });
                            } else {
                                toastr['warning'](data, '', {
                                    closeButton: true
                                });
                            }
                        }
                    });
                }
            }
        });
    });
</script>

<script>
    var menuids = [<?php echo htmlentities($info['menu_ids']); ?>];
    var menukey = {};
    function printMenu(lever) {
        var smenu = '';
        var cicon = '';
        var checked = '';
        for (var i in lever) {
            cicon = lever[i].cnode === undefined ? '' : '<i class="fa fa-minus-square-o"></i>&nbsp;';
            checked = menuids.indexOf(lever[i].id) == -1 ? '' : 'checked=""';
            //创建一唯数组
            menukey[lever[i].id] = lever[i];
            smenu += '<li><div class="btn btn-outline">' + cicon + ' <label class="custom-control custom-checkbox checkbox-inline"><input type="checkbox" class="custom-control-input" name="ids[]" value="' + lever[i].id + '" ' + checked + '><span class="custom-control-indicator"></span><span class="' + lever[i].icon + '"></span> ' + lever[i].title + '</lable></div>';
            if (lever[i].cnode === undefined) {
                smenu += '</li>';
            } else {
                smenu += '<ul>';
                smenu += printMenu(lever[i].cnode);
                smenu += '</ul></li>';
            }
        }
        return smenu;
    }
    function pcheck(dom) {
        dom.find(">div>label>input[type='checkbox']").prop("checked", true);
        var pdom = dom.parent('ul').parent('li');
        if (pdom.length > 0) {
            pcheck(pdom);
        }
    }
    $(function () {
        var smenus = printMenu(menu);
        $('#menu').html(smenus);
        $('#path').select2({
            placeholder: '选择角色'
        });

        $('.tree li:has(ul)').addClass('parent_li').find(' > div').attr('title', 'Collapse this branch');
        $('.tree li.parent_li > div >i').on('click', function (e) {
            var dom = $(this).parent();
            var children = dom.parent('li.parent_li').find(' > ul > li');
            if (children.is(":visible")) {
                children.hide('fast');
                dom.attr('title', 'Expand this branch').find(' > i').addClass('fa-plus-square-o').removeClass('fa-minus-square-o');
            } else {
                children.show('fast');
                dom.attr('title', 'Collapse this branch').find(' > i').addClass('fa-minus-square-o').removeClass('fa-plus-square-o');
            }
            e.stopPropagation();
        });
        $(".tree input[type='checkbox']").click(function () {
            var ifchoose = $(this).prop("checked");
            var pdom = $(this).parent().parent().parent();
            if (ifchoose) {
                pcheck(pdom.parent().parent());
                pdom.find("ul input[type='checkbox']").prop("checked", true);
            } else {
                pdom.find("ul input[type='checkbox']").prop("checked", false);
            }

        });
    });
</script>

</body>
</html>