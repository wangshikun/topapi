<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\request\TaobaoTbkDgTpwdRiskReportRequest;
use Topsdk\Topapi\Defaultability\request\TaobaoTbkOptimusTouMaterialIdsGetRequest;
use Topsdk\Topapi\Defaultability\request\TaobaoTbkDgMaterialOptionalUpgradeRequest;
use Topsdk\Topapi\Defaultability\request\TaobaoTbkDgMaterialRecommendRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-推广者-淘口令预警及拦截查询
    **/
    public function taobaoTbkDgTpwdRiskReport(TaobaoTbkDgTpwdRiskReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.tpwd.risk.report", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料id列表查询
    **/
    public function taobaoTbkOptimusTouMaterialIdsGet(TaobaoTbkOptimusTouMaterialIdsGetRequest $request) {
        return $this->client->execute("taobao.tbk.optimus.tou.material.ids.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料搜索升级版
    **/
    public function taobaoTbkDgMaterialOptionalUpgrade(TaobaoTbkDgMaterialOptionalUpgradeRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.optional.upgrade", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料精选升级版
    **/
    public function taobaoTbkDgMaterialRecommend(TaobaoTbkDgMaterialRecommendRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.recommend", $request->toMap(), $request->toFileParamMap());
    }
}