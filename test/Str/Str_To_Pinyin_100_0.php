<?php

namespace xltxlm\str\test\Str;

use xltxlm\str\Features\Str_To_Pinyin;
use xltxlm\str\Str;

/**
 *
 */
class Str_To_Pinyin_100_0
{

    public function __invoke()
    {
        $__Str_To_Pinyin = (new Str("李少雄"))
            ->__Str_To_Pinyin();
        \xltxlm\helper\Util::d($__Str_To_Pinyin);

        assert($__Str_To_Pinyin instanceof Str_To_Pinyin);

        $pinyin = $__Str_To_Pinyin->__invoke();
        \xltxlm\helper\Util::d($pinyin);
        assert($pinyin == 'LI_SHAO_XIONG');
    }

}

