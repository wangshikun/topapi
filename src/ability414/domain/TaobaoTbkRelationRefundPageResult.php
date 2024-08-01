<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkRelationRefundPageResult {

    /**
        pageNo
     **/
    public $page_no;

    /**
        pageSize
     **/
    public $page_size;

    /**
        总值
     **/
    public $total_count;

    /**
        订单列表
     **/
    public $results;


    public function getPageNo() : string{
        return $this->page_no;
    }

    public function setPageNo(string $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : string{
        return $this->page_size;
    }

    public function setPageSize(string $pageSize){
        $this->page_size = $pageSize;
    }

    public function getTotalCount() : string{
        return $this->total_count;
    }

    public function setTotalCount(string $totalCount){
        $this->total_count = $totalCount;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

