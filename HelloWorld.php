<?php
namespace DQNEO;

class HelloWorld
{

    private $string;

    public static function main()
    {
        $string = "hello world\n";
        $obj = new static($string);
        $obj->say();
    }

    public function __construct($string = null)
    {
        $this->string = $string;
    }

    public function say()
    {
        echo $this->string;
    }
}
