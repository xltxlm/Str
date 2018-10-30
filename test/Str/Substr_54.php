<?php

namespace xltxlm\str\test\Str;

use xltxlm\str\Str;

/**
 *
 */
class Substr_54
{

    public function __invoke()
    {
        $str = (new Str('ccdd'))
            ->Substr(0);
        \xltxlm\helper\Util::d($str);
        assert($str == 'ccdd');

        $str = (new Str('ccdd'))
            ->Substr(1);
        \xltxlm\helper\Util::d($str);
        assert($str == 'cdd');

        $str = (new Str('ccdd'))
            ->Substr(2, 1);
        \xltxlm\helper\Util::d($str);
        assert($str == 'd');

    }

}

