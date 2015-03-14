<?php
namespace DQNEO\HelloWorld;

class Writer
{
    public function write(String $string)
    {
        echo $string->getValue();
    }
}
