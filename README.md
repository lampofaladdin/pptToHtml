# showPPT

#### 项目介绍
将PPT文件转换为图片，并在页面中轮播展示
ps:根据客户的要求查资料写出来的，新手前端，大家轻喷。

#### 软件架构
系统：windows7/windows10
语言：PHP
运行环境：wampserver
软件支持：office2007+、swiper

#### 安装教程

安装准备：
1. 将本项目放置进PHP运行环境目录（例如：E:\wamp64\www）
2. 运行——comexp.msc -32——计算机——我的电脑——DCOM配置——Microsoft PowerPoint幻灯片（或Microsoft PowerPoint Slide）——右击——属性——标识——交互式用户——保存
3. 运行——comexp.msc -32——计算机——我的电脑——DCOM配置——Microsoft PowerPoint幻灯片（或Microsoft PowerPoint Slide）——右击——属性——安全——编辑——添加everyone用户——保存（三个选项都编辑一遍）
4. 需要在php.ini中开启 extension=php_com_dotnet.dll. com.allow_dcom = true
5. 如有疑问请查看参考文件中的链接
#### 使用说明

1. 访问http://localhost/showPPT/admin.php 上传PPT文件
2. 上传完毕后会自动跳转到主页
3. over- -

#### 参与贡献

1. Fork 本项目
2. 新建 Feat_xxx 分支
3. 提交代码
4. 新建 Pull Request


####参考文件

https://www.cnblogs.com/dwj192/p/7019374.html //php ppt转图片
https://www.swiper.com.cn/ //swiper文档