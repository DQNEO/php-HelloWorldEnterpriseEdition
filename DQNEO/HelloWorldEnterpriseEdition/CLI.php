<?php
namespace DQNEO\HelloWorldEnterpriseEdition;

class CLI
{
    public static function main()
    {
        $string = new String("hello world");
        $writer = new Writer\StdoutWriter();
        $app = new HelloWorldApplication($string, $writer);
        $app->run();
    }
}
