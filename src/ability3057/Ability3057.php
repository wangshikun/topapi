<?php
namespace Topsdk\Topapi\Ability3057;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability3057\Request\TaobaoTbkScPailitaoWidgetConvertRequest;

class Ability3057 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-拍立淘插件转链
    **/
    public function taobaoTbkScPailitaoWidgetConvert(TaobaoTbkScPailitaoWidgetConvertRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.pailitao.widget.convert", $request->toMap(), $request->toFileParamMap(), $session);
    }
}