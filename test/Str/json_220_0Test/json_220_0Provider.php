<?php
namespace xltxlm\str\test\Str\json_220_0Test;

/**
* 测试案例的数据供给
*/
Trait json_220_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["[\"aa\"]",true,null,""],
        ["aa",false,null,""],
        ["{\"a\":\"b\"}",true,null,""],
        ];
    }
}

