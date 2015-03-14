<?php
namespace DQNEO\HelloWorld;

class CLI
{
    public static function main()
    {
        $string = new String("hello world");
        $writer = new Writer();
        $obj = new HelloWorlder($string, $writer);
        $obj->output();
    }
}
