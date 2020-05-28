<?php
namespace xltxlm\str\test\Str\StrposTest;

/**
* 测试案例的数据供给
*/
Trait StrposProvider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["012345",true,"0","最前面-包含字符串"],
        ["012345",true,0,""],
        ["012345",true,5,"最后一个-包含字符串"],
        ];
    }
}

