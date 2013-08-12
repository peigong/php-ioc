<?php
require_once(ROOT. "classes/basic.class.php");
require_once(ROOT . "inc/core/ioc/applicationcontext.inc.php");

class Sample extends Basic implements IInjectEnable{
    private $prop;
    public function toString(){
        return "I in sample!";
    }
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    public function __get($prop){
        return $this->$prop;
    }
}
?>
