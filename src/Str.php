<?php

namespace xltxlm\Str;

use xltxlm\arr\Arr;

/**
 * 字符串类型的基本操作函数集合;
 */
class Str extends Str\Str_implements
{
    public function Split(string $delimiter = null): \xltxlm\Arr\Arr
    {
        return (new Arr())
            ->setValues(explode($delimiter, $this->getValue()));
    }


}