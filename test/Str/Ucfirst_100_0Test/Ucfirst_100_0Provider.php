<?php
namespace xltxlm\str\test\Str\Ucfirst_100_0Test;

/**
* 测试案例的数据供给
*/
Trait Ucfirst_100_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["abcd","Abcd",null,""],
        ["Abcd","Abcd",null,""],
        ];
    }
}

