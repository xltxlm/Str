<?php
namespace xltxlm\str\Features\Str_to_Date_Timestamp;

/**
 * :类;
 * 传入时间戳,转换成日期对象;
*/
abstract class Str_to_Date_Timestamp_implements
{


/* @var string   */
    protected $Value = '';





    /**
    * ;
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



}