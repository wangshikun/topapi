<?php
namespace Topsdk\Topapi\ability305;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\ability305\request\TaobaoTmcQueueGetRequest;
use Topsdk\Topapi\ability305\request\TaobaoTmcUserTopicsGetRequest;

class Ability305 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取消息队列积压情况
    **/
    public function taobaoTmcQueueGet(TaobaoTmcQueueGetRequest $request) {
        return $this->client->execute("taobao.tmc.queue.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户开通的topic列表
    **/
    public function taobaoTmcUserTopicsGet(TaobaoTmcUserTopicsGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.topics.get", $request->toMap(), $request->toFileParamMap());
    }
}