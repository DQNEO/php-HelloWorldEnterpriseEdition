<?php
namespace DQNEO;

class HelloWorld
{

    private $string;

    public static function main()
    {
        $obj = new static();
        $obj->say();
    }

    public function __construct($string = null)
    {
        $this->string = $string;
    }

    public function say()
    {
        $string = "hello world\n";
        echo $string;
    }
}
