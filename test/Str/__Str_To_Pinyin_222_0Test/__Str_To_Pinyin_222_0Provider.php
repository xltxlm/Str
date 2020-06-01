<?php
namespace xltxlm\str\test\Str\__Str_To_Pinyin_222_0Test;

/**
* 测试案例的数据供给
*/
Trait __Str_To_Pinyin_222_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["最前面2个非隐藏字段组成对象","ZUI_QIAN_MIAN_2_GE_FEI_YIN_CANG_ZI_DUAN_ZU_CHENG_DUI_XIANG",null,""],
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

