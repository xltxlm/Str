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
        ["最前面2个非隐藏字段组成对象","ZUI_QIAN_MIAN_2_GE_FEI_YIN_CANG_ZI_DUAN_ZU_CHENG_DUI_XIANG",null,""],
        ["php7.3和php7.4","PHP73_HE_PHP74",null,""],
        ["汉字1234","HAN_ZI_1234",null,""],
        ]+ $this->remoteconfig();
    }

    /**
     * 获取远程配置代码。
     * 因为是远程获取配置的原因，所以传递过去一定是字符串
     */
    function remoteconfig()
    {
        $config = [];
        return $config;
    }
}

