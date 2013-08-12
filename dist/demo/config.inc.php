<?php
/**
 * IOC框架需要使用到的常量。
 */
define("ROOT", str_replace("\\", "/", dirname(__FILE__)) . "/");

require_once(ROOT. "inc/core/ioc/applicationcontextfactory.class.php");
$applicationContextFactory = ApplicationContextFactory::getIntance();
$context = $applicationContextFactory->create();
$context->setConfigPath(ROOT . 'conf/ioc', ROOT);
?>