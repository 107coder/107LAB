=======================================================
   php基础示例-- PHP与MySQL实现一个新闻管理系统
=======================================================
实现目标： 使用php的mysql操作函数实现一个新闻信息的发布、浏览、修改和删除操作

实现步骤：
 一、 创建数据库和表
	1. 创建数据库：newsdb
	2. 创建表格：news
		字段：新闻id，标题、关键字、作者、发布时间、新闻内容
		
		create database newsdb;
		use newsdb;
		CREATE TABLE `news` (
		  `id` int(10) unsigned NOT NULL auto_increment,
		  `title` varchar(64) NOT NULL,
		  `keywords` varchar(64) NOT NULL,
		  `author` varchar(16) NOT NULL,
		  `addtime` int(10) unsigned NOT NULL,
		  `content` text NOT NULL,
		  PRIMARY KEY  (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 二、 创建php文件编写代码
	--------------
		|--dbconfig.php* 公共配置信息文件，数据库连接配置信息
		|
		|--menu.php* 网站公共导航栏
		|
		|--index.php* 浏览新闻的文件
		|
		|--add.php* 发布新闻表单页
		|
		|--edit.php 编辑新闻的表单页
		|
		|--action.php 执行新闻信息添加、修改、删除等操作的动作处理页
		|
		