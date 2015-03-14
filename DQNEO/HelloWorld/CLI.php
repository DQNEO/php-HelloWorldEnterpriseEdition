<?php
namespace DQNEO\HelloWorld;

class CLI
{
    public static function main()
    {
        $string = new String("hello world");
        $writer = new Writer();
        $app = new HelloWorldApplication($string, $writer);
        $app->run();
    }
}
