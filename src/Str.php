<?php

namespace xltxlm\str;

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

    public function Strtr(string $oldvar = null, $newvar = null): string
    {
        $var = strtr($this->getValue(), [$oldvar => $newvar]);
        $this->setValue($var);
        return $var;
    }

    public function Ucfirst(): string
    {
        return ucfirst($this->getValue());
    }

    public function Lcfirst(): string
    {
        return lcfirst($this->getValue());
    }


}