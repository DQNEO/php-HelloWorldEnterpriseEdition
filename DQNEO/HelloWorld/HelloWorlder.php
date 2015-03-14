<?php
namespace DQNEO\HelloWorld;

class HelloWorlder
{
    private $string;
    private $writer;

    public function __construct(String $string, Writer $writer)
    {
        $this->string = $string;
        $this->writer = $writer;
    }

    public function output()
    {
        $this->writer->write($this->string);
    }
}

