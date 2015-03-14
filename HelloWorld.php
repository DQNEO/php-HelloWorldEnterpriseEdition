<?php
namespace DQNEO;

class HelloWorld
{
    public static function main()
    {
        $obj = new static();
        $obj->say();
    }

    public function say()
    {
        echo "hello world\n";
    }
}
