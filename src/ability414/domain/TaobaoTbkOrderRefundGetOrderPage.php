<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkOrderRefundGetOrderPage {

    /**
        真正的业务数据结构
     **/
    public $result;

    /**
        上一页
     **/
    public $pre_page;

    /**
        下一页
     **/
    public $next_page;

    /**
        页码
     **/
    public $page_no;

    /**
        每页订单量
     **/
    public $page_size;

    /**
        是否有下一页
     **/
    public $has_next;

    /**
        位点
     **/
    public $position_index;

    /**
        是否有上一页
     **/
    public $has_pre;


    public function getResult() : array{
        return $this->result;
    }

    public function setResult(array $result){
        $this->result = $result;
    }

    public function getPrePage() : int{
        return $this->pre_page;
    }

    public function setPrePage(int $prePage){
        $this->pre_page = $prePage;
    }

    public function getNextPage() : int{
        return $this->next_page;
    }

    public function setNextPage(int $nextPage){
        $this->next_page = $nextPage;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }

    public function getPositionIndex() : string{
        return $this->position_index;
    }

    public function setPositionIndex(string $positionIndex){
        $this->position_index = $positionIndex;
    }

    public function getHasPre() : bool{
        return $this->has_pre;
    }

    public function setHasPre(bool $hasPre){
        $this->has_pre = $hasPre;
    }


}

