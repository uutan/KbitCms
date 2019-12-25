## 动力建站

企业建站功能。实现栏目管理，内容管理，组件管理，模板管理。

### 前言

基于 [RageFrame2](https://github.com/jianyan74/rageframe2) 的一款免费开源的插件

### 安装

1、安装 RageFrame (2.4.0以上)

项目介绍：https://github.com/jianyan74/rageframe2

安装文档：https://github.com/jianyan74/rageframe2/blob/master/docs/guide-zh-CN/start-installation.md

2、克隆当前项目

```
git clone https://github.com/uutan/KbitCms.git
```

3、拷贝进 RageFrame 根目录的 addons 目录下

4、RageFrame 后台进入 系统管理->应用管理->安装插件->找到动力建站进行安装

5、刷新整个后台页面后进行查看

### 支持企业常用模型
带单页模板视图的模型，有url可以访问

- [x] 单页
- [x] 文章
- [x] 产品
- [x] 图集
- [x] 下载
- [x] 招聘
- [x] 留言版


### 支持企业常用组件
基于单页模板视图区域展示的内容为组件。

- [x] 栏目
- [x] 广告
- [x] 友情链接


### 模板使用

后台通过第三方代码编辑器，编辑php模板视图，以实现模板视图自定义。

默认模板视图目录为：
```
frontend/views/template
```
也可以将整理个目录复制一份，用于制作新模板视图。

资源存放于:
```$xslt
frontend/resources
```
目录下。