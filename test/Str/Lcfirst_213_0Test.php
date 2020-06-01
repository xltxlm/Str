<?php
namespace xltxlm\str\test\Str;

use PHPUnit\Framework\TestCase;
use xltxlm\str\Str;

/**
*
*/
class Lcfirst_213_0Test extends TestCase
{
    use Lcfirst_213_0Test\Lcfirst_213_0Provider; #<---本次测试的数据供给来源

    /**
    * @test
    * @dataProvider MyProvider <---本次测试的数据供给来源
    * $input 输入值
    * $expected 期望的结果
    */
    public function __invoke($input,$expected,$args)
    {
        $result = $this->runcode($input,$args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
    * 真正的逻辑计算
    * $input 输入值
    * $expected 期望的结果
    */
    private function runcode($input,$args)
    {
        return (new Str($input))
            ->Lcfirst();
    }
}

