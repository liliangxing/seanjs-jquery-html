<?php /*a:2:{s:65:"D:\download\ukcms\application\home\view\defaults\index\index.html";i:1553153629;s:60:"D:\download\ukcms\application\home\view\defaults\layout.html";i:1553153629;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        
        <title><?php echo htmlentities($title); ?></title>	
        <meta name="keywords" content="<?php echo htmlentities($keywords); ?>" />
        <meta name="description" content="<?php echo htmlentities($description); ?>" />
        
        <meta name="author" content="YX">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
        <script type="text/javascript">
            window.onload = function () {
                if (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE", "")) < 9) {
                    document.body.innerHTML = "";
                    alert("你的浏览器太古老,网页不支持IE9以下版本~");
                }
            };
        </script> 
        <link rel="stylesheet" type="text/css" href="/public/static/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="/public/static/home/defaults/css/ukcms.css">
        <script src="/public/static/jquery.min.js" ></script>
        <script src="/public/static/semantic/semantic.min.js"></script>
        <script>
            $(document).ready(function () {
                /**小屏幕下导航菜单**/
                $('#sideMenuCon').html($('#topMenuCon').html()).find('.menu').addClass('vertical');
                $('#sideMenuCon').find('.toc.item').remove();
                $('#sideMenuCon').find('.right.menu').remove();
                //弹出菜单
                $('#sideMenuCon').sidebar('attach events', '.toc.item');
                /**小屏幕下导航菜单**/
                //下拉菜单
                $('.ui.dropdown').dropdown();
                //图片鼠标特效
                $('.special.cards .image').dimmer({
                    on: 'hover'
                });
                //顶部菜单下拉效果
                $('.ui.menu .ui.dropdown').dropdown({
                    on: 'hover'
                });
                //顶部搜索触发
                $('#searchicon').click(function () {
                    $('#search').submit();
                });
                $('#midSelect div').click(function () {
                    $('#midInput').val($(this).data('id'));
                });
            });
        </script>
        
<script>
    $(document).ready(function () {
        //轮播特效
        $('#bannerNext').click(function () {
            $('#banner').shape('flip over');
        });
        $('#bannerPre').click(function () {
            $('#banner').shape('flip back');
        });
        //tab切换
        $('#tabDemo .item').tab();
        //折叠菜单
        $('#infoAccordion').accordion();
    });
</script>

    </head>
    <body>
        <?php if(isset($memberInfo)): ?>
        <div class="topbar">
            <div class="topbar-left"><i class="volume up icon"></i>演示通过应用钩子调用会员登录状态</div>
            <div class="topbar-right">
              <?php if($memberInfo): ?>
                 <a class="ui primary button tiny" href="<?php echo appUrl('member','index/index'); ?>"><i class="icon user"></i><?php echo htmlentities($memberInfo); ?></a>  <a class="ui button tiny" href="<?php echo appUrl('member','open/loginout'); ?>"><i class="icon power"></i>退出</a>
              <?php else: ?>
                 <a class="ui primary button tiny" href="<?php echo appUrl('member','open/login'); ?>">登录</a>  <a class="ui  button tiny" href="<?php echo appUrl('member','open/register'); ?>">注册</a>
              <?php endif; ?>
            </div>
        </div>
        <div style="clear:both"></div>
        <?php endif; ?>
        <!-- Sidebar Menu -->
        <div class="ui vertical inverted blue sidebar menu top " id='sideMenuCon'></div>
        <div class="ui inverted vertical blue center aligned segment">
            <div class="ui container">
                <div class="large  ui  inverted blue menu menu-big" id='topMenuCon'>
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <a href="<?php echo url('index/index'); ?>" class="<?php if(0==$rootId): ?>active<?php endif; ?> header item">
                        <img class="logo" src="/public/uploads/<?php echo config('web_site_logo')['path']; ?>" width="100" alt="UKcmsLogo">
                    </a>
                    <!--查询栏目存储在$colums中-->
                    <?php $colums= model('Column')->getColumn("tree", "id,path,name,title,type,url", 'id', 0, "show"); ?>
                    <!--演示四层栏目调用-->
                    <?php if(is_array($colums) || $colums instanceof \think\Collection || $colums instanceof \think\Paginator): $i = 0; $__LIST__ = $colums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;if(!isset($v1['cnode'])): ?><a class="item <?php if($v1['name']==$rootName): ?>active<?php endif; ?>" href="<?php echo htmlentities($v1['url']); ?>"><?php echo htmlentities($v1['title']); ?></a><?php else: ?>
                    <div class="ui dropdown item <?php if($v1['name']==$rootName): ?>downaction<?php endif; ?>">
                        <a href="<?php echo htmlentities($v1['url']); ?>"><?php echo htmlentities($v1['title']); ?></a><i class="dropdown icon"></i>
                        <div class="menu">
                            <?php if(is_array($v1['cnode']) || $v1['cnode'] instanceof \think\Collection || $v1['cnode'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v1['cnode'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if(!isset($v2['cnode'])): ?><a class="item" href="<?php echo htmlentities($v2['url']); ?>"><?php echo htmlentities($v2['title']); ?></a><?php else: ?>
                            <div class="item">
                                <a href="<?php echo htmlentities($v2['url']); ?>"><?php echo htmlentities($v2['title']); ?></a><i class="dropdown icon"></i>
                                <div class="menu">
                                    <?php if(is_array($v2['cnode']) || $v2['cnode'] instanceof \think\Collection || $v2['cnode'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v2['cnode'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if(!isset($v3['cnode'])): ?><a class="item" href="<?php echo htmlentities($v3['url']); ?>"><?php echo htmlentities($v3['title']); ?></a><?php else: ?>
                                    <div class="item">
                                        <a href="<?php echo htmlentities($v3['url']); ?>"><?php echo htmlentities($v3['title']); ?></a><i class="dropdown icon"></i>
                                        <div class="menu">
                                            <?php if(is_array($v3['cnode']) || $v3['cnode'] instanceof \think\Collection || $v3['cnode'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v3['cnode'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
                                            <a class="item" href="<?php echo htmlentities($v4['url']); ?>"><?php echo htmlentities($v4['title']); ?></a>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--演示四层栏目调用-->
                    <div class="right menu">
                        <div class="ui dropdown item "><i class="angle double   down icon"></i>
                            <div class="menu" id="midSelect">
                                <div class="item active" data-id="0">所有模型</div>
                                <?php $sql_list=model('ModelField')->getDataList("model", "purpose='column' and status='1' and create_time <1553154728", "id,title", "", "orders,id desc", "", null, 0, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                                <div class="item"  data-id="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="item">
                            <form id="search"  method="get" action="<?php echo url('index/search'); ?>">
                                <div class="ui transparent icon input  inverted  blue"> 
                                    <input type="hidden" name="mid" value="0" id="midInput">
                                    <input class="prompt" name="keyword"  type="text" placeholder="搜索..." size="10">
                                    <i class="search link icon" id="searchicon"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<div class="ui shape" id="banner">
    <div class="sides">
        <?php $link_list= model('Link')->getLinkList("indexbanner", "yes", 0);  foreach($link_list as $key=>$vo): ?>
        <div class="<?php if(0==$key): ?>active<?php endif; ?> side">
            <div class="image">
                <a href="<?php echo htmlentities($vo['url']); ?>"><img src="/public/uploads/<?php echo htmlentities($vo['picture']); ?>" class="ui fluid image" alert="<?php echo htmlentities($vo['title']); ?>"></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="ui left internal rail"  id="bannerPre">
        <div  class="ui icon button"><i class="left  arrow icon"></i></div>
    </div>
    <div class="ui right internal rail"  id="bannerNext">
        <div class="ui icon button"><i class="right  arrow icon"></i></div>
    </div>
</div>


<div class="ui container" id="box">
    <div class="ui  grid stackable">
        <div class=" seven wide column" id="aboutUs">
            <div class="ui segment">
                <a  href="<?php echo htmlentities($columList['aboutus']['url']); ?>" class="ui top attached large  label blue"><?php echo htmlentities($columList['aboutus']['title']); ?></a>
                <div class="aboutBox">
                    <img class="ui small left floated image" src="/public/uploads/<?php echo htmlentities($columList['aboutus']['cover']); ?>" alt="<?php echo htmlentities($columList['aboutus']['title']); ?>">
                    <?php $info=model('ModelField')->getDataInfo("column", "status='1'", "meta_description", "","",1); ?>
                    <p><?php echo msubstr($info['meta_description'],0,225); ?></p>
                    
                </div>
            </div>
        </div>
        <div class="nine wide column">
            <div class="ui top attached tabular menu" id="tabDemo">
                <a class="active item" data-tab="first"><?php echo htmlentities($columList['frontbase']['title']); ?></a>
                <a class="item" data-tab="second"><?php echo htmlentities($columList['frontframe']['title']); ?></a>
                <a class="item" data-tab="third"><?php echo htmlentities($columList['php']['title']); ?></a>
            </div>
            <div class="ui bottom attached active tab segment" data-tab="first">
                <div class="ui divided  items">
                    <?php $sql_list=model('ModelField')->getDataList("article", "status='1' and create_time <1553154728", "id,cname,title,color,description,cover,create_time", "", "orders,id desc", "2", null, 6, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                    <div class="item">
                        <?php if($vo['cover']['path']): ?>
                        <div class="ui small image">
                            <img src="/public/uploads/<?php echo htmlentities($vo['cover']['path']); ?>" alt="<?php echo htmlentities($vo['title']); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="content"> 
                            <a href="<?php echo htmlentities($vo['url']); ?>" class="header" style="color:<?php echo htmlentities($vo['color']); ?>"><?php echo htmlentities($vo['title']); ?></a>
                            <div class="meta">
                                <span><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></span>
                            </div>
                            <div class="description">
                                <p><?php echo htmlentities($vo['description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo htmlentities($columList['frontbase']['url']); ?>" class="ui  bottom right attached label">更多信息</a>
            </div>
            <div class="ui bottom attached tab segment" data-tab="second">
                <div class="ui divided  items">
                    <?php $sql_list=model('ModelField')->getDataList("article", "status='1' and create_time <1553154728", "id,cname,title,color,description,cover,create_time", "", "orders,id desc", "2", null, 5, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                    <div class="item">
                        <div class="ui small image">
                            <img src="/public/uploads/<?php echo htmlentities($vo['cover']['path']); ?>" alt="<?php echo htmlentities($vo['title']); ?>">
                        </div>
                        <div class="content"> 
                            <a href="<?php echo htmlentities($vo['url']); ?>" class="header" style="color:<?php echo htmlentities($vo['color']); ?>"><?php echo htmlentities($vo['title']); ?></a>
                            <div class="meta">
                                <span><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></span>
                            </div>
                            <div class="description">
                                <p><?php echo htmlentities($vo['description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo htmlentities($columList['frontframe']['url']); ?>" class="ui  bottom right attached label">更多信息</a>
            </div>
            <div class="ui bottom attached tab segment" data-tab="third">
                <div class="ui divided list articleList">
                    <?php $sql_list=model('ModelField')->getDataList("article", "status='1' and create_time <1553154728", "id,cname,title,color,create_time", "", "orders,id desc", "6", null, 4, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                    <div class="item">
                        <span class="right floated"><?php echo date('Y-m-d',$vo['create_time']); ?></span>
                        <a href="<?php echo htmlentities($vo['url']); ?>" style="color:<?php echo htmlentities($vo['color']); ?>"><i class="file outline icon"></i><?php echo htmlentities($vo['title']); ?></a>
                    </div>  
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo htmlentities($columList['php']['url']); ?>" class="ui bottom right attached label">更多信息</a>
            </div>
        </div>
    </div>

    <div class="ui special six cards doubling">
        <?php $sql_list=model('ModelField')->getDataList("photo", "status='1' and create_time <1553154728", "id,cname,title,cover,description", "", "orders,id desc", "6", null, 10, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
        <div class="card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <a href="<?php echo htmlentities($vo['url']); ?>" class="ui primary  button">查看详细</a>
                        </div>
                    </div>
                </div>
                <img src="/public/uploads/<?php echo htmlentities($vo['cover']['thumb']); ?>" alt="<?php echo htmlentities($vo['title']); ?>"> 
            </div>
            <div class="content">
                <a href="<?php echo htmlentities($vo['url']); ?>" class="header"><?php echo msubstr($vo['title'],0,8); ?></a>
            </div>
            <div class="extra content">
                <i class="time icon"></i><?php echo htmlentities($vo['description']); ?>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="ui container moreBox">
            <a href="<?php echo htmlentities($columList['legend']['url']); ?>" class="fluid ui  button  ">更多<?php echo htmlentities($columList['legend']['title']); ?></a>
        </div>
    </div>


    <div class="ui aligned grid">
        <div class="row stackable ">
            <div class="nine wide column">
                <div class="ui segment">
                    <a href="<?php echo htmlentities($columList['ukcms']['url']); ?>" class="ui top attached large  label blue"><?php echo htmlentities($columList['ukcms']['title']); ?></a>
                    <div class="ui styled  fluid accordion"  id="infoAccordion">
                        <?php $sql_list=model('ModelField')->getDataList("article", "status='1' and create_time <1553154728", "id,cname,title", "content", "orders,id desc", "3", null, 9, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
                        <div class="<?php if(0==$key): ?>active<?php endif; ?> title"><i class="dropdown icon"></i> <?php echo htmlentities($vo['title']); ?> </div>
                        <div class="<?php if(0==$key): ?>active<?php endif; ?> content">
                            <?php echo $vo['content']; ?> 
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="seven wide column">
                <form class="ui form " method="post" action="<?php echo htmlentities($columList['guestbook']['url']); ?>">
                    <div class="field">
                        <input type="text" name="modelField[title]" placeholder="标题*">
                    </div>
                    <div class="field">
                        <textarea rows="3" name="modelField[content]" placeholder="留言内容*"></textarea>
                    </div>
                    <div class="field">
                        <input type="text" name="modelField[name]" placeholder="姓名">
                    </div>
                    <?php if(config('captcha_signin_model')): ?>
                    <div class="inline fields">
                        <div class="field"><input type="text" placeholder="验证码" name="captcha" size="6" placeholder="验证码"></div>
                        <div class="field"><img src="<?php echo captcha_src(); ?>" width="129" height="40"  id="captcha" style="cursor: pointer;" onclick="this.src = '<?php echo captcha_src(); ?>?m=' + Math.random();" title="点击刷新" alt="captcha" /></div>
                    </div>
                    <?php endif; ?>
                    <?php echo token(); ?>
                    <button class="ui blue button" type="submit">提交留言</button>
                </form>
            </div>
        </div>
    </div>

    <div class="ui segment">
        <a href="<?php echo htmlentities($columList['product']['url']); ?>" class="ui top attached large  label blue"><?php echo htmlentities($columList['product']['title']); ?></a>
        <div class="ui four column grid doubling">
            <?php $sql_list=model('ModelField')->getDataList("product", "status='1' and create_time <1553154728", "id,cname,title,description,cover,price,places", "", "orders,id desc", "4", null, 11, "");  $sum=count($sql_list);  foreach($sql_list as $key=>$vo): ?>
            <div class="column">
                <div class="ui fluid image">
                    <a href="<?php echo htmlentities($vo['url']); ?>" class="ui medium image">
                        <?php if(!(empty($vo['places']) || (($vo['places'] instanceof \think\Collection || $vo['places'] instanceof \think\Paginator ) && $vo['places']->isEmpty()))): ?>
                        <div class="ui teal right corner label">
                            <i class="heart  icon"></i>
                        </div>
                        <?php endif; ?>
                        <img class="ui medium rounded image"  src="/public/uploads/<?php echo htmlentities($vo['cover']['thumb']); ?>" alt="<?php echo htmlentities($vo['title']); ?>">
                        <div class="ui bottom attached large  label grey titFilter"><?php echo msubstr($vo['title'],0,18); ?></div>
                        <div class="ui blue  ribbon label"><i class="yen icon"></i><?php echo htmlentities($vo['price']); ?> </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

        <div class="ui inverted vertical blue footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">联系我们</h4>
                        <div class="ui inverted link list">
                            <a href="http://www.ukcms.com" class="item"><i class="linkify icon"></i> ukcms.com</a>
                            <a href="mail:yxcms@qq.com" class="item"><i class="mail outline icon"></i> yxcms@qq.com</a>
                            <a href="#" class="item"><i class="comments icon"></i> YXcms1999</a>
                        </div>
                    </div>
                    <div class="four wide column">
                        <h4 class="ui inverted header">环境要求</h4>
                        <div class="ui inverted link list">
                            <p>
                                PHP 5.6+ & Mysql<br>
                                Apache / Nginx<br>
                                Versions FF, Chrome, IE (aka 10+)
                            </p>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">版权信息</h4>
                        <p>
                            <?php echo config('sysinfo'); ?><br>
                            php开源内容管理系统<br>
                            Copyright @ 2017 灵吉网络科技有限公司. All right reserved. <?php echo config('web_site_icp'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo config('web_site_statistics'); ?>
    </body>
</html> 