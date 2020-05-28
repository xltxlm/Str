<?php
namespace xltxlm\str\test\Str\StrtrTest;

/**
* 测试案例的数据供给
*/
Trait StrtrProvider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["abcd测试替换下","ab-d测试替换下",["c","-"],"简单的字符串替换-英语"],
        ["abcd测试替换下","abcd测试替换上",["下","上"],"简单的字符串替换-汉字"],
        ];
    }
}

