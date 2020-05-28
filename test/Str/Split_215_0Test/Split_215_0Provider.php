<?php
namespace xltxlm\str\test\Str\Split_215_0Test;

/**
* 测试案例的数据供给
*/
Trait Split_215_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["a,b,c",new \xltxlm\arr\Arr(["a","b","c"]),",",""],
        ];
    }
}

