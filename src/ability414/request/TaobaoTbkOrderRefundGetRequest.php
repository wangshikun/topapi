<?php
namespace Topsdk\Topapi\Ability414\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability414\Domain\TaobaoTbkOrderRefundGetPublisherRefundOrderQueryOption;

class TaobaoTbkOrderRefundGetRequest {

    /**
        全量维权订单查询入参
     **/
    private $publisherRefundOrderQueryOption;


    public function getPublisherRefundOrderQueryOption() : TaobaoTbkOrderRefundGetPublisherRefundOrderQueryOption{
        return $this->publisherRefundOrderQueryOption;
    }

    public function setPublisherRefundOrderQueryOption(TaobaoTbkOrderRefundGetPublisherRefundOrderQueryOption $publisherRefundOrderQueryOption){
        $this->publisherRefundOrderQueryOption = $publisherRefundOrderQueryOption;
    }


    public function getApiName() : string {
        return "taobao.tbk.order.refund.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->publisherRefundOrderQueryOption)) {
            $requestParam["publisher_refund_order_query_option"] = TopUtil::convertStruct($this->publisherRefundOrderQueryOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

