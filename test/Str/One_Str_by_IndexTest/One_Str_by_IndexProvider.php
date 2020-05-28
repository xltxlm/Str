<?php
namespace xltxlm\str\test\Str\One_Str_by_IndexTest;

/**
* 测试案例的数据供给
*/
Trait One_Str_by_IndexProvider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["abcd我你","b",1,""],
        ["abcd我你","我",4,""],
        ];
    }
}

