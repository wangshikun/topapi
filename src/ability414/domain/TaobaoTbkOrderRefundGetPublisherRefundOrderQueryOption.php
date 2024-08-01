<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkOrderRefundGetPublisherRefundOrderQueryOption {

    /**
        跳转类型，当向前或者向后翻页必须提供,-1: 向前翻页,1：向后翻页
     **/
    public $jump_type;

    /**
        1全部订单
     **/
    public $order_scene;

    /**
        单页订单量，1-100，上限100条
     **/
    public $page_size;

    /**
        1-维权发起时间，2-订单结算时间（正向订单），3-维权完成时间，4-订单创建时间，5-订单更新时间 （注意：入参startTime小于2022年12月20日0点时，query_type只能为1、2、3；入参startTime大于等于2022年12月20日0点时，query_type可以为1、2、3、4、5)
     **/
    public $query_type;

    /**
        查询页数
     **/
    public $page_no;

    /**
        位点，除第一页之外，都需要传递；前端原样返回。
     **/
    public $position_index;

    /**
        开始时间
     **/
    public $start_time;

    /**
        1 表示2方，2表示3方，4表示不限
     **/
    public $member_type;

    /**
        结束时间
     **/
    public $end_time;


    public function getJumpType() : int{
        return $this->jump_type;
    }

    public function setJumpType(int $jumpType){
        $this->jump_type = $jumpType;
    }

    public function getOrderScene() : int{
        return $this->order_scene;
    }

    public function setOrderScene(int $orderScene){
        $this->order_scene = $orderScene;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getQueryType() : int{
        return $this->query_type;
    }

    public function setQueryType(int $queryType){
        $this->query_type = $queryType;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPositionIndex() : string{
        return $this->position_index;
    }

    public function setPositionIndex(string $positionIndex){
        $this->position_index = $positionIndex;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getMemberType() : int{
        return $this->member_type;
    }

    public function setMemberType(int $memberType){
        $this->member_type = $memberType;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }


}

