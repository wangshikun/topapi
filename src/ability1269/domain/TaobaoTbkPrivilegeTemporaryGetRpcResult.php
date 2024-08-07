<?php
namespace Topsdk\Topapi\Ability1269\domain;

class TaobaoTbkPrivilegeTemporaryGetRpcResult {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkPrivilegeTemporaryGetMaterialDto{
        return $this->data;
    }

    public function setData(TaobaoTbkPrivilegeTemporaryGetMaterialDto $data){
        $this->data = $data;
    }


}

