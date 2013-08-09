# PHP版本的IOC框架 #

## 项目依赖 ##
在构建当前项目前，需要先在当前目录下的GIT命令行中clone以下依赖项目的分支：

 * 缓存框架PHP-CACHE：git clone https://github.com/peigong/php-cache.git --branch 0.0.2 ./libs/php-cache-0.0.2

## 使用说明 ##
 * 需要使用定义WEB系统根目录的静态常量ROOT。
 * 在正式的商业系统中使用时，需要在WEB服务器上（如Apache、Ngix），把IOC配置目录（如conf）设置为禁止外部访问。
 * 框架默认的IOC配置目录是WEB系统根目录ROOT下的conf目录。

## 分发目录的说明 ##
分发目录dist中的目录用途介绍如下：

 * inc：纯粹的PHP IOC类库。
 * inc.all：包含了所有依赖项目的PHP IOC类库。
 * demo：对PHP IOC类库用法的演示。

## 版本更新记录 ##
### 0.0.4 ###
 * 增加了添加IOC配置目录接口方法setConfigPath。
 * 调整了使用缓存机制的位置。
 * 引入grunt构建工具。
 * 版本管理迁移到github。

### 0.0.3 ###
 * 增加了抽象类的配置和继承的机制。
 * 将ClassFactory命名修改成了ApplicationContext。
 * 增加了ApplicationContext工厂。
 * 将获取实例的方法由get($id)修改为getBean($id)。
 * 增加了IInjectEnable接口，规范实现类必须实现__set($prop, $val)方法。

### 0.0.2 ###
 * 将DEMO类中的公共属性修订为私有属性，并加入setter和getter方法。

### 0.0.1 ###
 * 实现了IOC的基本功能。

## 作者信息 ##
 * 电子邮件：peigong@foxmail.com
 * 微博地址：[http://weibo.com/u/3030510210](http://weibo.com/u/3030510210)
 * 博客地址：[http://www.peigong.tk](http://www.peigong.tk)
 * 项目地址：[https://github.com/peigong/php-ioc](https://github.com/peigong/php-ioc)
