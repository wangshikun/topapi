<?php
namespace Topsdk\Topapi\Ability3261\domain;

class TaobaoTbkDgCpaActivityReportRpcResult {

    /**
        分页模型
     **/
    public $data;


    public function getData() : TaobaoTbkDgCpaActivityReportPageResult{
        return $this->data;
    }

    public function setData(TaobaoTbkDgCpaActivityReportPageResult $data){
        $this->data = $data;
    }


}

