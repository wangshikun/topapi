<?php
namespace Topsdk\Topapi\Ability1826\domain;

class TaobaoTbkDgVegasTljStopUpdateStatusResult {

    /**
        暂停成功
     **/
    public $update_success;


    public function getUpdateSuccess() : bool{
        return $this->update_success;
    }

    public function setUpdateSuccess(bool $updateSuccess){
        $this->update_success = $updateSuccess;
    }


}

