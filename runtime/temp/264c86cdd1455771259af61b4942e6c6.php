<?php /*a:2:{s:62:"D:\download\ukcms\application\admin\view\model\importdata.html";i:1553153629;s:52:"D:\download\ukcms\application\admin\view\layout.html";i:1553153629;}*/ ?>
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
    
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title">[<?php echo htmlentities($modelInfo['title']); ?>]模型导入数据</span>
        <div class="panel-heading-controls"> 
            <a class="btn btn-xs btn-primary" href="<?php echo url('importexample',['mid'=>$mid]); ?>"><i class="fa fa-cloud-download"></i> 下载标准格式</a>
        </div>
    </div>

    <form action="" enctype="multipart/form-data" method="post" class="panel-body">
        <div class="form-group">
            <?php if(isset($columnList)): ?>
            <fieldset class="form-group">
                <label>所属栏目</label>
                <select id="cname"  name="cname" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                    <option></option>
                    <?php if(is_array($columnList) || $columnList instanceof \think\Collection || $columnList instanceof \think\Paginator): $i = 0; $__LIST__ = $columnList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type']==2 && $vo['model_id']==$mid): ?>
                    <option <?php if(''!=$cname && $cname==$vo['name']): ?>selected<?php endif; ?> value="<?php echo htmlentities($vo['name']); ?>"><?php echo str_repeat('┝┈┈', $vo['deep']-1); ?><?php echo htmlentities($vo['title']); ?></option>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <small class="text-muted">只能选择绑定此模型的列表栏目,不选择则平均分配到栏目下</small>
            </fieldset>
            <?php endif; ?>
            <fieldset class="form-group">
                <label class="custom-file px-file">
                    <input type="file" name="excel" class="custom-file-input">
                    <span class="custom-file-control form-control">选择要导入的数据文件...</span>
                    <div class="px-file-buttons">
                        <button type="button" class="btn px-file-clear">清空</button>
                        <button type="button" class="btn btn-primary px-file-browse">浏览文件</button>
                    </div>
                    <small class="text-muted">支持格式：xlsx,xls,csv.第一行为字段名称,数据从第二行开始</small>
                </label>
            </fieldset>
            <fieldset class="form-group">
                <labe>发布时间区间</label>
                    <input type="text" class="form-control" id="creattime" name="creattime" placeholder="请输入时间区间" value="">
                    <small class="text-muted" >发布时间随机在区间内生成</small>
            </fieldset>
            
            <?php if($canTranslate): ?>
            <hr>
            <fieldset class="form-group">
                <label for="switcher-iftranslate" class="switcher switcher-primary">
                    <input type="checkbox" id="switcher-iftranslate" name="iftranslate">
                    <div class="switcher-indicator">
                        <div class="switcher-yes">是</div>
                        <div class="switcher-no">否</div>
                    </div>翻译文本字段内容
                </label>
                <small class="text-muted">百度翻译接口当月翻译字符数≤2百万，当月免费。翻译接口需要间隔3s调用一次，若翻译内容较长会需要大量时间，请将php超时限制取消或增长</small>
            </fieldset> 
            <fieldset class="form-group">
                <label>当前语言</label>
                <select id="froml"  name="froml" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                    <option></option>
                    <option value="zh">中文</option>
                    <option value="en" selected>英语</option>
                    <option value="yue">粤语</option>
                    <option value="wyw">文言文</option>
                    <option value="jp">日语</option>
                    <option value="kor">韩语</option>
                    <option value="fra">法语</option>
                    <option value="spa">西班牙语</option>
                    <option value="th">泰语</option>
                    <option value="ara">阿拉伯语</option>
                    <option value="ru">俄语</option>
                    <option value="pt">葡萄牙语</option>
                    <option value="de">德语</option>
                    <option value="it">意大利语</option>
                    <option value="el">希腊语</option>
                    <option value="nl">荷兰语</option>
                    <option value="pl">波兰语</option>
                    <option value="bul">保加利亚语</option>
                    <option value="est">爱沙尼亚语</option>
                    <option value="dan">丹麦语</option>
                    <option value="fin">芬兰语</option>
                    <option value="cs">捷克语</option>
                    <option value="rom">罗马尼亚语</option>
                    <option value="slo">斯洛文尼亚语</option>
                    <option value="swe">瑞典语</option>
                    <option value="hu">匈牙利语</option>
                    <option value="cht">繁体中文</option>
                    <option value="vie">越南语</option>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label>翻译语言</label>
                <select id="tol"  name="tol" class="form-control  select2-hidden-accessible" style="width: 100%" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                    <option></option>
                    <option value="zh" selected>中文</option>
                    <option value="en">英语</option>
                    <option value="yue">粤语</option>
                    <option value="wyw">文言文</option>
                    <option value="jp">日语</option>
                    <option value="kor">韩语</option>
                    <option value="fra">法语</option>
                    <option value="spa">西班牙语</option>
                    <option value="th">泰语</option>
                    <option value="ara">阿拉伯语</option>
                    <option value="ru">俄语</option>
                    <option value="pt">葡萄牙语</option>
                    <option value="de">德语</option>
                    <option value="it">意大利语</option>
                    <option value="el">希腊语</option>
                    <option value="nl">荷兰语</option>
                    <option value="pl">波兰语</option>
                    <option value="bul">保加利亚语</option>
                    <option value="est">爱沙尼亚语</option>
                    <option value="dan">丹麦语</option>
                    <option value="fin">芬兰语</option>
                    <option value="cs">捷克语</option>
                    <option value="rom">罗马尼亚语</option>
                    <option value="slo">斯洛文尼亚语</option>
                    <option value="swe">瑞典语</option>
                    <option value="hu">匈牙利语</option>
                    <option value="cht">繁体中文</option>
                    <option value="vie">越南语</option>
                </select>
            </fieldset>
            <?php endif; ?>
        </div>
        <div class="panel-footer text-right">
            <input type="submit" class="btn btn-primary" value="导入数据">
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
        $('.custom-file').pxFile();
        $('#cname').select2({
            placeholder: '选择栏目'
        });
        $('#froml').select2({
            placeholder: '选择当前语言'
        });
        $('#tol').select2({
            placeholder: '选择翻译语言'
        });
        $('#creattime').daterangepicker({
            timePicker: true, //是否显示小时和分钟  
            timePickerIncrement: 1, //时间的增量，单位为分钟  
            timePicker12Hour: false, //是否使用12小时制来显示时间  
            locale: {
                format: 'YYYY/MM/DD HH:mm:ss',
                daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
                monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                applyLabel: '确定',
                cancelLabel: '取消',
                firstDay: 1
            }
        }, function (start, end, label) {
        }).on('cancel.daterangepicker', function () {
            //$(this).val('');
        });
    });
</script>

</body>
</html>