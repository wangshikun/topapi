<?php
namespace Topsdk\Topapi\Ability3058\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScPicEmbedRequest {

    /**
        mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
        商品ID
     **/
    private $itemId;

    /**
        需打码的图片
     **/
    private $picStream;

    /**
        渠道管理ID
     **/
    private $relationId;

    /**
        mm_xxx_xxx_xxx的第二位
     **/
    private $siteId;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getPicStream() : string{
        return $this->picStream;
    }

    public function setPicStream(string $picStream){
        $this->picStream = $picStream;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getSiteId() : int{
        return $this->siteId;
    }

    public function setSiteId(int $siteId){
        $this->siteId = $siteId;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.pic.embed";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->picStream)){
            $fileParam["pic_stream"] = TopUtil::convertBasic($this->picStream);
        }
        return $fileParam;
    }

}

