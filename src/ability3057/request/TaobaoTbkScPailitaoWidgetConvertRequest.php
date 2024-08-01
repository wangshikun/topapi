<?php
namespace Topsdk\Topapi\Ability3057\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScPailitaoWidgetConvertRequest {

    /**
        mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
        渠道id
     **/
    private $relationId;

    /**
        mm_xxx_xxx_xxx的第二位
     **/
    private $siteId;

    /**
        0：代表转官方插件  1：代表转deeplink链接
     **/
    private $type;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getSiteId() : int{
        return $this->siteId;
    }

    public function setSiteId(int $siteId){
        $this->siteId = $siteId;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.pailitao.widget.convert";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

