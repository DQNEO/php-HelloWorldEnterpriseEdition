<?php
namespace DQNEO\HelloWorld;

class HelloWorlder
{
    private $string;

    public function __construct(String $string)
    {
        $this->string = $string;
    }

    public function output()
    {
        echo $this->string->getValue();
    }
}

