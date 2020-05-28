<?php
namespace xltxlm\str\Features\Str_To_Pinyin;

/**
 * :类;
 * 中文转拼音;
*/
abstract class Str_To_Pinyin_implements
{


/* @var string  需要处理的文字 */
    protected $Value = '';





    /**
    * 需要处理的文字;
    * @return string;
    */
            public function getValue():string        {
                return $this->Value;
        }

    
    




/**
* @param string $Value;
* @return $this
*/
    public function setValue(string $Value  = "")
    {
    $this->Value = $Value;
    return $this;
    }



/* @var string  拼音中间的链接字符串,默认下划线 */
    protected $Glue = '_';





    /**
    * 拼音中间的链接字符串,默认下划线;
    * @return string;
    */
            public function getGlue():string        {
                return $this->Glue;
        }

    
    




/**
* @param string $Glue;
* @return $this
*/
    public function setGlue(string $Glue  = "_")
    {
    $this->Glue = $Glue;
    return $this;
    }



/**
*  ;
*  @return ;
*/
abstract public function __invoke();
}