<?php
namespace xltxlm\str\test\Str\isEndofstr_225_0Test;

/**
* 测试案例的数据供给
*/
Trait isEndofstr_225_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["aa001",true,"001",""],
        ["000000",true,"0",""],
        ["abc",false,"",""],
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

