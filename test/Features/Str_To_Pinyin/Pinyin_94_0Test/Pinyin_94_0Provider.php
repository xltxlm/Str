<?php
namespace xltxlm\str\test\Features\Str_To_Pinyin\Pinyin_94_0Test;

/**
* 测试案例的数据供给
*/
Trait Pinyin_94_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["cookie_123_测试","COOKIE_123_CE_SHI",null,""],
        ["php73","PHP73",null,""],
        ["cookie","COOKIE",null,""],
        ];
    }
}

