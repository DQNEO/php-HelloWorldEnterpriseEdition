<?php
namespace DQNEO\HelloWorldEnterpriseEdition;

class HelloWorldApplication
{
    private $string;
    private $writer;

    public function __construct(String $string, Writer\WriterInterface $writer)
    {
        $this->string = $string;
        $this->writer = $writer;
    }

    public function run()
    {
        $this->writer->writeLn($this->string);
    }
}

