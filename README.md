# ukcms
UKcms遵循GPL开源协议。GPL协议允许代码的开源/免费使用和引用/修改/衍生代码的开源/免费使用，但不允许修改后和衍生的代码做为闭源的商业软件发布和销售。
灵吉网络科技有限公司拥有UKcms的全部知识产权，包括商标和著作权。
灵吉网络科技不对用户使用UKcms进行非法用途所产生的任何法律后果负责。

将程序用于学习、研究等非盈利目的且保留版权信息："Powered By UKcms"的情况下用户可以免费使用UKcms。
程序若用于企业建站、个人盈利类网站等盈利用途的需要购买授权。

*  A记录       103.21.140.161
@  A记录     103.21.140.161
g4  A记录      203.195.163.142
www  A记录       103.21.140.161
@  MX记录  10      mail.time24.cn.
@  TXT记录      v=spf1 a mx ~all

## 后台登录
http://localhost:8890/admin.php
```
账号：admin  密码：123456

kezhu.apk 2020-03-03 完善版本，无对比删除未下载完文件的功能
完善后台播放
2020-03-04 去掉android:configChanges="orientation|keyboardHidden|screenSize"，在install debug才得稳定版。
保留android:configChanges="orientation"
使用okhttp3下载体验更好
 mainActivity增加android:launchMode="singleTask"
 1.退出播放。偶尔整个退
 2.下载左右两文件的问题
 新窗口全屏
 增加循环播放
 居中美化，缓存模式优化
 1.playvideo取消新建窗口 //end
 2.分享出去的链接要简洁 //end
 3.url不一致，导致文件为0   //end
 4.比较删除的条件做兼容   //end
 5.科注全改为okhttp下载    //end
 6.地址网络不稳定：  //end
 
 7.退出播放右侧增加关闭图标   //end
 8.playvideo=1新窗口打开  //end
 
 11.stop去掉，加exit  //end
 12.初始化的时候下载好 //end
 12.fullsreen要记录进度，用resume模式 //end
 
 9.栏目导航覆盖遮罩不好高度  //end
 13.app用回select控件过优化 //end
 1.下一首就不是单曲  //end
 2.异步比较文件完整度  //end
 3，返回有点问题  //end 
 1.isplay才显示
 2.剪贴板为null闪
 
 kezhufanyin.apk
 自动设置FrameLayout的bottomMargin值，修复直接拿，又匹配不到媒体库，删除文件，重新走下载流程
 全屏完美
1.梵音加个文件下载进度  //end
2.loading的颜色，老可不可以改 //end
1.分享微信，用原始文字调试，原ponymusic可以的。//end
4.pony做兼容，测试分享文件 //end
github地址修改
剪贴板为null的修复

