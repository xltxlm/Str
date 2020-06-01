<?php

namespace xltxlm\str\Plus;

use xltxlm\str\Features\Str_To_Pinyin;

/**
 * 支持字符串类在各个字符串可操作的类之间转换;
 */
Trait __to
{
    use __to\__to_implements;

    public function __Str_To_Pinyin(): string
    {
        return (new Str_To_Pinyin($this->getValue()))->__invoke();
    }


}