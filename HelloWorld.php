<?php
namespace DQNEO;

class HelloWorld
{

    private $string;

    public static function main()
    {
        $string = "hello world\n";
        $obj = new static($string);
        $obj->output();
    }

    public function __construct($string = null)
    {
        $this->string = $string;
    }

    public function output()
    {
        echo $this->string;
    }
}
