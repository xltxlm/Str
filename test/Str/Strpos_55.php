<?php

namespace xltxlm\str\test\Str;

use xltxlm\str\Str;

/**
 *
 */
class Strpos_55
{

    public function __invoke()
    {
        $true = (new Str('abcc'))
            ->Strpos('cc');
        \xltxlm\helper\Util::d($true);
        assert($true == true);

        $true = (new Str('abcc'))
            ->Strpos('ccc');
        \xltxlm\helper\Util::d($true);
        assert($true == false);
    }

}

