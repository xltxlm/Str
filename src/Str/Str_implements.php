<?php
namespace xltxlm\str\Str;

use \xltxlm\str\Plus\__to;
/**
 * 字符串类型的基本操作函数集合;
*/
abstract class Str_implements
{

    use __to;


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

    /**
     *   ;
     *   @return :string;
    */
    public function __toString():string    {
return $this->Value;
    }

    /**
     *   根据指定的字符串,砍成数组对象,注意:会去掉空内容;
     *   @return :\xltxlm\Arr\Arr;
    */
    abstract public function Split(string $delimiter = null):\xltxlm\Arr\Arr;

    /**
     *   字符串替换;
     *   @return :string;
    */
    abstract public function Strtr(string $oldvar = null, $newvar = null):string;
    /**
     * @return $this
     */
    function Strtr_this(string $oldvar = null, $newvar = null)
    {
        $this->Strtr($oldvar,$newvar);
        return $this;
    }

    /**
     *   首字母大写;
     *   @return :string;
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
     *   首字母小写;
     *   @return :string;
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

}