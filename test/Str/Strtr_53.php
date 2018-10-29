<?php

namespace xltxlm\str\test\Str;

use xltxlm\str\Str;

/**
 *
 */
class Strtr_53
{

    public function __invoke()
    {
        $Str = (new Str())
            ->setValue('abc')
            ->Strtr('b', 'dd');
        \xltxlm\helper\Util::d($Str);
        assert($Str == 'addc');
    }

}

