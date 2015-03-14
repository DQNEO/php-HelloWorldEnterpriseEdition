<?php
namespace DQNEO;

class HelloWorld
{

    private $string;

    public static function main()
    {
        $string = new String("hello world\n");
        $obj = new static($string);
        $obj->output();
    }

    public function __construct(String $string)
    {
        $this->string = $string;
    }

    public function output()
    {
        echo $this->string->getValue();
    }
}

