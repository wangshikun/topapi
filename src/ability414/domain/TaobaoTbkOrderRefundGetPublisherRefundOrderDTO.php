<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkOrderRefundGetPublisherRefundOrderDTO {

    /**
        维权编号，是当前订单发生维权退款的编号，非淘宝订单编号，如订单发生多次维权，则会产生多个维权编号
     **/
    public $refund_suit_id;

    /**
        淘宝父订单编号(买家在淘宝后台显示的订单编号)
     **/
    public $tb_trade_parent_id;

    /**
        淘宝子订单编号
     **/
    public $tb_trade_id;

    /**
        订单创建时间
     **/
    public $tb_trade_create_time;

    /**
        订单结算时间
     **/
    public $earning_time;

    /**
        维权创建时间
     **/
    public $tk_refund_time;

    /**
        维权完成时间
     **/
    public $tk_refund_suit_time;

    /**
        订单更新时间
     **/
    public $modified_time;

    /**
        商品标题
     **/
    public $item_title;

    /**
        推广者角色(二方、三方)
     **/
    public $tk_order_role;

    /**
        维权创建(淘客结算回执) 4, 维权成功(淘客结算回执) 2, 维权失败(淘客结算回执) 3, 发生多次维权，待处理 11, 从淘客处补扣（钱已结给淘客） 等待扣款 12, 从淘客处补扣（钱已结给淘客） 扣款成功 13, 从卖家处补扣（钱已结给卖家） 等待扣款 14, 从卖家处补扣（钱已结给卖家） 扣款成功 15
     **/
    public $refund_status;

    /**
        结算金额(订单确认收货后的成交金额）
     **/
    public $tb_trade_finish_price;

    /**
        维权金额(买家申请维权退款的金额)
     **/
    public $refund_fee;

    /**
        结算预估收入=结算金额*提成。以订单确认收货后的成交金额为基数，预估您可能获得的收入。
     **/
    public $pub_share_fee;

    /**
        应退还佣金(不含技术服务费和渠道专项服务费)
     **/
    public $tk_commission_fee_refund;

    /**
        应退还补贴(不含技术服务费和渠道专项服务费)
     **/
    public $tk_subsidy_fee_refund;

    /**
        应退还佣金对应的技术服务费
     **/
    public $tk_commission_alimm_refund_fee;

    /**
        应退还补贴对应的技术服务费
     **/
    public $tk_subsidy_alimm_refund_fee;

    /**
        应退还佣金对应的渠道专项服务费
     **/
    public $tk_commission_agent_refund_fee;

    /**
        应退还补贴对应的渠道专项服务费
     **/
    public $tk_subsidy_agent_refund_fee;

    /**
        应退还预估收入：订单发生维权退款应退还的预估收入（佣金+补贴，含技术服务费和渠道专项服务费）
     **/
    public $show_return_fee;

    /**
        渠道关系id
     **/
    public $relation_id;

    /**
        会员关系id
     **/
    public $special_id;


    public function getRefundSuitId() : string{
        return $this->refund_suit_id;
    }

    public function setRefundSuitId(string $refundSuitId){
        $this->refund_suit_id = $refundSuitId;
    }

    public function getTbTradeParentId() : string{
        return $this->tb_trade_parent_id;
    }

    public function setTbTradeParentId(string $tbTradeParentId){
        $this->tb_trade_parent_id = $tbTradeParentId;
    }

    public function getTbTradeId() : string{
        return $this->tb_trade_id;
    }

    public function setTbTradeId(string $tbTradeId){
        $this->tb_trade_id = $tbTradeId;
    }

    public function getTbTradeCreateTime() : string{
        return $this->tb_trade_create_time;
    }

    public function setTbTradeCreateTime(string $tbTradeCreateTime){
        $this->tb_trade_create_time = $tbTradeCreateTime;
    }

    public function getEarningTime() : string{
        return $this->earning_time;
    }

    public function setEarningTime(string $earningTime){
        $this->earning_time = $earningTime;
    }

    public function getTkRefundTime() : string{
        return $this->tk_refund_time;
    }

    public function setTkRefundTime(string $tkRefundTime){
        $this->tk_refund_time = $tkRefundTime;
    }

    public function getTkRefundSuitTime() : string{
        return $this->tk_refund_suit_time;
    }

    public function setTkRefundSuitTime(string $tkRefundSuitTime){
        $this->tk_refund_suit_time = $tkRefundSuitTime;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getItemTitle() : string{
        return $this->item_title;
    }

    public function setItemTitle(string $itemTitle){
        $this->item_title = $itemTitle;
    }

    public function getTkOrderRole() : string{
        return $this->tk_order_role;
    }

    public function setTkOrderRole(string $tkOrderRole){
        $this->tk_order_role = $tkOrderRole;
    }

    public function getRefundStatus() : int{
        return $this->refund_status;
    }

    public function setRefundStatus(int $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getTbTradeFinishPrice() : string{
        return $this->tb_trade_finish_price;
    }

    public function setTbTradeFinishPrice(string $tbTradeFinishPrice){
        $this->tb_trade_finish_price = $tbTradeFinishPrice;
    }

    public function getRefundFee() : string{
        return $this->refund_fee;
    }

    public function setRefundFee(string $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getPubShareFee() : string{
        return $this->pub_share_fee;
    }

    public function setPubShareFee(string $pubShareFee){
        $this->pub_share_fee = $pubShareFee;
    }

    public function getTkCommissionFeeRefund() : string{
        return $this->tk_commission_fee_refund;
    }

    public function setTkCommissionFeeRefund(string $tkCommissionFeeRefund){
        $this->tk_commission_fee_refund = $tkCommissionFeeRefund;
    }

    public function getTkSubsidyFeeRefund() : string{
        return $this->tk_subsidy_fee_refund;
    }

    public function setTkSubsidyFeeRefund(string $tkSubsidyFeeRefund){
        $this->tk_subsidy_fee_refund = $tkSubsidyFeeRefund;
    }

    public function getTkCommissionAlimmRefundFee() : string{
        return $this->tk_commission_alimm_refund_fee;
    }

    public function setTkCommissionAlimmRefundFee(string $tkCommissionAlimmRefundFee){
        $this->tk_commission_alimm_refund_fee = $tkCommissionAlimmRefundFee;
    }

    public function getTkSubsidyAlimmRefundFee() : string{
        return $this->tk_subsidy_alimm_refund_fee;
    }

    public function setTkSubsidyAlimmRefundFee(string $tkSubsidyAlimmRefundFee){
        $this->tk_subsidy_alimm_refund_fee = $tkSubsidyAlimmRefundFee;
    }

    public function getTkCommissionAgentRefundFee() : string{
        return $this->tk_commission_agent_refund_fee;
    }

    public function setTkCommissionAgentRefundFee(string $tkCommissionAgentRefundFee){
        $this->tk_commission_agent_refund_fee = $tkCommissionAgentRefundFee;
    }

    public function getTkSubsidyAgentRefundFee() : string{
        return $this->tk_subsidy_agent_refund_fee;
    }

    public function setTkSubsidyAgentRefundFee(string $tkSubsidyAgentRefundFee){
        $this->tk_subsidy_agent_refund_fee = $tkSubsidyAgentRefundFee;
    }

    public function getShowReturnFee() : string{
        return $this->show_return_fee;
    }

    public function setShowReturnFee(string $showReturnFee){
        $this->show_return_fee = $showReturnFee;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }


}

