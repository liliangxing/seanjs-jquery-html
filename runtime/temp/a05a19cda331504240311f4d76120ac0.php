<?php /*a:2:{s:61:"D:\download\ukcms\application\admin\view\index\user_info.html";i:1553153629;s:52:"D:\download\ukcms\application\admin\view\layout.html";i:1553153629;}*/ ?>
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
    .configImage{min-height:100px; padding-bottom: 20px; }
    .dz-default.dz-message{
        right: auto;
        left: 50%;
        top: 25px;
        transform: none;
        padding-left: 0;
        font-size: 35px;
        font-weight: 400;
        line-height: 35px;
        position: relative
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
    
<div class="alert alert-default">
    <button type="button" class="close" data-dismiss="alert">×</button>
    创建时间：<?php echo htmlentities($info['create_time']); ?>&nbsp;&nbsp;&nbsp;上次登录时间：<?php echo htmlentities($info['last_login_time']); ?>&nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：<?php echo htmlentities($info['last_login_ip']); ?>
</div>
<div class="panel">
    <div class="panel-heading">
        <div class="panel-title"><?php echo htmlentities($info['username']); ?> [<?php echo htmlentities($gname); ?>]</div>
    </div>
    <form enctype="multipart/form-data" class="panel-body" method="post" action="">
        <?php if($ifAcc): ?>
        <fieldset class="form-group">
            <label>账户*</label>
            <input type="text" class="form-control" name="username" placeholder="登录账户" value="<?php echo htmlentities($info['username']); ?>">
        </fieldset>
        <?php endif; ?>
        <fieldset class="form-group">
            <label>姓名*</label>
            <input type="text" class="form-control" name="realname" placeholder="真实姓名" value="<?php echo htmlentities($info['realname']); ?>">
        </fieldset>
        <fieldset class="form-group">
            <label>密码</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="若不修改则无需填写" value="">
        </fieldset>
        <fieldset class="form-group hidden" id="surebox">
            <label>确认密码</label>
            <input type="password" class="form-control" name="password_confirm" placeholder="再次输入密码" value="">
        </fieldset>
        <fieldset class="form-group">
            <label>手机号码</label>
            <input type="number" class="form-control" name="mobile" placeholder="手机号码" value="<?php echo htmlentities($info['mobile']); ?>">
        </fieldset>
        <fieldset class="form-group">
            <label>邮箱</label>
            <input type="email" class="form-control" name="email" placeholder="邮箱" value="<?php echo htmlentities($info['email']); ?>">
        </fieldset>
        <fieldset class="form-group">
            <label>头像</label>
            <input type="hidden" name="head_pic"  value="<?php echo htmlentities($info['head_pic']); ?>" >
            <div id="head_pic" class="configImage b-a-2 border-default">
                 <div class="dz-default dz-message text-light ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
        </fieldset>
        <div class="panel-footer text-right">
            <input type="submit" class="btn btn-primary" value="确认修改">
        </div>
    </form>
</div>

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
    $(function () {
        $("#password").focus(function () {
            $("#surebox").removeClass('hidden');
        });
        var thisdom = $('#head_pic');
        var inputdom = thisdom.prev('input');
        var nowPicid = inputdom.val();
        var files = {};
        if ('' != inputdom.val()) {
            $.ajax({
                url: "<?php echo url('filemanage/ajaxgetfileinfo'); ?>",
                type: 'post',
                dataType: "json",
                async: false,
                data: {ids: nowPicid},
                success: function (data) {
                    if ('' != data) {
                        files = data;
                    }
                }
            });
        }
        thisdom.dropzone({
            url: "<?php echo url('filemanage/upload',['dir'=>'images','module'=>'admin','watermark'=>0]); ?>",
            dictRemoveFile: "删除图片",
            init: function () {
                //回调已上传图片
                if (!jQuery.isEmptyObject(files)) {
                    var mockFile = {
                        name: files.name,
                        size: files.size,
                        accepted: true,
                        status: 'success',
                        processing: false
                    };
                    this.options.addedfile.call(this, mockFile);
                    this.options.thumbnail.call(this, mockFile, '/public/uploads/' + files.path);
                    this.files[0] = mockFile;
                    delImgEvent(thisdom);
                }
            },
            resize: function (file) {
                return {
                    srcX: 0,
                    srcY: 0,
                    srcWidth: file.width,
                    srcHeight: file.height,
                    trgWidth: file.width,
                    trgHeight: file.height
                };
            },
            maxFiles: 1,
            maxfilesexceeded: function (file) {
                this.removeAllFiles();
                this.addFile(file);
            },
            success: function (file, response, e) {
                //移除当前图片  
//                thisdom.find('div.dz-preview:not(.dz-processing)').remove();
                if (response.status == 1) {
                    inputdom.attr('value', response.id);
                    delImgEvent(thisdom);
                    toastr['success'](response.info, '', {
                        closeButton: true
                    });
                } else {
                    var data = response.info;
                    if (!data) {
                        data = '未知错误：' + response;
                    }
                    toastr['error'](data, '', {
                        closeButton: true
                    });
                    //移除当前图片恢复之前图片
                        this.removeFile(file);
                         if (!jQuery.isEmptyObject(files)) {
                            var mockFile = {
                                  name: files.name,
                                  size: files.size,
                                  accepted: true,
                                  status: 'success',
                                  processing: false
                            };
                            this.options.addedfile.call(this, mockFile);
                            this.options.thumbnail.call(this, mockFile, '/public/uploads/'+files.path);
                            this.files[0] = mockFile;
                            delImgEvent(thisdom);
                        }
                }
            }
        });
        function delImgEvent(dom) {
            dom.find('.dz-remove').click(function () {
                bootbox.confirm({
                     message: '只从这里删除,但仍然保留在服务器中？',
                     className: 'bootbox-sm',
                     buttons: {
                           confirm: {
                                    label: '是的',
                                    className: 'btn-success'
                           },
                           cancel: {
                                    label: '从服务器删除',
                                    className: 'btn-default'
                           }
                     },
                    callback: function (result) {
                        if (!result) {
                            var id = inputdom.attr('value');
                            $.get("<?php echo url('filemanage/delete'); ?>", {id: id},
                                    function (data) {
                                        if (data === 'true') {
                                            toastr['success']('图片删除成功~', '', {
                                                closeButton: true
                                            });
                                        } else {
                                            toastr['error'](data, '', {
                                                closeButton: true
                                            });
                                        }
                                    },
                                    "text"
                                    );
                        }
                        inputdom.attr('value','');
                    }
                });
            });
        }
    });
</script>

</body>
</html>