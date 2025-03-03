<?php
namespace Topsdk\Topapi\Ability2475\domain;

class TaobaoTbkScVegasSendReportResult {

    /**
        是否成功
     **/
    public $success;

    /**
        model
     **/
    public $model;

    /**
        msgInfo
     **/
    public $msg_info;

    /**
        msgCode
     **/
    public $msg_code;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModel() : TaobaoTbkScVegasSendReportRightsSendRptDto{
        return $this->model;
    }

    public function setModel(TaobaoTbkScVegasSendReportRightsSendRptDto $model){
        $this->model = $model;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }


}

