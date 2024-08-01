<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScOrderDetailsTemporaryGetPublisherOrderDto {

    /**
        订单在淘宝拍下付款的时间
     **/
    public $tb_paid_time;

    /**
        订单付款的时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单创建时间
     **/
    public $tk_paid_time;

    /**
        买家确认收货的付款金额（不包含运费金额）
     **/
    public $pay_price;

    /**
        结算预估收入=结算金额*提成。以买家确认收货的付款金额为基数，预估您可能获得的收入。因买家退款、您违规推广等原因，可能与您最终收入不一致。最终收入以月结后您实际收到的为准
     **/
    public $pub_share_fee;

    /**
        买家通过购物车购买的每个商品对应的订单编号，此订单编号并未在淘宝买家后台透出
     **/
    public $trade_id;

    /**
        二方：佣金收益的第一归属者； 三方：从其他淘宝客佣金中进行分成的推广者
     **/
    public $tk_order_role;

    /**
        订单确认收货后且商家完成佣金支付的时间
     **/
    public $tk_earning_time;

    /**
        推广位管理下的推广位名称对应的ID，同时也是pid=mm_1_2_3中的“3”这段数字
     **/
    public $adzone_id;

    /**
        从结算佣金中分得的收益比率
     **/
    public $pub_share_rate;

    /**
        维权标签，0 含义为非维权 1 含义为维权订单
     **/
    public $refund_tag;

    /**
        平台给与的补贴比率，如天猫、淘宝、聚划算等
     **/
    public $subsidy_rate;

    /**
        提成=收入比率*分成比率。指实际获得收益的比率
     **/
    public $tk_total_rate;

    /**
        商品所属的根类目，即一级类目的名称
     **/
    public $item_category_name;

    /**
        掌柜旺旺
     **/
    public $seller_nick;

    /**
        推广者的会员id
     **/
    public $pub_id;

    /**
        推广者赚取佣金后支付给阿里妈妈的技术服务费用的比率
     **/
    public $alimama_rate;

    /**
        平台出资方，如天猫、淘宝、或聚划算等
     **/
    public $subsidy_type;

    /**
        商品图片
     **/
    public $item_img;

    /**
        付款预估收入=付款金额*提成。指买家付款金额为基数，预估您可能获得的收入。因买家退款等原因，可能与结算预估收入不一致
     **/
    public $pub_share_pre_fee;

    /**
        买家拍下付款的金额（不包含运费金额）
     **/
    public $alipay_total_price;

    /**
        商品标题
     **/
    public $item_title;

    /**
        媒体管理下的对应ID的自定义名称
     **/
    public $site_name;

    /**
        商品数量
     **/
    public $item_num;

    /**
        补贴金额=结算金额*补贴比率
     **/
    public $subsidy_fee;

    /**
        技术服务费=结算金额*收入比率*技术服务费率。推广者赚取佣金后支付给阿里妈妈的技术服务费用
     **/
    public $alimama_share_fee;

    /**
        买家在淘宝后台显示的订单编号
     **/
    public $trade_parent_id;

    /**
        订单所属平台类型，包括天猫、淘宝、聚划算等
     **/
    public $order_type;

    /**
        订单创建的时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单创建时间
     **/
    public $tk_create_time;

    /**
        产品类型
     **/
    public $flow_source;

    /**
        成交平台
     **/
    public $terminal_type;

    /**
        通过推广链接达到商品、店铺详情页的点击时间
     **/
    public $click_time;

    /**
        已付款：指订单已付款，但还未确认收货 已收货：指订单已确认收货，但商家佣金未支付 已结算：指订单已确认收货，且商家佣金已支付成功 已失效：指订单关闭/订单佣金小于0.01元，订单关闭主要有：1）买家超时未付款； 2）买家付款前，买家/卖家取消了订单；3）订单付款后发起售中退款成功；3：订单结算，12：订单付款， 13：订单失效，14：订单成功
     **/
    public $tk_status;

    /**
        商品单价
     **/
    public $item_price;

    /**
        商品id
     **/
    public $item_id;

    /**
        推广位管理下的自定义推广位名称
     **/
    public $adzone_name;

    /**
        佣金比率
     **/
    public $total_commission_rate;

    /**
        商品链接
     **/
    public $item_link;

    /**
        媒体管理下的ID，同时也是pid=mm_1_2_3中的“2”这段数字
     **/
    public $site_id;

    /**
        店铺名称
     **/
    public $seller_shop_title;

    /**
        订单结算的佣金比率+平台的补贴比率
     **/
    public $income_rate;

    /**
        佣金金额=结算金额＊佣金比率
     **/
    public $total_commission_fee;

    /**
        预估内容专项服务费：内容场景专项技术服务费，内容推广者在内容场景进行推广需要支付给阿里妈妈专项的技术服务费用。专项服务费＝付款金额＊专项服务费率。
     **/
    public $tk_commission_pre_fee_for_media_platform;

    /**
        结算内容专项服务费：内容场景专项技术服务费，内容推广者在内容场景进行推广需要支付给阿里妈妈专项的技术服务费用。专项服务费＝结算金额＊专项服务费率。
     **/
    public $tk_commission_fee_for_media_platform;

    /**
        内容专项服务费率：内容场景专项技术服务费率，内容推广者在内容场景进行推广需要按结算金额支付一定比例给阿里妈妈作为内容场景专项技术服务费，用于提供与内容平台实现产品技术对接等服务。
     **/
    public $tk_commission_rate_for_media_platform;

    /**
        会员运营id
     **/
    public $special_id;

    /**
        渠道关系id
     **/
    public $relation_id;

    /**
        预售时期，用户对预售商品支付定金的付款时间，可能略晚于在淘宝付定金时间
     **/
    public $tk_deposit_time;

    /**
        预售时期，用户对预售商品支付定金的付款时间
     **/
    public $tb_deposit_time;

    /**
        预售时期，用户对预售商品支付的定金金额
     **/
    public $deposit_price;

    /**
        开发者调用api的appkey
     **/
    public $app_key;

    /**
        口碑子订单号
     **/
    public $alsc_id;

    /**
        口碑父订单号
     **/
    public $alsc_pid;

    /**
        服务费信息
     **/
    public $service_fee_dto_list;

    /**
        激励池对应的rid
     **/
    public $lx_rid;

    /**
        订单是否为激励池订单 1，表征是 0，表征否
     **/
    public $is_lx;

    /**
        营销类型：该字段中视订单情况有单个或多个值。 例如：淘礼金（自助充值），特价版客户端染色，特价版客户端锁粉，特价版客户端推广。
     **/
    public $marketing_type;

    /**
        订单更新时间
     **/
    public $modified_time;

    /**
        管理member新商品ID后段
     **/
    public $extra_item_id;


    public function getTbPaidTime() : string{
        return $this->tb_paid_time;
    }

    public function setTbPaidTime(string $tbPaidTime){
        $this->tb_paid_time = $tbPaidTime;
    }

    public function getTkPaidTime() : string{
        return $this->tk_paid_time;
    }

    public function setTkPaidTime(string $tkPaidTime){
        $this->tk_paid_time = $tkPaidTime;
    }

    public function getPayPrice() : string{
        return $this->pay_price;
    }

    public function setPayPrice(string $payPrice){
        $this->pay_price = $payPrice;
    }

    public function getPubShareFee() : string{
        return $this->pub_share_fee;
    }

    public function setPubShareFee(string $pubShareFee){
        $this->pub_share_fee = $pubShareFee;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getTkOrderRole() : int{
        return $this->tk_order_role;
    }

    public function setTkOrderRole(int $tkOrderRole){
        $this->tk_order_role = $tkOrderRole;
    }

    public function getTkEarningTime() : string{
        return $this->tk_earning_time;
    }

    public function setTkEarningTime(string $tkEarningTime){
        $this->tk_earning_time = $tkEarningTime;
    }

    public function getAdzoneId() : int{
        return $this->adzone_id;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzone_id = $adzoneId;
    }

    public function getPubShareRate() : string{
        return $this->pub_share_rate;
    }

    public function setPubShareRate(string $pubShareRate){
        $this->pub_share_rate = $pubShareRate;
    }

    public function getRefundTag() : int{
        return $this->refund_tag;
    }

    public function setRefundTag(int $refundTag){
        $this->refund_tag = $refundTag;
    }

    public function getSubsidyRate() : string{
        return $this->subsidy_rate;
    }

    public function setSubsidyRate(string $subsidyRate){
        $this->subsidy_rate = $subsidyRate;
    }

    public function getTkTotalRate() : string{
        return $this->tk_total_rate;
    }

    public function setTkTotalRate(string $tkTotalRate){
        $this->tk_total_rate = $tkTotalRate;
    }

    public function getItemCategoryName() : string{
        return $this->item_category_name;
    }

    public function setItemCategoryName(string $itemCategoryName){
        $this->item_category_name = $itemCategoryName;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getPubId() : int{
        return $this->pub_id;
    }

    public function setPubId(int $pubId){
        $this->pub_id = $pubId;
    }

    public function getAlimamaRate() : string{
        return $this->alimama_rate;
    }

    public function setAlimamaRate(string $alimamaRate){
        $this->alimama_rate = $alimamaRate;
    }

    public function getSubsidyType() : string{
        return $this->subsidy_type;
    }

    public function setSubsidyType(string $subsidyType){
        $this->subsidy_type = $subsidyType;
    }

    public function getItemImg() : string{
        return $this->item_img;
    }

    public function setItemImg(string $itemImg){
        $this->item_img = $itemImg;
    }

    public function getPubSharePreFee() : string{
        return $this->pub_share_pre_fee;
    }

    public function setPubSharePreFee(string $pubSharePreFee){
        $this->pub_share_pre_fee = $pubSharePreFee;
    }

    public function getAlipayTotalPrice() : string{
        return $this->alipay_total_price;
    }

    public function setAlipayTotalPrice(string $alipayTotalPrice){
        $this->alipay_total_price = $alipayTotalPrice;
    }

    public function getItemTitle() : string{
        return $this->item_title;
    }

    public function setItemTitle(string $itemTitle){
        $this->item_title = $itemTitle;
    }

    public function getSiteName() : string{
        return $this->site_name;
    }

    public function setSiteName(string $siteName){
        $this->site_name = $siteName;
    }

    public function getItemNum() : int{
        return $this->item_num;
    }

    public function setItemNum(int $itemNum){
        $this->item_num = $itemNum;
    }

    public function getSubsidyFee() : string{
        return $this->subsidy_fee;
    }

    public function setSubsidyFee(string $subsidyFee){
        $this->subsidy_fee = $subsidyFee;
    }

    public function getAlimamaShareFee() : string{
        return $this->alimama_share_fee;
    }

    public function setAlimamaShareFee(string $alimamaShareFee){
        $this->alimama_share_fee = $alimamaShareFee;
    }

    public function getTradeParentId() : string{
        return $this->trade_parent_id;
    }

    public function setTradeParentId(string $tradeParentId){
        $this->trade_parent_id = $tradeParentId;
    }

    public function getOrderType() : string{
        return $this->order_type;
    }

    public function setOrderType(string $orderType){
        $this->order_type = $orderType;
    }

    public function getTkCreateTime() : string{
        return $this->tk_create_time;
    }

    public function setTkCreateTime(string $tkCreateTime){
        $this->tk_create_time = $tkCreateTime;
    }

    public function getFlowSource() : string{
        return $this->flow_source;
    }

    public function setFlowSource(string $flowSource){
        $this->flow_source = $flowSource;
    }

    public function getTerminalType() : string{
        return $this->terminal_type;
    }

    public function setTerminalType(string $terminalType){
        $this->terminal_type = $terminalType;
    }

    public function getClickTime() : string{
        return $this->click_time;
    }

    public function setClickTime(string $clickTime){
        $this->click_time = $clickTime;
    }

    public function getTkStatus() : int{
        return $this->tk_status;
    }

    public function setTkStatus(int $tkStatus){
        $this->tk_status = $tkStatus;
    }

    public function getItemPrice() : string{
        return $this->item_price;
    }

    public function setItemPrice(string $itemPrice){
        $this->item_price = $itemPrice;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getAdzoneName() : string{
        return $this->adzone_name;
    }

    public function setAdzoneName(string $adzoneName){
        $this->adzone_name = $adzoneName;
    }

    public function getTotalCommissionRate() : string{
        return $this->total_commission_rate;
    }

    public function setTotalCommissionRate(string $totalCommissionRate){
        $this->total_commission_rate = $totalCommissionRate;
    }

    public function getItemLink() : string{
        return $this->item_link;
    }

    public function setItemLink(string $itemLink){
        $this->item_link = $itemLink;
    }

    public function getSiteId() : int{
        return $this->site_id;
    }

    public function setSiteId(int $siteId){
        $this->site_id = $siteId;
    }

    public function getSellerShopTitle() : string{
        return $this->seller_shop_title;
    }

    public function setSellerShopTitle(string $sellerShopTitle){
        $this->seller_shop_title = $sellerShopTitle;
    }

    public function getIncomeRate() : string{
        return $this->income_rate;
    }

    public function setIncomeRate(string $incomeRate){
        $this->income_rate = $incomeRate;
    }

    public function getTotalCommissionFee() : string{
        return $this->total_commission_fee;
    }

    public function setTotalCommissionFee(string $totalCommissionFee){
        $this->total_commission_fee = $totalCommissionFee;
    }

    public function getTkCommissionPreFeeForMediaPlatform() : string{
        return $this->tk_commission_pre_fee_for_media_platform;
    }

    public function setTkCommissionPreFeeForMediaPlatform(string $tkCommissionPreFeeForMediaPlatform){
        $this->tk_commission_pre_fee_for_media_platform = $tkCommissionPreFeeForMediaPlatform;
    }

    public function getTkCommissionFeeForMediaPlatform() : string{
        return $this->tk_commission_fee_for_media_platform;
    }

    public function setTkCommissionFeeForMediaPlatform(string $tkCommissionFeeForMediaPlatform){
        $this->tk_commission_fee_for_media_platform = $tkCommissionFeeForMediaPlatform;
    }

    public function getTkCommissionRateForMediaPlatform() : string{
        return $this->tk_commission_rate_for_media_platform;
    }

    public function setTkCommissionRateForMediaPlatform(string $tkCommissionRateForMediaPlatform){
        $this->tk_commission_rate_for_media_platform = $tkCommissionRateForMediaPlatform;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getTkDepositTime() : string{
        return $this->tk_deposit_time;
    }

    public function setTkDepositTime(string $tkDepositTime){
        $this->tk_deposit_time = $tkDepositTime;
    }

    public function getTbDepositTime() : string{
        return $this->tb_deposit_time;
    }

    public function setTbDepositTime(string $tbDepositTime){
        $this->tb_deposit_time = $tbDepositTime;
    }

    public function getDepositPrice() : string{
        return $this->deposit_price;
    }

    public function setDepositPrice(string $depositPrice){
        $this->deposit_price = $depositPrice;
    }

    public function getAppKey() : string{
        return $this->app_key;
    }

    public function setAppKey(string $appKey){
        $this->app_key = $appKey;
    }

    public function getAlscId() : string{
        return $this->alsc_id;
    }

    public function setAlscId(string $alscId){
        $this->alsc_id = $alscId;
    }

    public function getAlscPid() : string{
        return $this->alsc_pid;
    }

    public function setAlscPid(string $alscPid){
        $this->alsc_pid = $alscPid;
    }

    public function getServiceFeeDtoList() : array{
        return $this->service_fee_dto_list;
    }

    public function setServiceFeeDtoList(array $serviceFeeDtoList){
        $this->service_fee_dto_list = $serviceFeeDtoList;
    }

    public function getLxRid() : string{
        return $this->lx_rid;
    }

    public function setLxRid(string $lxRid){
        $this->lx_rid = $lxRid;
    }

    public function getIsLx() : string{
        return $this->is_lx;
    }

    public function setIsLx(string $isLx){
        $this->is_lx = $isLx;
    }

    public function getMarketingType() : string{
        return $this->marketing_type;
    }

    public function setMarketingType(string $marketingType){
        $this->marketing_type = $marketingType;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getExtraItemId() : string{
        return $this->extra_item_id;
    }

    public function setExtraItemId(string $extraItemId){
        $this->extra_item_id = $extraItemId;
    }


}

