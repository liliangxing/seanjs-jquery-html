<?php
session_start();
$video="http://cdn-media.jingzong.org/mp4/02/02-041/02-041-0508.mp4";
$title="视频";
if (isset($_GET['video'])==TRUE) {$video=urldecode($_GET['video']); }
if (isset($_GET['title'])==TRUE) {$title="[".$title."]".urldecode($_GET['title']); }
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=10.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link href="/public/static/home/defaults/css/news.css" rel="stylesheet" type="text/css" />
    <link href="/public/static/home/defaults/css/content.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/public/static/home/defaults/projekktor/jquery-1.9.1.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="/public/static/home/defaults/beizhi/content_common.js"></script>
    <title><?php echo $title;?></title>
</head>
<body>
<body id="news">
<div class="Listpage">
<link href="/public/static/home/defaults/projekktor/projekktor.style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/public/static/home/defaults/projekktor/projekktor-1.3.09.js"></script>
<video id="player_a" class="projekktor" poster="/public/static/home/defaults/projekktor/intro.png"
       title="<?php echo $video;?> " width="100%" height="680" controls>
    <source src="<?php echo $video;?> " type="video/mp4"/>
</video>
<script type="text/javascript">
    $(document).ready(function () {
        projekktor('#player_a'); // instantiation
    });
</script>

 <div class="page-bizinfo">
    <div class="text_down" style="word-wrap: break-word">下载地址：<br/>
        <a href="<?php echo $video;?> "><?php echo $video;?> </a> <br/>(请用在新的浏览器打开下载)
    </div>
 </div>
</div>
</body>
</html>