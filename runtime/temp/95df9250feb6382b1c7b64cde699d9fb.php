<?php /*a:2:{s:59:"D:\download\ukcms\application\install\view\index\step1.html";i:1553153629;s:54:"D:\download\ukcms\application\install\view\layout.html";i:1553153629;}*/ ?>
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UKcms安装向导</title>

        <!-- Set render engine for 360 browser -->
        <meta name="renderer" content="webkit">
        <link rel="stylesheet" href="/public/static/amazeui/css/amazeui.min.css">
        <style>
            body{padding-bottom:20px}
            p{ text-indent: 30px; margin:5px 0}
            .top{text-align:center;height:60px; border-bottom:1px solid #e1e0e0; background-color:#199adc; margin-bottom:20px}
            .top h2{ color:#fff;line-height:60px; font-weight:500}
            .am-list-border li{color:#666}
            .am-list-border .active{background-color:#128ac7; color:#fff}

            .am-form-label{font-size: 16px; font-weight: 500; padding:0; text-align: right}
            .success{color:green}
            .error{color:red}
        </style>
    </head>
    <body>
        <div class="top"><h2>UKcms安装向导</h2></div>

        <div class="am-container">
            <div class="am-g">
                <div class="am-u-md-3 am-hide-sm-only">
                    <ul class="am-list am-list-static am-list-border">
                           
<li class="am-btn"><i class="am-icon-file-o am-icon-fw"></i> 使用协议</li>
<li class="am-btn active"><i class="am-icon-circle-o-notch am-icon-fw"></i>  环境检测</li>
<li class="am-btn"><i class="am-icon-database am-icon-fw"></i> 创建数据库</li>
<li class="am-btn"><i class="am-icon-check am-icon-fw"></i> 安装完成</li>

                    </ul>
                </div>
                <div class="am-u-md-9 am-u-sm-12">
                    
<table class="am-table am-table-bordered am-table-radius">

    <thead>
        <tr>
            <th>环境项目</th>
            <th>所需配置</th>
            <th>当前配置</th>
        </tr>
    </thead>
    <tbody>
        <?php if(is_array($env) || $env instanceof \think\Collection || $env instanceof \think\Paginator): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo htmlentities($item[0]); ?></td>
            <td><?php echo htmlentities($item[1]); ?></td>
            <td class="<?php echo htmlentities($item[4]); ?>"><?php echo htmlentities($item[3]); ?></td>       
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<table class="am-table am-table-bordered am-table-radius">
    <thead>
        <tr>
            <th>PHP支持</th>
            <th>类型</th>
            <th>检查结果</th>
        </tr>
    </thead>
    <tbody>
        <?php if(is_array($func) || $func instanceof \think\Collection || $func instanceof \think\Paginator): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo htmlentities($item[0]); ?></td>
            <td><?php echo htmlentities($item[3]); ?></td>
            <td class="<?php echo htmlentities($item[2]); ?>"><?php echo htmlentities($item[1]); ?></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<present name="dirfile">
    <table class="am-table am-table-bordered am-table-radius">
        <thead>
            <tr>
                <th>目录/文件</th>
                <th>所需状态</th>
                <th>当前状态</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($dirfile) || $dirfile instanceof \think\Collection || $dirfile instanceof \think\Paginator): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($item[3]); ?></td>
                <td class="success">可写</td>
                <td class="<?php echo htmlentities($item[2]); ?>"><?php echo htmlentities($item[1]); ?></td>   
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</present>

<div class="am-fr">
    <a class="am-btn am-btn-success am-btn-large" href="<?php echo htmlentities($baseUrl); ?>index.html">上一步</a>
    <a class="am-btn am-btn-primary am-btn-large" href="<?php echo htmlentities($baseUrl); ?>step2.html">下一步</a>
</div>

                </div>
            </div>
        </div>

    </body>
</html>