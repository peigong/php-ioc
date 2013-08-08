# PHP IOC框架说明 #

## 项目依赖 ##
在构建当前项目前，需要先在当前目录下的GIT命令行中clone以下依赖项目的分支：

 * 缓存框架PHP-CACHE：git clone https://github.com/peigong/php-cache.git --branch 0.0.1 ./libs/php-cache-0.0.1

## 使用说明 ##
 * 需要使用定义WEB系统根目录的静态常量ROOT。
 * 在正式的商业系统中使用时，需要在WEB服务器上（如Apache、Ngix），把IOC配置目录（如conf）设置为禁止外部访问。
 * 框架默认的IOC配置目录是WEB系统根目录ROOT下的conf目录。

## 分发目录的说明 ##

## 作者信息 ##
 * 电子邮件：peigong@foxmail.com
 * 微博地址：[http://weibo.com/u/3030510210](http://weibo.com/u/3030510210)
 * 博客地址：[http://www.peigong.tk](http://www.peigong.tk)
 * 项目地址：[https://github.com/peigong/php-ioc](https://github.com/peigong/php-ioc)
