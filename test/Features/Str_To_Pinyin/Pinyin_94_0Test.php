<?php

namespace xltxlm\str\test\Features\Str_To_Pinyin;

use PHPUnit\Framework\TestCase;
use xltxlm\str\Features\Str_To_Pinyin;
use xltxlm\str\Str;

/**
 *
 */
class Pinyin_94_0Test extends TestCase
{
    use Pinyin_94_0Test\Pinyin_94_0Provider; #<---本次测试的数据供给来源

    /**
     * @test
     * @dataProvider MyProvider <---本次测试的数据供给来源
     * $input 输入值
     * $expected 期望的结果
     */
    public function __invoke($input, $expected, $args)
    {
        $result = $this->runcode($input, $args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
     * 真正的逻辑计算
     * $input 输入值
     * $expected 期望的结果
     */
    private function runcode($input, $args)
    {
        return (new Str_To_Pinyin($input))
            ->__invoke();
    }

}

