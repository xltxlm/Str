<?php

namespace xltxlm\str\test\Str;

use xltxlm\str\Str;

/**
 *
 */
class One_Str_by_Index_56
{

    public function __invoke()
    {
        $str = (new Str('abc'))
            ->One_Str_by_Index(0);
        \xltxlm\helper\Util::d($str);
        assert($str == 'a');

        $str = (new Str('abc'))
            ->One_Str_by_Index(1);
        \xltxlm\helper\Util::d($str);
        assert($str == 'b');
    }

}

