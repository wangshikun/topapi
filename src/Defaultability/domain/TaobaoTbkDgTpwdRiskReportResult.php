<?php
namespace Topsdk\Topapi\Defaultability\domain;

class TaobaoTbkDgTpwdRiskReportResult {

    /**
        x
     **/
    public $status_list;


    public function getStatusList() : array{
        return $this->status_list;
    }

    public function setStatusList(array $statusList){
        $this->status_list = $statusList;
    }


}

