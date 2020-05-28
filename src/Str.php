<?php

namespace xltxlm\str;

use xltxlm\arr\Arr;

/**
 * 字符串类型的基本操作函数集合;
 */
class Str extends Str\Str_implements
{
    public function Lowercase(): string
    {
        $this->setValue(strtolower($this->Value));
        return $this->getValue();
    }

    /**
     * Str constructor.
     */
    public function __construct(string $Value = '')
    {
        if ($Value) {
            $this->setValue(trim($Value));
        }
    }

    public function getLastChar(): string
    {
        return substr($this->getValue(), -1);
    }


    public function Split(string $delimiter = null): \xltxlm\Arr\Arr
    {
        return (new Arr())
            ->setValues(explode($delimiter, $this->getValue()));
    }

    public function Strtr(string $oldvar = null, string $newvar = null): string
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

    public function Substr(int $Index = null, $Length = null): string
    {
        $var = mb_substr($this->getValue(), $Index, $Length ?: strlen($this->getValue()));
        $this->setValue($var);
        return $var;
    }

    public function Strpos(string $Compare_String = null): bool
    {
        return strpos($this->getValue(), $Compare_String) !== false;
    }


    public function One_Str_by_Index(int $Index = null): string
    {
        return $this->Substr($Index, 1);
    }


}