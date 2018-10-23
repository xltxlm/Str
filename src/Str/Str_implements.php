<?php
namespace xltxlm\Str\Str;

/**
 * 字符串类型的基本操作函数集合;
*/
abstract class Str_implements
{



    /* @var string 要处理的字符串内容 */
        protected $Value = '';
    
    /**
     * @return string;
     */
    public function getValue():string    {
        return $this->Value;
    }

    /**
     * @param string $Value;
     * @return $this
     */
    public function setValue(string $Value)
    {
        $this->Value = $Value;
        return $this;
    }

}