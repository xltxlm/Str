<?php

namespace xltxlm\str\test\Features\Str_To_Pinyin;

use xltxlm\str\Features\Str_To_Pinyin;

/**
 *
 */
class Pinyin_94_0
{

    public function __invoke()
    {
        $Str_To_Pinyin = (new Str_To_Pinyin())
            ->setValue('李少雄')
            ->__invoke();
        \xltxlm\helper\Util::d($Str_To_Pinyin);
        assert($Str_To_Pinyin == 'LI_SHAO_XIONG');
    }

}

