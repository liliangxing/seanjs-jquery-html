<?php
session_start();
$video="http://cdn-media.jingzong.org/mp4/02/02-041/02-041-0508.mp4";
$title="视频";
$cover_path="/public/static/home/defaults/projekktor/intro.png";
if (isset($_GET['video'])==TRUE) {$video=urldecode($_GET['video']); }else{
    header('Content-Type:application/json');//这个类型声明非常关键
    echo(file_get_contents("video_data.txt"));
    exit();
}
$get_title =  null;
if (isset($_GET['title'])==TRUE) {
    $get_title =  urldecode($_GET['title']);
    $title="[".$title."]".$get_title; }
if (isset($_GET['cover_path'])==TRUE) {$cover_path=urldecode($_GET['cover_path']);}
$data = array("title"=>$title,"video"=>$video,"cover_path"=>$cover_path);
//将数组存到指定的text文件中
file_put_contents("video_data.txt",json_encode($data));
//获取数据
$datas = json_decode(file_get_contents("video_data.txt"),true);
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
    <script type="text/javascript" src="/public/static/home/defaults/beizhi/content_common.js"></script>
    <title><?php echo $title;?></title>
</head>
<body id="news">
<?php print_r($datas);?>
</body>
</html>