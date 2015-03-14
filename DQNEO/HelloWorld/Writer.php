<?php
namespace DQNEO\HelloWorld;

class Writer
{
    public function write(String $string)
    {
        echo $string->getValue();
    }

    public function writeLn(String $string)
    {
        $this->write($string);
        echo "\n";
    }
}
