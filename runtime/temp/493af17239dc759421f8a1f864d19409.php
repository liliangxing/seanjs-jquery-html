<?php /*a:2:{s:59:"D:\download\ukcms\application\install\view\index\step2.html";i:1553153629;s:54:"D:\download\ukcms\application\install\view\layout.html";i:1553153629;}*/ ?>
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
<li class="am-btn"><i class="am-icon-circle-o-notch am-icon-fw"></i>  环境检测</li>
<li class="am-btn active"><i class="am-icon-database am-icon-fw"></i> 创建数据库</li>
<li class="am-btn"><i class="am-icon-check am-icon-fw"></i> 安装完成</li>

                    </ul>
                </div>
                <div class="am-u-md-9 am-u-sm-12">
                    
<form class="am-form am-form-horizontal"  action="" method="post" target="_self" >
    <div class="am-form-group">
        <label class="am-u-sm-3  am-u-lg-2 am-form-label">数据库类型</label>
        <div class="am-u-sm-9  am-u-lg-10">
            <select  name="db[]">
                <option value="mysql">MySql</option>
            </select>
        </div>
    </div>

    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库地址</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="db[]" value="127.0.0.1" placeholder="localhost">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库名</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="db[]" value="" placeholder="数据库名">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库用户名</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="db[]" value="" placeholder="数据库用户名">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库密码</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="password" name="db[]" value="" placeholder="数据库密码">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库端口</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="db[]" value="3306" placeholder="3306">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">数据库表前缀</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="db[]" value="uk_" placeholder="uk_">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">演示数据</label>
        <div class="am-u-sm-9 am-u-lg-10" style="line-height: 45px">
            <input type="checkbox" name="ifdemo" checked value="1" >
        </div>
    </div>
    <hr>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">后台登录账户</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="text" name="acc[]" value="" placeholder="3-15位字母/数字/下划线/破折号">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">后台登录密码</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="password" name="acc[]" value="" placeholder="6-20位,组合尽量复杂">
        </div>
    </div>
    <div class="am-form-group">
        <label class="am-u-sm-3 am-u-lg-2 am-form-label">确认登录密码</label>
        <div class="am-u-sm-9 am-u-lg-10">
            <input type="password" name="acc[]" value="" placeholder="再次确认您的密码">
        </div>
    </div>
    <div class="am-fr">
        <a class="am-btn am-btn-success " href="<?php echo htmlentities($baseUrl); ?>step1.html">上一步</a>
        <button type="submit" class="am-btn am-btn-primary" >开始安装</button>
    </div>
</form>

                </div>
            </div>
        </div>

    </body>
</html>