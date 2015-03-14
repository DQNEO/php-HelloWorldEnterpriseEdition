<?php
namespace DQNEO\HelloWorld;

class CLI
{
    public static function main()
    {
        $string = new String("hello world\n");
        $obj = new HelloWorlder($string);
        $obj->output();
    }
}