<?php
namespace Topsdk\Topapi\Ability3261\domain;

class TaobaoTbkDgCpaActivityReportPageResult {

    /**
        数据列表
     **/
    public $results;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

