<?php
namespace Topsdk\Topapi\Ability1269\domain;

class TaobaoTbkPrivilegeGetRpcResult {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkPrivilegeGetMaterialDto{
        return $this->data;
    }

    public function setData(TaobaoTbkPrivilegeGetMaterialDto $data){
        $this->data = $data;
    }


}

