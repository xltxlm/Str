<?php

namespace xltxlm\str\Features;

use Overtrue\Pinyin\Pinyin;

/**
 * 中文转拼音;
 */
class Str_To_Pinyin extends Str_To_Pinyin\Str_To_Pinyin_implements
{


    /**
     * Str_To_Pinyin constructor.
     */
    public function __construct(string $Value = '')
    {
        if ($Value) {
            $this->setValue($Value);
        }
    }

    public function __invoke()
    {
        $pinyin = new Pinyin();
        $item = trim(strtr($this->getValue(), ["'" => '']));
        $sentence = $pinyin->sentence($item);
        return strtr(preg_replace('/[ ，,]/', $this->getGlue(), strtoupper($sentence)), ['__' => "_"]);
    }


}