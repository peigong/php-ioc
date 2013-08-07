# PHP IOC框架版本更新记录 #
## 0.0.0.4 ##
 * 增加了添加IOC配置目录接口方法setConfigPath。
 * 调整了使用缓存机制的位置。
 * 引入grunt构建工具。
 * 版本管理迁移到github。
## 0.0.0.3 ##
 * 增加了抽象类的配置和继承的机制。
 * 将ClassFactory命名修改成了ApplicationContext。
 * 增加了ApplicationContext工厂。
 * 将获取实例的方法由get($id)修改为getBean($id)。
 * 增加了IInjectEnable接口，规范实现类必须实现__set($prop, $val)方法。
## 0.0.0.2 ##
 * 将DEMO类中的公共属性修订为私有属性，并加入setter和getter方法。
## 0.0.0.1 ##
 * 实现了IOC的基本功能。