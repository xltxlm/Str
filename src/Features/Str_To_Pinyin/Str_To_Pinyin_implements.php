<?php
namespace xltxlm\str\Features\Str_To_Pinyin;

/**
 * 中文转拼音;
*/
abstract class Str_To_Pinyin_implements
{



    /* @var string  */
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

    /**
     *   ;
     *   @return ;
    */
    abstract public function __invoke();

}