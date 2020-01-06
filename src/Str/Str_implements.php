<?php
namespace xltxlm\str\Str;

use \xltxlm\str\Plus\__to;
/**
 * :类;
 * 字符串类型的基本操作函数集合;
*/
abstract class Str_implements
{

    use __to;

/* @var string  要处理的字符串内容 */
    protected $Value = '';





    /**
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



/* @var string  获取最后一个字符串 */
    protected $LastChar = '';





    /**
    * @return string;
    */
            abstract public function getLastChar():string;
    
    




/**
* @param string $LastChar;
* @return $this
*/
    protected function setLastChar(string $LastChar  = "")
    {
    $this->LastChar = $LastChar;
    return $this;
    }



/**
*  ;
*  @return :string;
*/
public function __toString():string    {
        return $this->Value;
    }
/**
*  根据指定的字符串,砍成数组对象,注意:会去掉空内容;
*  @return :\xltxlm\Arr\Arr;
*/
abstract public function Split(string $delimiter = null):\xltxlm\Arr\Arr;
/**
*  字符串替换;
*  @return :string;
*/
abstract public function Strtr(string $oldvar = null,string $newvar = null):string;
    /**
    * @return $this
    */
    function Strtr_this(string $oldvar = null,string $newvar = null)
    {
        $this->Strtr($oldvar,$newvar);
        return $this;
    }
/**
*  首字母大写;
*  @return :string;
*/
abstract public function Ucfirst():string;
    /**
    * @return $this
    */
    function Ucfirst_this()
    {
        $this->Ucfirst();
        return $this;
    }
/**
*  首字母小写;
*  @return :string;
*/
abstract public function Lcfirst():string;
    /**
    * @return $this
    */
    function Lcfirst_this()
    {
        $this->Lcfirst();
        return $this;
    }
/**
*  从指定索引开始砍字符串;
*  @return :string;
*/
abstract public function Substr(int $Index = null, $Length = null):string;
    /**
    * @return $this
    */
    function Substr_this(int $Index = null, $Length = null)
    {
        $this->Substr($Index,$Length);
        return $this;
    }
/**
*  是否包含另外一个字符串;
*  @return :bool;
*/
abstract public function Strpos(string $Compare_String = null):bool;
/**
*  返回指定索引的那个字符,从0开始数起;
*  @return :string;
*/
abstract public function One_Str_by_Index(int $Index = null):string;
/**
*  变成小写;
*  @return :string;
*/
abstract public function Lowercase():string;
    /**
    * @return $this
    */
    function Lowercase_this()
    {
        $this->Lowercase();
        return $this;
    }
}