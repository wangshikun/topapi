<?php
namespace Topsdk\Topapi\Ability2138\domain;

class TaobaoTbkDgNewuserOrderGetResults {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkDgNewuserOrderGetData{
        return $this->data;
    }

    public function setData(TaobaoTbkDgNewuserOrderGetData $data){
        $this->data = $data;
    }


}

