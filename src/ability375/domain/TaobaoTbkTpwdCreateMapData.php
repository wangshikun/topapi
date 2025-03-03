<?php
namespace Topsdk\Topapi\Ability375\domain;

class TaobaoTbkTpwdCreateMapData {

    /**
        非苹果ios14以上版本的设备（即其他ios版本、Android系统等），可以用此淘口令正常在复制到手淘打开
     **/
    public $password_simple;

    /**
        针对苹果ios14及以上版本的苹果设备，手淘将按照示例值信息格式读取淘口令(需包含：数字+羊角符+url，识别规则可能根据ios情况变更)。如需更改淘口令内文案、url等内容，请务必先验证更改后的淘口令在手淘可被识别打开！
     **/
    public $model;


    public function getPasswordSimple() : string{
        return $this->password_simple;
    }

    public function setPasswordSimple(string $passwordSimple){
        $this->password_simple = $passwordSimple;
    }

    public function getModel() : string{
        return $this->model;
    }

    public function setModel(string $model){
        $this->model = $model;
    }


}

