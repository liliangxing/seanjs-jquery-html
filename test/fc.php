<?php


header('Content-Type:text/html;charset=utf-8');
/*
随机生成福彩双色球号码
*/
$red = range(0, 33);
//或者这样定义：$red = array(0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,33);
unset($red[0]);//删除下标为0的第一个元素，因为rand取得是键名而不是键值
$blue = mt_rand(1, 16);//随机产生的蓝色的球号
$red_6 = array_rand($red, 6);//取出六个红色球
?>
<div style="background-color:red;color:white;width:160px;float:left;text-align:center;">
    <?php
    foreach ($red_6 as $v) {
        echo "$v ";
}
    ?>
</div>
<div style="background-color:blue;color:white;width:40px;float:left;text-align:center">
    <?php
    echo "$blue";
    ?>
</div>