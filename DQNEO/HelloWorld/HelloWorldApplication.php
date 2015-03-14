<?php
namespace DQNEO\HelloWorld;

class HelloWorldApplication
{
    private $string;
    private $writer;

    public function __construct(String $string, Writer $writer)
    {
        $this->string = $string;
        $this->writer = $writer;
    }

    public function run()
    {
        $this->writer->writeLn($this->string);
    }
}

