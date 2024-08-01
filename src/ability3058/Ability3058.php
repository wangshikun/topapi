<?php
namespace Topsdk\Topapi\Ability3058;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability3058\Request\TaobaoTbkScPicEmbedRequest;

class Ability3058 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-商业化图片生成
    **/
    public function taobaoTbkScPicEmbed(TaobaoTbkScPicEmbedRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.pic.embed", $request->toMap(), $request->toFileParamMap(), $session);
    }
}