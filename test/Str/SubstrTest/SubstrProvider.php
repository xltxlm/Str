<?php
namespace xltxlm\str\test\Str\SubstrTest;

/**
* 测试案例的数据供给
*/
Trait SubstrProvider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["abcd测试替换下","ab",[0,2],"截取指定索引，指定长度-英语"],
        ["abcd测试替换下","测",[4,1],"截取指定索引，指定长度-汉语"],
        ];
    }
}

