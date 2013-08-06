<?php
require_once(str_replace("\\", "/", dirname(__FILE__)) . "/./config.inc.php");
echo "YILAB PHP IOC DEMO<br />\n";
echo "=========================<br />\n";
$sample = $context->getBean("classes.sample");
echo "a) " . $sample->toString() . "<br />\n";
echo "b) " . $sample->prop->toString() . "<br />\n";
echo "c) " . $sample->common->toString() . "<br />\n";
?>
